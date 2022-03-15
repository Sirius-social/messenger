@if (!$errors->isEmpty())
<div class="flex justify-between items-center w-full bg-red-700 text-red-100 py-4 px-4">
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
            <path d="M7.86 2h8.28L22 7.86v8.28L16.14 22H7.86L2 16.14V7.86L7.86 2zM12 8v4M12 16h.01"/>
        </svg>
        <div class="flex flex-col">
            @foreach ($errors->all(':message') as $mess)
            <p> {{ $mess}} </p>
            @endforeach
        </div>
    </div>
    <button type="button" class="close hover:text-red-400 rounded-full w-5 h-5 ml-2" data-dismiss="alert">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6L6 18M6 6l12 12"/>
        </svg>
    </button>
</div>
@endif

@if (Session::has('error'))
<div class="flex justify-between items-center w-full bg-red-700 text-red-100 py-4 px-4">
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
            <path d="M7.86 2h8.28L22 7.86v8.28L16.14 22H7.86L2 16.14V7.86L7.86 2zM12 8v4M12 16h.01"/>
        </svg>
        {{ Session::get('error') }}
    </div>
    <button type="button" class="close hover:text-red-400 rounded-full w-5 h-5 ml-2" data-dismiss="alert">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6L6 18M6 6l12 12"/>
        </svg>
    </button>
</div>
@endif

@if (Session::has('success'))
<div x-data="{show: true}">
    <div x-show="show" class="flex justify-between items-center w-full bg-green-600 text-green-100 py-4 px-4">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
                <path d="M7.86 2h8.28L22 7.86v8.28L16.14 22H7.86L2 16.14V7.86L7.86 2zM12 8v4M12 16h.01"/>
            </svg>
            {{ Session::get('success') }}
        </div>
        <button @click="show = false" type="button" class="hover:text-green-300 rounded-full w-5 h-5 ml-2" data-dismiss="alert">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6L6 18M6 6l12 12"/>
            </svg>
        </button>
    </div>
</div>
@endif
