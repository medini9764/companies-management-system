@extends('layouts.dashboard')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Companies</h1>
<div class="card w-100 " >
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
        <h5 class="card-title">List</h5>
        <a class="nav-link " href="{{ route('company.create')}}" >
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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Website</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Action</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    {{-- @php $count = 1 @endphp --}}
                    @foreach($companies  as $company)
                    <tr>
                        <td>{{ ($companies->currentPage() - 1) * $companies->perPage() + $loop->index + 1 }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->website }}</td>
                        <td>
                            @if ($company->logo)
                                <img src="{{ asset('storage/' . $company->logo ) }}" alt="Company Logo" width="100" height="100">
                            @endif
                        </td>
                        <td>
                            <!-- Update -->
                            <a href="{{ route('company.edit', ['id' => $company->id]) }}" class="btn btn-warning ml-auto">Update</a>
                            <!-- Delete -->
                            <a href="delete-company/{{ $company->id }}" class="btn btn-danger ml-auto">Delete</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{  $companies->links('pagination::bootstrap-5')  }}
            </div>
        </div>
    </div>
  </div>



@endsection
