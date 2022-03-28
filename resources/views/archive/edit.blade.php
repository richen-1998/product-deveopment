<x-app-layout>
    <div class="container my-4">
        <h5>Update Videos</h5>
        <hr>
        <br>
        <form method="POST" action="{{route('archive.update',$archive->id )}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputtitle" class="form-label">Title</label>
                <input type="text" name="title" value="{{$archive->title}}" class="form-control" id="exampleInputtitle"
                    aria-describedby="titleHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputdescription" class="form-label">Description</label>
                <input type="text" name="description"  value="{{$archive->description}}" class="form-control" id="exampleInputdescription"
                    aria-describedby="titledescription">
            </div>

            <div class="mb-3">
                <label for="exampleInputvideo" class="form-label">Video</label>
                <input type="text" name="video_url"  value="{{$archive->video_url}}" class="form-control" id="exampleInputvideo"
                    aria-describedby="titlevideo">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
</x-app-layout>
