
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
    <h1>Data Berhasil Dihapus</h1>

    @if($success)
        <p>Data berhasil dihapus.</p>
    @else
        <p>Gagal menghapus data.</p>
    @endif

    <a href="{{ route('index') }}">Kembali ke Halaman Utama</a>
</body>
</html>
