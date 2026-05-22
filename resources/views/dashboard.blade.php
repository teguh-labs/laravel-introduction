<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ini dashboard</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <p><em>{{ $pesan }}</em></p>

    <form action="/proses" method="POST">
        @csrf

        <h3>Form Input Data</h3>
        <table border="1" cellpadding="8" style="border-collapse: collapse; margin-bottom: 20px; background-color: #f9f9f9;">
            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="nama" name="nama_input" required placeholder="Ketik nama di sini...">
                </td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td>
                    <input type="number" id="nim" name="nim_input" required placeholder="Ketik NIM di sini...">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <button type="submit" style="cursor: pointer; padding: 5px 15px;">Tampilkan di Tabel</button>
                </td>
            </tr>
        </table>
    </form>
    <hr>

    <h3>Hasil Output Data</h3>
    <table border="1" cellpadding="8" style="border-collapse: collapse; min-width: 300px;">
        <thead style="background-color: #eee;">
            <tr>
                <th>Kategori</th>
                <th>Data Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Nama</strong></td>
                <td>{{ $username }}</td>
            </tr>
            <tr>
                <td><strong>NIM</strong></td>
                <td>{{ $nim }}</td>
            </tr>
        </tbody>
    </table>
    </body>
</html>
