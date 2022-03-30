@extends('employees.layout')
@section('content')
    <div class="card">
        <div class="card-header">Employees Page</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">First Name : {{ $employees->fname }}</h5>
                <h5 class="card-title">Second Name : {{ $employees->sname }}</h5>
                <p class="card-text">Address : {{ $employees->address }}</p>
                <p class="card-text">Phone Number : {{ $employees->phonenum }}</p>
                <h5 class="card-title">Engagement Date : {{ $employees->engagementdate }}</h5>
            </div>

            </hr>

        </div>
    </div>
