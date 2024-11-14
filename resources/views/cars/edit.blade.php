@extends('layout')

@section('title')
Update / Delete car
@endsection

@section('mainContent')
    <h2 class="page-title">Update/Delete Car</h2>

    <form class="car-form" method="POST" action="{{ route('cars.update', $car->id) }}">
        @csrf
        @method('put')
        <fieldset>

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input id="name" name="name" type="text" placeholder="Enter Name" class="form-input" value="{{$car->name}}" required="required">
            </div>

            <div class="form-group">
                <label for="color" class="form-label">Color</label>
                <input id="color" name="color" type="text" placeholder="Enter color" class="form-input" value="{{$car->color}}" required="required">
            </div>

            <div class="form-group">
                <label for="company" class="form-label">Company</label>
                <input id="company" name="company" type="text" placeholder="Enter company name" class="form-input" value="{{$car->company}}" required="required">
            </div>

            <div class="form-group">
                <button id="submit" name="submit" class="btn btn-update">Update</button>
            </div>

        </fieldset>
    </form>

    <form class="car-form" method="POST" action="{{ route('cars.destroy', $car->id) }}">
        @csrf
        @method('delete')
        <div class="form-group">
            <button id="submit" name="submit" class="btn btn-delete">Delete</button>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="back-link">
        <a href="{{ route('cars.index') }}" class="back-btn">Show Cars</a>
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

        .car-form {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-update {
            background-color: #007bff;
        }

        .btn-update:hover {
            background-color: #0056b3;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-btn {
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #007bff;
            color: white;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
@endsection
