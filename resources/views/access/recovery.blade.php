@extends('root')
@section('body')
    <div class="container">
        <div class="row justify-content-center vh-100 align-content-center">
            <div class="p-3 text-center">
                <h5>Recovery</h5>
            </div>
            @if(config('auth.allow.recovery'))
                <form method="post" action="{{route('access.recovery.store')}}" class="card col-sm-8 col-lg-4">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input
                                required
                                type="email"
                                name="email"
                                aria-label="email"
                                class="form-control"
                                placeholder="Email"/>
                        </div>
                    </div>
                    <button type="submit" class="btn my-3 w-100 btn-warning btn-fill-hover">
                        <span>Continue</span>
                    </button>
                </form>
            @else
                @include('access.empty', ['type'=>'recovery'])
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

