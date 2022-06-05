<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<a href="{{route('govinda.add')}}" >Add</i></a>

<h2>View Table</h2>

<table>
  <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  @foreach($govindas as $govinda)
  <tr>
    
    <td>{{$loop->iteration}}</td>
    <td>{{$govinda->name}}</td>
    <td>{{$govinda->email}}</td>    
    <td><a href="{{route('govinda.edit',$govinda->id)}}" >edit</i></a>
    <a href="{{route('govinda.destroy',$govinda->id)}}" >delete</i></a>
          </td>
  </tr>
  @endforeach

</table>

</body>
</html>
