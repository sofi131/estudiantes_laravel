<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenido a la Academia Ceica') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-7">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Jumbotron Azul con texto CEICA -->
                <div class="bg-blue-500 text-white text-center py-5 mb-5 rounded-lg">
                <h3 class="text-6xl font-semibold mb-2">CEICA</h3>
                    <p class="text-gray-100 text-lg">
                        ¡Felicidades! Acabas de ingresar a la Academia CEICA, donde el aprendizaje no conoce límites. Aquí, te embarcarás en un viaje de conocimiento y descubrimiento. Ya seas principiante o experto, nuestros cursos te ayudarán a dominar tus habilidades y alcanzar tus metas.
                    </p>
                </div>
                <div class="mt-8">
                    <h3 class="text-lg font-semibold mb-4">Nuestros cursos destacados:</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Curso de Programación Web -->
                        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-lg sm:rounded-lg">
                            <div class="px-6 py-4">
                                <h4 class="text-lg font-semibold mb-2">Curso de Programación Web</h4>
                                <p class="text-gray-700 dark:text-gray-300">Aprende a crear sitios web modernos con las tecnologías más populares.</p>
                            </div>
                            <div class="px-6 py-4 bg-gray-100 dark:bg-gray-800">
                                <span class="text-gray-600 dark:text-gray-400">Duración: 6 semanas</span>
                            </div>
                            <div class="px-6 py-4">
                            <a href="" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">¡Inscríbete ahora!</a>
                            </div>
                        </div>
                        <!-- Curso de Desarrollo de Aplicaciones Móviles -->
                        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-lg sm:rounded-lg">
                            <div class="px-6 py-4">
                                <h4 class="text-lg font-semibold mb-2">Curso de Desarrollo de Aplicaciones Móviles</h4>
                                <p class="text-gray-700 dark:text-gray-300">Domina el desarrollo de aplicaciones para dispositivos móviles iOS y Android.</p>
                            </div>
                            <div class="px-6 py-4 bg-gray-100 dark:bg-gray-800">
                                <span class="text-gray-600 dark:text-gray-400">Duración: 8 semanas</span>
                            </div>
                            <div class="px-6 py-4">
                            <a href="" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">¡Inscríbete ahora!</a>
                            </div>
                        </div>
                        <!-- Curso de Ciencia de Datos -->
                        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-lg sm:rounded-lg">
                            <div class="px-6 py-4">
                                <h4 class="text-lg font-semibold mb-2">Curso de Ciencia de Datos</h4>
                                <p class="text-gray-700 dark:text-gray-300">Descubre el mundo de la ciencia de datos y aprende a sacar insights valiosos de los datos.</p>
                            </div>
                            <div class="px-6 py-4 bg-gray-100 dark:bg-gray-800">
                                <span class="text-gray-600 dark:text-gray-400">Duración: 10 semanas</span>
                            </div>
                            <div class="px-6 py-4">
                            <a href="" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">¡Inscríbete ahora!</a>
                            </div>
                        </div>
                        <!-- Curso 1 -->
                        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-lg sm:rounded-lg">
                            <div class="px-6 py-4">
                                <h4 class="text-lg font-semibold mb-2">Curso de Python para principiantes</h4>
                                <p class="text-gray-700 dark:text-gray-300">Inicia tu viaje en la programación con Python, el lenguaje más versátil y amigable para principiantes.</p>
                            </div>
                            <div class="px-6 py-4 bg-gray-100 dark:bg-gray-800">
                                <span class="text-gray-600 dark:text-gray-400">Duración: 4 semanas</span>
                            </div>
                            <div class="px-6 py-4">
                            <a href="" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">¡Inscríbete ahora!</a>
                            </div>
                        </div>
                        <!-- Curso 2 -->
                        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-lg sm:rounded-lg">
                            <div class="px-6 py-4">
                                <h4 class="text-lg font-semibold mb-2">Curso de Desarrollo Web Full Stack</h4>
                                <p class="text-gray-700 dark:text-gray-300">Conviértete en un desarrollador web completo dominando tanto el frontend como el backend.</p>
                            </div>
                            <div class="px-6 py-4 bg-gray-100 dark:bg-gray-800">
                                <span class="text-gray-600 dark:text-gray-400">Duración: 12 semanas</span>
                            </div>
                            <div class="px-6 py-4">
                            <a href="" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">¡Inscríbete ahora!</a>
                            </div>
                        </div>
                        <!-- Curso 3 -->
                        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-lg sm:rounded-lg">
                            <div class="px-6 py-4">
                                <h4 class="text-lg font-semibold mb-2">Curso de Introducción a la Inteligencia Artificial</h4>
                                <p class="text-gray-700 dark:text-gray-300">Explora los fundamentos de la inteligencia artificial y comienza a construir tus propios modelos de aprendizaje automático.</p>
                            </div>
                            <div class="px-6 py-4 bg-gray-100 dark:bg-gray-800">
                                <span class="text-gray-600 dark:text-gray-400">Duración: 8 semanas</span>
                            </div>
                            <div class="px-6 py-4">
                            <a href="" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">¡Inscríbete ahora!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
