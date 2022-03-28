<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Request') }}
        </h2>
    </x-slot>
    <div class="container my-5 ">

        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Request by</th>
                    <th scope="col">Request</th>
                    <th scope="col">Sent time</th>
                   
                </tr>
            </thead>
            <tbody>
    
                @foreach ($user_request as $request)
                    <tr>
                        
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $request->user->name }}</td>
                        <td>{{ $request->user_request }}</td>
                        <td>{{ $request->created_at }}</td>
                        
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    </div>
</x-app-layout>
