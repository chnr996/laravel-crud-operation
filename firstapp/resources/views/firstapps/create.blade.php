<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
</head>
<body>
    <h1>crud opeartion</h1>
    <form action="{{ route('FirstappController.store') }}" method="post">
  @csrf
    <label for="name">Name</label>
    <input type="text" name="name"><br>
    <label for="name">Email</label>
    <input type="text" name="email"><br>
    <label for="name">Descripton</label>
    <input type="text" name="desc"><br>
    <label for="name">Password</label>
    <input type="text" name="password"><br>
       <input type="submit" name="save" value="Save">
</form>
</body>
</html>