@extends('layouts.dashboard')

@section('content')
    <!-- Page title & actions -->
{{--    <div class="px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">--}}
{{--        <div class="flex-1 min-w-0">--}}
{{--            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">--}}
{{--                {{ __('Links') }}--}}
{{--            </h1>--}}
{{--        </div>--}}
{{--        <div class="mt-4 flex sm:mt-0 sm:ml-4">--}}
{{--            <a href="{{ route('links.index') }}"--}}
{{--               class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none sm:order-1 sm:ml-3">--}}
{{--                {{ __('Go back') }}--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-session-status/>--}}
{{--    <div class="px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">--}}
{{--        <a href="{{ $link->link }}"--}}
{{--           class="w-full {{ $link->color }} text-white rounded-lg px-4 py-4 flex justify-between hover:shadow-lg transition-all duration-300">--}}
{{--            <span class="flex items-center pr-12">--}}
{{--                @if ($link->icon)--}}
{{--                    <img class="w-12 h-7 filter invert" src="{{ $link->icon }}" alt="">--}}
{{--                @endif--}}
{{--                {{ $link->title }}--}}
{{--            </span>--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--    </div>--}}
@endsection
