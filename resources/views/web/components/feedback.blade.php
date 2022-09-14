<div class='sm:bg-[url({{ asset('images/footer-bg.png') }})] bg-none sm:bg-contain bg-no-repeat bg-right-bottom scroll-mt-24' id='contact'>
    <div class='-mt-7 pt-12 pb-24'>
        <x-web.title>
            <x-slot name="title">
                {!! \App\Services\Localization::translate('web.feedback.title') !!}
            </x-slot>
            <x-slot name="subtitle">
                {!! \App\Services\Localization::translate('web.feedback.subtitle') !!}
            </x-slot>
        </x-web.title>
        <div class='mt-16 px-6 sm:px-4'>
            <div class='container mx-auto'>
                <form action='{{ route('web.feedback.store', ['locale' => \App\Services\Localization::get()]) }}'
                      method='post'>
                    @csrf
                    <div class='sm:flex sm:space-x-14 mb-4'>
                        <div class='sm:w-1/2 w-full'>
                            <x-web.input :label="\App\Services\Localization::translate('web.Name')" class="w-full"
                                         placeholder="{!! \App\Services\Localization::translate('web.Type full name here') !!}"
                                         id='full_name' type="text" name="full_name" required>
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </x-slot>
                            </x-web.input>
                        </div>
                        <div class='sm:w-1/2 w-full'>
                            <x-web.input :label="\App\Services\Localization::translate('web.Phone number')"
                                         class="w-full"
                                         placeholder="(123) 456-7890"
                                         type="number" id="phone" name="phone" required>
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </x-slot>
                            </x-web.input>
                        </div>
                    </div>
                    <div class='sm:flex sm:space-x-14 mb-4'>
                        <div class='sm:w-1/2 w-full'>
                            <x-web.input :label="\App\Services\Localization::translate('web.Email')" class="w-full"
                                         placeholder="{!! \App\Services\Localization::translate('web.Email address') !!}"
                                         type="email" id='email' name="email" required>
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </x-slot>
                            </x-web.input>
                        </div>
                        <div class='sm:w-1/2 w-full'>
                            <x-web.input :label="\App\Services\Localization::translate('web.Company')" class="w-full"
                                         placeholder="{!! \App\Services\Localization::translate('web.Company name') !!}"
                                         id='company_name' type="text" name="company_name" required>
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </x-slot>
                            </x-web.input>
                        </div>
                    </div>
                    <div>
                        <x-web.textarea
                            :label="\App\Services\Localization::translate('web.Additional feedback')"
                            name="body" id='body' rows="4" cols="50" required></x-web.textarea>
                    </div>
                    <div class='sm:flex sm:space-x-2 mt-8'>
                        <div class='sm:w-1/2 w-full sm:mb-0 mb-4'>
                            <x-web.checkbox
                                :label="\App\Services\Localization::translate('web.I have read and accept the Privacy Policy.')"
                                id="policy" name="policy" required />
                        </div>
                        <div class='sm:w-1/2 w-full flex justify-end'>
                            <x-web.button class="px-8 py-4 bg-white sm:w-80 w-full">
                                {!! \App\Services\Localization::translate('web.Submit feedback') !!}
                            </x-web.button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
