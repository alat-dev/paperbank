@extends('template.main')

@section('container')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-8 col-xs-12">
            <embed id="pdf-preview" class="col-12"src="/storage/{{ $paper['pdf_file']}}" style ="height: 100vh"/>

        </div>

        <div class="col-md-4 col-xs-12 p-5">

            <div class="container">
                <h2 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"> {{ $paper->title }} </h1>
                <hr>

                <div>
                    {{ $paper->description }}
                </div>
                <hr>

                <div>
                    <i style="color:gray">Author:</i> <a href="/users/{{ $paper->user->username }}">{{ $paper->user->name }}</a>
                </div>
                {{-- <div class="d-flex justify-content-center"> --}}
                    <div class="row">
                        <i style="font-size: 50px" class="bi bi-person-circle fa-5x"></i>
                    
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <a href="/storage/{{$paper->pdf_file  }}" target="_blank"> <button type="button" class="btn btn-success"><i class="bi bi-download"></i> Download</button></a>
                        </div>
                        
                    </div>
            
                {{-- </div> --}}
                

            </div>
        </div> 
        </div>

</div>

@endsection
