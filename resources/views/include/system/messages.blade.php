@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="closable alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="closable alert alert-success">
        {{session('success')}}
    </div>
@endif
