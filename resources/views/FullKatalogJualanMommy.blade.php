<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JualannMommy</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
        }
        .primary-gradient {
            background: linear-gradient(90deg, #ff7eb9 60%, #9ed4dd 100%);
        }
        .primary-text {
            color: #ff7eb9;
        }
        .secondary-text {
            color: #7ed4dd;
        }
        .primary-btn {
            background: #ff7eb9;
            color: #fff;
            font-weight: bold;
            border-radius: 8px;
            padding: 0.5rem 1.5rem;
            box-shadow: 0 2px 8px #ff7eb955;
            transition: background 0.2s, box-shadow 0.2s;
            border: none;
        }
        .primary-btn:hover {
            background:  #7ed4dd;
            box-shadow: 0 4px 16px #ff7eb955;
        }
        .katalog-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
            background: linear-gradient(to bottom, #9ed4dd 60%, #fff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 1px;
        }
        .katalog-card {
            border-radius: 1rem;
            box-shadow: 0 4px 24px #ff7eb933;
            border: 2px solid #ff7eb9;
            transition: box-shadow 0.2s, border-color 0.2s;
        }
        .katalog-card:hover {
            box-shadow: 0 8px 32px #9ed4dd55;
            border-color: #9ed4dd;
        }
        .harga-text {
            color: #ff7eb9;
            font-weight: bold;
        }
        .judul-text {
            color: #7ed4dd;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-white text-gray-800 flex flex-col min-h-screen overflow-x-hidden font-[Montserrat]">

    @include ('NavbarJualanMommy')

    {{-- <div class="pt-28 pb-2">
        <div class="katalog-title">Katalog</div>
    </div> --}}

    @php
        $categories = ['ALL', 'WOMEN', 'MEN', 'KIDS', 'BABY'];
        $jenisProduk = ['ALL', 'Baju', 'Celana', 'Tas', 'Sepatu', 'Aksesoris', 'Perawatan', 'Ibu & Bayi', 'Souvenir', 'Elektronik'];
        $produks = \App\Models\Produk::all();
    @endphp

    <div class="pt-24 max-w-screen-xl mx-auto">
        <img src="/assets/Group 2.png" alt="Kategori" class="w-full object-cover max-h-[400px]">
    </div>

    <div x-data="{
        selectedCategory: 'ALL',
        selectedJenis: 'ALL',
        jenisProdukLabel: 'Pilih Jenis Produk',
        jenisProdukOptions: @js($jenisProduk),
        open: false
    }" class="text-center mt-4 flex-grow">

        <div class="flex justify-center gap-6 text-sm font-semibold mb-4">
            @foreach ($categories as $kategori)
                <button
                    @click="selectedCategory = '{{ $kategori }}'"
                    class="relative pb-1 transition-all duration-300 ease-in-out primary-text"
                    :class="selectedCategory === '{{ $kategori }}'
                        ? 'after:content-[\'\'] after:absolute after:left-0 after:bottom-0 after:h-0.5 after:w-full after:bg-[#ff7eb9] after:rounded-full font-bold'
                        : 'text-gray-600 hover:text-[#ff7eb9]'">
                    {{ $kategori }}
                </button>
            @endforeach
        </div>

        <div class="w-full px-4 mt-6 flex justify-start">
            <div class="relative w-52 text-left">
                <button
                    @click="open = !open"
                    class="inline-flex justify-between w-full rounded-md border border-[#ff7eb9] shadow-sm px-4 py-2 bg-white text-sm font-medium text-[#ff7eb9] hover:bg-[#fff0f7]"
                    type="button"
                    :aria-expanded="open"
                >
                    <span x-text="jenisProdukLabel"></span>
                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div
                    x-show="open"
                    @click.outside="open = false"
                    class="absolute mt-2 w-52 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
                    x-transition
                >
                    <div class="py-1 text-left" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                        <template x-for="jenis in jenisProdukOptions" :key="jenis">
                            <a
                                href="#"
                                @click.prevent="selectedJenis = jenis; jenisProdukLabel = jenis; open = false"
                                class="block px-4 py-2 text-sm text-[#ff7eb9] hover:bg-[#fff0f7] font-semibold"
                                role="menuitem"
                                x-text="jenis"
                            ></a>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        @if ($produks->isEmpty())
            <div class="flex-grow flex items-center justify-center mt-10">
                <p class="text-xl text-gray-600">Produk tidak tersedia saat ini</p>
            </div>
        @else
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-7 gap-1 md:gap-2 mt-6 px-0">
        @foreach ($produks as $product)
            <div
                x-show="(selectedCategory === 'ALL' || selectedCategory === '{{ $product->kategori }}') && 
                        (selectedJenis === 'ALL' || selectedJenis === '{{ $product->jenis_produk }}')"
                class="bg-white rounded-xl shadow-md flex flex-col overflow-hidden cursor-pointer transform transition-all duration-300 hover:shadow-xl hover:scale-105 text-center w-full max-w-[170px] mx-auto"
                x-transition
            >
                <img src="{{ asset('storage/app/public/' . $product->foto) }}" alt="{{ $product->nama_produk }}" class="w-full h-[150px] object-cover">
                <h2 class="p-2 text-xs font-semibold text-[#7ed4dd] leading-snug mt-1 mb-1">{{ $product->nama_produk }}</h2>
                <span class="block text-xs font-bold text-[#ff7eb9] mt-0 mb-2">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                <a href="{{ $product->link }}" 
                   class="primary-btn mt-auto mb-2 mx-auto inline-block"
                   target="_blank" rel="noopener noreferrer">
                   Beli
                </a>
            </div>
        @endforeach
            </div>
        @endif
    </div>

    @include ('FooterJualanMommy')

</body>
</html>