
            <section class="section padding-bottom-100" id="features">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                            <div class="left-heading">
                                <h2 class="section-title">{{optional($about)->title}}</h2>
                            </div>
                            <div class="left-text">
                                <p class="text-justify" style="font-size: 16px;">@php echo optional($about)->description; @endphp</p>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="{{asset('images/'.optional($about)->picture)}}" class="rounded img-fluid d-block mx-auto" alt="App">
                        </div>
                    </div>
                </div>
            </section>
