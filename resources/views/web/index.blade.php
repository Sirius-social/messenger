@extends('layouts.web')

@section('content')
    <div class="container mx-auto">
        <div class="flex items-center py-24">
            <div class="flex flex-col w-2/4 justify-center">
                <h1 class="font-bold text-6xl text-green-500 mb-6 leading-tight">Empower Trust</h1>
                <h2 class="text-2xl text-gray-800 mb-4">
                    Indicio provides a new, more private way to accurately
                    verify data without having to rely on a third party.
                </h2>
                <p class="font-semibold text-lg text-gray-600">
                    Businesses, global enterprises, and governments depend on our experience and product suite to
                    deliver innovative digital trust solutions at all scales. Indicio is the leader in decentralized
                    identity development, hosting, and networks.
                </p>
            </div>
            <div class="flex w-2/4 max-h-96 justify-center items-center">
                <img class="w-3/4 object-cover rounded-full" src="{{ asset('images/hero-img.jpg') }}"
                     alt="Digital Media agency">
            </div>
        </div>
    </div>
    <div class="bg-green-700">
        <div class="container mx-auto text-center py-24 px-24">
            <h2 class="text-4xl font-bold text-gray-100">Trusted Digital Ecosystems simplify data verification with
                privacy-by-design architecture to create a smoother digital experience</h2>
        </div>
    </div>
@endsection
