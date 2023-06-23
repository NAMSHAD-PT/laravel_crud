<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">  
</head>
<body>
<div class="container mt-5">

<h2>Registered Students</h2>

<a class="btn btn-primary" href="{{ route('new.user') }}">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">RG Number</th>
      <th scope="col">Gender</th>
      <th scope="col">Course</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach($student as $s)
    <tr>
      <!-- <th scope="row">{{$s->id}}</th> -->
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$s->name}}</td>
      <td>{{$s->email}}</td>
      <td>{{$s->phone}}</td>
      <td>{{$s->Rg_Number}}</td>
      <td>{{$s->gender}}</td>
      <td>{{$s->course}}</td>
      <td>
        <a href="{{ route ('edit.user',encrypt($s->id)) }}" class="btn btn-primary">Edit</a>
        <a href="{{route ('delete.user',encrypt($s->id)) }}" class="btn btn-danger">Delete</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>