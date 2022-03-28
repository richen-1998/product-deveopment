@extends('layouts.customer')
@section('content')
    <div class="container my-5 pt-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route ('userhome.index')}}" style="text-decoration: None;">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Highlight / Video</li>
            </ol>
        </nav>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h6><b>Video</b></h6>
            <iframe width="700" height="400" src="https://www.youtube.com/embed/{{ $highlight->video_url }}" frameborder="0"
                allowfullscreen>
            </iframe>
            <br>
            <h1><b>{{ $highlight->title }}</b></h1>
            
            <h3>{{ $highlight->description }}</h3>
            <hr>
            <br>
            @foreach ($hightlight_comment as $comment)
            <small class="text-muted">{{$comment->user->name}}</small>
                <p>{{$comment->comments}}</p>
            @endforeach

            <form method="POST" action="{{ route('usercomment.store') }}">
                @csrf
                <div class="mb-3">
                    <input type="number" hidden name="highlight_id" value="{{$highlight->id}}" >
                    <input type="text" name="comments" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter your comment">
                </div>
                <button type="submit" class="btn btn-primary">Comment submit</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
