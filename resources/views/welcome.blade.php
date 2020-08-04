<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        a.btn, .logout{
            padding: 10px 13px;
            font-size: 18px;
            border-radius: 8px;
            color: white; 
            background-color: #C60053;
        }
        .logout{
            margin-left: 10px;
        }
        input.search{
            width: 400px;
        }
        .hero{
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background-size: cover;
            background-repeat: no-repeat;
            padding: 14px 60px;
        }
        section{
            padding-top: 200px;
            height: 100%;
        }
        section h1, section h4{
            color: #C60053;
            font-weight: bold;
        }
        section h4{
            margin-bottom: 30px;
        }
        .model-list, .brand-list{
            display: none
        }
        .brand-list:hover{
            cursor: pointer;
        }
        .show{
            display: block;
        }
        .cars{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-row-gap: 30px;
        }
        .gallery{
            margin: 60px;
        }
    </style>
    <title>BuyMyCar</title>
</head>
<body>
    <div class="hero" style="background-image: url({{asset('img/car-2.jpg')}})">
        <nav class=".nav">
            <div>
                <h1 class="text-white">ByMyCar</h1>
            </div>
            <div style="position: relative;">
                <input class="form-control search" type="text" placeholder="search for a car..." onfocus="showResults()" />
                <div  class="search-container" style="position: absolute; right:0; left: 0; display: none;">
                    <ul class="list-group brand-list">
                        @foreach ($brands as $brand)
                            <li class="list-group-item">
                                {{$brand->name}}
                                <ul class="list-group model-list">
                                    @foreach ($brand->models as $model)
                                        <li class="list-group-item">{{$model->name}}</li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- @auth
                <div class="if-auth d-flex al">
                    <a href="{{ route('login') }}" class="btn btn-sm">
                        Profile
                    </a>                
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type='submit' class="btn btn-sm logout">
                            Logout
                        </button> 
                    </form>     
                </div>              
            @else
                <a href="{{ route('login') }}" class="btn btn-sm">
                    Login
                </a>
            @endauth --}}
            @auth
                <div class="btn-group">
                    <button type="button" style="background-color: #C60053; color: white;" class="btn btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{auth()->user()->name}}
                    </button>
                    <div class="dropdown-menu">
                        @if (auth()->user()->isAdmin())
                            <a class="dropdown-item" href="{{ route('detail.user') }}">Users</a>
                            <a class="dropdown-item" href="{{ route('cars') }}">Cars</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('profile.user') }}">profile</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-sm">
                    Login
                </a>
            @endauth
        </nav>
        
        <section>
            <h1>Welcome to ByMyCar</h1>
            <h4>Car selling site in Morocco</h4>
            <div>
                <a class="btn btn-lg" href="{{ route('home') }}" style="margin-right: 20px;">View all cars</a>
                @auth
                    <a class="btn btn-lg" href="{{ route('sell.car') }}">Sell your car</a>
                @else
                    <a class="btn btn-lg" href="{{ route('login') }}">Sell your car</a>
                @endauth
            </div>
        </section>
        
    </div>
    @if (count($cars) > 0)
    <div class="gallery">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                                {{-- <p class="card-text">{{ $car->description }}</p> --}}
                                <a href="{{ route('detail.car', $car->id) }}" class="btn btn-primary">See details...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="mt-5 text-center">
                    <a class="btn btn-lg" href="{{ route('home') }}" style="width: 30%">View all cars</a>
                </div>
            </div>
        </div>
    </div>
    @endif
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const brandList = document.querySelector('.brand-list');
        const modelList = document.querySelectorAll('.model-list');
        const searchContainer = document.querySelector('.search-container');

        const showResults = () => {
            searchContainer.style.display = 'block';
            searchContainer.style.maxHeight = '400px';
            searchContainer.style.overflow = 'scroll';
            brandList.style.display = 'block';
        };

        brandList.addEventListener('click', e => {
            e.target.children[0].classList.toggle('show')
        });

        modelList.forEach((modelEl) => {
            modelEl.addEventListener('click', e => {
                e.stopPropagation();
                console.log(e.target.innerText)
            })
        });

        document.querySelector('section').addEventListener('click', e => {
            searchContainer.style.display = 'none';
            brandList.style.display = 'none'
        })

    </script>
</body>
</html>