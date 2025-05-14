<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Keterlambatan</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    th, td {
      padding: 14px 20px;
      text-align: left;
    }

    th {
      background-color: #2a5298;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f0f4f8;
    }

    a.btn, button.btn {
      display: inline-block;
      margin: 10px 5px;
      padding: 8px 14px;
      background-color: #2a5298;
      color: #fff;
      border-radius: 5px;
      text-decoration: none;
      font-size: 14px;
      border: none;
      cursor: pointer;
    }

    a.btn:hover, button.btn:hover {
      background-color: #1e3c72;
    }

    .top-nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    form.logout-form {
      display: inline;
    }
  </style>
</head>
<body>

  <div class="top-nav">
    <!-- Tombol Logout -->
    <form action="{{ route('logout') }}" method="POST" class="logout-form">
      @csrf
      <button type="submit" class="btn">Logout</button>
    </form>

    <!-- Tombol Tambah -->
    
  </div>

  <h2>Rekaman Keterlambatan Anda</h2>

  <table>
    <thead>
      <tr>
        <th>Nama Siswa</th>
        <th>Alasan</th>
        <th>Waktu</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($muridmenu as $item)
      <tr>
        <td>{{ $item->nama_siswa }}</td>
        <td>{{ $item->alasan }}</td>
        <td>{{ $item->waktu_terlambat }}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>
