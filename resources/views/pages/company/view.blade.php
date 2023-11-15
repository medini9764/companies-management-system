@extends('layouts.dashboard')
@section('content')
<h1 class="h3 mb-4 text-gray-800">View</h1>
<div class="card w-75 mx-auto" >
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">View Company</h5>
            <a href="/company" class="btn btn-info">Back</a>
        </div>
        
        <table class="no-border" cellspacing="50">
            <tbody>
                <!--Comapny Name -->
                <tr>
                    <td width="50%" class="tb-head">Company Name</td>
                    <td width="50%">{{ $company->name }}</td>
                </tr>
                <!--Comapny Email -->
                <tr>
                    <td width="50%" class="tb-head">Email</td>
                    <td width="50%">{{ $company->email }}</td>
                </tr>
                <!--Comapny Logo -->
                <tr>
                    <td width="50%" class="tb-head">Logo</td>
                    <td width="50%">
                        @if ($company->logo)
                        <div id="logoPreview" style="max-width: 200px; margin-top: 10px;">
                            <img id="previewImage" src="{{ asset('storage/' . $company->logo ) }}" alt="Logo Preview" style="max-width: 100%; height: auto;">
                        </div>
                        @endif
                    </td>
                </tr>
                <!--Comapny Website -->
                <tr>
                    <td width="50%" class="tb-head">WebSite</td>
                    <td width="50%">{{ $company->website }}</td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
  <style>
    .tb-head{
        font-weight: 600;
        padding: 6px 6px;
        vertical-align:top;
    }
  </style>
@endsection
