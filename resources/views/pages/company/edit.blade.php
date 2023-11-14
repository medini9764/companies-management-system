@extends('layouts.dashboard')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Update</h1>
<div class="card w-75 mx-auto" >
    <div class="card-body">
      <h5 class="card-title ">Update New Company</h5>
      <form action="{{ route('company.update', ['id' => $company->id]) }}" method="post"  enctype="multipart/form-data">
        @csrf
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif

        <!-- Name input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1">Company Name</label>
            <input type="text"  class="form-control" name="name" value="{{ $company->name }}"/>
            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1">Email</label>
            <input type="email"  class="form-control" name="email" value="{{ $company->email }}"/>
            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        </div>

        <!-- Logo input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1">Logo</label>
            <br>
            <div class="input-group mb-2">
                <input type="file" id="file" class="x form-control" name="logo" value="{{ old('logo') }}" /><br>
            </div>
            <!-- Image preview container -->
            @if ($company->logo)
            <div id="logoPreview" style="max-width: 200px; margin-top: 10px;">
                <img id="previewImage" src="{{ asset('storage/' . $company->logo ) }}" alt="Logo Preview" style="max-width: 100%; height: auto;">
            </div>
            @endif

            <span class="text-danger">@error('logo'){{ $message }}@enderror</span>
        </div>

        <!-- Website input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1">Website</label>
            <input type="text"  class="form-control" name="website" value="{{ $company->website }}"/>
            <span class="text-danger">@error('website'){{ $message }}@enderror</span>
        </div>


        <!-- Submit button -->
        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>

      </form>
    </div>
  </div>
@endsection
