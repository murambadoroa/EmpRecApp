@extends('employees.layout')
@section('content')
    <div class="card">
        <div class="card-header">Employees Page</div>
        <div class="card-body">

            <form action="{{ url('employee') }}" method="post">
                {!! csrf_field() !!}
                <label>First Name</label></br>
                <input type="text" name="fname" id="fname" class="form-control"></br>
                <label>Second Name</label></br>
                <input type="text" name="sname" id="sname" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Phone Number</label></br>
                <input type="text" name="phonenum" id="phonenum" class="form-control"></br>
                <label>Engagement Date</label></br>
                <input type="text" name="engagementdate" id="engagementdate" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
