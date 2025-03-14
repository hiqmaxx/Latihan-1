<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2 class="text-center">Konfirmasi Pendaftaran</h2>
    <div class="card p-4 shadow">
        <p><strong>Nama:</strong> {{ $data['nama'] }}</p>
        <p><strong>Kelas:</strong> {{ $data['kelas'] }}</p>
        <p><strong>Judul Poster:</strong> {{ $data['judul'] }}</p>
        <p><strong>File Poster:</strong></p>
        <img src="{{ asset('storage/' . $data['photo_path']) }}" class="img-fluid" width="200">
    </div>
</body>
</html>
