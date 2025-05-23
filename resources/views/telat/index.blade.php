<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Keterlambatan</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #84b6f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .form-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
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
      color: #2a5298;
      margin-bottom: 30px;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 6px;
      font-size: 14px;
      color: #333;
    }

    input[type="text"], input[type="datetime-local"] {
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
  </style>
</head>
<body>

  <div class="form-container">
    <img src="{{ asset('person2.png') }}" alt="Avatar" class="avatar">
    <h2>Form Keterlambatan</h2>

    <form method="POST" action="{{ route('telat.kirim') }}">
      @csrf
      <label for="nama_siswa">Nama</label>
      <input type="text" id="nama_siswa" name="nama_siswa" required>

      <label for="alasan">Alasan</label>
      <input type="text" id="alasan" name="alasan" required>

      <label for="waktu">Waktu Keterlambatan</label>
      <input type="datetime-local" id="waktu" name="waktu_terlambat" required>

      <button type="submit" href="/muridmenu">Submit</button>
    </form>
  </div>

</body>
</html>
