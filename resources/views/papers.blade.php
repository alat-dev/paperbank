@extends('template.main')
@section('container')
@include('template.navbar')

<div class="container-fluid">

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
@endsection