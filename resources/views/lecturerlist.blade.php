<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
    	Hello {{ Session::get('lecturerid') }}, <a href="logout">Logout</a>
			<br><br>
			

		<a href="lectureradd">+ Lecturer</a><br><br>

			<table border="1">
				<tr>
					<th>Lecturer ID</th>
					<th>Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
        				@foreach ($lecturers as $key => $lecturer)
				<tr>
					<td>
					{{ $lecturer->lecturer_id }}
					</td>
					<td>
					{{ $lecturer->name }}
					</td>
					<td>
						<a href="lectureredit/{{$lecturer->id}}">Edit</a>
					</td>
					<td>
						<a href="lecturerdelete/{{$lecturer->id}}">Delete</a>
					</td>
				</tr>
				@endforeach

			</table>
			@if(session()->has('message'))
	        {{ session()->get('message') }}
	    @endif
    </body>
</html>
