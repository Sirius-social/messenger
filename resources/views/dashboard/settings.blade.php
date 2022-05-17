<x-dashboard-layout>
    <!-- Page title & actions -->
    <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg leading-6 font-medium text-gray-900">{{ __('Profile') }}</h1>
            <p class="mt-1 text-sm text-gray-500">
                {{ __("Update your account details such as name, email address and password") }}
            </p>
        </div>
        {{--        <div class="mt-4 flex sm:mt-0 sm:ml-4">--}}
        {{--            <button type="button"--}}
        {{--                    class="order-1 ml-3 inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-0 sm:ml-0">--}}
        {{--                Share--}}
        {{--            </button>--}}
        {{--            <button type="button"--}}
        {{--                    class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-1 sm:ml-3">--}}
        {{--                Create--}}
        {{--            </button>--}}
        {{--        </div>--}}
    </div>
    <form class="divide-y divide-gray-200 lg:col-span-9" action="{{ route('settings.update') }}" method="POST">
    @csrf
    @method('put')
    <!-- Session Status -->
        <x-session-status />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <!-- Profile section -->
        <div class="py-6 px-4 sm:p-6 lg:pb-8">
            <div class="mt-6 flex flex-col lg:flex-row">
                <div class="flex-grow space-y-6">
                    <div>
                        <x-label for="name" :value="__('Full name')" />

                        <x-input id="name" class="block mt-1 w-full"
                                 type="text"
                                 name="name"
                                 :value="auth()->user()->name"
                                 required />
                    </div>

                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full"
                                 type="email"
                                 name="email"
                                 :value="auth()->user()->email"
                                 required />
                    </div>
                </div>

                <x-file-upload class="mt-6 lg:mt-0 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0" :avatar="auth()->user()->avatar" />
            </div>

            <div class="my-6">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         :placeholder="__('Leave empty to keep current password')"
                         autocomplete="current-password" />
            </div>

            <div class="mt-4 py-4 flex justify-end">
                <button type="submit" class="ml-5 bg-blue-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                    {{ __('Save') }}
                </button>
            </div>
        </div>
    </form>
</x-dashboard-layout>
