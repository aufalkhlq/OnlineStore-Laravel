@extends('layouts.app') @section('title', $viewData['title']) @section('content')
<div class="row">
    <div class="col-md-5 col-lg-3 mb-2">
        <img src="{{ asset('/storage/a.jpeg') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-5 col-lg-3 mb-2">
        <img src="{{ asset('/storage/omen.jpg') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-5 col-lg-3 mb-2">
        <img src="{{ asset('/storage/asusvivo.jpg') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-5 col-lg-3 mb-2">
        <img src="{{ asset('/storage/12.jpg') }}" class="img-fluid rounded">
    </div>
</div>
@endsection
