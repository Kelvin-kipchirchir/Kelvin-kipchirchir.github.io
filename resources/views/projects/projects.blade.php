@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
         <form action="{{route('newproject')}}">
              @csrf
          <button class="btn btn-success" type="submit">New Project</button>
        </form>
<table class="table table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>Category</td>
      <td>Project Name</td>
			<td>image</td>
			<td>Gallery</td>
			<td>Client</td>
			<td>Date created</td>
			<td>Url</td>
			<td>Details</td>
			<td>View More</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>
		@foreach($projects as $project)
		<tr>
        <td>{{$project->id}}</td>
        <td>{{$project->category}}</td>
        <td>{{$project->project_name}}</td>
         <td><img src="{{url ('public/images/'.$project->image)}}" style="height: 50px;width: 50px;"></td>
        <td><img src="{{url ('public/images/'.$project->gallery)}}" style="height: 50px;width: 50px;"></td>
         <td>{{$project->client}}</td>
        <td>{{$project->created_at}}</td>
         <td>{{$project->url}}</td>
        <td>{{$project->details}}</td>
          <td>
        	<form action="{{route('project.more',$project->id)}}">
        		@csrf
        		<button class="btn btn-primary" type="submit">More</button>
        	</form>
        </td>
        <td>
        <form action="{{route('project.destroy',$project->id)}}">
              @csrf
        	<button class="btn btn-danger" type="submit">Delete</button>
        </form></td>

    </tr>
        @endforeach
	</tbody>
</table>
@endsection