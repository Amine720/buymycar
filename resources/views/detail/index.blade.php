@extends('layouts.app')

@section('content')
    {{-- {{ $car }}
    {{ $user }} --}}
    @php
        $gallery = explode('|', $car->images);
    @endphp
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <h1 class="mb-4" style="color: #C60053">Car infomations</h1>
                <div class="gallery mb-4">
                  <div class="main-image">
                    <img src="/storage/{{ $gallery[0] }}" width="100%" height="400px" />
                  </div>
                  <div class="preview-image">
                    @foreach ($gallery as $g)
                      <div class="individual">
                        <img src="/storage/{{ $g }}" width="180px" height="120px" />
                      </div>
                    @endforeach
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <h4 class="mb-4">Maker/model:</h4>
                    <h4 class="mb-4">Price:</h4>
                    <h4 class="mb-4">Mileage:</h4>
                    <h4 class="mb-4">Description:</h4>
                    <h4 class="mb-4">Type:</h4>
                    <h4 class="mb-4">Doors:</h4>
                    <h4 class="mb-4">Cylinders:</h4>
                    <h4 class="mb-4">Transmission:</h4>
                    <h4 class="mb-4">Fuel:</h4>
                    <h4 class="mb-4">City:</h4>
                  </div>
                  <div class="col-8">
                    <h4 class="mb-4">{{ $car->price }}</h4>
                    <h4 class="mb-4">{{ $car->price }}</h4>
                    <h4 class="mb-4">{{ $car->mileage }}</h4>
                    <h4 class="mb-4">{{ $car->description }}</h4>
                    <h4 class="mb-4">{{ $car->type }}</h4>
                    <h4 class="mb-4">{{$car->doors }}</h4>
                    <h4 class="mb-4">{{ $car->cylinders }}</h4>
                    <h4 class="mb-4">{{$car->transmission }}</h4>
                    <h4 class="mb-4">{{$car->fuel }}</h4>
                    <h4 class="mb-4">{{ $car->city }}</h4>
                  </div>
                </div>
                @if (auth()->user()->isAdmin() && $car->active == 0)
                  <form action="{{ route('active.car', $car->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-lg btn-success">Approve</button>
                  </form>
                @endif
                {{-- <ul class="list-group" style="width: 70%">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Maker/model:
                      <span>{{ $car->maker }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Price:
                      <span>{{ $car->price }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Mileage:
                      <span>{{ $car->mileage }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Description:
                      <span>{{ $car->description }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Type:
                      <span>{{ $car->type }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Doors:
                      <span>{{ $car->doors }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cylinders:
                      <span>{{ $car->cylinders }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Transmission:
                      <span>{{ $car->transmission }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Fuel:
                      <span>{{ $car->fuel }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        City:
                      <span>{{ $car->city }}</span>
                    </li>
                </ul> --}}
            </div>
            <div class="col-4">
                <h1 class="mb-4" style="color: #C60053">User infomations</h1>
                <h4 class="mb-5">Name: {{ $user->name }}</h4>
                <h4 class="mb-5">Email: {{ $user->email }}</h4>
                <h4 class="mb-5">Phone: {{ $user->phone }}</h4>
                <h4 class="mb-5">City: {{ $user->city }}</h4>
                @if (isset($user->fburl))
                    <h4 class="mb-5">Facebook: <a href="{{ $user->fburl }}" target="_blank">Visit profile</a></h4>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
      .individual img{
        margin: 7px;
        cursor: pointer;
      }
      .individual{
        display: inline;
      }
      .selected{
        border: 2px solid crimson;
      }
    </style>
@endsection

@section('js')
    <script>
      const previewImage = document.querySelector('.preview-image');
      const firstPreviewImage = document.querySelector('.preview-image div img');
      const allPreviewImage = document.querySelectorAll('.preview-image div img');
      const mainImage = document.querySelector('.main-image img');

      firstPreviewImage.classList.add('selected');

      previewImage.addEventListener('click', e => {

        allPreviewImage.forEach(imgEl => {
          imgEl.classList.remove('selected');
        })

        const source = e.target.attributes[0].textContent;
        e.target.classList.add('selected');
        mainImage.src = source;
      })

    </script>
@endsection