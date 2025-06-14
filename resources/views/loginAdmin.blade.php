<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Admin</title>
  <link rel="stylesheet" href="{{asset('css/admin-style/loginAdmin.css')}} "/>
</head>
<body>
  <div class="admin">
    <h1 class="logo">Login Admin</h1> 
    <div class="admin-kotak">
      <div class="bagian_kanan">
        <form method="POST">
          @csrf
          <label>Username:</label>
          <input type="text" placeholder="Name" name="username" required />

          <label>Password:</label>
          <input type="password" placeholder="Password" name="password" required />
          @if($errors->has('gagal'))
            <span>{{ $errors->first('gagal') }}</span>
          
          @endif
          <button type="submit" class="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>