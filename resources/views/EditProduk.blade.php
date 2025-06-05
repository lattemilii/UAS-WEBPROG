<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            background: #F4F7F8;
        }
        .edit-title {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
            background: linear-gradient(to bottom, #ff7eb9 60%, #9ed4dd 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 1px;
        }
        .primary-btn {
            background: linear-gradient(90deg, #ff7eb9 60%, #9ed4dd 100%);
            color: #fff;
            font-weight: bold;
            border-radius: 8px;
            padding: 0.5rem 1.5rem;
            box-shadow: 0 2px 8px #ff7eb955;
            transition: background 0.2s, box-shadow 0.2s;
            border: none;
        }
        .primary-btn:hover {
            background: linear-gradient(90deg, #ff5ea8 60%, #7ed4dd 100%);
            box-shadow: 0 4px 16px #ff7eb955;
        }
        .form-section {
            background: #fff;
            border: 2px solid #ff7eb9;
            border-radius: 1rem;
            box-shadow: 0 4px 24px #ff7eb933;
            max-width: 420px;
            margin: 0 auto;
            padding: 2.5rem 2rem 2rem 2rem;
        }
        label {
            color: #7ed4dd;
            font-weight: bold;
        }
        input[type="text"], select, input[type="file"] {
            border: 1.5px solid #9ed4dd;
        }
        input[type="text"]:focus, select:focus {
            border-color: #ff7eb9;
            outline: none;
            box-shadow: 0 0 0 2px #ff7eb955;
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center py-10">
        <div class="form-section">
            <div class="edit-title">Edit Produk</div>
            <form method="POST" action="{{ route('produk.update', $produk->id) }}" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="nama_produk" class="block mb-2">Nama Produk</label>
                    <input id="nama_produk" type="text" name="nama_produk" value="{{ $produk->nama_produk }}" required class="w-full p-2 rounded">
                </div>

                <div>
                    <label for="jenis_produk" class="block mb-2">Jenis Produk</label>
                    <select id="jenis_produk" name="jenis_produk" required class="w-full p-2 rounded">
                        <option value="">-- Jenis Produk --</option>
                        @foreach (['Baju', 'Celana', 'Tas', 'Sepatu', 'Aksesoris', 'Perawatan', 'Ibu & Bayi', 'Souvenir', 'Elektronik'] as $jenis)
                            <option value="{{ $jenis }}" {{ $produk->jenis_produk == $jenis ? 'selected' : '' }}>{{ $jenis }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="harga" class="block mb-2">Harga</label>
                    <input id="harga" type="text" name="harga" value="{{ $produk->harga }}" required class="w-full p-2 rounded">
                </div>

                <div>
                    <label for="kategori" class="block mb-2">Kategori</label>
                    <select id="kategori" name="kategori" required class="w-full p-2 rounded">
                        @foreach (['KIDS', 'WOMEN', 'MEN', 'BABY'] as $kategori)
                            <option value="{{ $kategori }}" {{ $produk->kategori == $kategori ? 'selected' : '' }}>{{ $kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="link" class="block mb-2">Link Produk</label>
                    <input id="link" type="text" name="link" value="{{ $produk->link }}" required class="w-full p-2 rounded">
                </div>

                <div>
                    <label for="foto" class="block mb-2">Foto Produk</label>
                    <input id="foto" type="file" name="foto" class="w-full p-2 rounded bg-white">
                    @if ($produk->foto)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" class="h-24 w-24 object-cover rounded">
                        </div>
                    @endif
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="primary-btn w-48 mt-4">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
