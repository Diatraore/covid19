<div class="container mx-auto">
    <div class="my-4">
        <h1 class="font-bold">
            <a href="{{route('question.index')}}" class="uppercase text-indigo-400 hover:text-indigo-600 cursor-pointer">Questions</a>
            <span class="font-medium text-red-400">/</span>
            <span class="uppercase">modification</span>
        </h1>
    </div>
    <form wire:submit.prevent="save">
        <div class="flex flex-wrap -mx-4">
            <div class="px-4 w-full">
                <div class="shadow rounded border border-gray-300 p-4">
                    <div class="flex-wrap flex -mx-4 pb-6">
                        <div class="px-4 w-full sm:w-1/6">
                            <label for="libelle" class="font-medium capitalize text-base text-gray-500">libellé</label>
                        </div>
                        <div class="px-4 w-full sm:w-5/6">
                            <input id="libelle" wire:model="libelle" type="text" class="w-full sm:w-3/5 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500">
                        </div>
                    </div>
                    <div class="flex-wrap flex -mx-4 pb-6">
                        <div class="px-4 w-full sm:w-1/6">
                            <label for="ordre" class="font-medium capitalize text-base text-gray-500">ordre</label>
                        </div>
                        <div class="px-4 w-full sm:w-5/6">
                            <input id="ordre" wire:model="ordre" type="text" class="w-full sm:w-3/5  bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500">
                        </div>
                    </div>
                    <div class="flex-wrap flex -mx-4 pb-6">
                        <div class="px-4 w-full sm:w-1/6">
                            <label for="type" class="font-medium capitalize text-base text-gray-500">Type question</label>
                        </div>
                        <div class="px-4 w-full sm:w-5/6">
                            <input id="type" wire:model="type_question" type="text" class="w-full sm:w-3/5  bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4">
                        <div class="px-4 sm:w-2/3 w-full flex mx-auto">
                            <button type="submit" class="bg-indigo-400 px-4 py-2 mx-2 rounded text-white">Enregistrer</button>
                            <a href="{{route('question.index')}}" class="bg-red-400 px-4 py-2 mx-2 rounded text-white">Annuler</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
