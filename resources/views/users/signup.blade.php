@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('signup.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="firs_name">First Name</label>
            <input type="text" class="form-control" id="firs_name"  name="first_name">      
            <div class="text-danger">{{ $errors->first('first_name') }}</div>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name"   name="last_name">
            <div class="text-danger">{{ $errors->first('last_name') }}</div>
        </div>
        <div class="form-group">
          <label for="min_age">Tanggal lahir</label>
          <input type="date"
            class="form-control" name="min_age" id="min_age" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  name="email">
            <div class="text-danger">{{ $errors->first('email') }}</div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password"  name="password">
            <div class="text-danger">{{ $errors->first('password') }}</div>
        </div>
        <div class="form-group">
            <label for="cpassword">Comfirm Password</label>
            <input type="password" class="form-control" id="cpassword"  name="password_confirmation">            
            <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
        </div>
        <button type="submit" class="btn btn-primary">Sign-up</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</body>
</html>