<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            min-height: 100vh;
            margin: 0;
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-container {
            width: 400px;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #3490dc;
        }

        .btn-update {
            width: 100%;
            padding: 10px;
            background-color: #38c172;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
        }

        .btn-update:hover {
            background-color: #1c7d46;
        }
    </style>
</head>
<body>

    <h1>Edit Barang</h1>

    <div class="form-container">

        <form action="/barang/{{ $barang->id }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text"
                name="nama_barang"
                value="{{ $barang->nama_barang }}"
                placeholder="Nama Barang">
            <br><br>

            <input type="number"
                name="stok"
                value="{{ $barang->stok }}"
                placeholder="Stok">
            <br><br>

            <input type="number"
                name="harga"
                value="{{ $barang->harga }}"
                placeholder="Harga">

            <br><br>

            <button type="submit" class="btn-update">
                Update
            </button>
        </form>
    </div>

</body>
</html>