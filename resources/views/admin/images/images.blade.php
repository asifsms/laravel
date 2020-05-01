@extends('layouts.appp', ['activePage' => 'images', 'titlePage' => __('Images')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <section class="content">
            <div class="container-fluid">
                
                <form method="POST" action="{{ route('notification.store') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="">
                          <label for="title" class="col-md-3">Title</label>
                          <div class="col-md-6"><input type="text" name="title" class="form-control"></div>
                          <div class="clearfix"></div>
                        </div>
                    </div>
                        
                    <label for="poster" class="col-md-3">Poster</label>    
                    <div class="col-md-6"><input type="file" name="poster" style="margin-top: 3%"/div>
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
@endsection