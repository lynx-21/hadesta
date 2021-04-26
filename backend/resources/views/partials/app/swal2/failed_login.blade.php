@if(session('failed_login'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
<script>
    Swal.fire(
    'Gagal',
    '{{ session('failed_login') }}',
    'error'
    )
</script>
@endif