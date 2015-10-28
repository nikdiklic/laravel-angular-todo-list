@extends('layouts/main-layout')
@section('content')

<form method="POST" class="form-signin" action="/register">
    {!! csrf_field() !!}
<h2 class="form-signin-heading">Register</h2>
    <div>
        
        <input type="email"class="form-control" name="email" placeholder="Email address" value="{{ old('email') }}">
    </div>

    <div>
        <input type="password" class="form-control" placeholder="Password" name="password">
    </div>

    <div>
        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
    </div>

   <div>
        <input type="text" name="first_name"  class="form-control" placeholder="First Name" value="{{ old('first_name') }}">
    </div>

    <div>
        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Last Name">
    </div>

    <div>
        
        <input type="text" name="company" value="{{ old('company') }}" class="form-control" placeholder="Company">
    </div>


    <div class="form-group">
        
        <select name="country" class="form-control" >
            @foreach($countries as $key => $countryName)
                <option value="{{$key}}">{{$countryName}}</option>            
            @endforeach
        </select>
  

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
    
    <div>
        <button class="btn btn-large btn-primary" type="submit">Register</button>
    </div>
</form>

@endSection