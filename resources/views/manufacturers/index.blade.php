@extends('layouts.main')

@section('content')
<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Manufacturers</h2>
                  </div>
                </div>
              
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($manufacturers as $manufacturer)
                    <tr>
                        <th scope="row">{{ $manufacturer->id }}</th>
                        <td>{{ $manufacturer->name }}</td>
                        <td>{{ $manufacturer->address }}</td>
                        <td>{{ $manufacturer->phone }}</td>
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