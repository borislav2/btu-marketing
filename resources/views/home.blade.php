@extends('layouts.app')

@section('content')
<div class="bg-white shadow-lg rounded-lg p-4 sm:p-6">
    <!-- Welcome section -->
    <section id="welcome" class="mb-8 sm:mb-12 text-center">
        <div class="flex flex-col sm:flex-row justify-center items-center sm:space-x-6 mb-6">
            <img src="{{ asset('images/university_logo.png') }}" alt="Университетско лого" class="h-20 sm:h-24 w-auto mb-4 sm:mb-0">
            <div>
                <h1 class="text-2xl sm:text-4xl font-bold text-blue-900 mb-2 sm:mb-4">Добре дошли в</h1>
                <h2 class="text-xl sm:text-3xl font-bold text-blue-900 mb-2">БУРГАСКИ ДЪРЖАВЕН УНИВЕРСИТЕТ</h2>
                <h2 class="text-lg sm:text-2xl font-bold text-blue-800">„ПРОФ. Д-Р АСЕН ЗЛАТАРОВ"</h2>
            </div>
        </div>
        <div class="mt-8 bg-blue-50 p-6 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-blue-900 mb-4">Катедра Маркетинг</h3>
            <p class="text-gray-700 leading-relaxed">
                Добре дошли в катедра „Маркетинг" на Бургаски технологичен университет „Проф. д-р Асен Златаров". 
                Нашата мисия е да предоставим висококачествено образование и практически умения в областта на маркетинга, 
                които ще подготвят студентите за успешна професионална реализация.
            </p>
        </div>
    </section>

    <section id="about" class="mb-8">
        <h2 class="text-3xl font-bold text-blue-900 mb-6 border-b-2 border-yellow-400 pb-2">За катедрата</h2>
        <p class="mb-4 text-gray-700 leading-relaxed">Катедра <span class="bg-yellow-100 px-1">„Маркетинг"</span> е създадена с решение на Академичния съвет от 18.07.2024 г. на база на катедра „Маркетинг и Туризъм".</p>
        
        <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3">Основни цели за развитие:</h3>
        <ul class="list-disc pl-6 space-y-2 text-gray-700">
            <li>Приемственост по отношение на доказаните добри практики в катедрата</li>
            <li>Непрекъснато повишаване на квалификацията на членовете на академичния състав</li>
            <li>Утвърждаване развитието на научноизследователските постижения</li>
            <li>Атрактивност при реализацията на научни и образователни проекти</li>
            <li>Повишаване качеството на образованието и научната дейност</li>
            <li>Поддържане на силна връзка с практиката и бизнеса</li>
            <li>Значително присъствие в общественото и научното пространство</li>
        </ul>
    </section>

    <section id="leadership" class="mb-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-900 mb-4 sm:mb-6 border-b-2 border-yellow-400 pb-2">Ръководство</h2>
        <div class="bg-gray-50 rounded-lg p-4 sm:p-6 flex flex-col md:flex-row gap-6 items-center md:items-start shadow-md">
            <img src="{{ asset('images/staff/hristina_mihaleva.png') }}" 
                 alt="доц. д-р Христина Михалева" 
                 class="w-36 h-36 sm:w-48 sm:h-48 object-cover rounded-full border-4 border-blue-900">
            <div>
                <h3 class="text-xl sm:text-2xl font-bold text-blue-900 mb-2">доц. д-р Христина Михалева</h3>
                <p class="text-lg font-semibold text-blue-800 mb-4">Ръководител катедра</p>
                <div class="space-y-2 text-gray-700">
                    <p class="flex items-center">
                        <i class="fas fa-phone-alt w-6"></i> 0882 095 955
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-building w-6"></i> Кабинет 212 ФОН
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-envelope w-6"></i>
                        <a href="mailto:hristinamichaleva@abv.bg" class="text-blue-600 hover:text-blue-800">
                            hristinamichaleva@abv.bg
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="mb-8">
        <h2 class="text-3xl font-bold text-blue-900 mb-6 border-b-2 border-yellow-400 pb-2">Обучение</h2>
        <div class="bg-gray-50 rounded-lg p-6 shadow-md">
            <h3 class="text-xl font-semibold text-blue-800 mb-4">Специалност „МАРКЕТИНГ"</h3>
            <p class="mb-4 text-gray-700 leading-relaxed">Специалността е акредитирана в професионално направление 3.8 „Икономика" за образователно-квалификационни степени „Бакалавър" и „Магистър".</p>
            
            <h4 class="text-lg font-semibold text-blue-800 mt-6 mb-3">Професионална реализация:</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>маркетинг мениджър</li>
                <li>мениджър проучване на пазари</li>
                <li>мениджър продажби</li>
                <li>ръководител отдел маркетинг</li>
                <li>специалист, маркетинг и реклама</li>
                <li>консултант/експерт по маркетинг</li>
            </ul>
        </div>
    </section>

    <section id="contact" class="mb-8">
        <h2 class="text-3xl font-bold text-blue-900 mb-6 border-b-2 border-yellow-400 pb-2">Контакти</h2>
        <div class="bg-gray-50 rounded-lg p-6 shadow-md">
            <div class="space-y-4 text-gray-700">
                <p class="flex items-center">
                    <i class="fas fa-map-marker-alt w-6 text-blue-900"></i>
                    гр. Бургас, ж.к. Славейков, Факултет по обществени науки
                </p>
                <p class="flex items-center">
                    <i class="fas fa-phone-alt w-6 text-blue-900"></i>
                    0882 095 955
                </p>
                <p class="flex items-center">
                    <i class="fas fa-envelope w-6 text-blue-900"></i>
                    <a href="mailto:marketing@btu.bg" class="text-blue-600 hover:text-blue-800">
                        marketing@btu.bg
                    </a>
                </p>
            </div>
        </div>
    </section>
</div>
@endsection