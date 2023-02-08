<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <form action="{{ route('notes.store') }}" method="post">
                        @csrf
                        <x-text-input
                            class="w-full"
                            field='title'
                            type="text"
                            name="title"
                            placeholder="title"
                            autocomplete="off"
                            :value="@old('title')"></x-text-input>

                        <x-text-area name="text"
                            rows="10"
                            field="text"
                            placeholder="Start typing here.."
                            class="w-full mt-6"
                            :value="@old('text')"></x-text-area>
                        <x-primary-button class="mt-6">Save note</x-primary-button>
                    </form>
                </div>
        </div>
    </div>
</x-app-layout>
