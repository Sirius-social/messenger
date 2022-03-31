@extends('layouts.web')

@section('content')
    <section class="w-full bg-gradient-to-r from-violet-200 to-indigo-300 py-24">
        <div class="container mx-auto">
            <div class="flex items-center space-x-6">
                <div class="w-1/2 space-y-6">
                    <h1 class="text-5xl font-bold text-violet-900">Messenger you are looking for</h1>
                    <p class="text-lg font-semibold text-indigo-800">
                        Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id
                        enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam
                        sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Curabitur non
                        nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis
                        porttitor volutpat.
                    </p>
                </div>
                <div class="w-1/2">
                    <img class="w-full h-auto rounded-xl" src="{{ asset('images/features-app.png') }}" alt="Message app">
                </div>
            </div>
        </div>
    </section>
    <section class="w-full bg-gradient-to-r from-slate-100 to-stone-100 py-24">
        <div class="container mx-auto">
            <div class="flex items-center space-x-6">
                <div class="w-1/2">
                    <img class="w-full h-auto rounded-xl" src="{{ asset('images/features-illustration.jpg') }}" alt="Securely">
                </div>
                <div class="w-1/2 space-y-6">
                    <h1 class="text-5xl font-bold text-slate-800">It is possible to communicate with loved ones securely</h1>
                    <p class="text-lg font-semibold text-stone-900">
                        Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id
                        enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam
                        sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Curabitur non
                        nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis
                        porttitor volutpat.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full py-24 bg-gradient-to-r from-indigo-600 to-sky-300">
        <div class="container mx-auto">
            <div class="flex items-center space-x-6">
                <div class="w-1/2 space-y-6">
                    <h1 class="text-5xl font-bold text-slate-100">You can communicate with emojis</h1>
                    <p class="text-lg font-semibold text-gray-100">
                        Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id
                        enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam
                        sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Curabitur non
                        nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis
                        porttitor volutpat.
                    </p>
                </div>
                <div class="w-1/2">
                    <img class="w-full h-auto rounded-xl" src="{{ asset('images/features-emojis.jpg') }}" alt="Messenger emojis">
                </div>
            </div>
        </div>
    </section>
    <section class="w-full py-24 bg-gray-100">
        <div class="container mx-auto">
            <div class="flex items-center space-x-6">
                <div class="w-1/2">
                    <img class="w-full h-auto rounded-xl" src="{{ asset('images/features-group-chat.jpg') }}" alt="Messenger group chat">
                </div>
                <div class="w-1/2 space-y-6">
                    <h1 class="text-5xl font-bold text-gray-800">You can communicate in a group</h1>
                    <p class="text-lg font-semibold text-slate-900">
                        Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id
                        enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam
                        sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Curabitur non
                        nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis
                        porttitor volutpat.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
