@extends('layouts.main')

@section('content')
<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Cars Models</h2>
                    <div class="ml-auto">
                      <a href="{{ route('cars.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
               @include('cars._filter')
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Model</th>
                      <th scope="col">Year</th>
                      <th scope="col">Salesperson Email</th>
                      <th scope="col">Manufactures</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($success = session('success'))
                      <div class="alert alert-success">{{ $success }}</div>
                    @endif
                    @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->salesperson_email }}</td>
                        <td>{{ $car->manufacturers->name }}</td>
                        <td width="150">
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection