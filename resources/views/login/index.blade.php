<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #a1c4fd, #c2e9fb);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 20px auto;
    }

    h2 {
      margin-bottom: 20px;
      color: #2a5298;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 6px;
      font-size: 14px;
      color: #333;
    }

    input[type="email"], input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #2a5298;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #1e3c72;
    }

    .footer-text {
      margin-top: 16px;
      font-size: 13px;
      color: #666;
    }

    .error-text {
      color: red;
      font-size: 13px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <img src="{{ asset('person2.png') }}" alt="Avatar" class="avatar">
    <h2>Login</h2>

    @if (session('error'))
      <div class="error-text">{{ session('error') }}</div>
    @endif

    @if ($errors->any())
      <div class="error-text">
        <ul style="padding-left: 0; list-style: none;">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="{{Session::get('email')}}" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Sign In</button>
    </form>

    <div class="footer-text">
      Hanya untuk pengguna terdaftar
    </div>
  </div>

</body>
</html>
