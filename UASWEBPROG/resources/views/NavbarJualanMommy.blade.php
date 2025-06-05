<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JualannMommy</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="/assets/Logo.png">
</head>
<body class="font-[Montserrat]">

<nav id="navbar-jualanmommy" class="navbar fixed top-0 left-0 w-full z-50 bg-transparent transition-all duration-300">
  <div class="flex items-center justify-between px-6 py-4 md:px-14 bg-transparent">
    <a href="{{ url('/') }}">
      <img src="/assets/Logo.png" alt="JualanMommy Logo" class="h-12 md:h-16"/>
    </a>

    <button id="hamburger-btn" class="md:hidden text-3xl focus:outline-none">
      &#9776;
    </button>

    <div class="hidden md:flex gap-6 text-lg font-bold text-gray-700">
      <a href="{{ url('/') }}" @if (Request::is('/')) onclick="smoothScroll(event, '#landing')" @endif>Home</a>
      <a href="{{ url('/') }}" @if (Request::is('/')) onclick="smoothScroll(event, '#produk')" @endif>Terbaru</a>
      <a href="{{ url('/') }}" @if (Request::is('/')) onclick="smoothScroll(event, '#katalog')" @endif>Katalog</a>
      <a href="{{ url('/') }}" @if (Request::is('/')) onclick="smoothScroll(event, '#terlaris')" @endif>Terlaris</a>

      @auth
        <a href="{{ url('/DashboardAdmin') }}">Dashboard</a>
        <form method="POST" action="{{ url('/admin/logout') }}">
          @csrf
          <button type="submit" class="text-left">Logout</button>
        </form>
      @else
        <a href="{{ route('login') }}">Admin</a>
      @endauth
    </div>
  </div>

  <div id="mobile-menu" class="hidden flex-col absolute top-[72px] w-full bg-white px-6 py-6 space-y-6 text-lg font-semibold md:hidden">
    <a href="{{ url('/') }}" @if (Request::is('/')) onclick="smoothScroll(event, '#landing'); toggleMenu()" @endif>Home</a>
    <a href="{{ url('/') }}" @if (Request::is('/')) onclick="smoothScroll(event, '#produk'); toggleMenu()" @endif>Terbaru</a>
    <a href="{{ url('/') }}" @if (Request::is('/')) onclick="smoothScroll(event, '#katalog'); toggleMenu()" @endif>Katalog</a>
    <a href="{{ url('/') }}" @if (Request::is('/')) onclick="smoothScroll(event, '#terlaris'); toggleMenu()" @endif>Terlaris</a>

    @auth
      <a href="{{ url('/DashboardAdmin') }}" onclick="toggleMenu()">Dashboard</a>
      <form method="POST" action="{{ url('/admin/logout') }}">
        @csrf
        <button type="submit" class="text-left w-full">Logout</button>
      </form>
    @else
      <a href="{{ route('login') }}">Admin</a>
    @endauth
  </div>
</nav>

<style>
  :root {
    --scroll-offset: 96px;
  }

  html {
    scroll-behavior: smooth;
    scroll-padding-top: var(--scroll-offset);
  }

  @media (max-width: 768px) {
    :root {
      --scroll-offset: 72px;
    }
  }

  @media (max-width: 480px) {
    :root {
      --scroll-offset: 56px;
    }
  }

  .navbar {
    transition: background-color 0.3s ease-in-out;
    background-color: transparent;
  }

  .navbar.scrolled {
    background-color: white;
  }
</style>

<script>
  const hamburgerBtn = document.getElementById('hamburger-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  let menuOpen = false;

  function toggleMenu() {
    menuOpen = !menuOpen;
    mobileMenu.classList.toggle('hidden');
    mobileMenu.classList.toggle('flex');
    hamburgerBtn.innerHTML = menuOpen ? '&times;' : '&#9776;';
  }

  hamburgerBtn.addEventListener('click', toggleMenu);

  function smoothScroll(event, target) {
    event.preventDefault();
    const element = document.querySelector(target);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  }

  window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar-jualanmommy');
    if (window.scrollY > 10) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>

</body>
</html>
