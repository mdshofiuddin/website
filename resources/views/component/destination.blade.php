@php

$country = [
    '1' => 'Japan',
    '2' => 'USA',
    '3' => 'UK',
    '4' => 'Canada',
    '5' => 'Japan',
    '6' => 'USA',
    '7' => 'UK',
    '8' => 'Canada',
    '9' => 'Japan',
    '10' => 'USA',
    '11' => 'UK',
    '12' => 'Canada',
    '13' => 'Japan',
    '14' => 'USA',
    '15' => 'UK',
    '16' => 'Canada',
    '17' => 'Japan',
    '18' => 'USA',
    '19' => 'UK',
    '20' => 'Canada',
    '21' => 'Japan',
    '22' => 'USA',
    '23' => 'UK',
    '24' => 'Canada',
    '25' => 'Japan',
    '26' => 'USA',
    '27' => 'UK',
    '28' => 'Canada'
];

@endphp



<div class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 ">

                <!-- <div class="group-4"> -->
                <div class="back-map">
                    <div class="client-map menu-common" id="our-clients" data-scrollposition="5520">
                        <div class="row-fluid">
                            <h3 class="wow fadeInLeft text-white text-center" style="padding-top: 50px;" data-wow-duration="1s">Our Goods Destination</h3>
                            <div class="map-package">
                                <div class="map">
                                    <img src="./assets/images/map5.png">
                                </div>
                                <div class="map-marker">
                                    <?php $counter = 0.1;
                                    for ($i = 1; $i < 29; $i++) { ?>
                                        <img src="./assets/images/marker3.png" data-toggle="tooltip" title="<?php echo $country[$i]; ?>" class="marker<?php echo $i; ?> wow bounceInDown marker-common" data-wow-duration="2s" data-wow-delay=".<?php echo $i; ?>s">
                                    <?php } ?>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- </div> -->

                <!------------4th group End ------------->
            </div>
        </div>
    </div>

</div>
