<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Barang</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 40px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .btn-tambah {
            float: right;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-tambah:hover {
            background-color: #2779bd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        table th {
            background-color: #3490dc;
            color: white;
            padding: 12px;
            text-align: center;
        }

        table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .btn-edit {
            padding: 7px 12px;
            background-color: #38c172;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 5px;
        }

        .btn-edit:hover {
            background-color: #1c7d46;
        }

        .btn-hapus {
            padding: 7px 12px;
            background-color: #e3342f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-hapus:hover {
            background-color: #65110e;
        }

        form {
            display: inline-block;
            margin: 0;
        }
    </style>
</head>
<body>

    <h1>Tabel Barang</h1>

    <a href="/barang/create" class="btn-tambah">
        + Tambah Barang
    </a>

    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        @foreach($barang as $b)
        <tr>
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->stok }}</td>
            <td>Rp {{ number_format($b->harga) }}</td>

            <td>
                <a href="/barang/{{ $b->id }}/edit" class="btn-edit">
                    Edit
                </a>

                <form action="/barang/{{ $b->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn-hapus"
                            onclick="return confirm('Hapus Barang Ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>