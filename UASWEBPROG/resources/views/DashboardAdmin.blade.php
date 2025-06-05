@include('NavbarJualanMommy')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JualannMommy</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="/assets/Logo.png">
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            background: #F4F7F8;
        }
        .admin-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
            background: linear-gradient(to bottom, #ff7eb9 60%, #9ed4dd 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 1px;
        }
        .admin-btn {
            background: linear-gradient(90deg, #ff7eb9 60%, #9ed4dd 100%);
            color: #fff;
            font-weight: bold;
            border-radius: 8px;
            padding: 0.5rem 1.5rem;
            box-shadow: 0 2px 8px #ff7eb955;
            transition: background 0.2s, box-shadow 0.2s;
            border: none;
        }
        .admin-btn:hover {
            background: linear-gradient(90deg, #ff5ea8 60%, #7ed4dd 100%);
            box-shadow: 0 4px 16px #ff7eb955;
        }
        .table-header {
            background: #fff0f7;
            color: #ff7eb9;
            font-weight: bold;
        }
        .table-row {
            background: #fff;
            transition: background 0.2s;
        }
        .table-row:hover {
            background: #ffe3f1;
        }
        .text-pink {
            color: #ff7eb9;
        }
        .border-pink {
            border-color: #ff7eb9;
        }
        .highlight-pink {
            background: #ff7eb9;
            color: #fff;
        }
        .badge-pink {
            background: #ff7eb9;
            color: #fff;
            border-radius: 9999px;
            padding: 0.25em 0.75em;
            font-size: 0.85em;
            font-weight: bold;
            margin-left: 0.5em;
        }
    </style>
</head>
<body class="min-h-screen">

<div class="max-w-5xl mx-auto py-10 px-4 pt-24">

    <div class="bg-white rounded-xl shadow-lg border-2 border-[#ff7eb9] max-w-md mx-auto mb-10 p-8 flex flex-col items-center">
        <h1 class="admin-title mb-6 mt-0 text-2xl">Dashboard Admin</h1>
        <div class="flex flex-col gap-4 w-full">
            <button class="admin-btn w-full" id="tambah-produk">
                Tambah Produk
            </button>
            <button class="admin-btn w-full" id="edit-produk">
                Edit Produk
            </button>
        </div>
    </div>

    <div class="admin-section hidden" id="form-tambah-produk">
        <h2 class="text-xl font-semibold mb-6 text-[#7ed4dd]">Tambah Produk</h2>
        <form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nama_produk" class="block text-gray-700 font-bold mb-2">Nama Produk</label>
                <input id="nama_produk" type="text" name="nama_produk" required class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="jenis_produk" class="block text-gray-700 font-bold mb-2">Jenis Produk</label>
                <select id="jenis_produk" name="jenis_produk" required class="w-full p-2 border rounded">
                    <option value="">-- Kategori --</option>
                    <option value="Baju">Baju</option>
                    <option value="Celana">Celana</option>
                    <option value="Tas">Tas</option>
                    <option value="Sepatu">Sepatu</option>
                    <option value="Aksesoris">Aksesoris</option>
                    <option value="Perawatan">Perawatan</option>
                    <option value="Ibu & Bayi">Ibu & Bayi</option>
                    <option value="Souvenir">Souvenir</option>
                    <option value="Elektronik">Elektronik</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-700 font-bold mb-2">Harga</label>
                <input id="harga" type="text" name="harga" required class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="kategori" class="block text-gray-700 font-bold mb-2">Kategori</label>
                <select id="kategori" name="kategori" required class="w-full p-2 border rounded">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="KIDS">KIDS</option>
                    <option value="WOMEN">WOMEN</option>
                    <option value="MEN">MEN</option>
                    <option value="BABY">BABY</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="foto" class="block text-gray-700 font-bold mb-2">Foto Produk</label>
                <input type="file" id="foto" name="foto" required class="w-full p-2 border rounded bg-white">
            </div>
            <div class="mb-6">
                <label for="link" class="block text-gray-700 font-bold mb-2">Link</label>
                <input id="link" type="text" name="link" required class="w-full p-2 border rounded">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="admin-btn">Tambah</button>
            </div>
        </form>
    </div>

    <div class="admin-section hidden" id="table-edit-produk">
        <h2 class="text-xl font-semibold mb-6 text-[#7ed4dd]">Daftar Produk</h2>
        <div class="mb-4">
            <label for="filter" class="block text-gray-700 font-bold mb-2">Filter</label>
            <select id="filter" class="w-full p-2 border rounded" onchange="filterTable()">
                <option value="">-- Pilih Filter --</option>
                <option value="KIDS">KIDS</option>
                <option value="WOMEN">WOMEN</option>
                <option value="MEN">MEN</option>
                <option value="BABY">BABY</option>
            </select>
        </div>
        @if (isset($produks) && $produks->count())
            <table class="w-full table-auto border-collapse" id="table-produk">
                <thead>
                    <tr class="table-header">
                        <th class="text-left px-4 py-2">Nama Produk</th>
                        <th class="text-left px-4 py-2">Jenis Produk</th>
                        <th class="text-left px-4 py-2">Harga</th>
                        <th class="text-left px-4 py-2">Kategori</th>
                        <th class="text-left px-4 py-2">Foto</th>
                        <th class="text-left px-4 py-2">Link</th>
                        <th class="text-left px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produks as $produk)
                        <tr class="border-t table-row" data-kategori="{{ $produk->kategori }}">
                            <td class="px-4 py-2">{{ $produk->nama_produk ?? '-' }}</td>
                            <td class="px-4 py-2">{{ $produk->jenis_produk ?? '-' }}</td>
                            <td class="px-4 py-2">{{ number_format($produk->harga, 0, ',', '.') }}</td>
                            <td class="px-4 py-2">{{ $produk->kategori ?? '-' }}</td>
                            <td class="px-4 py-2">
                                <img src="{{ asset('storage/app/public/' . $produk->foto) }}" alt="Foto Produk" class="h-20 w-20 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">
                                <a href="{{ $produk->link }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700">View</a>
                            </td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="{{ route('edit.produk', $produk->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-gray-500">Tidak ada produk yang tersedia.</p>
        @endif
    </div>

    <div class="w-full flex justify-center mt-12 mb-8">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="admin-btn px-8 py-2">
                Logout
            </button>
        </form>
    </div>
</div>

<script>
    const tambahBtn = document.getElementById('tambah-produk');
    const editBtn = document.getElementById('edit-produk');
    const formBox = document.getElementById('form-tambah-produk');
    const tableBox = document.getElementById('table-edit-produk');

    tambahBtn.addEventListener('click', function () {
        formBox.classList.toggle('hidden');
        tableBox.classList.add('hidden');
    });

    editBtn.addEventListener('click', function () {
        tableBox.classList.toggle('hidden');
        formBox.classList.add('hidden');
    });

    function filterTable() {
        const filter = document.getElementById('filter').value;
        const table = document.getElementById('table-produk');
        const rows = table.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const kategori = row.getAttribute('data-kategori');
            if (filter === "" || kategori === filter) {
                row.classList.remove('hidden');
            } else {
                row.classList.add('hidden');
            }
        });
    }
</script>

</body>
</html>



