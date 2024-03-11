@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                To proceed further, please follow the steps given below:
                <ol>
                    <li>Deposit ₹500 into admin's account.</li>
                    <li>Submit payment proof <span class="text-primary">here</span></li>
                </ol>
            </div>
            <div class="col-md-6">
                <b>Account creation date:</b> {{ Auth::user()->created_at }}
                <br>
                <b>Account Status:</b> {{ (Auth::user()->approved) ? 'Approved' : 'Approval pending from admin' }}
                <br><b>Admin Remarks:</b> dummy remarks from admin
            </div>
            
        </div>
    </div>
        
@endsection