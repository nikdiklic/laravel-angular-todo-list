@extends('layouts/main-layout')
@section('content')


<form method="POST" class="form-signin" action="/login">
    {!! csrf_field() !!}
<div class="form-group">


        <h2 class="form-signin-heading">Please sign in</h2>


    <div>
        
        <input type="email" placeholder="Email address" class="form-control" name="email" value="{{ old('email') }}">

    </div>

    <div>
        
        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
    </div>

   <div class="checkbox">
          <label>
                <input type="checkbox" value="remember-me"> Remember me
          </label>
    </div>
        @if (count($errors)>0)
            <div class="alert alert-danger">
            
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{  $error  }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

    <div class="row">
        <div class="col-md-7">
            
            <div>
                <button class="btn btn-lg btn-primary" type="submit">Sign in</button>
            </div>
        </div>
        

        <div class="col-md-5">

            <div>
                <a href="{{ route('register') }}" class="btn btn-lg btn-primary">Register</a>
            </div>
        </div>
    </div>



    </div>
@endSection