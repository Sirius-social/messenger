@extends('layouts.dashboard')

@section('content')
    <!-- Page title & actions -->
    <div class="px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                {{ __('Sections') }}
            </h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
            <a href="{{ route('sections.create') }}"
               class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none sm:order-1 sm:ml-3">
                {{ __('Create') }}
            </a>
        </div>
    </div>
    <!-- Session Status -->
    <x-session-status/>
    <!-- Projects table (small breakpoint and up) -->
    <div class="hidden sm:block">
        <div class="align-middle inline-block min-w-full border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                <tr class="border-t border-gray-200">
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('ID') }}
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Title') }}
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Last updated') }}
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-right">
                        {{ __('Actions') }}
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                @forelse($sections as $section)
                    <tr>
                        <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                            {{ $section->id }}
                        </td>
                        <td class="px-6 py-3 whitespace-nowrap text-sm font-medium text-gray-900">
                            <a href="{{ route('sections.show', $section) }}" class="truncate hover:text-gray-600">
                                  <span>
                                    {{ $section->title }}
                                  </span>
                            </a>
                        </td>
                        <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500">
                            {{ $section->updated_at->diffForHumans() }}
                        </td>
                        <td class="pr-6">
                            <div x-data="{show: false}" class="relative flex justify-end items-center">
                                <button @click="show = (show) ? false : true" type="button"
                                        class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none"
                                        id="project-options-menu-0-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open options</span>
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                    </svg>
                                </button>
                                <div
                                    x-show="show"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="mx-3 origin-top-right absolute right-0 top-7 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-0-button"
                                    tabindex="-1">
                                    <div class="py-1" role="none">
                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                        <a href="{{ route('sections.edit', $section) }}" class="text-gray-700 group flex items-center px-4 py-2 text-sm"
                                           role="menuitem" tabindex="-1" id="project-options-menu-0-item-0">
                                            <!-- Heroicon name: solid/pencil-alt -->
                                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                 aria-hidden="true">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                                <path fill-rule="evenodd"
                                                      d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                            {{ __('Edit') }}
                                        </a>
                                    </div>
                                    <div class="py-1" role="none">
                                        <form method="POST" action="{{ route('sections.destroy', $section) }}">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ route('sections.destroy', $section) }}" class="text-gray-700 group flex items-center px-4 py-2 text-sm"
                                               role="menuitem" tabindex="-1" id="project-options-menu-0-item-3"
                                               onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                <!-- Heroicon name: solid/trash -->
                                                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                     aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                {{ __('Delete') }}
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="px-6 py-3 text-sm text-gray-500 font-medium text-center">{{ __('No Data') }}</td>
                        <td></td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div class="mb-3 pt-3 px-3 border-t border-gray-200">
                {{ $sections->links() }}
            </div>
        </div>
    </div>
@endsection
