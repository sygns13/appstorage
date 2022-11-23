<div>
    {{-- <h1>Hola Mundo {{-- {{$titulo}}
        {{$name}}
    </h1> --}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- {{ $search }} --}}

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


        <x-table>
            <div class="px-6 py-4 flex items-center">
                {{-- <input type="text" wire:model="search"> --}}
                <x-jet-input type="text" wire:model="search" class="flex-1 mr-4" placeholder="Escriba que quiere buscar" />
                @livewire('create-post')
            </div>

            @if ($posts->count() > 0)
                <table style="width: 100%;">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="cursor-pointer px-6 py-2 text-xs text-gray-500" wire:click="order('id')">
                                ID

                                @if ($sort == 'id')

                                    @if ($direction == 'asc')
                                        <span><i class="fas fa-sort-alpha-up-alt float-right mt-1"></i> </span>
                                    @else
                                        <span><i class="fas fa-sort-alpha-down-alt float-right mt-1"></i> </span>
                                    @endif
                                @else
                                    <span><i class="fas fa-sort float-right mt-1"></i> </span>
                                @endif
                            </th>
                            <th class="cursor-pointer px-6 py-2 text-xs text-gray-500" wire:click="order('title')">
                                Title

                                @if ($sort == 'title')

                                    @if ($direction == 'asc')
                                        <span><i class="fas fa-sort-alpha-up-alt float-right mt-1"></i> </span>
                                    @else
                                        <span><i class="fas fa-sort-alpha-down-alt float-right mt-1"></i> </span>
                                    @endif
                                @else
                                    <span><i class="fas fa-sort float-right mt-1"></i> </span>
                                @endif
                            </th>
                            <th class="cursor-pointer px-6 py-2 text-xs text-gray-500" wire:click="order('content')">
                                Content

                                @if ($sort == 'content')

                                    @if ($direction == 'asc')
                                        <span><i class="fas fa-sort-alpha-up-alt float-right mt-1"></i> </span>
                                    @else
                                        <span><i class="fas fa-sort-alpha-down-alt float-right mt-1"></i> </span>
                                    @endif
                                @else
                                    <span><i class="fas fa-sort float-right mt-1"></i> </span>
                                @endif
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($posts as $post)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{ $post->id }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $post->title }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->content }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    Edit
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No existe ningún registro coincidente
                </div>
            @endif
        </x-table>
    </div>

    {{-- {{ $posts }} --}}
</div>


</div>
