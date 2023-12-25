<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
            margin: 0;
            padding: 0;
            color: black;
            display: flex;
            min-height: 100vh;
            background: rgb(107, 219, 111);
            background: linear-gradient(135deg, rgba(107, 219, 111, 1) 0%, rgba(205, 131, 192, 1) 50%, rgba(81, 220, 223, 1) 100%);
        }

        img {
            width: 100px;
            height: auto;
        }

        .custom-table {
            max-width: 100%;
            margin: 0 auto;
            border: 2px solid #000;
            border-radius: 10px;
            overflow: hidden;
            background-color: rgb(0, 196, 98);
        }

        .custom-table th,
        .custom-table td {
            padding: 12px;
            text-align: center;
            border: 1px solid black;
        }

        .custom-table th {
            background-color: rgb(0, 196, 98);
            color: #fff;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #FDE2F3;
        }

        .btn-action a {
            display: block;
            margin-bottom: 2px;
        }

        .btn-add {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .btn-add a:hover {
            background-color: rgb(0, 121, 60);
        }

        .btn-add a {
            background-color: rgb(0, 196, 98);
            font-size: 16px;
            padding: 8px 16px;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
        @endif
        <h2 class="text-center" style="color: #fff;">Database Mahasiswa</h2>
        <table class="table custom-table mt-4">
            <thead>
                <tr>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">NIM</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Nama</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">umur</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Alamat</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Email</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Dibuat pada</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Foto</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataAll as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa['nim'] }}</td>
                        <td>{{ $mahasiswa['nama'] }}</td>
                        <td>{{ $mahasiswa['umur'] }}</td>
                        <td>{{ $mahasiswa['alamat'] }}</td>
                        <td>{{ $mahasiswa['email'] }}</td>
                        <td>{{ $mahasiswa['created_at'] }}</td>
                        <td>
                            @if ($mahasiswa['foto'])
                                <a href="{{ asset('storage/' . $mahasiswa['foto']) }}"><img
                                        src="{{ asset('storage/' . $mahasiswa['foto']) }}" alt="Foto Mahasiswa"></a>
                            @else
                                No Image
                            @endif
                        </td>
                        <td class="btn-action">
                            <a href="{{ url('/update/' . $mahasiswa['nim']) }}"
                                onclick="return confirm('Yakin data mau diupdate?');"
                                class="button-30 btn btn-warning btn-action">Perbarui</a>
                            <a href="{{ url('/delete/' . $mahasiswa['nim']) }}"
                                onclick="return confirm('Yakin data mau dihapus?');"
                                class="button-30 btn btn-danger btn-action">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn-add">
            <a href="/create">Tambah data</a>
        </div>
    </div>
</body>

</html>
