@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">

                <h1 class="title">Login</h1>
                <form action="{{route('login')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="email" class="label">Email Adress</label>
                    <p class="control">
                        <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                    </p>
                    @if($errors->has('email'))
                    <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
                    <div class="field">
                    <label for="email" class="label">Password</label>
                    <p class="control">
                        <input type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" name="password" id="password" placeholder="password">
                    </p>
                                        </p>
                    @if($errors->has('password'))
                    <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
                </div>
                <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>
                <button class="button is-primary is-outlined is-fullwidth m-t-30">Login</button>
                </form>
            </div> 

        </div>
             <h5 class="has-text-centered"><a href="{{route('password.request')}}" class="is-muted">Forgot Your password?</a></h5>
    </div>
</div>
  
</div>
@include('includes.footer')

@endsection
