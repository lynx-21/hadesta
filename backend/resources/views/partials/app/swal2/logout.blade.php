@if(session('logout'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
<script>
    Swal.fire(
    'Logout',
    '{{ session('logout') }}',
    'success'
    )
</script>
@endif