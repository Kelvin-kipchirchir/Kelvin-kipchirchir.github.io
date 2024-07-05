@extends('pages.dashboard')
@section('content')
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
         <form action="{{route('new.cerfication')}}">
              @csrf
          <button class="btn btn-success" type="submit">New Cerfication</button>
        </form>
<table class="table table-hover">
	<thead>
		<tr>
			<td>Certificate</td>
			<td>Name</td>
            <td>Institution</td>
			<td>Certificate No</td>
			<td>Date Given</td>
			<td>View More</td>
			<td>Delete</td>
		</tr>
	</thead>
	<tbody>
		@foreach($certification as $certification)
		<tr>
        
        
         <td><img src="{{url ('public/documents/'.$certification->certificate)}}" style="height: 50px;width: 50px;"></td>
         <td>{{$certification->name}}</td>
        <td>{{$certification->institution}}</td>
        <td>{{$certification->certNumber}}</td>
         <td>{{$certification->date_given}}</td>
       

          <td>
        	<form action="{{route('certification.more',$certification->id)}}">
        		@csrf
        		<button class="btn btn-primary" type="submit">More</button>
        	</form>
        </td>
        <td>
        <form action="{{route('certification.destroy',$certification->id)}}">
              @csrf
        	<button class="btn btn-danger" type="submit">Delete</button>
        </form></td>

    </tr>
        @endforeach
	</tbody>
</table>
@endsection