@extends('Templates.template')
@section('title','Login')
@section('contents')
<div class="row justify-content-center" style="padding-top:200px">
    <div class="col-lg-4">
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{Session::get('error')}}
        </div>
    @endif
        <div class="card" style="width:30rem">
            <center><h3 style="margin:10px">User Login</h3></center>
            <div class="card-body" style="height:20rem">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{ route('user.login_proses') }}" class="form-group mt-3" style="padding-left:60px" method="post">
                            @csrf
                            <div style="width: 300px">                    
                                <label>Email</label>
                                <input type="email"  class="form-control @error ('email') is-invalid @enderror"id="email" name="email" autofocus value="{{ old('email') }}">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <div style="width:300px">
                                <label class="mt-2">Password</label>
                                <input type="password"  class="form-control @error ('password') is-invalid @enderror"id="password" name="password" value="{{ old('password') }}">
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary" style="width:300px">Login</button>
                        </form>
                       <div style="padding-left:60px">
                            <button type="submit" style="width:300px" class="btn btn-light"><a href="{{ route('user.register') }}">Register</a></button>
                       </div>
                    </div>
                     {{-- <div class="col-lg-3">
                        <p style="padding-left: 50px padding-top:100px"><a href="">Register</a></p>
                     <img src="foto/Screenshot (72).png" style="padding-left:150px" width="460px" height="300px" alt="gambar"> 
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection