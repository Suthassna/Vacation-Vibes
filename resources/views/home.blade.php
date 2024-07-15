@extends('layouts.app')

@section('content')


<div class="hero-wrap js-fullheight" style="margin-top: -25px; background-image: url('{{ asset('Assets/images/image_2.jpg')}}');" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Welcome to Vacation Vibes</h2>
          	<h1 class="mb-4">Escape and enjoy comfortable retreats!</h1>
            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-services" style="
        padding-bottom: 0px;">
    	<div class="container">
    		<div class="row">
                @foreach($hotels as $hotel)
                    <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                        <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url({{asset('assets/images/'.$hotel->image)}});"></div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">{{$hotel->name}}</h3>
                            <p>{{$hotel->description}}</p>
                            <p>{{$hotel->location}}</p>
                            <p><a href="rooms.html" class="btn btn-primary">View rooms</a></p>
                        </div>
                        </div>      
                    </div>     

                @endforeach

          
        </div>
    	</div>
    </section>

<section class="ftco-section bg-light" style="
    padding-top: 0px;
    padding-bottom: 0px; " >
			<div class="container-fluid px-md-0">
				<div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Rental Units</h2>
          </div>
        </div>
				<div class="row no-gutters">
                    @foreach ($rooms as $room)
                        <div class="col-lg-6">
                            <div class="room-wrap d-md-flex">
                                <a href="#" class="img" style="background-image: url({{ asset('assets/images/'.$room->image)}});"></a>
                                <div class="half left-arrow d-flex align-items-center">
                                    <div class="text p-4 p-xl-5 text-center">
                                        <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                        <p class="mb-0"><span class="price mr-1">{{$room->price}}</span> <span class="per">per night</span></p>
                                        <h3 class="mb-3"><a href="rooms.html">{{$room->name}}</a></h3>
                                        <ul class="list-accomodation">
                                            <li><span>View: Garden View</span> </li>
                                            
                                        </ul>
                                        <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


    		</div>
			</div>
		</section>



<section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 wrap-about">
						<div class="img img-2 mb-4" style="background-image: url('{{ asset('Assets/images/image_2.jpg')}}');">
						</div>
						<h2>The most recommended vacation vibes</h2>
						<p>Discover the perfect blend of relaxation and adventure with our top-rated vacation experiences. Enjoy serene accommodations, exciting activities, and unparalleled hospitality for an unforgettable getaway</p>
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section">
	          	<div class="pl-md-5">
		            <h2 class="mb-2">What we offer</h2>
	            </div>
	          </div>
	          <div class="pl-md-5">
							<p>Nestled near pristine beaches, our hotel offers easy access to boating, water sports, and other exciting sea activities. Experience the ultimate coastal getaway with stunning ocean views and endless adventures.</p>
							<div class="row">
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Tea Coffee</h3>
		                <p>Enjoy complimentary tea and coffee in the comfort of your room.</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-workout"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Hot Showers</h3>
		                <p>Relax and refresh with our consistently hot, invigorating showers</p>
		              </div>
		            </div>
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet-1"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Laundry</h3>
		                <p>Convenient laundry services are available for your needs</p>
		              </div>
		            </div>      
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Air Conditioning</h3>
		                <p>Stay cool and comfortable with air-conditioned rooms</p>
		              </div>
		            </div>
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Free Wifi</h3>
		                <p> Stay connected with our fast and reliable free WiFi.</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Kitchen</h3>
		                <p>Access a fully equipped kitchen for your culinary convenience</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Ironing</h3>
		                <p>Ironing facilities are provided to keep your clothes looking their best.</p>
		              </div>
		            </div> 
		            <!-- <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Lovkers</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div> 
		            </div> -->
		          </div>  
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ftco-intro" style="background-image: url(images/image_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Ready to get started</h2>
						<p class="mb-4">It’s safe to book online with us! Get your dream stay in clicks or drop us a line with your questions.</p>
						<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Learn More</a> <a href="#" class="btn btn-white px-4 py-3">Contact us</a></p>
					</div>
				</div>
			</div>
		</section>







@endsection
