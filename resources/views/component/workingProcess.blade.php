<section class="mini" id="work-process">
    <div class="mini-content">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="info">
                        <h1>Working Process</h1>
                        <p>For the purpose of accomplishing our target works we have different working sections who immensely conduct their regular activities smoothly.</p>
                    </div>
                </div>
            </div>
            {{-- @dd($process) --}}


            <!-- ***** Mini Box Start ***** -->
            <div class="row" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                @foreach ($process as $key=>$proces )
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <!-- <div class="card"> -->
                    <a href="#" class="mini-box">
                        <img src="assets/images/work-process-item-01.png" alt="no image">
                        <strong>{{$proces->process}}</strong>
                        <!-- <span>Godard pabst prism fam cliche.</span> -->
                    </a>
                </div>

                @endforeach
            </div>
            <!-- ***** Mini Box End ***** -->
        </div>
    </div>
</section>
