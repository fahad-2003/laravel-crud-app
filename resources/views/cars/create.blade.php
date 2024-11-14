@extends('layout')

@section('title')
Create a new car
@endsection

@section('mainContent')
    <h2>Create Car</h2>
    <form method="post" action="{{ route('cars.store') }}" class="car-form">
        @csrf
        <fieldset>
            <legend>Create a new car</legend>

            <div class="form-group">
                <label for="name">Name:</label>
                <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control">
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input id="color" name="color" type="text" placeholder="Enter color" class="form-control">
            </div>

            <div class="form-group">
                <label for="company">Company:</label>
                <input id="company" name="company" type="text" placeholder="Enter company name" class="form-control">
            </div>

            <div class="form-group">
                <button id="submit" name="submit" class="btn-submit">Save</button>
            </div>
        </fieldset>
    </form>

    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <a href="{{ route('cars.index') }}" class="link">Show Cars</a>
    </div>

@endsection

@section('styles')
    <style>
        .car-form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }

        .error-messages {
            margin-top: 20px;
            padding: 10px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
        }

        .error-messages ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .error-messages li {
            color: #721c24;
        }

        .link {
            color: #007bff;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
@endsection
