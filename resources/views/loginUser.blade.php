<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Food Login</title>
  <link rel="stylesheet" href="{{ asset('css/loginUser.css')}}">
</head>
<body>
  <div class="login">
    <div class="login-kotak">
      <div class="bagian_kiri">
        <img src="https://supertasty.rf.gd/wp-content/uploads/2024/08/Untitled-design.png" alt="Food Image" />
        <h1 class="logo">Food<span>🍔</span></h1>
      </div>
      <div class="bagian_kanan">
        <h2>Login</h2>
        <form method="POST">
          @csrf
          <label>Username:</label>
          <input type="text" placeholder="Username" name="username" required />
          
          <label>Password:</label>
          <input type="password" placeholder="Password" name="password" required  />
          @error('gagal')
            <span>{{ $message }}</span>
          @enderror
          <button type="submit" class="login-btn">Sign in</button>
          <label>You don't have an account? <a href="/register">Register</a>.</label>

        </form>
      </div>
    </div>
  </div>
</body>
</html>
