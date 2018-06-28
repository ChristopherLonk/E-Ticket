@extends('layouts.app')

@section('content')
    @auth
        <div class="container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="form-group">
                    <label for="formGroupExampleInput2">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <select class="form-control" name="role">
                        <option>user</option>
                        <option>teamleader</option>
                        <option>admin</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

    @else
        <div class="container">
            <div class="row justify-content-center">
                <h1 >
                    Permission Denied
                </h1>
            </div>
        </div>
    @endauth
@endsection
