@extends('layouts.customer')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('userhome.index') }}" style="text-decoration: None;">FunOlympic</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Help</li>
            </ol>
        </nav>

        <br>
        <br>
        <!-- Scrollable modal -->

        <h3 style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#howtodelteaccount">How to delete account ?</h3>

        <br>
        <h3 style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#howtologout">How to log out ?</h3>
        
        <br>
        <h3 style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#howtocreate">How to create account?</h3>

        
    </div>
@endsection


<!-- Button trigger modal -->


<!-- Modal for how to delete account -->
<div class="modal fade" id="howtodelteaccount" tabindex="-1" aria-labelledby="howtodelteaccount" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="howtodelteaccount">How to Delete account?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>At first click at setting</p>
                <p>Then click at personaliazation...........</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<!-- Modal for How to logout -->
<div class="modal fade" id="howtologout" tabindex="-1" aria-labelledby="howtologout" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="howtologout">How to Delete account?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>For log out. You have to......................</p>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<!-- Modal for How to Create New account -->
<div class="modal fade" id="howtocreate" tabindex="-1" aria-labelledby="howtocreate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="howtocreate">How to Delete account?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>To create new account. You have to......................</p>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
