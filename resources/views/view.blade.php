<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoI+6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
            margin: 0;
            padding: 0;
            color: black;
            min-height: 100vh;
            background: rgb(107, 219, 111);
            background: linear-gradient(135deg, rgba(107, 219, 111, 1) 0%, rgba(205, 131, 192, 1) 50%, rgba(81, 220, 223, 1) 100%);
        }

        .container {
            margin-top: 50px;
        }

        .custom-table {
            max-width: 80%;
            margin: 0 auto;
            border: 2px solid black;
            border-radius: 10px;
            overflow: hidden;
            background-color: #F3EEEA;
        }

        .custom-table th,
        .custom-table td {
            padding: 12px;
            text-align: left;
            border: 1px solid black;
        }

        .custom-table th {
            background-color: rgb(0, 196, 98);
            color: #fff;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #fff;
            color: black;
        }

        h2 {
            color: black;
            text-align: center;
        }

        center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .btn-add {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
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
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="custom-table">
            <thead>
                <tr>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">NIM</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Nama</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Umur</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Alamat</th>
                    <th style="background-color: rgb(0, 196, 98); color: #fff;">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data['nim'] }}</td>
                    <td>{{ $data['nama'] }}</td>
                    <td>{{ $data['umur'] }}</td>
                    <td>{{ $data['alamat'] }}</td>
                    <td>{{ $data['email'] }}</td>
                </tr>
            </tbody>
        </table>

        <center>
            <div class="btn-add">
                <a href=/read class="btn btn-succes">Tampilkan data</a>
            </div>
        </center>
