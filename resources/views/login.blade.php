@extends('template.main')
@section('container')
<div class="row">
    <div class="space col-3">

    </div>
    <div class="space col-6">
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
    <div class="space col-3">

    </div>

</div>

@endsection