@extends('layouts.home')
@section('content')
	<!-- About -->
	<div class="about" id="about">
		<div class="container">

			<h1>ABOUT US</h1>
			<p class="para">Hikester is an alternative lifestyle that gives you the oppurtunity to push your boundaries
				and revive your zest. We encourage you to take the road less travelled, do something extraordinary and
				step outside your comfort zone. Hikester will be there by your side, willing you on! feel the sheer joy
				of jumping of a cliff, ride the wildest waves on the ferocious rivers and conquer the mightiest peaks of
				Himalayas. </p>


		</div>
	</div>
	<!-- //About -->


	<!-- Clients -->

	<div class="clients ">
		<div class="container">

			<h3>UPCOMING EVENTS</h3>
			<div id="myTabContent" class="tab-content ">
				<section class="slider ">
					<div class="flexslider tab-pane">
						<ul class="slides">
							@if(!empty($notifications))
							@foreach ($notifications ?? '' as $p )
							<li>
								<h4>{{ $p->title }}</h4>
								<div class="gallery-grids">
									<a class="example-image-link" href="{{ asset('/storage/notification/'.$p->poster) }}"
										data-lightbox="example-set" data-title="">
										<div class="col-md-5 col-sm-5 tab-image">
											<img src="{{ asset('/storage/notification/'.$p->poster) }}" alt="Hikester">
										</div>
									</a></div>
								<div class="col-md-7 col-sm-7 tab-info">
									<p>{{ $p->about }}.</p>
								</div>
							</li>
							@endforeach
							@endif
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>

	<!-- //Clients -->
	<!-- Services -->
	<div class="services" id="services">
		<div class="container">

			<h3>SERVICES</h3>

			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab"
								data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Expeditions</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab"
								aria-controls="tours">Rafting</a></li>
						<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab"
								aria-controls="tree">Camping</a></li>
						<li role="presentation"><a href="#safari" role="tab" id="safari-tab" data-toggle="tab"
								aria-controls="safari">Kayaking</a></li>
						<li role="presentation"><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab"
								aria-controls="trekking">Trekking</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions"
							aria-labelledby="expeditions-tab">
							<div class="col-md-5 col-sm-5 tab-image">
								<img src="{{ asset('images/tab1.jpg') }}" alt="Hikester">
							</div>
							<div class="col-md-7 col-sm-7 tab-info">
								<p>Here are the list of upcoming himalayan treks we will doing next year.Our himalayan
									trek calender is the outcome of extensive research, careful planning, and
									constructively listening to feedback. Our dedicated, experienced, and committed team
									strives to provide the ultimate satisfaction for our clients. We are always there to
									take care of all the services and to give as much flexibility to our clients to make
									their vacation exciting, enjoyable, and safe with us</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="col-md-5 col-sm-5 tab-image">
								<img src="{{ asset('images/tab2.jpg') }}" alt="Hikester">
							</div>
							<div class="col-md-7 col-sm-7 tab-info">
								<p>Rafting, the high-adrenaline sport of navigating a river in an inflatable raft,
									involves several levels of difficulty, depending on how choppy the river is. These
									‘grades’ of difficulty are arrived at according to the presence of rapids, which
									evolve due to sudden plunges in the river’s height, and also because of rocks –
									small or large – that may be lurking in the waters. Rafting is a challenging but
									tremendously fun activity – just remember to keep the instructor’s safety tips in
									mind!The sport’s popularity is probably due to the fact that almost anyone,
									including non- swimmers and those with no prior experience can, go rafting. All it
									takes is 15 minutes of instructions and you can have the time of your life – riding
									the waves, getting splashed and enjoying the peace and tranquillity of the river.
								</p>
							</div>
							<div class="clearfix"></div>


						</div>

						<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
							<div class="col-md-5 col-sm-5 tab-image">
								<img src="{{ asset('images/tab3s.jpg') }}" alt="Hikester">
							</div>
							<div class="col-md-7 col-sm-7 tab-info">
								<p>Revel in the bewitching environs and soothing sounds of the nature, by camping in
									Western Ghats. This place, famed for its rainforests and waterfalls, gives you a
									great opportunity to leave your hurried city life behind for a few days.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
							<div class=" outset">
								<div class="col-md-5 col-sm-5 tab-image border">

									<img src="{{ asset('images/poster-2.jpg') }}" alt="Hikester" style="padding: 5% 20% 20% 20%;">

								</div>

								<div class="col-md-7 col-sm-7 tab-info" style="padding-top: 5%;">
									<h4>Explore River Shambhavi on Kayak</h4>
									<br>
									<p> This is the most fun trip to take on a kayak. Start kayaking near the
										end of the river, paddle whole day and camp near the river at night.
										Return back the next day to the place we started.</p>

								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="trekking" aria-labelledby="trekking-tab">
							<div class=" outset">
								<div class="col-md-5 col-sm-5 tab-image border">

									<img src="{{ asset('images/kheerganga.jpg') }}" alt="Hikester" style="padding: 5% 20% 20% 20%;">

								</div>

								<div class="col-md-7 col-sm-7 tab-info" style="padding-top: 5%;">
									<h4>KHEERGANGA TREK</h4><br>
									<p> Kasol is situated in Parvati Valley, on the banks of the Parvati River,
										on the way between Bhuntar and Manikaran. It is located 30 km
										from Bhuntar and 3.5 km from Manikaran. Kheerganga in Parvati
										valley offers a mystical journey into woods and is one of gifted abode
										for Natural Sulphur Hot water springs. The valley offers beautiful
										view of Parvati River and the Glacier of Indian Himalayas.</p>

								</div>
								<div class="clearfix"></div>
							</div>
							<div class=" outset">
								<div class="col-md-5 col-sm-5 tab-image">

									<img src="{{ asset('images/kasol-solang.jpg') }}" alt="Hikester" style="padding: 5% 20% 20% 20%;">

								</div>

								<div class="col-md-7 col-sm-7 tab-info" style="padding-top: 5%;">
									<h4>Manali - Solang valley - Kasol</h4><br>
									<p> Manali is a high altitude Himalayan resort town in India northern
										Himachal pradesh state. It has a reputation as a backpacking center
										and honeymoon destination. Solang valley is also known as adventure
										valley lies between Solang village and Beas kund. It offers a beautiful
										view of glaciers and snow caped mountains.</p>

								</div>
								<div class="clearfix"></div>
							</div>

						</div>

					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- //Services -->

	<!-- Agency -->
	<div class="agency">
		<div class="container">

			<h2>Find the Hikester in You</h2>

			<div class="agency-grids">

				<div class="col-md-3 col-sm-3 agency-grid">
					<div class="agency-grid-img">
						<img src="{{ asset('images/agency-3.png') }}" alt="Wanderer">
					</div>
					<h4>Trek</h4>
					<p> </p>
				</div>
				<div class="col-md-3 col-sm-3 agency-grid">
					<div class="agency-grid-img">
						<img src="{{ asset('images/agency-4.png') }}" alt="Wanderer">
					</div>
					<h4>Beach Camps</h4>
					<p> </p>
				</div>
				<div class="col-md-3 col-sm-3 agency-grid" style="margin-top: 1.5%;">
					<div class="agency-grid-img">
						<img src="{{ asset('images/agency-8.png') }}" alt="Wanderer">
					</div>
					<h4>Customized Trips</h4>
					<p> </p>
				</div>
				<div class="col-md-3 col-sm-3 agency-grid">
					<div class="agency-grid-img">
						<img src="{{ asset('images/agency-5.png') }}" alt="Wanderer">
					</div>
					<div>
						<h4>Corporate Trips</h4>
					</div>

					<p> </p>
				</div>
				<div class="col-md-3 col-sm-3 agency-grid">
					<div class="agency-grid-img">
						<img src="{{ asset('images/agency-6.png') }}" alt="Wanderer">
					</div>
					<h4>College Trips</h4>
					<p> </p>
				</div>
				<div class="col-md-3 col-sm-3 agency-grid">
					<div class="agency-grid-img">
						<img src="{{ asset('images/agency-7.png') }}" alt="Wanderer">
					</div>
					<h4>School Trips</h4>
					<p> </p>
				</div>

				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Agency -->


	<!-- Video -->
	<!-- <div class="video">
		<button class="btn btn-primary" data-toggle="modal" data-target="#modalvideo">Unplug Your Digital Life<span
				class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></button>
		Tooltip-Content -->
	<div class="tooltip-content">

		<div class="modal fade features-modal" id="modalvideo" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/fbI7u8w4ayo" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

		<script>
			$('#myModal').modal('');
		</script>

	</div>
	<!-- //Tooltip-Content -->
	</div> -->
	<!-- //Video -->

	<!-- Gallery -->
	<div class="gallery" id="gallery">
		<div class="container">

			<h3>GALLERY</h3>

			<div class="gallery-grids">
				<div class="col-md-6 col-sm-6 gallery-grids-left">
					<div class="gallery-grid">
						<a class="example-image-link" href="{{ asset('images/Gallery1.jpg') }}" data-lightbox="example-set"
							data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="{{ asset('images/Gallery1.jpg') }}" alt="Hikester" />
									<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
					<br>
					<div class="gallery-grids-left-sub">
						<!-- <div class="col-md-6 col-sm-6 gallery-grids-left-subl">
							<div class="gallery-grid">
								<a class="example-image-link" href="images/gallery7big.jpg" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/gallery7s.jpg" alt="Wanderer"/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div> -->
						<div class="gallery-grid gallery-grid-sub grid-middle">
							<a class="example-image-link" href="{{ asset('images/MG_3641.jpg') }}" data-lightbox="example-set"
								data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="{{ asset('images/MG_3641.jpg') }}" alt="Wanderer" />
										<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 gallery-grids-left">
				<div class="col-md-6 col-sm-6 gallery-grids-right">
					<div class="gallery-grid">
						<a class="example-image-link" href="{{ asset('images/gallerys2s.jpg') }}" data-lightbox="example-set"
							data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="{{ asset('images/gallerys2s.jpg') }}" alt="Wanderer" />
									<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 gallery-grids-right two">
					<div class="gallery-grid">
						<a class="example-image-link" href="{{ asset('images/gallery3.jpg') }}" data-lightbox="example-set"
							data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="{{ asset('images/gallery3s.jpg') }}" alt="Wanderer" />
									<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="gallery-grids-right1">
					<div class="gallery-grid">
						<a class="example-image-link" href="{{ asset('images/gallery4.jpg') }}" data-lightbox="example-set"
							data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="{{ asset('images/gallery4.jpg') }}" alt="Wanderer" />
									<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 gallery-grids-right gallery-8">
					<div class="gallery-grid">
						<a class="example-image-link" href="{{ asset('images/hikester1.jpg') }}" data-lightbox="example-set"
							data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="{{ asset('images/hikester1.jpg') }}" alt="Wanderer" />
									<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 gallery-grids-right gallery-9">
					<div class="gallery-grid">
						<a class="example-image-link" href="{{ asset('images/kayak3.jpg') }}" data-lightbox="example-set"
							data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="{{ asset('images/kayak3.jpg') }}" alt="Wanderer" />
									<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 gallery-grids-right gallery-9">
					<div class="gallery-grid">
						<a class="example-image-link" href="{{ asset('images/MG_3641.jpg') }}" data-lightbox="example-set"
							data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="{{ asset('images/MG_3641.jpg') }}" alt="Wanderer" />
									<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
	</div>
	<!-- //Gallery -->





	<!-- Contact -->
	<div class="contact" id="contact">
		<div class="container">

			<h3>CONTACT</h3>

			<div class="contact-form">

				<form>
					<input type="text" class="text" placeholder="Name" required="">
					<input type="text" class="text" placeholder="Email" required="">
					<input type="text" class="text" placeholder="Phone" required="">
					<textarea placeholder="Message" required=""></textarea>
					<input type="submit" class="more_btn" value="Send Message">
				</form>

				<!-- Social-Icons -->
				<p>Or Login with</p>
				<div class="social">
					<ul class="social-icons">
						<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
						<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
						<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
						<li><a href="#" class="instagram" title="Go to Our Instagram Account"></a></li>
						<li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
					</ul>
				</div>
				<!-- //Social-Icons -->

				<p>Subscribe to our Newsletter</p>
				<div class="newsletter">
					<form>
						<input class="email" type="email" placeholder="Your email..." required="">
						<input type="submit" class="submit" value="">
					</form>
				</div>

			</div>

		</div>
	</div>
	<!-- //Contact -->

	<!-- Map -->
	<div class="map">
		<div class="map-hover">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075"
				allowfullscreen></iframe>
			<div class="map-hover-1"></div>
		</div>
	</div>
	<!-- //Map -->
	@endsection