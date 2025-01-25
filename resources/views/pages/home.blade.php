<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pages/') }}{{ __('Home') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Hero Section - Column 1') }}
                                </h2>
                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    {{ __("Update your home page hero section here") }}
                                </p>
                            </header>
                            <form method="post" action="" class="mt-6 space-y-6">
                                @csrf
                                @method('patch')
                                <div>
                                    <x-input-label for="hero_title" :value="__('Hero Title')" />
                                    <x-text-input id="hero_title" name="hero_title" type="text" class="mt-1 block w-full" :value="old('hero_title')" required autofocus autocomplete="hero_title" placeholder="Welcome to our Website" />
                                    <x-input-error class="mt-2" :messages="$errors->get('hero_title')" />
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Hero Section - Column 2') }}
                                </h2>
                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    {{ __("Update your home page hero section here") }}
                                </p>
                            </header>
                            <form method="post" action="" class="mt-6 space-y-6">
                                @csrf
                                @method('patch')
                                <div>
                                    <x-input-label for="hero_description" :value="__('Hero Description')" />
                                    <textarea name="hero_description" id="hero_description" cols="30" rows="10" class="mt-1 block w-full"></textarea>
                                    <x-input-error class="mt-2" :messages="$errors->get('hero_description')" />
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Column 1 -->


                <!-- Column 2 -->

            </div>
        </div>

    </div>
</x-app-layout>
