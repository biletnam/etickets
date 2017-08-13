@extends('layouts.app')

@section('content')

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">

                    <h1 class="title">Join  etickets    today</h1>
                    <form action="{{route('register')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="field">
                            <label for="email" class="label">Name</label>
                            <p class="control">
                                <input type="text" class="input {{$errors->has('name') ? 'is-danger' : ''}}" name="name" id="name" placeholder="name" value="{{old('name')}} " required>
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="email" class="label">Email Adress</label>
                            <p class="control">
                                <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" name="email" id="email" placeholder="name@example.com" value="{{old('email')}} " required>
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>

                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label for="email" class="label">Password</label>
                                    <p class="control">
                                        <input type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" name="password" id="password" placeholder="password" required>
                                    </p>
                                    </p>
                                    @if($errors->has('password'))
                                        <p class="help is-danger">{{$errors->first('password')}}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="column">

                                <div class="field">
                                    <label for="email" class="label">Password Confirmation</label>
                                    <p class="control">
                                        <input type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" name="confirmed" id="confirmed" placeholder="confirm password" required>
                                    </p>
                                    </p>
                                    @if($errors->has('confirmed'))
                                        <p class="help is-danger">{{$errors->first('confirmed')}}</p>
                                    @endif
                                </div>
                            </div>  </div>

                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Register</button>
                    </form>
                </div>

            </div>
            <h5 class="has-text-centered"><a href="{{route('login')}}" class="is-muted">Already have an account? Login</a></h5>
        </div>
    </div>

    </div>
    @include('includes.footer')

@endsection

