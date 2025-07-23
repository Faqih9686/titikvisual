<section class="py-12 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-purple-700 mb-2">Apa Kata Klien Kami</h2>
    <p class="text-center text-gray-500 mb-10">Testimoni dari klien yang puas dengan layanan kami</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      @foreach($testimonis as $item)
        <div class="p-6 border rounded-lg shadow-md hover:shadow-lg transition duration-300 bg-white">
          <div class="flex items-center mb-4 text-yellow-400">
            <span class="text-xl">
              {!! str_repeat('★', $item->rating ?? 5) !!}
            </span>
          </div>
          <p class="text-gray-700 mb-6">
            "{{ $item->message }}"
          </p>
          <div class="flex items-center gap-4">
            <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}" class="w-12 h-12 rounded-full border" />
            <div>
              <p class="font-semibold text-black">{{ $item->name }}</p>
              <p class="text-sm text-gray-500">{{ $item->position }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
