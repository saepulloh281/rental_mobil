<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mobil</title>
</head>

<body>
    <div class="card">
        <h1> Form Tambah Mobil</h1>
        <form action="/mobil/simpanData" method="post">
            @csrf
            <div>
                <label for="">Nama Mobil</label><br>
                <input type="text" name="nama_mobil" required><br>
            </div>
            <div>
                <label for="">Merk Mobil</label><br>
                <input type="text" name="merk_mobil" required><br>
            </div>
            <div>
                <label for="">cc</label><br>
                <input type="text" name="cc" required><br>
            </div>
            <div>
                <button type="submit">simpan</button>
            </div>
        </form>
    </div>
</body>

</html>
