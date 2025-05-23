<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Keterlambatan</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f4f7fc;
      margin: 0;
      padding: 40px;
    }

    h2 {
      color: #2a5298;
      text-align: center;
      margin-bottom: 30px;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
      font-weight: bold;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    button {
      background-color: #2a5298;
      color: white;
      padding: 10px 18px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
    }

    button:hover {
      background-color: #1e3c72;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      color: #2a5298;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <h2>Tambah Data Keterlambatan</h2>

  <form action="{{ route('gurumenu.store') }}" method="POST">
    @csrf

    <label for="nama_siswa">Nama Siswa</label>
    <input type="text" id="nama_siswa" name="nama_siswa" required>

    <label for="alasan">Alasan</label>
    <textarea id="alasan" name="alasan" required></textarea>

    <label for="waktu_terlambat">Waktu Terlambat</label>
    <input type="datetime-local" id="waktu_terlambat" name="waktu_terlambat" required>

    <button type="submit">Simpan</button>
  </form>

  <a href="{{ route('gurumenu.index') }}">← Kembali ke daftar</a>

</body>
</html>
