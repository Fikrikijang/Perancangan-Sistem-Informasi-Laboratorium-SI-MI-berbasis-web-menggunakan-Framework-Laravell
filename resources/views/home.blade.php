@extends('template_backend.home')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="card mb-0">
        <div class="card-body">
            <img src="{{url('frontend/assets/img/logolab.png')}}" width="900" class="img-fluid" alt="Responsive image">
        </div>
</div>
@endsection
