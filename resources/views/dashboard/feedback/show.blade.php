<x-dashboard-layout>
    <!-- Page title & actions -->
    <div class="px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
                {{ __('Show feedback') }}
            </h1>
        </div>
        <div class="mt-4 flex sm:mt-0 sm:ml-4">
            <a href="{{ route('dashboard.feedback.list') }}"
               class="order-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none sm:order-1 sm:ml-3">
                {{ __('Go back') }}
            </a>
        </div>
    </div>
    <div class="py-6 px-4 sm:p-6 lg:pb-8">
        <div class="flex-grow space-y-6">
            <div>
                <x-label for="full_name" :value="__('Full name')"/>

                <x-input id="full_name" class="block mt-1 w-full"
                         type="text"
                         name="full_name"
                         :value="$feedback->full_name"
                         disabled />
            </div>
            <div>
                <x-label for="phone" :value="__('Phone number')"/>

                <x-input id="phone" class="block mt-1 w-full"
                         type="text"
                         name="phone"
                         :value="$feedback->phone"
                         disabled />
            </div>
            <div>
                <x-label for="email" :value="__('E-mail')"/>

                <x-input id="email" class="block mt-1 w-full"
                         type="text"
                         name="email"
                         :value="$feedback->email"
                         disabled />
            </div>
            <div>
                <x-label for="company_name" :value="__('Company name')"/>

                <x-input id="company_name" class="block mt-1 w-full"
                         type="text"
                         name="company_name"
                         :value="$feedback->company_name"
                         disabled />
            </div>
            <div>
                <x-label for="body" :value="__('Body')"/>

                <x-textarea id="body" class="block mt-1 w-full"
                         type="text"
                         name="body" rows="4" cols="50"
                         :value="$feedback->body"
                         disabled />
            </div>
            <div>
                <x-label for="responses" :value="__('Responses')" />

                @if ($feedback->response)
                    <x-input id="response_title" class="block mt-1 w-full"
                             type="text"
                             name="response_title"
                             :value="$feedback->response->title"
                             disabled />

                    <x-textarea id="response_note" class="block mt-1 w-full"
                                type="text"
                                name="response_note"
                                :value="$feedback->response->note"
                                rows="10"
                                cols="30"
                                disabled />
                    <form action="{{ route('dashboard.feedback.response.destroy', $feedback) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="mt-4 py-4 flex justify-end">
                            <x-button type="submit" class="bg-red-500 hover:bg-red-400 focus:bg-red-600">
                                Удалить
                            </x-button>
                        </div>
                    </form>
                @else
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                    <form action="{{ route('dashboard.feedback.response.store', $feedback) }}" method="post">
                        @csrf
                        <x-input id="response_title" class="block mt-1 w-full"
                                 type="text"
                                 name="response_title"
                                 placeholder="Title"
                                 required />

                        <x-textarea id="response_note" class="block mt-1 w-full"
                                    type="text"
                                    name="response_note"
                                    placeholder="Note"
                                    rows="10"
                                    cols="30"
                                    required />
                        <div class="mt-4 py-4 flex justify-end">
                            <x-button type="submit" class="bg-blue-500 hover:bg-blue-400 focus:bg-blue-600">
                                Отпаравить
                            </x-button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</x-dashboard-layout>
