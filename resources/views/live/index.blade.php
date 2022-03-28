<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Live') }}
        </h2>
    </x-slot>
    <div class="container my-4">
        <a href="{{ route('live.create') }}" class="btn btn-primary btn-sm">Add Live video</a>
        <br><br>
        @if (Session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif


        @if ($live_data)
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($live_data as $liv)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $liv->title }}</td>
                            <td>
                                <a href="{{ route('live.show', $liv->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                <a href="{{ route('live.edit', $liv->id) }}" class="btn btn-success btn-sm">Edit</a>

                                <form action="{{ route('live.destroy', $liv->id) }}" method="post"
                                    class="btn btn-danger btn-sm">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @else
            <p>
                No data yet :(
            </p>
        @endif
    </div>
</x-app-layout>
