<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Profile Information') }}
                            </h2>
                    
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Create a new Seminar.") }}
                            </p>
                        </header>                    
                        <form method="post" action="{{ route('seminar.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                            @csrf                    
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div>
                                <x-input-label for="speaker" :value="__('Speaker')" />
                                <x-text-input id="speaker" name="speaker" type="text" class="mt-1 block w-full" autofocus autocomplete="speaker" />
                                <x-input-error class="mt-2" :messages="$errors->get('speaker')" />
                            </div>
                            <div>
                                <x-input-label for="short" :value="__('Introduction')" />
                                <x-text-input id="short" name="short" type="text" class="mt-1 block w-full" autofocus autocomplete="short" />
                                <x-input-error class="mt-2" :messages="$errors->get('short')" />
                            </div>
                            <div>
                                <x-input-label for="long" :value="__('Description')" />
                                <textarea name="long" cols="60" rows="10" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"></textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('long')" />
                            </div>  
                            <div>
                                <x-input-label for="link" :value="__('Link')" />
                                <x-text-input id="link" name="link" type="text" class="mt-1 block w-full" autofocus autocomplete="link" />
                                <x-input-error class="mt-2" :messages="$errors->get('link')" />
                            </div> 
                            <div>
                                <x-input-label for="start" :value="__('Starting Date and Time')" />
                                <input type="text" id="start" name="start" class="flat-picker mt-1 block border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('start')" />
                            </div>     
                            <div>                                
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Image</label>
                                <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file">
                                <x-input-error class="mt-2" :messages="$errors->get('image')" />
                            </div>      
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
