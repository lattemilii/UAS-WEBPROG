@include('NavbarJualanMommy')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | JualannMommy</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-[Montserrat] min-h-screen">
  <div class="flex items-center justify-center pt-24">
    <div class="w-full max-w-md bg-white px-8 py-8 rounded-xl shadow-md border-2 border-[#ff7eb9]">
      <h2 class="text-2xl font-bold mb-2 text-center text-[#ff7eb9]">Register</h2>
      <p class="text-center text-gray-500 mb-6">Fill the blanks to create your account</p>
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
          <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                 class="mt-1 block w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-[#ff7eb9] focus:border-[#ff7eb9] @error('name') border-red-500 @enderror">
          @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">E-Mail Address</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}" required
                 class="mt-1 block w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-[#ff7eb9] focus:border-[#ff7eb9] @error('email') border-red-500 @enderror">
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input id="password" type="password" name="password" required
                 class="mt-1 block w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-[#ff7eb9] focus:border-[#ff7eb9] @error('password') border-red-500 @enderror">
          @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="password-confirm" class="block text-sm font-medium text-gray-700">Confirm Password</label>
          <input id="password-confirm" type="password" name="password_confirmation" required
                 class="mt-1 block w-full px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring-[#ff7eb9] focus:border-[#ff7eb9]">
        </div>

        <div class="flex justify-center items-center">
          <button 
            type="submit" 
            class="w-full py-2 text-lg font-bold rounded-lg border-2 border-[#ff7eb9] text-[#ff7eb9] bg-white transition-all duration-200
                   hover:bg-gradient-to-r hover:from-[#ff7eb9] hover:to-[#9ed4dd] hover:text-white hover:border-[#9ed4dd] shadow-sm">
            Register
          </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>