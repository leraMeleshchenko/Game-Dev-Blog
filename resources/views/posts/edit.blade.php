<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Bewerken') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto my-10 bg-gray-800 rounded-2xl p-10">

<form action="{{ route('posts.update', $post->id) }}" method='post'  enctype="multipart/form-data">
    @csrf

    <div class="mb-5">
        <label for="title" class="block text-sm font-medium text-white">Titel</label>
        <input
            type="text"
            name="title"
            id="title"
            class="mt-1 block w-full rounded-xl border-0 py-2 px-3 text-gray-900 bg-gray-100 focus:ring-2 focus:ring-blue-500"
            value="{{$post->title}}"
        >
        @error('title')
    {{$message}}
    @enderror
    </div>

    <div class="mb-5">
        <label for="body" class="block text-sm font-medium text-white">Beschrijving</label>
        <textarea
            name="body"
            id="body"
            rows="5"
            class="mt-1 block w-full rounded-xl border-0 py-2 px-3 text-gray-900 bg-gray-100 focus:ring-2 focus:ring-blue-500"
            placeholder="Vertel hier iets..."
        > {{$post->body}}</textarea>
        @error('body')
    {{$message}}
    @enderror
    </div>

    <div class="mb-5">
        <label for="image" class="block text-sm font-medium text-white">Afbeelding uploaden</label>
        <input
            type="file"
            name="image"
            id="image"
            class="mt-1 block w-full text-white file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700"
        >
        @error('image')
    {{$message}}
    @enderror
    </div>

    <div class="flex justify-end">
        <button
            type="submit"
            class="bg-blue-600 text-white py-2 px-6 rounded-xl hover:bg-blue-700 transition duration-300 font-semibold"
        >
        Bewerken
        </button>
    </div>
</form>

</div>


</x-app-layout>
