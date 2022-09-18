@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <script>
            $.notify({
                icon: 'flaticon-error',
                title: 'Validation',
                message: '{{$error}}',
            },{
                type: 'danger'
            });
        </script>
    @endforeach
@endif

@if (session('success'))
    <script>
        $.notify({
                icon: 'flaticon-success',
                title: 'Success',
                message: "{{session('success')}}",
            },{
                type: 'success'
            });
    </script>
@endif

@if (session('error'))
    <script>
        $.notify({
                icon: 'flaticon-error',
                title: 'Error',
                message: "{{session('error')}}",
            },{
                type: 'danger'
            });
    </script>
@endif