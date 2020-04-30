<div class="container mx-auto">
    <div class="my-4">
        <h1 class="font-bold ">
            <span class="uppercase text-indigo-500">liste des questions</span>
        </h1>
    </div>
    <div class="flex flex-wrap -mx-4 pb-6">
        <div class="px-4 w-full">
            <div class="flex flex-wrap -mx-4">
                <div class="px-4 w-full lg:w-1/2">
                    <a href="{{route('question.create')}}" class="bg-indigo-400 px-4 py-2 text-white hover:bg-indigo-600 rounded">Nouvelle question</a>
                </div>
                <div class="px-4 w-full lg:w-1/2">
                    <input type="text" wire:model="search" class="w-full">
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap -mx-4">
        <div class="px-4 w-full">
            <div class="shadow-xl border border-gray-300 overflow-x-auto rounded-lg min-w-full align-middle inline-block">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                <a wire:click.prevent="sortBy('libelle')" href="#" role="button">Libelle</a>
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                <a wire:click.prevent="sortBy('ordre')" href="#" role="button">ordre</a>
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">type question</th>
                            <th class="px-6 py-3 tracking-wider leading-4"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($questions as $question)
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-200 text-gray-700 whitespace-no-wrap">{{$question->libelle}}</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-gray-700 whitespace-no-wrap">{{$question->ordre}}</td>
                                <td class="px-6 py-4 border-b border-gray-200 text-gray-700 whitespace-no-wrap">{{$question->type_question}}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="flex flex-wrap -mx-4">
                                        <a href="{{route('question.edit', $question->id)}}" class="bg-indigo-400 px-4 py-2 text-white hover:bg-indigo-600 rounded mx-1">Editer</a>
                                        <button wire:click="supprimer({{$question->id}})" class="bg-red-400 px-4 py-2 text-white hover:bg-red-600 rounded mx-1">Supprimer</button>
                                    </div>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="flex px-4 py-6">
                <div class=" w-full">
                    <select wire:model="perPage" class="w-full sm:w-1/6">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select>
                </div>
                <div class="w-full mx-auto">
                    {{$questions->links()}}
                    <div>
                        Afficher {{$questions->firstItem()}} à {{$questions->lastItem()}} resultats sur  {{$questions->total()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
