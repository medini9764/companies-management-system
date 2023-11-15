@extends('layouts.dashboard')
@section('content')
<h1 class="h3 mb-4 text-gray-800">View</h1>
<div class="card w-75 mx-auto" >
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">View Employee</h5>
            <a href="/employee" class="btn btn-info">Back</a>
        </div>

        <table class="no-border" cellspacing="50">
            <tbody>
                <!--First Name -->
                <tr>
                    <td width="50%" class="tb-head">First Name</td>
                    <td width="50%">{{ $employee->first_name }}</td>
                </tr>
                <!--Last Email -->
                <tr>
                    <td width="50%" class="tb-head">Last Name</td>
                    <td width="50%">{{ $employee->last_name }}</td>
                </tr>
                <!--Comapny -->
                <tr>
                    <td width="50%" class="tb-head">Company</td>
                    <td width="50%">{{ $employee->company->name }}</td>
                </tr>
                <!--Email -->
                <tr>
                    <td width="50%" class="tb-head">Email</td>
                    <td width="50%">{{ $employee->email }}</td>
                </tr>
                <!--Phone -->
                <tr>
                    <td width="50%" class="tb-head">Phone</td>
                    <td width="50%">{{ $employee->phone }}</td>
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
