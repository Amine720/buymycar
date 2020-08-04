@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="mb-4">
            <a href="{{ route('cars') }}" class="btn btn-md btn-success">Active cars</a>
            <a href="{{ route('new.cars') }}" class="btn btn-md btn-success">New cars</a>
        </div>
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">Photo</th>
                <th scope="col">Maker/Model</th>
                <th scope="col">Year</th>
                <th scope="col">Price (DH)</th>
                <th scope="col">Mileage (KM)</th>
                <th scope="col">Type</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @if (isset($cars))
                @foreach ($cars as $car)
                    @php
                        $mainImage = explode('|', $car->images);
                        $car->images = $mainImage[0];
                    @endphp
                    <td scope="col">
                        <img src="/storage/{{ $car->images }}" width="80px" />
                    </td>
                    <td scope="col">{{$car->maker}}</td>
                    <td scope="col">{{$car->year}}</td>
                    <td scope="col">{{$car->price}}</td>
                    <td scope="col">{{$car->mileage}}</td>
                    <td scope="col">{{$car->type}}</td>
                    <td scope="col">
                        <a href="{{route('detail.car', $car->id)}}" class="btn btn-sm btn-success">View details</a>
                    </td>
                    <td scope="col">
                        <form action="{{ route('active.car', $car->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-sm btn-success">Active</button>
                        </form>
                    </td>
                    <td scope="col">
                        <form action="{{ route('delete.car', $car->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection