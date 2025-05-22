<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{ config('app.name', 'Lichtbr') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net" />
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Tailwind via Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Navbar -->
  <header class="bg-gray-900 shadow-lg">
    <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <a href="/" class="text-2xl font-bold text-white hover:opacity-80 transition">Lichtbr</a>
      <div class="flex space-x-6">
        <a href="{{ route('about') }}" class="text-white hover:text-gray-200 transition">About</a>
        <a href="{{ route('login') }}" class="text-white hover:text-gray-200 transition">Login</a>
        <a href="{{ route('register') }}" class="text-white hover:text-gray-200 transition">Register</a>
      </div>
    </nav>
  </header>

  <!-- Main -->
  <main class="max-w-6xl mx-auto px-6 py-12">

    <!-- Intro -->
    <section class="mb-16">
      <h1 class="text-4xl font-extrabold text-orange-600 mb-4">Het Verloren Licht</h1>
      <p class="text-lg text-gray-300 max-w-3xl leading-relaxed">
        Een spel over een vosje dat het licht draagt door een donker bos waar de zon verdwenen is. 
        De missie is om het licht terug te brengen in het bos door magische stukjes van een ster te verzamelen voordat de schaduwen alles overnemen.
      </p>
    </section>

    <!-- Abilities -->
    <section class="mb-20">
      <h2 class="text-3xl font-semibold text-orange-600 mb-6 pb-2 w-fit">Wie is de speler?</h2>
      <p class="text-gray-300 mb-6 max-w-3xl">
        Je bestuurt een dapper vosje dat verschillende vaardigheden heeft om het donkere bos te verlichten en gevaren te overwinnen.
      </p>

      <h3 class="text-2xl font-semibold text-orange-600 mb-4">Abilities van het vosje</h3>
      <ul class="list-disc list-inside space-y-3 text-gray-200">
        <li><strong>Lopen / Rennen</strong>: Beweeg soepel door het bos.</li>
        <li><strong>Zachte sprong</strong>: Spring over boomwortels, stenen en obstakels.</li>
        <li><strong>Dubbele sprong</strong>: Ontgrendelbaar na het verzamelen van 3 sterren.</li>
        <li><strong>Lichtimpuls (Light Pulse)</strong>: Verjaagt schaduwen, onthult doorgangen en verlamt vijanden tijdelijk.</li>
        <li><strong>Sterrenzicht (Star Sight)</strong>: Toont kort de locatie van het dichtstbijzijnde sterfragment via een lichtpuls.</li>
      </ul>
    </section>

    <!-- Sprites -->
    <section>
      <h2 class="text-3xl font-semibold text-orange-600 mb-6 pb-2 w-fit">Sprites & Visuele Stijl</h2>
      <p class="text-gray-300 mb-8 max-w-3xl">
        Hieronder enkele voorbeeldsprites.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="bg-gray-800 p-6 rounded-lg flex flex-col items-center shadow-md hover:shadow-orange-600 transition">
          <img src="https://www.spriters-resource.com/resources/sheet_icons/262/265622.png?updated=1746420683" alt="Vosje" class="w-24 h-24 object-contain mb-3" />
          <p class="text-gray-200 text-center">Vosje</p>
        </div>
        <div class="bg-gray-800 p-6 rounded-lg flex flex-col items-center shadow-md hover:shadow-orange-600 transition">
          <img src="https://opengameart.org/sites/default/files/star_0.png" alt="Sterfragment" class="w-24 h-24 object-contain mb-3" />
          <p class="text-gray-200 text-center">Magische sterfragmenten</p>
        </div>
        <div class="bg-gray-800 p-6 rounded-lg flex flex-col items-center shadow-md hover:shadow-orange-600 transition">
          <img src="https://www.spriters-resource.com/resources/sheet_icons/246/249000.png?updated=1736653959" alt="Schaduw vijand" class="w-24 h-24 object-contain mb-3" />
          <p class="text-gray-200 text-center">Schaduw-vijand</p>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  @include('layouts.footer')

</body>
</html>
