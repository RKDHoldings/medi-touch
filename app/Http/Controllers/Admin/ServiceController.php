<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ServiceController extends BaseController
{
    public function __construct()
    {
        $this->title = 'Service';
        $this->resources = 'admin.services.';
        $this->route = 'services.';
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::orderBy('id', 'DESC')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('title', function ($row) {
                    return '<p class="text-dark-75 font-weight-normal d-block font-size-h6">' . '#' . $row->id . ' ' . $row->title . '</p>';
                })
                ->editColumn('status', function ($row) {
                    return $row->status == 'active'
                        ? '<span class="badge badge-success">Active</span>'
                        : '<span class="badge badge-danger">Inactive</span>';
                })
                ->addColumn('action', function ($data) {
                    return view('admin.templates.index_actions', [
                        'id' => $data->id,
                        'route' => $this->route,
                    ])->render();
                })
                ->rawColumns(['action', 'title', 'status'])
                ->make(true);
        }

        $info = $this->crudInfo();
        return view($this->indexResource(), $info);
    }

    public function create()
    {
        $info = $this->crudInfo();
        return view($this->createResource(), $info);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = 'storage/' . $request->file('image')->store('services', 'public');
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = 'storage/' . $request->file('icon')->store('services', 'public');
        }

        Service::create($data);

        return redirect()->route($this->indexRoute())->with('success', 'Service created successfully');
    }

    public function show($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Service::findOrFail($id);
        return view($this->showResource(), $info);
    }

    public function edit($id)
    {
        $info = $this->crudInfo();
        $info['item'] = Service::findOrFail($id);
        return view($this->editResource(), $info);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $item = Service::findOrFail($id);
        $data = $request->except(['_token', '_method']);
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = 'storage/' . $request->file('image')->store('services', 'public');
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = 'storage/' . $request->file('icon')->store('services', 'public');
        }

        $item->update($data);

        return redirect()->route($this->indexRoute())->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        try {
            $item = Service::findOrFail($id);
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())->with('error', 'Failed to delete service');
        }

        return redirect()->route($this->indexRoute())->with('success', 'Service deleted successfully');
    }
}
