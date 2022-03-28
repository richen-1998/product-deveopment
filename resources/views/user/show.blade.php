
@extends('layouts.customer')
@section('content')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-4">
            <h6>Profile Information</h6>
            <p>You account's profile informaiton and email address</p>
        </div>
        <div class="col-md-8">
            <form action="">
                <label for="">Name</label>
                <input type="text" name="" value="{{$user->name}}" id="" readonly class="form-control">
                <br>
                <label for="">Email</label>
                <input type="text" name="" value="{{$user->email}}" id="" readonly class="form-control">
            </form>
        </div>
    </div>
</div>
@endsection

