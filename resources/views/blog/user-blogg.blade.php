@extends('layouts.blogger')
@section('bloggs')

<section class="blog_categorie_area" style=" padding: 10px; height: 80%; margin-bottom: 2%">
    <div class="container container-lg">
      <div class="row">
        <div class="card" style="width: 98.5%; height: 80%px">
            <h5 class="card-header">New Blogg</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('user-blogg.store') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title">
                          </div>
                          <div>                       
                              <label for="poster" class="col-md-3">Photos</label>    
                              <div class="col-md-6"><input type="file" name="photos" style="margin-top: 3%;"></div>
                              <div class="clearfix"></div>
                          </div>
                        
                    </div>
                    
                    <div class="form-group" style="width: 80%">
                      <label for="exampleFormControlTextarea1">About</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="about" rows="3"></textarea>
                    </div>     
                    <div class="form-group">
                        <div class="">
                         <input type="submit" class="btn btn-info" value="Post" style="margin-top: 0%">
                        </div>
                    </div>        
                  </form>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>
      </div>
    </div>
  </section>
  <!--================Blog Categorie Area =================-->

<!--================Blog Area =================-->
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_left_sidebar">
                    @foreach ($bloggs as $b )
                    <article class="row blog_item">
                        {{--  <div class="col-md-3">
                            <div class="blog_info text-right">
                                
                                <ul class="blog_meta list">
                                    <li>
                                        <a href="#">Mark wiens
                                            <i class="lnr lnr-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        
                                    </li>
                                    <li>
                                        <a href="#">1.2M Views
                                            <i class="lnr lnr-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">06 Comments
                                            <i class="lnr lnr-bubble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>  --}}
                        {{--  <div class="col-md-6" style="background-color: lawngreen">
                            <div class="blog_post">
                                <img src="{{ asset('/storage/bloggs/'.$b->poster) }}" alt="" style="height: 400px">
                                    
                                        <ul class="blog_meta list">
                                        <li><i class="lnr lnr-calendar-full"></i>
                                            {{ $b->created_at->todatestring() }}
                                        </li>
                                        </ul>
                                    
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>{{ $b->title }}</h2>
                                    </a>
                                    <div style="width: 100%; word-wrap: break-word;">
                                        <p>
                                            
                                            {{ substr(strip_tags($b->about), 0, 300) }}......
                                        </p>
                                    </div>
                                    <a class="button button-blog" href="single-blog.html">View More</a>
                                </div>
                            </div>
                        </div>  --}}

                        <div class="col-12" style=" padding: 1%; border-radius: 2%; ">
                            <div class="row" style="height">
                                <img src="{{ asset('images/bloggs/img/user2.png') }}" alt="Hikester" style="height: 50px; border-radius: 40%; margin-left: 2%;display: inline">
                                <div class="col-md-3 col-sm-3" style="margin-top: .5%; display: inline; width: 200px">
                                    <h6>{{ $aaa->name }}</h6>
                                    <i class="lnr lnr-calendar-full"></i>
                                    {{ $b->created_at->todatestring() }}
                                </div>
                                
                            </div>
                            
                        <div class=" row" style=" padding: 1%">
                            
                            <div class="blog_post ">
    
                                <img src="{{ asset('/storage/bloggs/'.$b->poster) }}" alt="Hikester" style="height: 400px;">
    
                            </div>
    
                            <div class="col-md-8 col-sm-7 tab-info" style="padding-top: 1%;">
                                <h4>{{ $b->title }}</h4><br>
                                <div style="width: 100%; word-wrap: break-word;">
                                <p> {{ substr(strip_tags($b->about), 0, 800) }}.......</p>
                                </div>
                                <a class="button button-blog" href="{{route('single-blogg.show',$b->id)}}" style="width:100%;text-align: center;">View More</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    </article>
                    
                    @endforeach
                    
                    {{-- <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-left"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">01</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">02</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">03</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">04</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">09</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav> --}}
                </div>
            </div>
            
    </div>
</section>
<!--================Blog Area =================-->

@endsection