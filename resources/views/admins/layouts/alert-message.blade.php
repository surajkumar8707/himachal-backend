<script>
    // Set the options that I want
    toastr.options = {
    "closeButton": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }
</script>

@if(Session::has('success'))
<script>
    toastr.success('{{ Session::get("success") }}','Success !');
</script>
@endif

@if(Session::has('error'))
<script>
    toastr.error('{{ Session::get("error") }}','Error !');
</script>
@endif

@if(Session::has('info'))
<script>
    toastr.info('{{ Session::get("info") }}','Information !');
</script>
@endif

@if(Session::has('warning'))
<script>
    toastr.warning('{{ Session::get("warning") }}','Warning !');
</script>
@endif
