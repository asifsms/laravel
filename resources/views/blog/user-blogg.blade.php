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
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    @foreach ($bloggs as $b )
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                
                                <ul class="blog_meta list">
                                    <li>
                                        <a href="#">Mark wiens
                                            <i class="lnr lnr-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">{{ $b->created_at }}
                                            <i class="lnr lnr-calendar-full"></i>
                                        </a>
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
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="{{ asset('/storage/bloggs/'.$b->poster) }}" alt="">
                                <div class="blog_details">
                                    <a href="single-blog.html">
                                        <h2>{{ $b->title }}</h2>
                                    </a>
                                    <div style="width: 100%; word-wrap: break-word;">
                                        <p>{{ $b->about }}.</p>
                                    </div>
                                    <a class="button button-blog" href="single-blog.html">View More</a>
                                </div>
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
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Posts">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="lnr lnr-magnifier"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget author_widget">
                        <img class="author_img rounded-circle" src="{{ asset('images/bloggs/img/blog/main-blog/m-blog-1.jpgimg/blog/author.png') }}" alt="">
                        <h4>Charlie Barber</h4>
                        <p>Senior blog writer</p>
                        <div class="social_icon">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#">
                              <i class="fab fa-behance"></i>
                            </a>
                        </div>
                        <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should
                            have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits
                            detractors.
                        </p>
                        <div class="br"></div>
                    </aside>
                    {{-- <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Popular Posts</h3>
                        <div class="media post_item">
                            <img src="{{ asset('images/bloggs/img/blog/popular-post/post1.jpg') }}" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Space The Final Frontier</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="{{ asset('images/bloggs/img/blog/popular-post/post2.jpg') }}" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="{{ asset('images/bloggs/img/blog/popular-post/post3.jpg') }}" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="{{ asset('images/bloggs/img/blog/popular-post/post4.jpg') }}" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                        <div class="br"></div>
                    </aside> --}}
                    <aside class="single_sidebar_widget ads_widget">
                        <a href="#">
                            {{-- <img class="img-fluid" src="{{ asset('images/bloggs/img/blog/add.jpg') }}" alt=""> --}}
                        </a>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Post Catgories</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Technology</p>
                                    <p>37</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Lifestyle</p>
                                    <p>24</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Fashion</p>
                                    <p>59</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Art</p>
                                    <p>29</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Food</p>
                                    <p>15</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Architecture</p>
                                    <p>09</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Adventure</p>
                                    <p>44</p>
                                </a>
                            </li>
                        </ul>
                        <div class="br"></div>
                    </aside>
                    <aside class="single-sidebar-widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <p>
                            Here, I focus on a range of items and features that we use in life without giving them a second thought.
                        </p>
                        <div class="form-group d-flex flex-row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email address" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'">
                            </div>
                            <a href="#" class="bbtns">Subcribe</a>
                        </div>
                        <p class="text-bottom">You can unsubscribe at any time</p>
                        <div class="br"></div>
                    </aside>
                    <aside class="single-sidebar-widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">Technology</a>
                            </li>
                            <li>
                                <a href="#">Fashion</a>
                            </li>
                            <li>
                                <a href="#">Architecture</a>
                            </li>
                            <li>
                                <a href="#">Fashion</a>
                            </li>
                            <li>
                                <a href="#">Food</a>
                            </li>
                            <li>
                                <a href="#">Technology</a>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                            </li>
                            <li>
                                <a href="#">Art</a>
                            </li>
                            <li>
                                <a href="#">Adventure</a>
                            </li>
                            <li>
                                <a href="#">Food</a>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                            </li>
                            <li>
                                <a href="#">Adventure</a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@endsection