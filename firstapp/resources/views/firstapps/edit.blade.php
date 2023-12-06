<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
</head>
<body>
    <h1>crud opeartion</h1>
    <form method="POST" action="/edit/{{$users->id}}">
        @csrf
        @method('PUT')
  
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$users->name}}"><br>
    <label for="name">Email</label>
    <input type="text" name="email" value="{{$users->email}}"><br>
    <label for="name">Descripton</label>
    <input type="text" name="desc" value="{{$users->desc}}"><br>
    <label for="name">Password</label>
    <input type="text" name="password" value="{{$users->password}}"><br>

       <input type="submit" name="Update" value="update">
     

</form>
</body>
</html>