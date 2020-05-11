@extends('layouts.appp', ['activePage' => 'images', 'titlePage' => __('Images')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <section class="content">
            <div class="container-fluid">
                
                <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="">
                          <label for="title" class="col-md-3">Location</label>
                          <div class="col-md-6"><input type="text" name="location" class="form-control"></div>
                          <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="">    
                    <label for="poster" class="col-md-3">Poster</label>    
                    <div class="col-md-6">
                        <input type="file" name="photos[]" style="margin-top: 3%" multiple></div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="form-group">
                        <div class="">
                         <input type="submit" class="btn btn-info" value="Save" style="margin-top: 2%">
                        </div>
                    </div>
                </form>
            </div>
          </section>
        </div>
    </div>
  </div>
</div>
 {{-- <img src="{{ asset('/storage/images/'.$p->filename) }}" alt="Hikester" style="max-width:50%;height:auto;"> --}}
{{-- {{ URL::to('img/offers/'.$images)}} --}}

<div style="margin-left: 2%">
    
    @foreach ($photos as $p )   
    <div class="" style="">         
        {{--  <h4>{{ $p->location }}</h4>   --}}
      <div class="" style=" ">
        <div class="column" style="" >
            <?php foreach (json_decode($p->filename)as $b){ ?>
            <img class="img-responsive" src="{{ asset('/storage/images/'.$b) }}" alt="Hikester" style="height: 200px;margin-top: 12px;">
            <?php } ?>
            {{--  <a class="example-image-link" href="{{  asset('/storage/images/'.$b) }}"
              data-lightbox="example-set" data-title="">
              <div class="col-md-5 col-sm-5 tab-image">
                <img src="{{  asset('/storage/images/'.$b) }}" alt="Hikester" style="height:200px">
              </div>
            </a>  --}}
        
      </div>
     
    </div>
   
  </div>
   
    @endforeach
    
  </div>
@endsection