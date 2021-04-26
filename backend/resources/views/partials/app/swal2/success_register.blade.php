@if(session('success_register'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
<script>
    Swal.fire(
    'Berhasil',
    '{{ session('success_register') }}',
    'success'
    )
</script>
@endif