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
        <span class="badge bg-primary rounded-pill">{{ $paper->view_count }}  <i class="bi bi-eye"></i> </span>
        </li>
    </a>
    @endforeach
</ol>

<div class="row d-flex justify-content-center m-2">
{{ $papers -> links()}}
</div>

</div>
@endsection