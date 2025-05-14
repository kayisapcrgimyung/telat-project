<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Keterlambatan</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #1e3c72, #2a5298);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .form-card {
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 450px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #1e3c72;
    }

    label {
      font-weight: 500;
      margin-bottom: 6px;
      display: block;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      width: 100%;
      background: #2a5298;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #1e3c72;
    }

    .back-link {
      text-align: center;
      margin-top: 15px;
      display: block;
      color: #1e3c72;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="form-card">
    <h2>Edit Keterlambatan</h2>
    <form action="{{ route('gurumenu.update', $gurumenu->id) }}" method="POST">
      @csrf
      @method('PUT')
      <label for="nama_siswa">Nama Siswa</label>
      <input type="text" name="nama_siswa" value="{{ $gurumenu->nama_siswa }}" required>

      <label for="alasan">Alasan</label>
      <textarea name="alasan" rows="3" required>{{ $gurumenu->alasan }}</textarea>

      <label for="waktu">Waktu</label>
      <input type="datetime-local" name="waktu" value="{{ \Carbon\Carbon::parse($gurumenu->waktu)->format('Y-m-d\TH:i') }}" required>

      <button type="submit">Perbarui</button>
    </form>
    <a class="back-link" href="{{ route('gurumenu.index') }}">← Kembali ke Daftar</a>
  </div>

</body>
</html>
