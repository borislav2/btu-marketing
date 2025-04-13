.blade.php

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Катедра Маркетинг - БТУ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Mobile menu toggle */
        .mobile-menu-closed {
            display: none;
        }
        @media (min-width: 768px) {
            .mobile-menu-button {
                display: none;
            }
            .mobile-menu {
                display: flex !important;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Main navigation -->
    <nav class="bg-blue-900 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <!-- University and department logos -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/university_logo.png') }}" alt="University Logo" class="h-10 w-auto">
                    </a>
                    <a href="{{ route('home') }}" class="flex items-center ml-2">
                        <img src="{{ asset('images/department_logo.png') }}" alt="Department Logo" class="h-10 w-auto hidden sm:block">
                        <span class="font-bold text-base sm:text-xl ml-1 sm:ml-3">Катедра Маркетинг</span>
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <button class="mobile-menu-button p-2 rounded-md focus:outline-none md:hidden" onclick="toggleMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                
                <!-- Navigation links - hidden on mobile until toggled -->
                <div class="mobile-menu mobile-menu-closed md:flex items-center space-x-1 md:space-x-4">
                    <a href="{{ route('home') }}" class="block py-2 px-3 hover:bg-blue-800 rounded">
                        <i class="fas fa-home mr-1 md:mr-2"></i>
                        <span>Начало</span>
                    </a>
                    <a href="{{ route('staff') }}" class="block py-2 px-3 hover:bg-blue-800 rounded">
                        <i class="fas fa-users mr-1 md:mr-2"></i>
                        <span>Академичен състав</span>
                    </a>
                    <a href="{{ route('events.index') }}" class="block py-2 px-3 hover:bg-blue-800 rounded">
                        <i class="fas fa-calendar-alt mr-1 md:mr-2"></i>
                        <span>Събития</span>
                    </a>
                    <a href="{{ route('resources.index') }}" class="block py-2 px-3 hover:bg-blue-800 rounded">
                        <i class="fas fa-file-alt mr-1 md:mr-2"></i>
                        <span>Материали</span>
                    </a>
                    <a href="{{ route('news.index') }}" class="block py-2 px-3 hover:bg-blue-800 rounded">
                        <i class="fas fa-newspaper mr-1 md:mr-2"></i>
                        <span>Новини</span>
                    </a>
                    @auth
                        @if(auth()->user()->isTeacher() || auth()->user()->isAdmin())
                            <a href="/admin" class="block py-2 px-3 hover:bg-blue-800 rounded">
                                <i class="fas fa-user-shield mr-1 md:mr-2"></i>
                                <span>Админ Панел</span>
                            </a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="block w-full text-left py-2 px-3 hover:bg-blue-800 rounded">
                                <i class="fas fa-sign-out-alt mr-1 md:mr-2"></i>
                                <span>Изход</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="block py-2 px-3 hover:bg-blue-800 rounded">
                            <i class="fas fa-sign-in-alt mr-1 md:mr-2"></i>
                            <span>Вход</span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-4 sm:py-6 px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white mt-8 w-full">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
                <p>&copy; {{ date('Y') }} Катедра Маркетинг - БДУ "Проф. д-р Асен Златаров". Всички права запазени.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() {