@extends('layouts.dashboard')

@section('content')
    <!-- Page title & actions -->
    <div class="px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                {{ __('Create sections') }}
            </h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
            <a href="{{ route('sections.index') }}"
               class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none sm:order-1 sm:ml-3">
                {{ __('Go back') }}
            </a>
        </div>
    </div>

    <form action="{{ route('sections.store') }}" method="post"
          enctype="multipart/form-data"
          class="divide-y divide-gray-200 lg:col-span-9">
    @csrf
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <div class="py-6 px-4 sm:p-6 lg:pb-8">
            <div x-data="{selectedLang: 'en'}" class="flex-grow space-y-6 dashboard-language-wrapper">

                <x-lang-switcher-tabs />

                <x-select :title="__('Choose :resource', ['resource' => __('Page')])" :items="$pages"
                          name="page_id" required/>

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div x-data="{ radioValue: '' }">
                    <h2 class="text-sm font-medium text-gray-900">Type</h2>

                    <fieldset class="mt-2">
                        <legend class="sr-only">Choose a section type</legend>
                            <div class="grid grid-cols-3 gap-3 sm:grid-cols-6">
                                @foreach($types as $type_key => $type_value)
                                    <label class="group border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none active:ring-2 active:ring-offset-2 active:ring-indigo-500"
                                           :class="radioValue === '{{ $type_value }}' ? 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700' : 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50'">
                                        <input type="radio" :checked="radioValue === '{{ $type_value }}' ? 'true' : 'false'" name="type" value="{{ $type_value }}" x-model="radioValue" class="sr-only" aria-labelledby="memory-option-0-label">
                                        <span id="memory-option-0-label">{{ $type_key }}</span>
                                    </label>
                                @endforeach
                            </div>
                    </fieldset>
                </div>


                <div>
                    <x-label for="title" :value="__('Title')"/>

                    <div>
                        <x-input x-show="selectedLang === 'en'" id="title_en" class="mt-3 w-full"
                                 type="text"
                                 name="title_en"
                                 placeholder="Title en" />
                        <x-input x-show="selectedLang === 'ru'" id="title_ru" class="mt-3 w-full"
                                 type="text"
                                 name="title_ru"
                                 placeholder="Title ru" />
                        <x-input x-show="selectedLang === 'kk'" id="title_kk" class="mt-3 w-full"
                                 type="text"
                                 name="title_kk"
                                 placeholder="Title kk" />
                    </div>
                </div>
                <div>
                    <x-label for="lead" :value="__('Lead')"/>

                    <div>
                        <x-input x-show="selectedLang === 'en'"
                                 id="lead_en" class="block mt-3 w-full"
                                 type="text"
                                 placeholder="Lead en"
                                 name="lead_en" />
                        <x-input x-show="selectedLang === 'ru'"
                                 id="lead_ru" class="block mt-3 w-full"
                                 type="text"
                                 placeholder="Lead ru"
                                 name="lead_ru" />
                        <x-input x-show="selectedLang === 'kk'"
                                 id="lead_kk" class="block mt-3 w-full"
                                 type="text"
                                 placeholder="Lead kk"
                                 name="lead_kk" />
                    </div>
                </div>
                <div>
                    <x-label for="subtitle" :value="__('Subtitle')"/>

                    <div>
                        <x-input x-show="selectedLang === 'en'"
                                 id="subtitle_en" class="block mt-3 w-full"
                                 type="text"
                                 placeholder="Subtitle en"
                                 name="subtitle_en" />
                        <x-input x-show="selectedLang === 'ru'"
                                 id="subtitle_ru" class="block mt-3 w-full"
                                 type="text"
                                 placeholder="Subtitle ru"
                                 name="subtitle_ru" />
                        <x-input x-show="selectedLang === 'kk'"
                                 id="subtitle_kk" class="block mt-3 w-full"
                                 type="text"
                                 placeholder="Subtitle kk"
                                 name="subtitle_kk" />
                    </div>
                </div>
                <div>
                    <x-label for="description" :value="__('Description')"/>

                    <div>
                        <x-textarea x-show="selectedLang === 'en'"
                                    id="description_en" class="block mt-3 w-full"
                                    type="text"
                                    name="description_en"
                                    placeholder="Description en"
                                    cols="30"
                                    rows="10" />
                        <x-textarea x-show="selectedLang === 'ru'"
                                    id="description_ru" class="block mt-3 w-full"
                                    type="text"
                                    name="description_ru"
                                    placeholder="Description ru"
                                    cols="30"
                                    rows="10" />
                        <x-textarea x-show="selectedLang === 'kk'"
                                    id="description_kk" class="block mt-3 w-full"
                                    type="text"
                                    name="description_kk"
                                    placeholder="Description kk"
                                    cols="30"
                                    rows="10" />
                    </div>
                </div>
                <div>
                    <x-label for="youtube_link" :value="__('Youtube Link')"/>

                    <div>
                        <x-input x-show="selectedLang === 'en'"
                                 id="youtube_link_en" class="block mt-3 w-full"
                                 type="text"
                                 placeholder="Youtube link en"
                                 name="youtube_link_en"/>
                        <x-input x-show="selectedLang === 'ru'"
                                 id="youtube_link_ru" class="block mt-3 w-full"
                                 type="text"
                                 placeholder="Youtube link ru"
                                 name="youtube_link_ru"/>
                        <x-input x-show="selectedLang === 'kk'"
                                 id="youtube_link_kk" class="block mt-3 w-full"
                                 type="text"
                                 placeholder="Youtube link kk"
                                 name="youtube_link_kk"/>
                    </div>
                </div>
                <div x-show="selectedLang === 'en'">
                    <livewire:cover :title="'Добавить обложку en'" name="uploaded_photo_en"/>
                </div>
                <div x-show="selectedLang === 'ru'">
                    <livewire:cover :title="'Добавить обложку ru'" name="uploaded_photo_ru"/>
                </div>
                <div x-show="selectedLang === 'kk'">
                    <livewire:cover :title="'Добавить обложку kk'" name="uploaded_photo_kk"/>
                </div>
                <input type="hidden" name="language" value="en" x-model="selectedLang">
            </div>
            <div class="mt-4 py-4 flex justify-end">
                <button type="submit"
                        class="ml-5 bg-blue-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                    Сохранить
                </button>
            </div>
        </div>
        <input type="hidden" name="locale" id="language-switcher-locale">
    </form>
@endsection
