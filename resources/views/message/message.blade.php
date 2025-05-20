<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>

@if(session('success'))
{{session('success')}} <br> <br>
@endif

<div class="max-w-7xl mx-auto bg-gray-800 rounded-2xl p-10 mt-10">
<div class="flex justify-end mb-10">
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 ">
  @foreach($messages as $message)
  <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col justify-between h-full">


  <div class="p-5 flex flex-col flex-grow">
    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $message->email }}</h3>
    <p class="text-gray-900 mb-4 flex-grow">{{ $message->body }}</p>
  </div>
</div>

  @endforeach
</div>

</div>
</x-app-layout>
