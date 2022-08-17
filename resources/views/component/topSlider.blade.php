<div class="welcome-area flexslider" id="welcome" style="position: relative;padding:0 px;margin: 0px;">

    <ul class="slides">

        {{-- <!-- <li>
            <img src="{{asset('assets/images/_PDB0289.JPG')}}" style="height: 100vh; opacity:1;" />
        </li> --> --}}
            @foreach ($sliders as $slider )
            <li>
                <img style="height: 100vh; opacity:1;object-fit: cover;" src="{{asset('images/'.optional($slider)->image)}}" />
            </li>
            @endforeach
            {{-- <li>
                <img src="{{asset('assets/images/_PDB4092.JPG')}}" style="height: 100vh; opacity:1;" />
            </li>
            <li>
                <img src="{{asset('assets/images/_PDB4500.JPG')}}" style="height: 100vh; opacity:1;" />
            </li> --}}
        </ul>

        <div class="text-center overlap">
        </div>
        <div class="heading">

        </div>
    </div>

<script>
    // $(window).load(function () {
    $(document).ready(function() {
        $('.flexslider').flexslider({
            // animation: "slide",
            rtl: true

        });
    });
</script>
