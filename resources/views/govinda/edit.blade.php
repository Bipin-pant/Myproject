<!DOCTYPE html>
<html>
<body>
<a href="{{route('govinda.index')}}" data-toggle="tooltip" title="Edit" class="btn btn-sm btn-outline-primary">view index</i></a>
<h2>Edit Operation</h2>

<form action="{{route('govinda.update',$govinda->id)}}" method="post">
    @csrf
  <label for="name"> Name:</label><br>
  <input type="text" id="name" name="name" value="{{$govinda->name}}"><br>
  <label for="lname">Email:</label><br>
  <input type="email" id="email" name="email" value="{{$govinda->email}}"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>