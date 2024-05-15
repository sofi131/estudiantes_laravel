<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenido a la Academia Ceica') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p class="text-gray-700 dark:text-gray-300 text-lg">
                ¡Felicidades! Acabas de ingresar a la Academia CEICA, donde el aprendizaje no conoce límites. Aquí, te embarcarás en un viaje de conocimiento y descubrimiento. Ya seas principiante o experto, nuestros cursos te ayudarán a dominar tus habilidades y alcanzar tus metas.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>