@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($brands as $brand)
            <li>
                {{$brand -> name}}
                <ul>
                    @foreach ($brand->models as $model)
                        <li>{{$model -> name}}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection