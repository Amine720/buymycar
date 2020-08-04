@extends('layouts.app')

@section('content')
<div class="container">
    <div class="sell">
        @auth
            <a class="sell-link" href="{{ route('sell.car') }}">Sell</a>
        @else
            <a class="sell-link" href="{{ route('login') }}">Sell</a>
        @endauth
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" style="background-color: blueviolet;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
            {{-- <div class="text-center mb-3">
                <a href="#" class="btn btn-lg all">View All</a>
            </div> --}}
            @if (count($cars) > 0)
                <div class="cars">
                    @foreach ($cars as $car)
                        @php
                            $mainImage = explode('|', $car->images);
                            $car->images = $mainImage[0];
                        @endphp
                        <div class="card mx-2" style="width: 15rem;">
                            <img src="/storage/{{ $car->images }}" height="150px" class="card-img-top" alt="car picture">
                            <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between;">
                                <h3 class="card-title">{{ $car->maker }}</h3>
                                <h5 class="card-text">{{ $car->price }} DH</h5>
                                <a href="{{ route('detail.car', $car->id) }}" class="btn btn-primary">See details...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <h1 class="text-center">No cars for sell</h1>
            @endif
        </div>
    </div>
</div>
@endsection

@section('css')
    <style>
        /* .all{
            background-color: #C60053;
            color: white;
        } */
        .sell {
            background-color: #c60053;
            color: white;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 19px;
            position: fixed;
            bottom: 30px;
            left: 2%;
            z-index: 10;
        }

        .sell a {
            text-decoration: none;
            color: white;
        }

        .cars{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-row-gap: 30px;
        }

    </style>
@endsection