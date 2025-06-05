@include('NavbarJualanMommy')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JualannMommy</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-[Montserrat] min-h-screen">
  <div class="flex items-center justify-center pt-24">
  <div class="w-full max-w-md bg-white px-8 py-6 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login to JualannMommy</h2>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          required
          autofocus
          class="mt-1 block w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
        >
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input
          type="password"
          name="password"
          id="password"
          required
          class="mt-1 block w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
        >
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex justify-center items-center">
        <button type="submit" class="text-white px-4 py-2 rounded shadow-md" style="background-color: #ff7eb9" onmouseover="this.style.backgroundColor='#f06292'" onmouseout="this.style.backgroundColor='#ff7eb9'">
          Login
        </button>
      </div>
    </form>
  </div>

</body>
</html>

