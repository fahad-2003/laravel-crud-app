@extends('layout')

@section('mainContent')
    <h1 class="page-title">Show Car</h1>

    <div class="car-details" style="border-color: {{$car->color}};">
        <h2 class="car-name">{{$car->name}}</h2>
        <p class="car-company"><strong>{{$car->company}}</strong></p>
    </div>

    <div class="edit-link">
        <a href="{{$car->id}}/edit" class="btn-edit">Edit Car</a>
    </div>
@endsection

@section('styles')
    <style>
        .page-title {
            text-align: center;
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .car-details {
            padding: 20px;
            border: 3px solid;
            border-radius: 8px;
            background-color: #f9f9f9;
            text-align: center;
            margin: 0 auto;
            max-width: 600px;
        }

        .car-name {
            font-size: 32px;
            color: #333;
            margin-bottom: 10px;
        }

        .car-company {
            font-size: 18px;
            color: #555;
        }

        .edit-link {
            text-align: center;
            margin-top: 20px;
        }

        .btn-edit {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-edit:hover {
            background-color: #0056b3;
        }
    </style>
@endsection
