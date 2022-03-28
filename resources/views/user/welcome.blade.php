@extends('layouts.customer')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route ('userhome.index')}}" style="text-decoration: None;">FunOlympic</a></li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>

        @if ($archive_data)
        <div class="row">
            @foreach ($archive_data as $arch)
            <div class="card col-md-4 mb-4" style="min-height: 350px; border:None;">
                    <div class="card-body">
                        <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/{{ $arch->video_url }}" frameborder="0"
                        allowfullscreen>
                        </iframe>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('userhome.show', $arch->id) }}" style="text-decoration: None;">{{$arch->title}}</a>
                    </div>
                </div>
            @endforeach
        </div>
        @else
            <p>
                No data yet :(
            </p>
        @endif

    </div>
@endsection