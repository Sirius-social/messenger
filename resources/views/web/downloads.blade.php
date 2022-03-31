@extends('layouts.web')

@section('content')
    <section class="container mx-auto pt-24">
        <div class="py-24 flex">
            <div class="w-1/2 flex items-center">
                <div class="w-1/2 flex flex-col items-center">
                    <img class="h-80 w-auto mb-4" src="{{ asset('images/Iphone.png') }}" alt="Iphone">
                    <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-indigo-50 text-indigo-600 hover:bg-indigo-200 hover:text-indigo-700 focus:ring-indigo-500">
                        Download for IOS
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                </div>
                <div class="w-1/2 flex flex-col items-center">
                    <img class="h-80 w-auto mb-4" src="{{ asset('images/Galaxy.png') }}" alt="Android">
                    <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-indigo-50 text-indigo-600 hover:bg-indigo-200 hover:text-indigo-700 focus:ring-indigo-500">
                        Download for Android
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-1/2 flex flex-col items-center">
                <img class="h-80 w-auto mb-4" src="{{ asset('images/macbook.png') }}" alt="Macbook">
                <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-indigo-50 text-indigo-600 hover:bg-indigo-200 hover:text-indigo-700 focus:ring-indigo-500">
                    Download for Laptop
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
