@extends('template.main')
@section('container')

@if (session()->get('register_success')!= null)
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session()->get('register_success') }}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->get('register_success')!= null)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session()->get('login_failed') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row">
    <div class="space col-md-3 col-xs-0">

    </div>
    <div class="space col-md-6 col-xs-12">
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title"> Log In</h5>
                <form action="" method ="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div>                    <small> Don't have account? <a href="/register"> Resgiter now </a> </small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
          



        </div>
    </div>
    <div class="space col-md-3 col-xs-12">

    </div>

</div>

@endsection