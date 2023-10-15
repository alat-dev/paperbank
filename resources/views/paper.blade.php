@extends('template.main')

@section('container')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-8 col-xs-12">
            <embed id="pdf-preview" class="col-12"src="/storage/{{ $paper['pdf_file']}}" style ="height: 100vh"/>

        </div>

        <div class="col-md-4 col-xs-12 p-5">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary"><i class="bi bi-download"></i>Download</button>
                    </div>

            
                </div>
                

            </div>
        </div> 
        </div>

</div>

@endsection
