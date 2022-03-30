@extends('employees.layout')
@section('content')
    <div class="card">
        <div class="card-header">Contact US Page</div>
        <div class="card-body">

            <form action="{{ url('employee/' . $employees->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $employees->id }}" id="id" />
                <label>First Name</label></br>
                <input type="text" name="fname" id="fname" value="{{ $employees->name }}" class="form-control"></br>
                <label>Second Name</label></br>
                <input type="text" name="sname" id="sname" value="{{ $employees->name }}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{ $employees->address }}"
                    class="form-control"></br>
                <label>Phone Number</label></br>
                <input type="text" name="phonenum" id="phonenum" value="{{ $employees->mobile }}"
                    class="form-control"></br>
                <label>Date of Engagement</label></br>
                <input type="text" name="engagementdate" id="engagementdate" value="{{ $employees->mobile }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
