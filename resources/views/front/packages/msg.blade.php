@if (Session::has('success'))
    <script>
        swal("Booking Successful.", "{{ Session::get('success') }}", "success");
    </script>
@endif

@if (Session::has('error'))
    <script>
        swal("Sorry!", "{{ Session::get('error') }}", "error");
    </script>
@endif
