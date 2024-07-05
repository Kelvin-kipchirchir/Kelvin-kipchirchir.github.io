@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
         <form action="{{route('new.skill')}}">
              @csrf
          <button class="btn btn-success" type="submit">New Skill</button>
        </form>
<table class="table table-hover">
	<thead>
		<tr>
			<td>Category</td>
			<td>Name</td>
			<td>Icon</td>
			<td>Rate</td>
			<td>View More</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>
		@foreach($skills as $skill)
		<tr>
        
        <td>{{$skill->category}}</td>
        <td>{{$skill->skill}}</td>
         <td><img src="{{url ('public/images/'.$skill->icon)}}" style="height: 50px;width: 50px;"></td>
         <td>{{$skill->rate}}</td>

          <td>
        	<form action="{{route('skill.more',$skill->id)}}">
        		@csrf
        		<button class="btn btn-primary" type="submit">More</button>
        	</form>
        </td>
        <td>
        <form action="{{route('project.destroy',$skill->id)}}">
              @csrf
        	<button class="btn btn-danger" type="submit">Delete</button>
        </form></td>

    </tr>
        @endforeach
	</tbody>
</table>
@endsection