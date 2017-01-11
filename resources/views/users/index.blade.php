<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
    
  <h1>All Users</h1>

  @foreach ($users as $user)
    <li>{{ $user->name }}</li>
  @endforeach
  
  <h2>Add a user</h2>

  <form method="POST" action="/users">
    <p>
       <input type="text" name="name" placeholder="Name" required>
    </p>

    <p>
       <input type="email" name="email" placeholder="Email Address" required>
    </p>

    <p>
       <input type="password" name="password" placeholder="Password" required>
    </p>

    <p>
      <button type="submit">Add a User</button>
    </p>
   
  </form>

</body>
</html>