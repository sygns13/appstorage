<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- //Llamar un componente livewire --}}

            @livewire('show-posts', ['title'=> 'Este es un titulo de prueba'])
            {{-- @livewire('nav.show-posts') --}}

        </div>
    </div>
</x-app-layout>
