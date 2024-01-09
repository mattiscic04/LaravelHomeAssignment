@extends('layouts.main')

@section('content')
<h1>All Cars</h1>
<a href="{{route('cars.create') }}">Add new Car</a>
<a href="{{route('cars.show', 1) }}">Show Cars</a> 
@endsection