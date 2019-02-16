@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Project</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there are some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('project.update', $project->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Name:</strong>
          <input type="text" name="name" class="form-control" value={{$project->name}}>
          <br>
        </div>


        <div class="col-md-12">
          <strong>Developer:</strong>
          <input type="text" name="developer" class="form-control" value={{$project->developer}}>
          <br>
        </div>


        <div class="col-md-12">
            <strong>Status: (Please RE-SELECT this option no matter you wish to change it or not)</strong>
            <select name="status">
                <option value="Available">Available</option>
                <option value="Sold">Sold</option>
                <option value="Deposit Taken">Deposit Taken</option>
            </select>
            <br>
        </div>

        {{-- <div class="col-md-12">
                <strong>Status:</strong>
                <input type="text" name="status" class="form-control" placeholder="Available/Sold/Deposit Taken">
                <br>
        </div> --}}

        <div class="col-md-12">
            <strong>Price List:</strong>
            <textarea class="form-control" value={{$project->priceList}} name="priceList" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12">
            <strong>Picture:</strong>
            <textarea class="form-control" value={{$project->pic}} name="picture" rows="8" cols="80"></textarea>
            <br>
        </div>

        <div class="col-md-12">
          <a href="{{route('project.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
