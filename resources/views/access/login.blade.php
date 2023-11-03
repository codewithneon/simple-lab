@extends('root')
@section('body')
    <div class="container">
        <div class="row justify-content-center vh-100 align-content-center">
            <div class="my-3 text-center">
                <h5>Sign In</h5>
            </div>
            @if(config('auth.allow.login'))
                <form
                    method="post"
                    class="card col-sm-8 col-lg-4 pt-4"
                    action="{{route('access.login.store')}}">
                    @csrf
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input
                                required
                                name="email"
                                type="email"
                                aria-label="email"
                                class="form-control"
                                placeholder="Email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input
                                required
                                name="password"
                                type="password"
                                class="form-control"
                                aria-label="password"
                                placeholder="Password"/>
                            <span class="input-group-text toggle-password">
                                <i class="fa-regular fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex form-group justify-content-end">
                        <a class="mt-3" href="{{route('access.recovery.index')}}">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn my-3 w-100 btn-warning btn-fill-hover">
                        <span>Sign In</span>
                    </button>
                </form>
            @else
                @include('access.empty',['type'=>'login'])
            @endif
            <div class="my-3">
                <p class="text-center">
                    <span>Are you new here?</span>
                    <a href="{{route('access.register.index')}}">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
@endsection

