@extends('wrapper')
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material"  action="{{route('register-user')}}" method="post" enctype="multipart/form-data">
                            <div class="text-center ">
                                <img  src="assets/images/logo.png"   class = "square_logo" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up. It is fast and easy.</h3>
                                    </div>
                                </div>
                                <hr/>
                                @csrf
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{Session::get('success')}}
                                        </div>
                                    @endif
                                    @if (Session::has('fail'))
                                    <div class="alert alert-danger">
                                        {{Session::get('fail')}}
                                    </div>
                                @endif
                                <div class="input-group">
                                    <input name="name" type="text" class="form-control" placeholder="Choose Username">
                                    <span class="md-line">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="input-group">
                                    <input name="email" type="text" class="form-control" placeholder="Your Email Address">
                                    <span class="md-line">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="input-group">
                                    <input name="password" type="password" class="form-control" placeholder="Choose Password">
                                    <span class="md-line">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="input-group">
                                    <input name="confirmpassword" type="password" class="form-control" placeholder="Confirm Password">
                                    <span class="md-line">
                                        @error('confirmpassword')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now.</button>
                                    </div>
                                </div>
                                <a href="login" class="text-right f-w-600 text-inverse">Already have an account?</a>
                                <hr/>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
