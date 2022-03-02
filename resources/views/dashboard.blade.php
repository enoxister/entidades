<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Modificar el atributo link cuando sea definido --}}

    <div class="flex items-center justify-center" style="padding-top: 0.5em;">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
            <x-ficha titulo="Gestión de entidades" link="entidades/entidad" imagen='img/entidades.jpg' />
        </div>
    </div>
</x-app-layout>




