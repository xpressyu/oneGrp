@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>Project Manager</h3>
        </div>
        <div class="col-sm-2">
                <a class="btn btn-sm btn-success" href="{{ route('project.create') }}">Create New Project</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
  @endif

  <table class="table table-hover table-sm">
        <tr>
          <th width = "50px"><b>No.</b></th>
          <th>Name</th>
          <th>Developer</th>
          <th>Status</th>
          <th width = "300px">Price List</th>
          <th>Picture</th>
          <th width = "180px">Action</th>
        </tr>

        @foreach ($projects as $project)
          <tr>
            <td><b>{{++$i}}.</b></td>
            <td>{{$project->name}}</td>
            <td>{{$project->developer}}</td>
            <td>{{$project->status}}</td>
            <td>{{$project->priceList}}</td>
            <td>{{$project->pic}}</td>
            <td>
              <form action="{{ route('project.destroy', $project->id) }}" method="post">
                <a class="btn btn-sm btn-success" href="{{route('project.show',$project->id)}}">Show</a>
                <a class="btn btn-sm btn-warning" href="{{route('project.edit',$project->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>

  {!! $projects->links() !!}
    </div>

@endsection
