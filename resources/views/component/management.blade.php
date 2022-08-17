<section class="section colored" id="management">
    <div class="container">
        <!-- ***** Section Title Start ***** -->

        <div class="row">
            <div class="col-lg-12 ">
                <div class="center-heading">
                    <h2 class="section-title"> Management</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p><a href="http://www.fakirknit.com">Fakir Knitwears Ltd </a>is a family owned and managed business concern where increased more production Unit and ForTricot fashion ltd Top managements are consists of the following personnel</p>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach ($managements as $management )

            <div class="col-lg-4 col-md-6 col-sm-12 price-wrapper" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                <div class="pricing-item">
                    <div class="pricing-body">
                        <div class="price-wrapper">

                            <span class="period">

                                <img class="price manage-img" src="{{asset('images/'.$management->image)}}" />
                            </span>
                        </div>
                        <div class="pricing-header">
                            <h3 class="pricing-title text-uppercase">{{$management->name}}</h3>
                        </div>
                        <ul class="list">
                            <li class="active">{{$management->designation}}</li>

                        </ul>

                    </div>

                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
