@extends('layouts.dashboard')

@section('content')
    <!-- Page title & actions -->
    <div class="px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                {{ __('Edit pages') }}
            </h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
            <a href="{{ route('pages.index') }}"
               class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none sm:order-1 sm:ml-3">
                {{ __('Go back') }}
            </a>
        </div>
    </div>

    <form action="{{ route('pages.update', $page) }}" method="post" class="divide-y divide-gray-200 lg:col-span-9">
        @method('put')
        @csrf
        <!-- Session Status -->
        <x-session-status/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <div class="py-6 px-4 sm:p-6 lg:pb-8">
            <div class="flex-grow space-y-6">
                <div>
                    <x-label for="name" :value="__('Name')"/>

                    <x-input id="name" class="block mt-1 w-full"
                             type="text"
                             name="name"
                             :value="$page->name"
                             required/>
                </div>
                <div>
                    <x-label for="route_name" :value="__('Route name')"/>

                    <x-input id="route_name" class="block mt-1 w-full"
                             type="text"
                             name="route_name"
                             :value="$page->route_name"
                             required/>
                </div>
            </div>
            <div class="mt-4 py-4 flex justify-end">
                <button type="submit" class="ml-5 bg-blue-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                    Сохранить
                </button>
            </div>
        </div>
    </form>
@endsection
