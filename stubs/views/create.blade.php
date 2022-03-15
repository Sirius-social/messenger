@extends('layouts.dashboard')

@section('content')
    <!-- Page title & actions -->
{{--    <div class="px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">--}}
{{--        <div class="flex-1 min-w-0">--}}
{{--            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">--}}
{{--                {{ __('Create links') }}--}}
{{--            </h1>--}}
{{--        </div>--}}
{{--        <div class="mt-4 flex sm:mt-0 sm:ml-4">--}}
{{--            <a href="{{ route('links.index') }}"--}}
{{--               class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none sm:order-1 sm:ml-3">--}}
{{--                {{ __('Go back') }}--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <form action="{{ route('links.store') }}" method="post" class="divide-y divide-gray-200 lg:col-span-9">--}}
{{--    @csrf--}}
{{--    <!-- Session Status -->--}}
{{--        <x-session-status/>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors"/>--}}

{{--        <div class="py-6 px-4 sm:p-6 lg:pb-8">--}}
{{--            <div class="flex-grow space-y-6">--}}
{{--                <div>--}}
{{--                    <x-label for="title" :value="__('Title')"/>--}}

{{--                    <x-input id="title" class="block mt-1 w-full"--}}
{{--                             type="text"--}}
{{--                             name="title"--}}
{{--                             required/>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <x-label for="link" :value="__('Link')"/>--}}

{{--                    <x-input id="link" class="block mt-1 w-full"--}}
{{--                             type="text"--}}
{{--                             name="link"--}}
{{--                             required/>--}}
{{--                </div>--}}
{{--                <div x-data="{show: false, selectedName: '{{ __('Gray') }}', selectedClass: 'bg-gray-600'}">--}}
{{--                    <label id="listbox-label" class="block text-sm font-medium text-gray-700">--}}
{{--                        {{ __('Choose link color') }}--}}
{{--                    </label>--}}
{{--                    <div class="mt-1 relative">--}}
{{--                        <button type="button"--}}
{{--                                class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"--}}
{{--                                aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label"--}}
{{--                                @click="show = (show) ? false : true">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <!-- On: "bg-green-400", Off: "bg-gray-200" -->--}}
{{--                                <span aria-label="Online"--}}
{{--                                      x-bind:class="selectedClass"--}}
{{--                                      class="flex-shrink-0 inline-block h-2 w-2 rounded-full"></span>--}}
{{--                                <span class="ml-3 block truncate" x-text="selectedName"></span>--}}
{{--                            </div>--}}
{{--                            <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">--}}
{{--                                <!-- Heroicon name: solid/selector -->--}}
{{--                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                     viewBox="0 0 20 20" fill="currentColor"--}}
{{--                                     aria-hidden="true">--}}
{{--                                  <path fill-rule="evenodd"--}}
{{--                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"--}}
{{--                                        clip-rule="evenodd"/>--}}
{{--                                </svg>--}}
{{--                            </span>--}}
{{--                        </button>--}}

{{--                        <!----}}
{{--                          Select popover, show/hide based on select state.--}}
{{--                          Entering: ""--}}
{{--                            From: ""--}}
{{--                            To: ""--}}
{{--                          Leaving: "transition ease-in duration-100"--}}
{{--                            From: "opacity-100"--}}
{{--                            To: "opacity-0"--}}
{{--                        -->--}}
{{--                        <ul x-show="show"--}}
{{--                            x-transition:leave="transition ease-in duration-100"--}}
{{--                            x-transition:leave-start="opacity-100"--}}
{{--                            x-transition:leave-end="opacity-0"--}}
{{--                            class="absolute mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm"--}}
{{--                            tabindex="-1" role="listbox" aria-labelledby="listbox-label"--}}
{{--                            aria-activedescendant="listbox-option-3">--}}
{{--                            <!----}}
{{--                              Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.--}}
{{--                              Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"--}}
{{--                            -->--}}
{{--                            @foreach($colors as $colorName => $colorClass)--}}
{{--                                <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-gray-100 cursor-pointer"--}}
{{--                                    id="listbox-option-0" role="option"--}}
{{--                                    @click="selectedName = '{{ $colorName }}', selectedClass = '{{ $colorClass }}'">--}}
{{--                                    <div class="flex items-center">--}}
{{--                                        <!-- Online: "bg-green-400", Not Online: "bg-gray-200" -->--}}
{{--                                        <span class="{{ $colorClass }} flex-shrink-0 inline-block h-2 w-2 rounded-full"--}}
{{--                                              aria-hidden="true"></span>--}}
{{--                                        <!-- Selected: "font-semibold", Not Selected: "font-normal" -->--}}
{{--                                        <span class="font-normal ml-3 block truncate">--}}
{{--                                            {{ $colorName }}--}}
{{--                                        </span>--}}
{{--                                    </div>--}}

{{--                                    <!----}}
{{--                                      Checkmark, only display for selected option.--}}
{{--                                      Highlighted: "text-white", Not Highlighted: "text-indigo-600"--}}
{{--                                    -->--}}
{{--                                    <span--}}
{{--                                        x-bind:class="selectedName == '{{ $colorName }}' ? 'text-indigo-600' : 'text-white'"--}}
{{--                                        class="absolute inset-y-0 right-0 flex items-center pr-4">--}}
{{--                                      <!-- Heroicon name: solid/check -->--}}
{{--                                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"--}}
{{--                                           fill="currentColor"--}}
{{--                                           aria-hidden="true">--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"--}}
{{--                                              clip-rule="evenodd"/>--}}
{{--                                      </svg>--}}
{{--                                    </span>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                        <input type="hidden" name="selectedColor" x-bind:value="selectedClass">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div x-data="{show: false, selectedName: '', selectedURL: ''}">--}}
{{--                    <label id="listbox-label" class="block text-sm font-medium text-gray-700">--}}
{{--                        {{ __('Choose link icon') }}--}}
{{--                    </label>--}}
{{--                    <div class="mt-1 relative">--}}
{{--                        <button @click="show = (show) ? false : true" type="button"--}}
{{--                                class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"--}}
{{--                                aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">--}}
{{--                            <span class="flex items-center">--}}
{{--                                <template x-if="selectedURL !== ''">--}}
{{--                                    <img--}}
{{--                                        x-bind:src="selectedURL"--}}
{{--                                        alt="" class="flex-shrink-0 h-6 w-6 rounded-full">--}}
{{--                                </template>--}}
{{--                                <template x-if="selectedURL !== ''">--}}
{{--                                    <span class="ml-3 block truncate" x-text="selectedName"></span>--}}
{{--                                </template>--}}
{{--                            </span>--}}
{{--                            <span class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">--}}
{{--                                <!-- Heroicon name: solid/selector -->--}}
{{--                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"--}}
{{--                                     aria-hidden="true">--}}
{{--                                  <path fill-rule="evenodd"--}}
{{--                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"--}}
{{--                                        clip-rule="evenodd"/>--}}
{{--                                </svg>--}}
{{--                            </span>--}}
{{--                        </button>--}}

{{--                        <!----}}
{{--                          Select popover, show/hide based on select state.--}}
{{--                          Entering: ""--}}
{{--                            From: ""--}}
{{--                            To: ""--}}
{{--                          Leaving: "transition ease-in duration-100"--}}
{{--                            From: "opacity-100"--}}
{{--                            To: "opacity-0"--}}
{{--                        -->--}}
{{--                        <ul x-show="show"--}}
{{--                            x-transition:leave="transition ease-in duration-100"--}}
{{--                            x-transition:leave-start="opacity-100"--}}
{{--                            x-transition:leave-end="opacity-0"--}}
{{--                            class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm"--}}
{{--                            tabindex="-1" role="listbox" aria-labelledby="listbox-label"--}}
{{--                            aria-activedescendant="listbox-option-3">--}}

{{--                            <!----}}
{{--                          Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.--}}
{{--                          Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"--}}
{{--                        -->--}}
{{--                            @foreach($icons as $iconName => $iconURL)--}}
{{--                                <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-gray-100 cursor-pointer"--}}
{{--                                    id="listbox-option-0" role="option" @click="selectedURL = '{{ $iconURL }}', selectedName = '{{ $iconName }}'">--}}
{{--                                    <div class="flex items-center">--}}
{{--                                        <img--}}
{{--                                            src="{{ $iconURL }}"--}}
{{--                                            alt="" class="flex-shrink-0 h-6 w-6 rounded-full">--}}
{{--                                        <!-- Selected: "font-semibold", Not Selected: "font-normal" -->--}}
{{--                                        <span class="font-normal ml-3 block truncate">--}}
{{--                                            {{ $iconName }}--}}
{{--                                        </span>--}}
{{--                                    </div>--}}

{{--                                    <!----}}
{{--                                      Checkmark, only display for selected option.--}}
{{--                                      Highlighted: "text-white", Not Highlighted: "text-indigo-600"--}}
{{--                                    -->--}}
{{--                                    <span :class="selectedName == '{{ $iconName }}' ? 'text-indigo-600' : 'text-white'" class="absolute inset-y-0 right-0 flex items-center pr-4">--}}
{{--                                      <!-- Heroicon name: solid/check -->--}}
{{--                                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"--}}
{{--                                           aria-hidden="true">--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"--}}
{{--                                              clip-rule="evenodd"/>--}}
{{--                                      </svg>--}}
{{--                                    </span>--}}
{{--                                </li>--}}
{{--                        @endforeach--}}

{{--                        <!-- More items... -->--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <input type="hidden" name="selectedIcon" :value="selectedURL">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="mt-4 py-4 flex justify-end">--}}
{{--                <button type="submit" class="ml-5 bg-blue-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">--}}
{{--                    Сохранить--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
@endsection
