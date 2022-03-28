<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Highlight') }}
        </h2>
    </x-slot>
    <div class="container my-4">
        <a href="{{ route('highlight.create') }}" class="btn btn-primary btn-sm">Add highlights</a>
        <br><br>
        @if (Session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif


        @if ($highlight_data)
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($highlight_data as $hight)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $hight->title }}</td>
                            <td>
                                <a href="{{ route('highlight.show', $hight->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                <a href="{{ route('highlight.edit', $hight->id) }}" class="btn btn-success btn-sm">Edit</a>

                                <form action="{{ route('highlight.destroy', $hight->id)}}" method="post" class="btn btn-danger btn-sm">
                                    @csrf
                                     @method('delete')
                                     <button type="submit">Delete</button></form>
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
