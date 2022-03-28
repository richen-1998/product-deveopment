<x-app-layout>
    <div class="container my-4">
        <h5>Update highlights</h5>
        <hr>
        <br>
        <form method="POST" action="{{route('highlight.update',$highlight->id )}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputtitle" class="form-label">Title</label>
                <input type="text" name="title" value="{{$highlight->title}}" class="form-control" id="exampleInputtitle"
                    aria-describedby="titleHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputdescription" class="form-label">Description</label>
                <input type="text" name="description"  value="{{$highlight->description}}" class="form-control" id="exampleInputdescription"
                    aria-describedby="titledescription">
            </div>

            <div class="mb-3">
                <label for="exampleInputvideo" class="form-label">Video</label>
                <input type="text" name="video_url"  value="{{$highlight->video_url}}" class="form-control" id="exampleInputvideo"
                    aria-describedby="titlevideo">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
</x-app-layout>
