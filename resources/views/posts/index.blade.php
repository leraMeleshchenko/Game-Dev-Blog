<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts overzicht') }}
        </h2>
    </x-slot>

@if(session('success'))
{{session('success')}} <br> <br>
@endif

<div class="max-w-7xl mx-auto bg-gray-800 rounded-2xl p-10 mt-10">
<div class="flex justify-end mb-10">
  <a href="{{ route('posts.create') }}">
    <button class="px-6 py-3 bg-orange-700 text-white font-semibold rounded-xl hover:bg-orange-800 transition duration-300">
      Aanmaken
    </button>
  </a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 ">
  @foreach($posts as $post)
  <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col justify-between h-full">
  <img src="{{ asset('storage/' . $post->image ) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">

  <div class="p-5 flex flex-col flex-grow">
    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $post->title }}</h3>
    <p class="text-gray-900 mb-4 flex-grow">{{ $post->body }}</p>

    <div class="flex justify-between items-center mt-auto mb-2">
      <a href="{{ route('posts.edit', $post->id) }}" class="px-6 py-3 bg-gray-600 text-white font-semibold rounded-xl hover:bg-gray-800 transition duration-300">Bewerken</a>

      <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <button class="px-6 py-3 bg-orange-600 text-white font-semibold rounded-xl hover:bg-orange-800 transition duration-300">Verwijderen</button>
      </form>
    </div>
  </div>
</div>

  @endforeach
</div>

</div>
</x-app-layout>
