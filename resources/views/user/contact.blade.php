@extends('layouts.customer')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('userhome.index') }}"
                        style="text-decoration: None;">FunOlympic</a></li>
                <li class="breadcrumb-item active" aria-current="page">request</li>
            </ol>
        </nav>
        <br>
        <br>
        
        @if (Session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
    
        <h3> Contact Number ☎</h3>
        <a> +04266666666 </a><br>
        <a> +04299798466 </a><br>
        <a> +04332211445 </a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3> Address 🚂</h3>
        <a> Yokohama,</a><br>
        <a> Tokyo</a><br>
        <br>
        <br>

      


        <form action="{{ route('userrequest.store') }}" method="POST">
            @csrf
            <label>
                <h3><b>Your request</b></h3>
            </label>
            <input type="text" name="user_request" id="" class="form-control">
            <br>
            <button type="submit" class="btn btn-sm btn-primary mr-auto">Submit your request</button>
        </form>
    </div>
@endsection
