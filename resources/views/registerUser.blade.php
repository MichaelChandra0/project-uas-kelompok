<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="{{ asset('css/registerUser.css') }}">
</head>
<body>
    <div class="Register">
        <div class="Register_Kotak">
            <div class="bagian_kiri">
                <img src="{{ asset('images/judul2.png') }}" alt="Register">
                <h1 class="logo">Register</h1>
            </div>
            <div class="bagian_kanan">
                <h2>Register</h2>
                <form method="post">
                    @csrf
                    <label>Username:</label>
                    <input type="text" placeholder="Username" name="username" required>

                    <label>Password</label>
                    <input type="password" placeholder="Password" name="password" required>

                    <label>Konfirmasi Password</label>
                    <input type="password" placeholder="Konfirmasi Password" name="konfirmasi" required>
                    @if($errors->has('username'))
                        <span>{{$errors->first('username')}}</span>
                    @elseif(session('gagal'))
                        <span>{{session('gagal')}}</span>
                    @elseif(session('berhasil'))
                        <span>Berhasil Login, silahkan <a href="/login">login</a>.</span>
                    @endif
                    <button type="submit" class="register_btn">Log in</button>
                    <label>Already have an account? <a href="/login">Login now</a>.</label>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
