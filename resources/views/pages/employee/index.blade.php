@extends('layouts.dashboard')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Employees</h1>
<div class="card w-100 " >
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
        <h5 class="card-title">List</h5>
        <a class="nav-link " href="{{ route('employee.create')}}" >
            <button id="rowAdder" type="button" class="btn btn-dark ml-auto">
                <span class="bi bi-plus-square-dotted">
                </span> ADD
            </button>
        </a>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    {{-- @php $count = 1 @endphp --}}
                    @foreach($employees  as $employee)
                    <tr>
                        <td>{{ ($employees->currentPage() - 1) * $employees->perPage() + $loop->index + 1 }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        @if (isset($employee->company->name))
                            <td>{{ $employee->company->name }}</td>
                        @else
                            <td></td>
                        @endif
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>
                            <!-- Update -->
                            <a href="{{ route('employee.edit', ['id' => $employee->id]) }}" class="btn btn-warning ml-auto">Update</a>
                            <!-- Delete -->
                            <a href="delete-employee/{{ $employee->id }}" class="btn btn-danger ml-auto">Delete</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{  $employees->links('pagination::bootstrap-5')  }}
            </div>
        </div>
    </div>
  </div>



@endsection
