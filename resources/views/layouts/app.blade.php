<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel Livewire</title>
  <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
  @livewireStyles
  @livewireScripts
</head>
<body class="flex flex-col h-screen justify-between">
<header class="bg-blue-600 h-20">
  <h1 class="text-4xl text-white ml-6">Livewire</h1>
</header>
<main class="flex-grow p-4 bg-blue-100">
  @if (session()->has('message'))
    <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
      <p>{{ session('message') }}</p>
    </div>
  @endif

  @yield('content')
</main>
<footer class="bg-red-600 h-10">
  <h1 class="text-center text-white">Footer</h1>
</footer>

</body>
</html>