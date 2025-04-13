@extends('layouts.app')

@section('content')
<div class="bg-white shadow-lg rounded-lg p-6">
    <section id="staff" class="mb-8">
        <h2 class="text-3xl font-bold text-blue-900 mb-6 border-b-2 border-yellow-400 pb-2">Академичен състав</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- 1. Христина Михалева --}}
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/hristina_mihaleva.png') }}" 
                     alt="доц. д-р Христина Михалева" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">доц. д-р Христина Михалева</h3>
                <p class="text-gray-600 italic mb-2">Ръководител катедра</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 212 ФОН</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 0882 095 955</p>
                    <p class="flex items-center justify-center">
                        <i class="fas fa-envelope w-5"></i>
                        <a href="mailto:hristinamichaleva@abv.bg" class="text-blue-600 hover:text-blue-800">
                            hristinamichaleva@abv.bg
                        </a>
                    </p>
                </div>
            </div>

            {{-- 2. Бояна Димитрова --}}
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/boyana_dimitrova.png') }}" 
                     alt="доц. д-р Бояна Димитрова" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">доц. д-р Бояна Димитрова</h3>
                <p class="text-gray-600 italic mb-2">Доцент</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 212 ФОН</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 0887 279 888</p>
                </div>
            </div>

            {{-- 3. Николай Милев --}}
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/nikolay_milev.png') }}" 
                     alt="доц. д-р Николай Милев" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">доц. д-р Николай Милев</h3>
                <p class="text-gray-600 italic mb-2">Доцент</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 212 ФОН</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 0889 240 009</p>
                    <p class="flex items-center justify-center">
                        <i class="fas fa-envelope w-5"></i>
                        <a href="mailto:milevnikolay@hotmail.com" class="text-blue-600 hover:text-blue-800">
                            milevnikolay@hotmail.com
                        </a>
                    </p>
                </div>
            </div>

            {{-- 4. Ивайло Михайлов --}}
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/ivaylo_mihaylov.png') }}" 
                     alt="доц. д-р Ивайло Михайлов" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">доц. д-р Ивайло Михайлов</h3>
                <p class="text-gray-600 italic mb-2">Доцент</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 121А</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 0899 940 006</p>
                    <p class="flex items-center justify-center">
                        <i class="fas fa-envelope w-5"></i>
                        <a href="mailto:ivaylomihaylov1976@gmail.com" class="text-blue-600 hover:text-blue-800">
                            ivaylomihaylov1976@gmail.com
                        </a>
                    </p>
                </div>
            </div>

            {{-- 5. Христо Георгиев --}}
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/hristo_georgiev.png') }}" 
                     alt="гл. ас. д-р Христо Георгиев" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">гл. ас. д-р Христо Георгиев</h3>
                <p class="text-gray-600 italic mb-2">Главен асистент</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 232 ФОН</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 0886 888 981</p>
                    <p class="flex items-center justify-center">
                        <i class="fas fa-envelope w-5"></i>
                        <a href="mailto:hristo_g@abv.bg" class="text-blue-600 hover:text-blue-800">
                            hristo_g@abv.bg
                        </a>
                    </p>
                </div>
            </div>

            {{-- 6. Петко Ляпчев --}}
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/petko_lyapchev.png') }}" 
                     alt="гл. ас. д-р Петко Ляпчев" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">гл. ас. д-р Петко Ляпчев</h3>
                <p class="text-gray-600 italic mb-2">Главен асистент</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 117А</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 0899 940 143</p>
                    <p class="flex items-center justify-center">
                        <i class="fas fa-envelope w-5"></i>
                        <a href="mailto:petkolqptchev@share.bg" class="text-blue-600 hover:text-blue-800">
                            petkolqptchev@share.bg
                        </a>
                    </p>
                </div>
            </div>

            {{-- 7. Румен Ангелов --}}
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/rumen_angelov.png') }}" 
                     alt="ст. ас. д-р Румен Ангелов" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">ст. ас. д-р Румен Ангелов</h3>
                <p class="text-gray-600 italic mb-2">Старши асистент</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 122А</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 0884 437 912</p>
                    <p class="flex items-center justify-center">
                        <i class="fas fa-envelope w-5"></i>
                        <a href="mailto:rumen8angelov@gmail.com" class="text-blue-600 hover:text-blue-800">
                            rumen8angelov@gmail.com
                        </a>
                    </p>
                </div>
            </div>

            {{-- 8. Светла Атанасова --}}
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/svetla_atanasova.png') }}" 
                     alt="ас. д-р Светла Атанасова" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">ас. д-р Светла Атанасова</h3>
                <p class="text-gray-600 italic mb-2">Асистент</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 232 ФОН</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 089 351 2726</p>
                    <p class="flex items-center justify-center">
                        <i class="fas fa-envelope w-5"></i>
                        <a href="mailto:sveta_n_atanasova@abv.bg" class="text-blue-600 hover:text-blue-800">
                            sveta_n_atanasova@abv.bg
                        </a>
                    </p>
                </div>
            </div>

            {{-- 9. Александър Ангелов --}}
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/alexandar_angelov.png') }}" 
                     alt="ас. д-р Александър Ангелов" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">ас. д-р Александър Ангелов</h3>
                <p class="text-gray-600 italic mb-2">Асистент</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 232 ФОН</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 0879 104 419</p>
                    <p class="flex items-center justify-center">
                        <i class="fas fa-envelope w-5"></i>
                        <a href="mailto:alexander.k.angelov95@gmail.com" class="text-blue-600 hover:text-blue-800">
                            alexander.k.angelov95@gmail.com
                        </a>
                    </p>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/staff/alexandar_angelov.png') }}" 
                     alt="ас. д-р Александър Ангелов" 
                     class="w-32 h-32 object-cover rounded-full mx-auto mb-4 border-2 border-blue-900">
                <h3 class="text-lg font-semibold text-blue-900">ас. д-р Александър Ангелов</h3>
                <p class="text-gray-600 italic mb-2">Асистент</p>
                <div class="text-sm text-gray-700 space-y-1">
                    <p class="flex items-center justify-center"><i class="fas fa-building w-5"></i> Кабинет: 232 ФОН</p>
                    <p class="flex items-center justify-center"><i class="fas fa-phone w-5"></i> 0879 104 419</p>
                    <p class="flex items-center justify-center">
                        <i class="fas fa-envelope w-5"></i>
                        <a href="mailto:alexander.k.angelov95@gmail.com" class="text-blue-600 hover:text-blue-800">
                            alexander.k.angelov95@gmail.com
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection