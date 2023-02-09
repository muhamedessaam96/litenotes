@if (session('success'))
    <div class="mb-4 px-4 py-2 bg-green-200 border border-green tesxt-green-700 rounded-md" >
    {{ $slot }}
    </div>
@endif
