@extends('template.main')
@section('container')
@include('template.navbar')
<style>
    .hidden-div {
      display: none;
    }
</style>

<div class="container-fluid">
    <form action="" method="get">
        <div class="input-group mt-1 mb-3 fs-5" >

            <button onclick="toggleVisibility()" class="btn btn-outline-primary" type="button" id="button-addon2"><i class="bi bi-filter-left"></i> Filters</button>
            <input name="search" type="text" class="form-control ml-2" placeholder="Search papers" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary"  id="button-addon2" type="submit">Search</button>
        </div>

        <div class="card w-100 hidden-div" id="hiddenDiv">
            
            <div class="card-body">
            <h5 class="card-title"><i class="bi bi-filter-left"></i> Filters</h5>
                <div class="mb-3">
                    <label class="form-label ">University</label>

                    <select class="form-select form-control @error('university_id') is-invalid @enderror" name="university_id" list="datalistOptions">
                            <option value=''></option>
                        @foreach ($universities as $university)
                            <option value="{{ $university->id }}"@if ($university->id == old('university_id'))
                                selected
                            @endif > {{ $university -> name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label ">Category</label>
                   <select class="form-select form-control @error('category_id') is-invalid @enderror" name="category_id" list="datalistOptions">
                            <option value=''></option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"@if ($category->id == old('category_id'))
                                selected
                            @endif > {{ $category -> name }}</option>
                        @endforeach
                    </select>
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Year</label>
                    <input type="number" name="year" class="form-control @error('year') is-invalid @enderror"  value ="{{ old('year') }}">
                   </div>

                   <div class="mb-3">
                    <label class="form-label">Course</label>

                    <select  class="form-select form-control @error('course_id') is-invalid @enderror" name="course_id" list="datalistOptions">
                            <option value=''></option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" @if ($course->id == old('course_id'))
                              selected
                          @endif> {{ $course -> name }}</option>
                        @endforeach
                      </select>
                   </div>
            </div>
        </div>
    </form>

    <h3>Search Result</h2>
    <hr>
<ol class="list-group list-group-numbered">
    @foreach ($papers as $paper)
    <a href="/papers/{{ $paper->id }}">
        <li class="my-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">{{ $paper->title }}</div>
          Authorized by {{ $paper->user->name}}
        </div>
        <span class="badge bg-primary mx-1"> {{ $paper->category->name }} </span>
        <span class="badge bg-primary rounded-pill">{{ $paper->view_count }}  <i class="bi bi-eye"></i> </span>
        </li>
    </a>
    @endforeach
</ol>

<div class="row d-flex justify-content-center m-2">
{{ $papers -> links()}}
</div>


</div>

<div hidden style="" class="rounded-pill align-items-center position-absolute top-0 bottom-0 left-0 right-0 opacity-75 bg-light w-100 h-500" >
	<div class="flex-fill text-center">
    <h1>Filter
    </h1>	<div id="loading-text" class="text-light"></div>
	</div>
</div>

<script>
    function toggleVisibility() {
      var hiddenDiv = document.getElementById("hiddenDiv");
      if (hiddenDiv.style.display === "block") {
        hiddenDiv.style.display = "none";
      } else {
        hiddenDiv.style.display = "block";
      }
    }
</script>
@endsection