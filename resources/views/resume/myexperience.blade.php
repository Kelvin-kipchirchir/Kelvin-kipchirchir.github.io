@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
         <form action="{{route('new.experience')}}">
              @csrf
          <button class="btn btn-success" type="submit">New Experience</button>
        </form>
<table class="table table-hover">
	<thead>
		<tr>
			<td>Icon</td>
			<td>Role</td>
			<td>Place</td>
			<td>Location</td>
			<td>Start date</td>
			<td>End date</td>
			<td>Activities</td>
			<td>View More</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>
		@foreach($experiences as $experience)
		<tr>
        
        
         <td><img src="{{url ('public/images/'.$experience->icon)}}" style="height: 50px;width: 50px;"></td>
         <td>{{$experience->role}}</td>
        <td>{{$experience->place}}</td>
        <td>{{$experience->location}}</td>
         <td>{{$experience->start_date}}</td>
         <td>{{$experience->end_date}}</td>
        <td>{{$experience->activities}}</td>

          <td>
        	<form action="{{route('experience.more',$experience->id)}}">
        		@csrf
        		<button class="btn btn-primary" type="submit">More</button>
        	</form>
        </td>
        <td>
        <form action="{{route('experience.destroy',$experience->id)}}">
              @csrf
        	<button class="btn btn-danger" type="submit">Delete</button>
        </form></td>

    </tr>
        @endforeach
	</tbody>
</table>
@endsection