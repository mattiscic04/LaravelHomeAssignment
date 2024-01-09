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
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
                        <div class="input-group mb-3">
                          <select class="custom-select">
                            <option value="" selected>All Manufacturers</option>
                            <option value="1">Company One</option>
                            <option value="2">Company Two</option>
                            <option value="3">Company Three</option>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                    @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->salesperson_email }}</td>
                        <td>{{ $car->manufacturers->name }}</td>
                        <td width="150">
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                            <a href="" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
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

<a href="{{route('cars.create') }}">Add new Car</a>
<a href="{{route('cars.show', 1) }}">Show Cars</a>  
@endsection