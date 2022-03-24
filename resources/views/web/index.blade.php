@extends('layouts.web')

@section('content')
    <div class="container mx-auto">
        <div class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Nulla porttitor accumsan tincidunt.</h1>
                <h2 class="hero-subtitle">
                    Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                </h2>
                <p class="hero-description">
                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium
                    ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan
                    tincidunt.
                </p>
            </div>
            <div class="hero-img">
                <img src="{{ asset('images/hero-img.jpg') }}" alt="Digital Media agency">
            </div>
        </div>
    </div>
    <div class="bg-green-700">
        <div class="container mx-auto text-center xl:p-24 py-24 px-4 xl:px-0">
            <h2 class="text-5xl text-gray-100">
                Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id
                dui posuere blandit. Pellentesque in ipsum id orci porta dapibus.
            </h2>
        </div>
    </div>
    <section class="container mx-auto py-24 text-center xl:px-0 px-4">
        <h3 class="video-lead">Curabitur arcu erat</h3>
        <h2 class="video-title">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</h2>
        <p class="video-description">
            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis
            porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan
            tincidunt. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Proin eget
            tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel,
            ullamcorper sit amet ligula.
        </p>
        <div class="video-content">
            <iframe src="https://www.youtube.com/embed/XKfgdkcIUxw"
                    title="YouTube video player" frameborder="0"
                    class="w-full aspect-video"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    </section>
@endsection
