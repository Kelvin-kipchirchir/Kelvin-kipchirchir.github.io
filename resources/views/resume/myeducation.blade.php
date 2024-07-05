@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
         <form action="{{route('new.education')}}">
              @csrf
          <button class="btn btn-success" type="submit">New Education</button>
        </form>
<table class="table table-hover">
	<thead>
		<tr>
			<td>Course</td>
			<td>Icon</td>
			<td>Institution</td>
			<td>Location</td>
			<td>Start date</td>
			<td>End date</td>
			<td>About</td>
			<td>View More</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>
		@foreach($education as $education)
		<tr>
         <td>{{$education->course}}</td>
          <td><img src="{{url ('public/images/'.$education->icon)}}" style="height: 50px;width: 50px;"></td>
        <td>{{$education->institution}}</td>
        <td>{{$education->location}}</td>
         <td>{{$education->start_date}}</td>
         <td>{{$education->end_date}}</td>
        <td>{{$education->about}}</td>

          <td>
        	<form action="{{route('project.more',$education->id)}}">
        		@csrf
        		<button class="btn btn-primary" type="submit">More</button>
        	</form>
        </td>
        <td>
        <form action="{{route('project.destroy',$education->id)}}">
              @csrf
        	<button class="btn btn-danger" type="submit">Delete</button>
        </form></td>

    </tr>
        @endforeach
	</tbody>
</table>
@endsection