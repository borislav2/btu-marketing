<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Катедра Маркетинг - БТУ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Основна навигация -->
    <nav class="bg-blue-900 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <!-- Лого на университета и катедрата -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/university_logo.png') }}" alt="University Logo" class="h-12 w-auto">
                    </a>
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/department_logo.png') }}" alt="Department Logo" class="h-12 w-auto">
                        <span class="font-bold text-xl ml-3">Катедра Маркетинг</span>
                    </a>
                </div>
                <!-- Навигационни връзки -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="hover:bg-blue-800 px-3 py-2 rounded">Начало</a>
                    <a href="{{ route('staff') }}" class="hover:bg-blue-800 px-3 py-2 rounded">
                        <i class="fas fa-users mr-1"></i> Академичен състав
                    </a>
                    <a href="{{ route('events.index') }}" class="hover:bg-blue-800 px-3 py-2 rounded">
                        <i class="fas fa-calendar-alt mr-1"></i> Събития
                    </a>
                    <a href="{{ route('resources.index') }}" class="hover:bg-blue-800 px-3 py-2 rounded">
                        <i class="fas fa-file-alt mr-1"></i> Материали
                    </a>
                    <a href="{{ route('news.index') }}" class="hover:bg-blue-800 px-3 py-2 rounded">
                        <i class="fas fa-newspaper mr-1"></i> Новини
                    </a>
                    @auth
                        @if(auth()->user()->isTeacher() || auth()->user()->isAdmin())
                            <a href="/admin" class="hover:bg-blue-800 px-3 py-2 rounded">
                                <i class="fas fa-user-shield mr-1"></i> Админ Панел
                            </a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="hover:bg-blue-800 px-3 py-2 rounded">
                                <i class="fas fa-sign-out-alt mr-1"></i> Изход
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="hover:bg-blue-800 px-3 py-2 rounded">
                            <i class="fas fa-sign-in-alt mr-1"></i> Вход
                        </a>
                    @endauth
                </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Основно съдържание -->
    <main class="max-w-7xl mx-auto py-6 px-4">
        @yield('content')
    </main>

    <!-- Футър -->
    <footer class="bg-blue-900 text-white mt-8 w-full">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-2">Контакти</h3>
                    <p class="text-sm">
                        <i class="fas fa-map-marker-alt mr-2"></i> гр. Бургас, ул. "Проф. Якимов" 1
                    </p>
                    <p class="text-sm">
                        <i class="fas fa-phone mr-2"></i> 0882 095 955
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2">Бързи връзки</h3>
                    <ul class="text-sm space-y-1">
                        <li><a href="{{ route('home') }}" class="hover:text-gray-300">За нас</a></li>
                        <li><a href="{{ route('events.index') }}" class="hover:text-gray-300">Събития</a></li>
                        <li><a href="{{ route('resources.index') }}" class="hover:text-gray-300">Материали</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2">Следвайте ни</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/btu.burgas" class="hover:text-gray-300"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="https://www.instagram.com/explore/locations/503321476/universitet-profd-r-asen-zlatarov/" class="hover:text-gray-300"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-4 border-t border-blue-800 text-center text-sm">
                <p>&copy; {{ date('Y') }} Катедра Маркетинг - БТУ "Проф. д-р Асен Златаров". Всички права запазени.</p>
            </div>
        </div>
    </footer>
</body>
</html>