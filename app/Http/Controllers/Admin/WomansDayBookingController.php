<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\WomansDayBooking;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Response;

class WomansDayBookingController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Womans Day Bookings';
        parent::__construct();
        $this->resources = 'admin.womans-day-bookings.';
        $this->route = 'womans-day-bookings.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!auth()->user()->can('womans_day_bookings')) {
            abort(403);
        }
        // Set $hideCreate to true to hide the "Add new" button
        $info['hideCreate'] = true;

        $info['title'] = "Bookings";

        if ($request->ajax()) {
            $data = WomansDayBooking::orderBy('id', 'DESC')->where('type', 'womens day')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return $row->name;
                })
                ->editColumn('appointment_date', function ($row) {
                    return $row->bookingDocs->appointment_date ?? '--';
                })
                ->editColumn('details', function ($row) {
                    return \Illuminate\Support\Str::limit($row->details ?? '--', 70, '...');
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route,
                        'hide_edit' => true,
                        'hide_delete' => true
                    ])->render();
                })
                ->rawColumns(['action', 'name', 'details'])
                ->make(true);
        }

        $info = $this->crudInfo();
        // Pass variables to the view
        return view($this->indexResource(), $info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WomansDayBooking  $womansDayBooking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('womans_day_bookings.show')) {
            abort(403);
        }
        $info = $this->crudInfo();
        $info['item'] = WomansDayBooking::findOrFail($id);
        return view($this->showResource(), $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WomansDayBooking  $womansDayBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(WomansDayBooking $womansDayBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WomansDayBooking  $womansDayBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WomansDayBooking $womansDayBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WomansDayBooking  $womansDayBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(WomansDayBooking $womansDayBooking)
    {
        //
    }

    public function download()
    {
        $headers = [
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0'
            ,
            'Content-type' => 'text/csv'
            ,
            'Content-Disposition' => 'attachment; filename=data.csv'
            ,
            'Expires' => '0'
            ,
            'Pragma' => 'public'
        ];

        $list = WomansDayBooking::where('created_at', '>', '2025-01-01')->get();

        # add headers for each column in the CSV download
        $columns = array('S.N.', 'Name', 'Address', 'Appointment Date', 'Booked Dr.', 'Extra Details');
        // $filename = 'Womens Day Data';
        // dd($list);

        $callback = function () use ($list, $columns) {
            $FH = fopen('php://output', 'w');
            fputcsv($FH, $columns);
            foreach ($list as $k => $data) {
                $dr_names = json_decode($data->bookingDocs->doctor_list ?? []);
                $row['S.N.'] = $k + 1;
                $row['Name'] = $data->name;
                $row['Address'] = $data->address;
                $row['Appointment Date'] = $data->bookingDocs->appointment_date ?? '--';
                $row['Booked Dr.'] = '';
                if (!empty($dr_names)) {
                    foreach ($dr_names as $name) {
                        $row['Booked Dr.'] = $name . ', ' . $row["Booked Dr."];
                    }
                }
                $row['Extra Details'] = $data->details;
                fputcsv($FH, $row);
            }
            fclose($FH);
        };
        return response()->stream($callback, 200, $headers);
    }
}
