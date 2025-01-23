<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kursus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Kursus</h2>

    <table>
        <thead>
            <tr>
                <th>Nama Kursus</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Jumlah Peserta</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $kursus)
            <tr>
                <td>{{ $kursus['name'] }}</td>
                <td>{{ $kursus['description'] }}</td>
                <td>{{ $kursus['price'] }}</td>
                <td>{{ $kursus['status'] == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>{{ $kursus['student_count'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
