<!DOCTYPE html>
<html>
<body>

<h2>Add Operation</h2>
<a href="{{route('govinda.index')}}" data-toggle="tooltip" title="Edit" class="btn btn-sm btn-outline-primary">view index</i></a>

<form action="{{route('govinda.store')}}" method="post">
    @csrf
  <label for="fname"> Name:</label><br>
  <input type="text" id="name" name="name" ><br>
  <label for="lname">Email:</label><br>
  <input type="email" id="email" name="email"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

