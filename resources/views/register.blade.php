@extends('template.main')
@section('container')
@include('template.navbar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">





<div class="row">
    <div class="space col-3">

    </div>
    <div class="space col-6">
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title"> Register</h5>
                <form action="" method ="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value ="{{ old('name') }}"required>
                       </div>
                     
                       <div class="mb-3">
                        <label class="form-label ">University</label>

                        <select class="form-select form-control @error('university_id') is-invalid @enderror" name="university_id" list="datalistOptions" placeholder="Type to search...">
                                <option value="not-this-one"></option>
                            @foreach ($universities as $university)
                                <option value="{{ $university->id }}"@if ($university->id == old('university_id'))
                                    selected
                                @endif > {{ $university -> name }}</option>
                            @endforeach
                          </select>
                       </div>

                       <div class="mb-3">
                        <label class="form-label">Field of Study</label>

                        <select  class="form-select form-control @error('fos_id') is-invalid @enderror" name="fos_id" list="datalistOptions" placeholder="Type to search...">
                                <option value="not-this-one"></option>
                            @foreach ($fo_s as $fos)
                                <option value="{{ $fos->id }}" @if ($fos->id == old('fos_id'))
                                  selected
                              @endif> {{ $fos -> name }}</option>
                            @endforeach
                          </select>
                       </div>
                       <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"  value ="{{ old('username') }}"required>
                       </div>
                    <div class="mb-3">
                      <label class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value ="{{ old('email') }}"id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
                      @error('password')
                          

                      <div class="row">
                        <small style ="color:red"> {{ $message }} </small>
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
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