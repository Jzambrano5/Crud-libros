<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Libs') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="w-full">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Libs') }}</h1>
                        <p class="mt-2 text-sm text-gray-700">A list of all the {{ __('Libs') }}.</p>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        <a type="button" wire:navigate href="{{ route('libs.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new</a>
                    </div>
                </div>
                <form wire:submit.prevent="search">
                    <div class="flex items-center mb-4">
                        <input type="text" wire:model="searchCedula" class="w-full py-2 pl-10 text-sm text-gray-700" placeholder="Buscar por autor">
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded">Buscar</button>
                    </div>
                </form>

                <div class="flow-root">
                    <div class="mt-8 overflow-x-auto">
                        <div class="inline-block min-w-full py-2 align-middle">
                            <table class="w-full divide-y divide-gray-300">
                                <thead>
                                <tr>
                                    <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>
                                    
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Titulo</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Genero</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Year Publicacion</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Id Autor</th>

                                    <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($libs as $lib)
                                    <tr class="even:bg-gray-50" wire:key="{{ $lib->id }}">
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ ++$i }}</td>
                                        
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lib->titulo }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lib->genero }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lib->year_publicacion }}</td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $lib->id_autor }}</td>

                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                            <a wire:navigate href="{{ route('libs.show', $lib->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Show') }}</a>
                                            <a wire:navigate href="{{ route('libs.edit', $lib->id) }}" class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Edit') }}</a>
                                            <button
                                                class="text-red-600 font-bold hover:text-red-900"
                                                type="button"
                                                wire:click="delete({{ $lib->id }})"
                                                wire:confirm="Are you sure you want to delete?"
                                            >
                                                {{ __('Delete') }}
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="mt-4 px-4">
                                {!! $libs->withQueryString()->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>