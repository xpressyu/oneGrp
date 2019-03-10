@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Project Detail</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name : </strong> {{$project->name}}
        </div>
      </div>

    <div class="col-md-12">
        <div class="form-group">
          <strong>Developer : </strong> {{$project->developer}}
        </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Status : </strong> {{$project->status}}
        </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Price List : </strong> {{$project->priceList}}
    </div>

    <div class="col-md-12">
        <div class="form-group">
             <strong>Picture : </strong> {{$project->pic}}
    </div>

      </div>
      <div class="col-md-12">
        <a href="{{route('project.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
