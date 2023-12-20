@extends('layouts.login')

@section('content')
    
@endsection
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="{{ route('register.store') }}" method="POST" class="user">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name"
                                    aria-describedby="name" name="name" required placeholder="Nama">
                                <div class="errors text-danger" style="font-size: 14px">
                                    {{ $errors->register->first('name') }}</div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email"
                                    aria-describedby="email" name="email" required placeholder="Email">
                                <div class="errors text-danger" style="font-size: 14px">
                                    {{ $errors->register->first('email') }}</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" required placeholder="Password">
                                    <div class="errors text-danger" style="font-size: 14px">
                                        {{ $errors->register->first('password') }}</div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="re-password" name="retype_password" placeholder="Repeat Password" required>
                                    <div class="errors text-danger" style="font-size: 14px">
                                        {{ $errors->register->first('password') }}</div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                            <hr>
                        </form>

                        <hr>
                        <div class="text-center">
                            <a class="small" href="/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
