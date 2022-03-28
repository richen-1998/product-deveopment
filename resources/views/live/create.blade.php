<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Live') }}
        </h2>
    </x-slot>
        <div class="container my-4">
            <form method="POST" action="{{ route('live.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputtitle" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputtitle"
                        aria-describedby="titleHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputdescription" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputdescription"
                        aria-describedby="titledescription">

                </div>

                <div class="mb-3">
                    <label for="exampleInputvideo" class="form-label">Video</label>
                    <input type="text" name="video_url" class="form-control" id="exampleInputvideo"
                        aria-describedby="titlevideo">

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
</x-app-layout>
