@extends('admin.templates.index', ['hideCreate' => 'true'])

@section('title', $title)

@section('content_header')
<h1>{{ $title}}</h1>
@stop

@push('styles')

@endpush
@section('nav_content')
    <a href="{{ route('data-download') }}" class="btn btn-primary float-right">
        <i class="fa fa-download"></i>
        <span class="kt-hidden-mobile">Download Data</span>
    </a>
@endsection

@section('index_content')
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead>
                <tr class="text-left text-capitalize">
                    <th>id</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>appointment date</th>
                    <th>extra details</th>
                    <th>action</th>
                </tr>
            </thead>

        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('womans-day-bookings.index') }}",
                columns: [
                    { data: 'id', name: 'DT_RowIndex' },
                    { data: 'name', name: 'name' },
                    { data: 'phone', name: 'phone' },
                    { data: 'address', name: 'address' },
                    { data: 'appointment_date', name: 'appointment_date' },
                    { data: 'details', name: 'details' },
                    { data: 'action', name: 'action' },
                ],
            });
        });
        function downloadFile() {
            $.ajax({
                headers: {

                },
                method: 'GET',
                url: '{{ route('data-download') }}',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    if (data) {
                        alert("Data Downloaded.");
                    } else {
                        showFailedMessage()
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                    showFailedMessage()
                }
            });
        }
    </script>
@endpush