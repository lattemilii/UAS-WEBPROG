<!DOCTYPE html>
<html lang="id" class="overflow-x-hidden">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JualannMommy</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="/assets/Logo.png">

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      overflow-x: hidden;
    }

    * {
      box-sizing: border-box;
    }

    img, video, iframe {
      max-width: 100%;
      height: auto;
      display: block;
    }

    .custom-button {
      background-color: #ff7eb9;
      transition: background-color 0.3s ease;
    }

    .custom-button:hover {
      background-color: #ff5fa3;
    }
  </style>
</head>

<body class="bg-white text-gray-800 overflow-x-hidden">

  @include('NavbarJualanMommy')

  <section id="landing" class="pb-8 relative min-h-screen bg-cover bg-center flex items-center" style="background-image: url('/assets/LandingPage.png');">
    <div class="w-full px-4 text-left max-w-screen-xl mx-auto">
      <div class="max-w-xl md:ml-20">
        <h1 class="text-black text-xl md:text-xl font-semibold leading-relaxed mb-6 drop-shadow-lg">
          Jastip online terpercaya untuk baju bayi dan anak.<br />
          Pilih pakaian lucu, nyaman, dan aman untuk si kecil dengan harga terbaik.
        </h1>
        <a href="https://shopee.co.id/jualannmommy" target="_blank"
           class="custom-button inline-block text-white font-bold text-lg px-8 py-3 rounded-full shadow-lg">
          SHOP NOW!!
        </a>
      </div>
    </div>
  </section>

  <div class="produk-section mb-8" id="produk">
    @include('ProdukJualanMommy')
  </div>

  <div class="katalog-section mb-8" id="katalog">
    @include('KatalogJualanMommy')
  </div>

  <div class="terlaris-section" id="terlaris">
    @include('TerlarisJualanMommy')
  </div>

  @include('FooterJualanMommy')

</body>
</html>
