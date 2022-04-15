@foreach($sections as $section)
    @if($section->type == \App\Models\Section::HERO)
        @include('web.includes.hero-section', ['item' => $section])
    @endif
    @if ($section->type == \App\Models\Section::ADDITION_INFO)
        @include('web.includes.testimonials', ['item' => $section])
    @endif
    @if ($section->type == \App\Models\Section::CONTENT)
        @include('web.includes.content', ['item' => $section])
    @endif
@endforeach
