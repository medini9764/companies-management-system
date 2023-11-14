@extends('layouts.dashboard')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Update</h1>
<div class="card w-75 mx-auto" >
    <div class="card-body">
      <h5 class="card-title ">Update  Employee</h5>
      <form action="{{ route('employee.update', ['id' => $employee->id]) }}" method="post"  enctype="multipart/form-data">
        @csrf
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif

        <!--First Name input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1">First Name</label>
            <input type="text"  class="form-control" name="first_name" value="{{ $employee->first_name }}"/>
            <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
        </div>

        <!--Last Name input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1">Last Name</label>
            <input type="text"  class="form-control" name="last_name" value="{{ $employee->last_name }}"/>
            <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>
        </div>

        <!-- Company dropdown/select input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="company_id">Company</label>
            <select class="form-control" id="company_id" name="company_id">
                <option value="" disabled selected>Select a company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" @if($employee->company_id == $company->id) selected @endif>{{ $company->name }}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('company_id'){{ $message }}@enderror</span>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1">Email</label>
            <input type="email"  class="form-control" name="email" value="{{ $employee->email }}"/>
            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        </div>

        <!-- Phone input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1">Phone</label>
            <input type="text"  class="form-control" name="phone" value="{{ $employee->phone }}"/>
            <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
        </div>


        <!-- Submit button -->
        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>

      </form>
    </div>
  </div>
@endsection
