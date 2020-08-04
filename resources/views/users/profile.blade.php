@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('update.user', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" value="{{ $user->phone }}" name="phone" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control" value="{{ $user->city }}" name="city" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fburl" class="col-md-4 col-form-label text-md-right">{{ __('Your facebook account url') }}</label>

                        <div class="col-md-6">
                            <input id="fburl" type="text" value="{{ $user->fburl }}" class="form-control" name="fburl" />
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection