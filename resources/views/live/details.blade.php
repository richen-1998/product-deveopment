<x-app-layout>
    <div class="container my-4">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Live / Detail') }}
            </h2>
        </x-slot>

        <h6><b>Title</b></h6>
        {{ $live->title }}
        <hr>
        <br>
        <h6><b>Video</b></h6>
        <iframe width="500" height="400" src="https://www.youtube.com/embed/{{ $live->video_url }}" frameborder="0"
            allowfullscreen>
        </iframe>
        <br>
        <h6><b>Description</b></h6>
        {{ $live->description }}
    </div>
</x-app-layout>
