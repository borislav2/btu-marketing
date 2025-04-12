{{-- filepath: c:\xampp\htdocs\btu-marketing\resources\views\livewire\navigation-dropdown.blade.php --}}
<div class="relative">
    <button class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800 transition-colors">
        <i class="fas fa-bars"></i> Меню
    </button>
    <div class="absolute bg-white shadow-lg rounded-lg mt-2 w-48 z-10">
        <ul class="py-2">
            @foreach ($links as $link)
                <li>
                    <a href="{{ route($link['route']) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 flex items-center space-x-2">
                        <i class="{{ $link['icon'] }}"></i>
                        <span>{{ $link['label'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>