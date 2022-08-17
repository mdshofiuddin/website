   <!-- ======= Clients Section ======= -->
   <section id="clients" class="section" style="padding-bottom:80px !important;">

    <div class="container" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">

                <div class="center-heading">
                    <h2 class="section-title"> Certification</h2>
                </div>
            </div>
        </div>
        
        <div class="row" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>

                @foreach ($certifications as $key=>$certification )

                <div class="col-md-4 col-lg-4 col-sm-12 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{asset('images/'.$certification->image)}}" alt="No Images" width="200" height="100">
                            {{-- <img src="{{asset('images/'.optional($certification->image))}}" alt="No Images"> --}}
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>

</section><!-- End Clients Section -->
