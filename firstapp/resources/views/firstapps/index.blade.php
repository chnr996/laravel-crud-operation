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

<h2>HTML Table</h2>
<a href="/create">Registration</a>
<table>

  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Descripyion</th>
    <th>Password</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach ($users as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->desc}}</td>
    <td>{{$user->password}}</td>
    <th><a href="/edit/{{ $user->id }}" class="btn btn-primary">Edit</a>
    <td><a href="/delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
</td>
  </tr>
  @endforeach
</table>

</body>
</html>

