@extends('layout')

@section('title')
List cars
@endsection

@section('mainContent')
    <h1 class="page-title">List of Cars</h1>

    <form class="search-form" method="GET" action="{{ route('cars.index') }}">
        <input type="text" name="search" placeholder="Search by Name or Company" class="search-input" value="{{ request('search') }}">
        <button type="submit" class="btn-search">Search</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="car-list-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
        <tr>
            <td><a href="{{ route('cars.show', $car->id) }}">{{ $car->name }}</a></td>
            <td>{{ $car->company }}</td>
            <td>
                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-edit">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="pagination-links">
        {{ $cars->links() }}
    </div>

    <div class="add-new-car">
        <a href="{{ route('cars.create') }}" class="btn-add-car">Add New Car</a>
    </div>
@endsection

@section('styles')
    <style>
        .page-title {
            text-align: center;
            font-size: 28px;
            color: #333;
            margin-bottom: 30px;
        }

        .search-form {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-input {
            padding: 8px;
            font-size: 16px;
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn-search {
            padding: 8px 12px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .btn-search:hover {
            background-color: #0056b3;
        }

        .car-list-table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        .car-list-table th,
        .car-list-table td {
            padding: 12px 15px;
            text-align: left;
        }

        .car-list-table th {
            background-color: #f8f9fa;
            font-weight: bold;
            border-bottom: 2px solid #ddd;
        }

        .car-list-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .car-list-table tr:hover {
            background-color: #e9ecef;
        }

        .btn {
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }

        .btn-edit {
            background-color: #007bff;
        }

        .btn-edit:hover {
            background-color: #0056b3;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .pagination-links {
            text-align: center;
            margin-top: 20px;
        }

        .pagination-links a {
            padding: 10px 15px;
            text-decoration: none;
            margin: 0 5px;
            border-radius: 5px;
        }

        .pagination-links .disabled {
            color: #ccc;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
        }

        .add-new-car {
            text-align: center;
            margin-top: 20px;
        }

        .btn-add-car {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
        }

        .btn-add-car:hover {
            background-color: #218838;
        }
    </style>
@endsection
