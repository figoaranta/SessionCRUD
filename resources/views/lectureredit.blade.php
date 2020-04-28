<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
            Hello {{ Session::get('lecturerid') }}
            <br><br>
                <form action = "/public/lecturereditsave/{{$lecturer->id}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}

                <label>Lecturer ID</label>
                <input type="text" name="LecturerId" value="{{$lecturer->lecturer_id}}">
                <br><br>
                <label>Lecturer Name</label>
                <input  type="Text" name="LecturerName" value="{{$lecturer->name}}">
                <br><br>
             
                <input  type="submit" name="submit">Update Data
            </form>
    </body>
</html>
