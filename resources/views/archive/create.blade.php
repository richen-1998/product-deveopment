<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Archive') }}
        </h2>
    </x-slot>
    <div class="container my-4">
        <form method="POST" action="{{ route('archive.store') }}">
            @csrf
            <div class="mb-3">
                <label for="Inputtitle" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="Inputtitle"
                    aria-describedby="titleHelp">

            </div>
            <div class="mb-3">
                <label for="Inputdescription" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="Inputdescription"
                    aria-describedby="titledescription">

            </div>

            <div class="mb-3">
                <label for="Inputvideo" class="form-label">Video</label>
                <input type="text" name="video_url" class="form-control" id="Inputvideo"
                    aria-describedby="titlevideo">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</x-app-layout>
