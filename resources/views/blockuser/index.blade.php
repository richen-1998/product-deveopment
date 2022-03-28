<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Block User') }}
        </h2>
    </x-slot>
    
    <br><br>
    <div class="container">
        @if (Session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
    </div>
@endif
        @if ($users)
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>

                                <form action="{{ route('blockuser.destroy', $user->id) }}" method="post"
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

    </div>
</x-app-layout>
