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
                <h5 class="card-title"> Create Paper</h5>
                <form action="" method ="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  value ="{{ old('title') }}"required>
                       </div>
                       <div class="mb-3">
                        <label class="form-label ">Category</label>
                       <select class="form-select form-control @error('category_id') is-invalid @enderror" name="category_id" list="datalistOptions">
                                <option value="not-this-one"></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"@if ($category->id == old('category_id'))
                                    selected
                                @endif > {{ $category -> name }}</option>
                            @endforeach
                        </select>
                       </div>
                       <div class="mb-3">
                        <label class="form-label">Year</label>
                        <input type="number" name="year" class="form-control @error('year') is-invalid @enderror"  value ="{{ old('year') }}"required>
                       </div>
                     
                       <div class="mb-3">
                        <label class="form-label ">University</label>

                        <select class="form-select form-control @error('university_id') is-invalid @enderror" name="university_id" list="datalistOptions">
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

                        <select  class="form-select form-control @error('fos_id') is-invalid @enderror" name="fos_id" list="datalistOptions">
                                <option value="not-this-one"></option>
                            @foreach ($fo_s as $fos)
                                <option value="{{ $fos->id }}" @if ($fos->id == old('fos_id'))
                                  selected
                              @endif> {{ $fos -> name }}</option>
                            @endforeach
                          </select>
                       </div>

                       <div class="mb-3">
                        <label class="form-label">Course</label>

                        <select  class="form-select form-control @error('course_id') is-invalid @enderror" name="course_id" list="datalistOptions">
                                <option value="not-this-one"></option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" @if ($course->id == old('course_id'))
                                  selected
                              @endif> {{ $course -> name }}</option>
                            @endforeach
                          </select>
                       </div>
                       <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Paper</label>
                        <input class="form-control" name="pdf_file" type="file" accept="application/pdf" id="formFile">
                        <small>only accept .pdf format</small>
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