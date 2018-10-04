<?php function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
} ?>
<div class="home_middle">

    <!--Slider-->
    <div class="rev_slider_wrapper">
        <div id="rev_eight" class="rev_slider"  data-version="5.0">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade">
                    <img src="assets/images/pic1.jpg" alt="" data-bgposition="center center" data-bgfit="cover">

                </li>
                <li data-transition="fade">
                    <img src="assets/images/pic2.jpg" alt="" data-bgposition="center center" data-bgfit="cover">

                </li>
                <li data-transition="fade">
                    <img src="assets/images/pic3.jpg" alt="" data-bgposition="center center" data-bgfit="cover">

                </li>
            </ul>
        </div>
    </div>
    <!--Slider ends-->


    <section id="property" class="padding bg_gallery all_items">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single_section">
                        <div class="buy_section">
                            <div class="col-sm-2">
                                <div class="slider_bottom_icon">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h4>BUY A PROPERTY</h4>
                                <P>Buy your dream home now at the best price on the market today.</P>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single_section">
                        <div class="sell_section">
                            <div class="col-sm-2">
                                <div class="slider_bottom_icon">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h4>SELL A PROPERTY</h4>
                                <P>Sell your dream home now at the best price on the market today.</P>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single_section">
                        <div class="rent_section">
                            <div class="col-sm-2">
                                <div class="slider_bottom_icon">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h4>RENT A PROPERTY</h4>
                                <P>For the latest deals view our large portfolio of up to date properties.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Gallery -->
            <!--<div class="clearfix">
                <div id="filters-property" class="cbp-l-filters-button text-center">
                    <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">LATEST</div>
                    <div data-filter=".sale" class="cbp-filter-item">SALE</div>
                    <div data-filter=".rent" class="cbp-filter-item">RENT</div>
                </div>
            </div>-->

            <div class="bottom20"></div>
            <h2 class="heading_space">Leading Developers Featured Projects</h2>
            <div id="property-gallery" class="cbp listing1 bottom40">

                <?php foreach ($all_leading_projects as $project): ?>

                        <div class="cbp-item latest sale">
                            <div class="property_item">
                                <div class="image">
                                    <a href="home/leading_project_details/<?php echo $project['developer_id'] . '/' . $project['data_type'] . '/' . $project['id']; ?>" >
                                        <img  src="./uploads/leading/<?php echo $project['uploads_folder'] . $project['perspective_view']; ?>"
                                              alt="latest property" class="img-responsive">
                                    </a>
                                    <div class="price clearfix">
                                        <span class="tag pull-right"><?php echo $project['price_total']; ?></span>
                                    </div>
                                    <span class="tag_l"> Project</span>
                                </div>
                                <div class="proerty_content">
                                    <div class="proerty_text">
                                        <h3 class="captlize">
                                            <a href="home/leading_project_details/<?php echo $project['developer_id'].'/'.$project['data_type'].'/'.$project['id']; ?>" id=""><?php echo $project['title']; ?></a>
                                        </h3>

                                        <p><?php echo $project['area_name'] . ', ' . $project['district_name']; ?></p>
                                    </div>
                                    <div class="property_meta transparent">
                                        <span><i class="icon-select-an-objecto-tool"></i><?php echo $project['size']; ?></span>
                                        <span><i class="icon-bed"></i><?php echo $project['living']; ?> Rooms</span>
                                        <span><i class="icon-safety-shower"></i><?php echo $project['common_bath']; ?> Bathroom</span>
                                    </div>
                                    <div class="property_meta transparent bottom30">
                                        <span><i class="icon-garage"></i><?php echo $project['car_parking']; ?> Garage</span>
                                        <span><i class="icon-pool-stairs"></i><?php echo $project['swiming_pool']; ?> Swiming Pool</span>
                                        <span></span>
                                    </div>
                                    <div class="favroute clearfix">
                                        <p><i class="icon-calendar2"></i>&nbsp;<?php echo time_elapsed_string($project['created']) ?> </p>
                                        <ul class="pull-right">
                                            <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                            <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="toggle_share collapse" id="three">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                            <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>

            </div>


            <h2 class="heading_space">Featured Apartment</h2>
            <div class="row">
                <div id="property-gallery" class=" listing1 bottom40">

                    <?php foreach ($apartments as $apartment): ?>
                        <div class="col-sm-4">
                            <div class="cbp-item latest sale">
                                <div class="property_item">
                                    <div class="image">
                                        <a href="home/buy_property_details/apt_sale/<?php echo $apartment['id']; ?>" id="">
                                            <?php if(!empty($apartment['perspective_view'])){ ?>
                                                <img src="./uploads/apt_sale/<?php echo $apartment['perspective_view']; ?>" id="">
                                            <?php } else echo '<img src="uploads/default.jpg"  id="" />'; ?>
                                        </a>
                                        <div class="price clearfix">
                                            <span class="tag pull-right"><?php echo $apartment['price_total']; ?> Tk.</span>
                                        </div>
                                        <span class="tag_l">Apartment</span>
                                    </div>
                                    <div class="proerty_content">
                                        <div class="proerty_text">
                                            <h3 class="captlize">
                                                <a href="home/buy_property_details/apt_sale/<?php echo $apartment['id']; ?>" id=""><?php echo $apartment['title']; ?></a>
                                            </h3>

                                            <p><?php echo $apartment['area_name'] . ', ' . $apartment['district_name']; ?></p>
                                        </div>
                                        <div class="property_meta transparent">
                                            <span><i class="icon-select-an-objecto-tool"></i><?php echo $apartment['size']; ?></span>
                                            <span><i class="icon-bed"></i><?php echo $apartment['living']; ?> Rooms</span>
                                            <span><i class="icon-safety-shower"></i><?php echo $apartment['common_bath']; ?> Bathroom</span>
                                        </div>
                                        <div class="property_meta transparent bottom30">
                                            <span><i class="icon-garage"></i><?php echo $apartment['car_parking']; ?> Garage</span>
                                            <span><i class="icon-pool-stairs"></i><?php echo $apartment['swiming_pool']; ?> Swiming Pool</span>
                                            <span></span>
                                        </div>
                                        <div class="favroute clearfix">
                                            <p><i class="icon-calendar2"></i>&nbsp;<?php echo time_elapsed_string($apartment['created']) ?> </p>
                                            <ul class="pull-right">
                                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                                <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toggle_share collapse" id="three">
                                            <ul>
                                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <div class="bottom20"></div>
            <h2 class="heading_space">Featured Lands</h2>
            <div class="row">
                <div id="property-gallery" class=" listing1 bottom40">

                    <?php foreach ($lands as $land): /*echo '<pre>'; print_r($land)*/ ?>
                        <div class="col-sm-4">
                            <div class="cbp-item latest sale">
                                <div class="property_item">
                                    <div class="image">
                                        <a href="home/buy_property_details/land/<?php echo $land['id']; ?>" id="">
                                            <?php if(!empty($land['perspective_view'])){ ?>
                                                <img src="./uploads/land_sale/<?php echo $land['perspective_view']; ?>" id="">
                                            <?php } else echo '<img src="uploads/default.jpg" id="" />'; ?>
                                        </a>
                                        <div class="price clearfix">
                                            <span class="tag pull-right"><?php echo $land['total_price']; ?> Tk.</span>
                                        </div>
                                        <span class="tag_l">Land</span>
                                    </div>
                                    <div class="proerty_content">
                                        <div class="proerty_text">
                                            <h3 class="captlize">
                                                <a href="home/buy_property_details/land/<?php echo $land['id']; ?>" id=""><?php echo $land['title']; ?></a>
                                            </h3>

                                            <p><?php echo $land['area_name'] . ', ' . $land['district_name']; ?></p>
                                        </div>
                                        <div class="property_meta transparent">
                                            <span><b>Size : </b></i><?php echo $land['size']; ?></span>
                                            <span><b>Land Type : </b><?php echo $land['land_type']; ?></span>
                                        </div>
                                        <div class="property_meta transparent bottom30">
                                            <span><b>Status : </b><?php echo $land['land_status']; ?></span>
                                            <span><b>Handover Time : </b><?php echo $land['handover_time']; ?></span>
                                        </div>
                                        <div class="favroute clearfix">
                                            <p><i class="icon-calendar2"></i>&nbsp;<?php echo time_elapsed_string($land['created']) ?> </p>
                                            <ul class="pull-right">
                                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                                <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toggle_share collapse" id="three">
                                            <ul>
                                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="bottom20"></div>
            <h2 class="heading_space">Featured Commercial</h2>
            <div class="row">
                <div id="property-gallery" class=" listing1 bottom40">

                    <?php foreach ($commercials as $commercial): /*echo '<pre>'; print_r($commercial)*/ ?>
                        <div class="col-sm-4">
                            <div class="cbp-item latest sale">
                                <div class="property_item">
                                    <div class="image">
                                        <a href="home/buy_property_details/comm/<?php echo $commercial['id']; ?>" id="">
                                            <?php if(!empty($commercial['perspective_view'])){ ?>
                                                <img src="./uploads/comm_sale/<?php echo $commercial['perspective_view']; ?>" id="">
                                            <?php } else echo '<img src="uploads/default.jpg" id="" />'; ?>
                                        </a>
                                        <div class="price clearfix">
                                            <span class="tag pull-right"><?php echo $commercial['total_price']; ?> Tk.</span>
                                        </div>
                                        <span class="tag_l">Commercial</span>
                                    </div>
                                    <div class="proerty_content">
                                        <div class="proerty_text">
                                            <h3 class="captlize">
                                                <a href="home/buy_property_details/comm/<?php echo $commercial['id']; ?>" id=""><?php echo $commercial['title']; ?></a>
                                            </h3>

                                            <p><?php echo $commercial['area_name'] . ', ' . $commercial['district_name']; ?></p>
                                        </div>
                                        <div class="property_meta transparent">
                                            <span><i class="icon-select-an-objecto-tool"></i><?php echo $commercial['size']; ?></span>
                                            <span><i class="icon-bed"></i><?php echo $commercial['staff_room']; ?> Staff Rooms</span>
                                            <span><i class="icon-safety-shower"></i><?php echo $commercial['fire_exit']; ?> Fire Exit</span>
                                        </div>
                                        <div class="property_meta transparent bottom30">
                                            <span><i class="icon-garage"></i><?php echo $commercial['lift']; ?> Lift</span>
                                            <span><i class="icon-pool-stairs"></i><?php echo $commercial['swiming_pool']; ?> Swiming Pool</span>
                                            <span></span>
                                        </div>
                                        <div class="favroute clearfix">
                                            <p><i class="icon-calendar2"></i>&nbsp;<?php echo time_elapsed_string($commercial['created']) ?> </p>
                                            <ul class="pull-right">
                                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                                <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toggle_share collapse" id="three">
                                            <ul>
                                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="bottom20"></div>
            <h2 class="heading_space">Rents</h2>
            <div class="row">
                <div id="property-gallery" class=" listing1 bottom40">

                    <?php foreach ($allrents as $row): echo '<pre>'; print_r($row) ?>
                        <div class="col-sm-4">
                            <div class="cbp-item latest sale">
                                <div class="property_item">
                                    <div class="image">
                                        <a style="display:inline-block;height:60px;" href="home/tolet_property_details/<?php echo $row['renttype'].'/'.$row['id']; ?>" id="">
                                            <?php if(!empty($row['perspective_view'])){ ?>
                                                <img src="./uploads/<?php echo $row['renttype'].'/'.$row['perspective_view']; ?>" id="">
                                            <?php } else echo '<img src="uploads/default.jpg" width="80" id="" />'; ?>
                                        </a>
                                        <div class="price clearfix">
                                            <span class="tag pull-right"><?php echo $row['total_price']; ?> Tk.</span>
                                        </div>
                                        <span class="tag_l">Rent</span>
                                    </div>
                                    <div class="proerty_content">
                                        <div class="proerty_text">
                                            <h3 class="captlize">
                                                <a href="home/tolet_property_details/<?php echo $row['renttype'].'/'.$row['id']; ?>" id=""><?php echo $row['title']; ?></a>
                                            </h3>

                                            <p><?php echo $row['area_name'] . ', ' . $row['district_name']; ?></p>
                                        </div>
                                        <div class="property_meta transparent">
                                            <span><i class="icon-select-an-objecto-tool"></i><?php echo $row['size']; ?></span>
                                            <span><i class="icon-bed"></i><?php echo $row['staff_room']; ?> Staff Rooms</span>
                                            <span><i class="icon-safety-shower"></i><?php echo $row['fire_exit']; ?> Fire Exit</span>
                                        </div>
                                        <div class="property_meta transparent bottom30">
                                            <span><i class="icon-garage"></i><?php echo $row['lift']; ?> Lift</span>
                                            <span><i class="icon-pool-stairs"></i><?php echo $row['swiming_pool']; ?> Swiming Pool</span>
                                            <span></span>
                                        </div>
                                        <div class="favroute clearfix">
                                            <p><i class="icon-calendar2"></i>&nbsp;<?php echo time_elapsed_string($row['created']) ?> </p>
                                            <ul class="pull-right">
                                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                                <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toggle_share collapse" id="three">
                                            <ul>
                                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- Gallery End -->


    <!--Partners-->
    <section id="logos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="heading_space"></p>
                    <h2 class="uppercase">Leading Developers</h2>
                    <p class="heading_space"></p>
                </div>
            </div>
            <div class="row">
                <div id="partners" class="owl-carousel">

                    <?php foreach($leading as $key=>$value): ?>

                        <div class="item">
                            <a href="home/leading_developer/<?php echo $value['id']; ?>">
                                <img src="uploads/leading/<?php echo $value['logo']; ?>"/>
                            </a>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
    <!--Partners Ends-->