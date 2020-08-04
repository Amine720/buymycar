@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Facebook</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <td scope="col">{{$user->name}}</td>
                <td scope="col">{{$user->email}}</td>
                <td scope="col">{{$user->phone}}</td>
                <td scope="col">{{$user->city}}</td>
                <td scope="col">
                    @if (isset($user->fburl))
                        <a href="{{$user->fburl}}" target="_blank">Visit Link</a>
                    @else
                        -
                    @endif    
                </td>
                <td scope="col">
                    @if (!$user->isAdmin())
                      <form action="{{ route('delete.user', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form>
                    @endif
                </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection