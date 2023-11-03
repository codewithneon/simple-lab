@extends('root')
@section('body')
    <div class="container">
        <div class="row justify-content-center vh-100 align-content-center">
            <div>
                <h5 class="text-center my-3">Sign up</h5>
            </div>
            @if(config('auth.allow.register'))
                <form
                    method="post"
                    class="card col-sm-8 pt-4"
                    enctype="multipart/form-data"
                    action="{{route('access.register.store')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 col-lg-4">
                            <label type="button" for="image" class="form-control d-flex justify-content-center">
                                <img
                                    id="preview"
                                    width="135px"
                                    alt="Upload Photo"
                                    src="{{asset('assets/images/user.png')}}"/>
                            </label>
                            <input type="file" accept="image/*" hidden id="image" name="image"/>
                        </div>
                        <div class="form-group col-md-6 col-lg-8">
                            <div class="input-group mb-3 mt-3 mt-md-0">
                                <input
                                    required
                                    name="name"
                                    type="text"
                                    aria-label="name"
                                    class="form-control"
                                    aria-describedby="name of lab head"
                                    placeholder="Name of the head of the lab"/>
                            </div>
                            <div class="input-group mb-3">
                                <input
                                    required
                                    type="tel"
                                    name="mobile"
                                    aria-label="mobile"
                                    class="form-control"
                                    placeholder="Mobile"
                                    pattern="01[3-9][0-9]{8}"/>
                            </div>
                            <div class="input-group mb-3">
                                <input
                                    required
                                    name="email"
                                    type="email"
                                    aria-label="email"
                                    placeholder="Email"
                                    class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <select name="degree" class="form-select" aria-label="Last highest degree">
                                <option selected class="select-placeholder">Last highest degree</option>
                                @foreach($degrees as $degree)
                                    <option value="{{$degree['value']}}">{{$degree['text']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <select name="designation" class="form-select" aria-label="Select Designation">
                                <option selected class="select-placeholder">Select Designation</option>
                                @foreach($designations as $designation)
                                    <option value="{{$designation['value']}}">{{$designation['text']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input
                            required
                            type="text"
                            name="lab_name"
                            class="form-control"
                            aria-label="Lab Name"
                            placeholder="Name of the lab"/>
                    </div>
                    <div class="input-group mb-3">
                        <select name="department" class="form-select" aria-label="Select Department">
                            <option selected class="select-placeholder">Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{$department['value']}}">{{$department['text']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <input
                                    required
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    aria-label="password"
                                    placeholder="Password"/>
                                <span class="input-group-text toggle-password">
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <div class="input-group">
                                <input
                                    required
                                    type="password"
                                    class="form-control"
                                    aria-label="password"
                                    name="confirm_password"
                                    placeholder="Confirm password"/>
                                <span class="input-group-text toggle-password">
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn my-3 w-100 btn-warning btn-fill-hover">
                        <span>Sign Up</span>
                    </button>
                </form>
            @else
                @include('access.empty',['type'=>'register'])
            @endif
            <div class="my-3">
                <p class="text-center">
                    <span>Already registered?</span>
                    <a href="{{route('access.login.index')}}">Sing In</a>
                </p>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    <script>
        jQuery("#image").change(function () {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = (e) => jQuery('#preview').attr('src', e.target.result);
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
@endpush
