<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Js -->
    
</head>
<body style="font-family:'Graphik', sans-serif">
    <div id="app" class="relative bg-white overflow-hidden">
        <section>
            <div class="relative z-10 pb-16 w-full bg-cover md:pb-20 lg:w-full lg:pb-32 xl:pb-32" style="background-image: url({{asset('img/back_header2.png')}})">
                <div class="relative py-5 bg-transparent px-2">
                    <nav class="relative flex items-center justify-between lg:justify-around px-4">
                        <div class="flex items-center flex-grow flex-shrink-0 ">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="#" aria-label="Home">
                                    <img class="h-8 w-auto sm:h-10" src="{{asset('img/logo-soho.png')}}" alt="Logo">
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" id="main-menu" aria-label="Main menu" aria-haspopup="true">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <a href="#" class="item-nav-bar">inicio</a>
                            <a href="#nosotros" class="ml-8 item-nav-bar">nosotros</a>
                            <a href="#servicios" class="ml-8 item-nav-bar">servicios</a>
                            <a href="#proyectos" class="ml-8 item-nav-bar">casos de éxito</a>
                            <a href="#equipo" class="ml-8 item-nav-bar">únete al equipo</a>
                            <a href="#contacto" class="ml-8 item-nav-bar">contacto</a> 
                        </div>
                    </nav>
                </div>
        
                <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-28 lg:px-8 xl:mt-40 py-10">
                    <div class="text-center">
                        <h2 class="text-2xl md:text-3xl tracking-tight leading-10 text-white">
                            Nos especializamos en
                        </h2>
                        <p class="mt-3 text-3xl md:text-4xl font-bold text-green-demo">
                            interfaces digitales que los usuarios aman
                        </p>
                        <div class="mt-5 flex justify-center">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 btn-success md:py-4 md:px-10">
                                    HABLEMOS DE TU PROYECTO
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </section>
        <section class="md:flex bg-black items-center justify-center py-6 px-4">
            <div class="md:flex">
                <div class="flex justify-center">
                    <svg viewBox="0 0 22 22" stroke="currentColor" class="text-red-500 h-8 w-8 fill-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                </div>
                <div class="text-xs md:text-sm justify-center text-center text-white mt-4 md:ml-6 md:mt-1">
                    <div class="font-light">
                        <span class="font-medium">EN DIRECTO -</span> SOHO está presente en el <span class="font-medium">DIGITALBANK MONTEVIDEO. </span> "Experiencia de usuario" por Alvaro Añón (SEO de Soho)
                    </div>
                </div>
            </div>
            <div class="md:flex">
                <div class="flex-shrink-0 justify-center mt-4 md:mt-0 md:ml-6">
                    <div class="rounded-md shadow">
                        <a href="#" class="w-full flex items-center justify-center px-6 py-1 btn-success">
                            VER EVENTO
                        </a>
                    </div>
                </div>
                <div class="flex-shrink-0 justify-center mt-4 md:mt-0 md:ml-6">
                    <div class="rounded-md shadow">
                        <a href="#" class="w-full flex items-center justify-center px-6 py-1 border border-transparent text-xs leading-6 rounded-md text-green-demo border-green-demo hover:bg-green-demo hover:text-white hover:border-transparent focus:outline-none focus:border-green-500 focus:shadow-outline-green transition duration-150 ease-in-out">
                            PRÓXIMOS EVENTOS
                        </a>
                    </div>
                </div>
            </div>
            
        </section>
        <section id="nosotros" class="bg-grey-demo w-full content-center">
            <div class="text-center text-white text-2xl md:text-3xl px-2 pt-10 md:pt-16">17 años de experiencia en pos de tu proyecto</div>
            <div class="text-center"><span class="border-green-demo border-t-2 text-transparent">---------</span></div>
            
            <div class="text-justify lg:text-center text-gray-500 pt-4 px-4 md:px-28 lg:px-48">
                Especializados desde 1996 en usabilidad, experiencia de usuario (UX) y diseño de experiencias de proyectos digitales. Aportamos estrategia e innovación centrada en el usuario y los objetivos de negocio de tu proyecto. Cotrabajando mejoraremos tu tasa de conversión, KPI's, ROI y los resultados de tu actual publicidad PPC (Pay per click).
            </div>
            <div id="servicios" class="grid grid-cols-1 md:grid-cols-3 text-center pt-4 md:pt-16">
                <div class="bg-gray-700">
                    <div class="px-16 py-20">
                        <div class="text-green-demo text-xl">Estrategia, usabilidad & ux</div>
                        <div class="text-gray-500 text-sm px-8 mt-2">Te ofrecemos excelente usabilidad y experiencia del usuario en tu proyecto, junto a una visión innovadora</div>
                    </div>
                </div>
                <div class="bg-grey-demo-1c">
                    <div class="px-16 py-20">
                        <div class="text-green-demo text-xl">Mejoramos la experiencia</div>
                        <div class="text-gray-500 text-sm px-8 mt-2">Tangibilizamos tu proyecto digital a través de un diseño centrado en el usuario y en técnicas avanzadas</div>
                    </div>
                </div>
                <div class="bg-gray-800">
                    <div class="px-16 py-20">
                        <div class="text-green-demo text-xl">Medición continua de objetivos</div>
                        <div class="text-gray-500 text-sm px-8 mt-2">Implementación, testing con usuarios y medición continua son necesarias para garantizar el éxito de tu proyecto</div>
                    </div>
                </div>
            </div>
            <div id="proyectos" class="text-center text-white text-2xl md:text-3xl px-2 pt-10 md:pt-28">Proyectos destacados</div>
            <div class="text-center"><span class="border-green-demo border-t-2 text-transparent">---------</span></div>
            <div class="text-justify lg:text-center text-gray-500 pt-4 pb-10 px-4 md:px-28 lg:px-48">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis quam non nisl rutrum, scelerisque sodales est finibus. Vivamus rutrum, enim ac scelerisque eleifend, ex neque accumsan turpis, vel fermentum orci tellus placerat ex.
            </div>
        </section>
        
        <section>
            <proyectos-destacados></proyectos-destacados>
        </section>    

        <section class="bg-grey-demo w-full content-center pb-10">
            <div class="text-center text-white text-2xl md:text-3xl px-2 pt-10 md:pt-16">Lo que dicen nuestros clientes</div>
            <div class="text-center"><span class="border-green-demo border-t-2 text-transparent">---------</span></div>
            <div id="equipo" class="grid grid-cols-1 md:grid-cols-3 text-center pt-4 md:pt-16">
                <div class="h-96">
                    <div class="px-8 pt-40 md:pt-24 lg:pt-40 h-full bg-cover bg-center" style="background-image: url({{asset('img/client1.png')}}">
                        <div class="text-gray-300 text-xl font-light mb-6">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                        <div class="pt-24 md:pt-32 lg:pt-24">
                            <div class="text-white font-semibold text-xs px-8">Cristobal Fernandez - CEO Copec</div>
                        </div>
                    </div>
                </div>
                <div class="h-96">
                    <div class="px-8 pt-40 md:pt-24 lg:pt-40 h-full bg-cover bg-center" style="background-image: url({{asset('img/client2.png')}}">
                        <div class="text-gray-300 text-xl font-light mb-6">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                        <div class="pt-10 md:pt-10 lg:pt-16">
                            <div class="text-white font-semibold text-xs px-8">Maria Paz Segers - Lead Digital BBVA</div>
                        </div>
                    </div>
                </div>
                <div class="h-96">
                    <div class="px-8 pt-40 md:pt-24 lg:pt-40 h-full bg-cover bg-center" style="background-image: url({{asset('img/client3.png')}}">
                        <div class="text-gray-300 text-xl font-light mb-6">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. t, consectetur adipiscing elit t, consectetur adipiscing elit"</div>
                        <div class="pt-10 md:pt-10 lg:pt-16">
                            <div class="text-white font-semibold text-xs px-8">Renato Bascuñán - Lead Digital Chilena</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex justify-center">
                <div class="rounded-md shadow">
                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 btn-success md:py-4 md:px-10">
                        HABLEMOS DE TU PROYECTO
                    </a>
                </div>
            </div>
        </section>
        <footer id="contacto" class="lg:flex bg-black items-center py-4">
            <div class="lg:flex flex-1 px-2">
                <div class="flex justify-center text-white text-sm">
                    <span class="font-semibold">&copy; 2017 </span> <span class="ml-2 font-hairline"> SOHO internet + humana</span>
                </div>
            </div>
            <div class="lg:flex flex-1 px-2">
                <div class="flex justify-center text-center text-green-demo text-sm">
                    <span class="text-center lg:ml-16">Visítanos</span>
                    <span class="text-center ml-4 lg:ml-16">Escríbenos</span>
                    <span class="text-center ml-4 lg:ml-16">Llámanos</span>
                </div>
            </div>
            <div class="lg:flex flex-1 md:px-2">
                <div class="flex justify-center md:ml-32 text-white text-sm">
                    <span class="text-center text-blue-800">Facebook</span>
                    <span class="text-center ml-4 lg:ml-8 text-blue-300">Twitter</span>
                    <span class="text-center ml-4 lg:ml-8 text-blue-500">Linkedin</span>
                    <span class="text-center ml-4 lg:ml-8 text-red-400">Youtube</span>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
