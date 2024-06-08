<!DOCTYPE html>
<html>
<head>
    <title>Daftar Petisi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Daftar Petisi</h2>
    <table>
        <thead>
            <tr>
                <th>ID Petisi</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($petisis as $petisi)
                <tr>
                    <td>{{ $petisi->id }}</td>
                    <td>{{ $petisi->judul }}</td>
                    <td>{{ $petisi->deskripsi }}</td>
                    <td>{{ ucfirst($petisi->status) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
