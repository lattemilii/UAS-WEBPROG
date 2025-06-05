<!DOCTYPE html>
<html lang="id">
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
    }
    
  </style>
</head>
<body class="bg-white text-gray-800 overflow-x-hidden">

  @include('NavbarJualanMommy')

    <section id="landing" class="pt-10 md:pt-24 relative min-h-screen bg-cover bg-center flex items-center" style="background-image: url('/assets/LandingPage.png');">
    <div class="container mx-auto px-4 text-left">
      <div class="max-w-xl md:ml-20">
        <h1 class="text-black text-xl md:text-xl font-semibold leading-relaxed mb-6 drop-shadow-lg">
          Jastip online terpercaya untuk baju bayi dan anak.<br />
          Pilih pakaian lucu, nyaman, dan aman untuk si kecil dengan harga terbaik.
        </h1>
        <a href="https://shopee.co.id/jualannmommy" target="_blank"
           class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-bold text-lg px-8 py-3 rounded-full shadow-lg transition-all">
          SHOP NOW!!
        </a>
      </div>
    </div>
  </section>

  @include('ProdukJualanMommy')
  @include('KatalogJualanMommy')
  @include('TerlarisJualanMommy')
  @include('FooterJualanMommy')

</body>
</html>
