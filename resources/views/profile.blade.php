@extends('template.main')
@section('container')
@include('template.navbar')

<div class="container-fluid">

    @auth
    <a href="/papers/create"><button type="button" class="btn btn-primary" type="submit"><i class="bi bi-pen"></i> Upload New Paper </button></a>
    @endauth
<ol class="list-group">
    @foreach ($papers as $paper)

        <li class="my-2 list-group-item d-flex justify-content-between align-items-start" style="text-decoration: none">
             <a class="me-auto ms-2" href="/papers/{{ $paper->id }}" style = "text-decoration:none;color: black">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{ $paper->title }}</div>
                Authorized by {{ $paper->user->name}}
            </div>
            {{-- </a> --}}
        @auth
            @if (auth()->user()->id == $user_id)
            
            <a href="/papers/{{ $paper->id }}/edit"><button type="button" class="btn btn-primary" type="submit"><i class="bi bi-pen"></i> Edit </button>
            </a>
            <a  class ="mx-2" href="/papers/{{ $paper->id }}/delete"><button type="button" class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
            </a>
            @else
            <span class="badge bg-primary rounded-pill">{{ $paper->view_count }}  <i class="bi bi-eye"></i> </span>
            @endif
        @endauth
        </li>
   
    @endforeach
</ol>

<div class="row d-flex justify-content-center m-2">

</div>

</div>
@endsection