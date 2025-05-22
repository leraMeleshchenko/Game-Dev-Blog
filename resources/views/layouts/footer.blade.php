<!-- Footer -->
<footer class="bg-gray-900 text-white py-10 shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row justify-between items-center">
      <div class="mb-4 md:mb-0 text-center md:text-left">
        <h2 class="text-lg font-semibold">lerrvwss © 2025</h2>
        <p class="text-sm text-gray-400">Brengt licht terug in het bos 🌙</p>
      </div>
      <!-- Button -->
      <button onclick="document.getElementById('contactModal').classList.remove('hidden')" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-xl transition duration-300">
        Stuur een bericht naar de admin
      </button>
    </div>
    <div class="mt-6 text-center text-xs text-gray-500">
      Gemaakt met ❤️ voor een magisch avontuur
    </div>
  </div>
</footer>

<!-- Modal -->
<div id="contactModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white text-black p-6 rounded-xl w-full max-w-md shadow-lg">
    <h3 class="text-xl font-semibold mb-4">Contacteer de admin</h3>
    <form method="POST" action="{{ route('message.store') }}">
      @csrf
      <label class="block text-sm font-medium mb-1">E-mailadres</label>
      <input type="email" name="email"  class="w-full p-2 mb-3 border rounded-xl">

      <label class="block text-sm font-medium mb-1">Bericht</label>
      <textarea name="body" rows="4"  class="w-full p-2 border rounded-xl mb-4"></textarea>

      <div class="flex justify-end gap-2">
        <button type="button" onclick="document.getElementById('contactModal').classList.add('hidden')" class="px-4 py-2 bg-gray-300 rounded-xl hover:bg-gray-400">Annuleren</button>
        <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded-xl hover:bg-orange-700">Versturen</button>
      </div>
    </form>
  </div>
</div>
