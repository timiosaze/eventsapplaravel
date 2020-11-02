@if (session('success'))
    <div class="alert alert-primary" role="alert">
        {{session('success')}}
    </div>
@endif
@if (session('failure'))
    <div class="alert alert-danger" role="alert">
        {{session('failure')}}
    </div>
@endif