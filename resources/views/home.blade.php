<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        @include('layouts.header')
        <div class="bg-gray-900 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">From the blog</h2>
      <p class="mt-2 text-lg/8 text-gray-600">Learn how to bring light back to the dark forest with our tips.</p>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    @foreach($posts as $post)
      <article class="flex max-w-xl flex-col items-start justify-between bg-orange-700 p-10 rounded-2xl">
      <img class="w-full h-48 object-cover rounded-md" src="{{ asset('storage/' . $post->image )}}" alt="">
        <div class="group relative">
          <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-white">
            <a href="#">
              <span class="absolute inset-0"></span>
              {{$post->title}}
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm/6 text-white">{{$post->body}}</p>
        </div>
      </article>

      @endforeach
    </div>
  </div>
</div>
        @include('layouts.footer')
    </body>

</html>
