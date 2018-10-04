
    <section id="faqs" class="padding_half bottom40">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div class="leading_developer_head">

                    <div class="row">
                        <div class="col-sm-6">
                            <h3>TITLE : <?php echo $developer['name']; ?></h3>
                        </div>
                        <div class="col-sm-5"></div>
                        <div class="col-sm-1">
                            <h4 style="color: #1F3F81;"><?php echo $developer['type']; ?></h4>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-12">
                <div class="single_construction">

                    <div class="leading_developer_banner">
                        <img src="uploads/leading/<?php echo $developer['banner']; ?>" height="300px" width="100%" />
                    </div>

                    <nav class="navbar navbar-default bootsnav">
                        <div class="" id="navbar-menu">
                            <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                                <li><a href="home/leading_developer/<?php echo $developer['id']; ?>">Home</a></li>

                                <?php if (count($developer['apartments']) > 0): ?>
                                    <li class="dropdown">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="home/leading_project_list/<?php echo $developer['id']; ?>/apt/All">Apartment</a>

                                        <ul class="dropdown-menu">

                                            <?php foreach ($developer['apartments'] as $apartment): ?>

                                                <li><a href="home/leading_project_list/<?php echo $developer['id']; ?>/apt/<?php echo $apartment['apt_type']; ?>"><?php echo $apartment['apt_type']; ?></a></li>

                                            <?php endforeach; ?>

                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if (count($developer['commercials']) > 0): ?>
                                    <li class="dropdown">

                                        <a href="home/leading_project_list/<?php echo $developer['id']; ?>/comm/All">Commercial</a>

                                        <ul class="dropdown-menu">

                                            <?php foreach ($developer['commercials'] as $commercial): ?>

                                                <li><a href="home/leading_project_list/<?php echo $developer['id']; ?>/comm/<?php echo $commercial['project_type']; ?>"><?php echo $commercial['project_type']; ?></a></li>

                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if (count($developer['lands']) > 0): ?>
                                    <li class="dropdown">

                                        <a href="home/leading_project_list/<?php echo $developer['id']; ?>/land/All">Land</a>

                                        <ul class="dropdown-menu">

                                            <?php foreach ($developer['lands'] as $land): ?>

                                                <li><a href="home/leading_project_list/<?php echo $developer['id']; ?>/land/<?php echo $land['land_status']; ?>"><?php echo $land['land_status']; ?></a></li>

                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <?php foreach ($projects as $project): ?>
            <div class="single_leading_project">


                <div class="row">
                    <div class="col-sm-6">
                        <h3>TITLE : <?php echo $project['title']; ?></h3>
                    </div>
                    <div class="col-sm-5"></div>
                    <div class="col-sm-1">
                        <h4 style="color: #1F3F81;">
                            <?php
                            $uploads_folder = "";
                            if($data_type == "apt"){
                                echo $project['apt_type'];
                                $uploads_folder = "apts/";
                            }elseif($data_type == "land"){
                                echo $project['land_status'];
                                $uploads_folder = "lands/";
                            }elseif($data_type == "comm"){
                                echo $project['project_type'];
                                $uploads_folder = "commercials/";
                            }
                            ?>
                        </h4>
                    </div>
                </div>

                <div class="bottom40"></div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="leading_project_description">
                            <h3 class="text-uppercase bottom20">Project Description</h3>
                            <p><?php echo $project['details']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="financial_specification bottom40">
                            <h3 class="text-uppercase bottom20">Address</h3>
                            <h4>
                                <?php echo '<p><b>House : </b>' . $project['house'] . ', <b>Road : </b> ' . $project['road'] . ', <b>Sector : </b>' . $project['sector']; ?>
                                <?php echo '<b>Area : </b>' . $project['area_name'] . ', <b>District :</b> ' . $project['district_name'].'</p>'; ?>
                            </h4>
                        </div>
                    </div>

                    <div class="col-sm-2"></div>

                    <div class="col-sm-4">
                        <div class="financial_specification bottom40">
                            <h3 class="text-uppercase bottom20">Financial Specification</h3>
                            <h4>
                                <?php if($data_type == "apt"){
                                    echo '<p><b>Sales Price (sft) : </b>' . $project['price_sft'].'</p>';
                                    echo '<p><b>Price (Total) : </b>' . $project['price_total'].'</p>';
                                }elseif($data_type == "land"){
                                    echo '<p><b>Price : </b>' . $project['sale_price'].'</p>';
                                    echo '<p><b>Total Price : </b>' . $project['total_price'].'</p>';
                                }elseif($data_type == "comm"){
                                    echo '<p><b>Sales Price : </b>' . $project['rent'].'</p>';
                                    echo '<p><b>Total Price : </b>' . $project['advance'].'</p>';
                                }
                                ?>
                            </h4>
                        </div>
                    </div>

                </div>

                <!--Basic Info-->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="leading_project_quick_summery">
                            <h3 class="text-uppercase bottom20">Quick Summary</h3>

                            <?php if($data_type == "apt") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Project Type</b></td>
                                                <td class="text-right"><?php echo $project['apt_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Size</b></td>
                                                <td class="text-right"><?php echo $project['size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Building Type</b></td>
                                                <td class="text-right"><?php echo $project['building_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Front Side Road Size</b></td>
                                                <td class="text-right"><?php $project['front_road_size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Floor</b></td>
                                                <td class="text-right"><?php echo $project['floor'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Building Facing</b></td>
                                                <td class="text-right"><?php echo $project['building_facing'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Status</b></td>
                                                <td class="text-right"><?php
                                                    if($project['status'] == 'Active')  echo 'Available';
                                                    else echo $project['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Land Size</b></td>
                                                <td class="text-right"><?php echo $project['project_land_size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Apartment</b></td>
                                                <td class="text-right"><?php echo $project['total_apartment'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Available Apart Size</b></td>
                                                <td class="text-right"><?php echo $project['available_apartment_size']?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sold Out Apart</b></td>
                                                <td class="text-right"><?php echo $project['sold_out_apart'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Available Floor</b></td>
                                                <td class="text-right"><?php echo $project['available_floor'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if($data_type == "land") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Land Type</b></td>
                                                <td class="text-right"><?php echo $project['land_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Land Size</b></td>
                                                <td class="text-right"><?php echo $project['size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Front Road Size</b></td>
                                                <td class="text-right"><?php echo $project['front_road_size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Land Status</b></td>
                                                <td class="text-right"><?php $project['land_status'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>No of Block</b></td>
                                                <td class="text-right"><?php echo $project['no_of_block'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Plots</b></td>
                                                <td class="text-right"><?php echo $project['total_plots'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Status</b></td>
                                                <td class="text-right"><?php
                                                    if($project['status'] == 'Active')  echo 'Available';
                                                    else echo $project['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Available Plots</b></td>
                                                <td class="text-right"><?php echo $project['available_plots'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Project Land Size</b></td>
                                                <td class="text-right"><?php echo $project['total_project_land_size'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if($data_type == "comm") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Project Type</b></td>
                                                <td class="text-right"><?php echo $project['project_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Space Size</b></td>
                                                <td class="text-right"><?php echo $project['size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Front Road Size</b></td>
                                                <td class="text-right"><?php echo $project['front_road_size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Project Status</b></td>
                                                <td class="text-right"><?php $project['project_status'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Product Type</b></td>
                                                <td class="text-right"><?php echo $project['product_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Available Size</b></td>
                                                <td class="text-right"><?php echo $project['available_size'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Status</b></td>
                                                <td class="text-right"><?php
                                                    if($project['status'] == 'Active')  echo 'Available';
                                                    else echo $project['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Floor</b></td>
                                                <td class="text-right"><?php echo $project['total_floor'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sold Out</b></td>
                                                <td class="text-right"><?php echo $project['sold_out'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>

                    <!--Image-->
                    <div class="col-sm-4">
                        <div class="leading_project_img">
                            <h3 class="uppercase bottom20">Project Name : <?php echo $project['project_name']; ?></h3>
                            <div id="agent-2-slider" class="owl-carousel">
                                <div class="item">
                                    <div class="property_item heading_space">
                                        <div class="image">
                                            <?php if(!empty($project['perspective_view'])){ ?>
                                                <img class="img-responsive" src="uploads/leading/<?php echo $uploads_folder; echo $project['perspective_view']; ?>"/>
                                            <?php } else echo '<img class="img-responsive" src="uploads/default.jpg" />';?>
                                            <div class="price clearfix">
                                                <span class="tag pull-right">
                                                    <?php if($data_type == "apt"){ ?>
                                                        PRICE : <?php echo $project['price_total']; ?>
                                                    <?php }elseif($data_type == "land"){ ?>
                                                        PRICE : <?php echo $project['total_price']; ?>
                                                    <?php }elseif($data_type == "comm"){ ?>
                                                        PRICE : <?php echo $project['advance']; ?>
                                                    <?php } ?>
                                                    Taka
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Optional Specification-->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="leading_project_optional_specification">
                            <div class="listing1 property-details">
                                <h3 class="text-uppercase bottom20">Optional Specification</h3>
                                <?php if($data_type == "apt"){ ?>
                                    <div class="bottom40">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                   <?php echo 'Floor Type : ' . $project['floor_type']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Handover Time : ' . $project['handover_time']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Per Floor Unit : ' . $project['per_floor_unit']; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['lift']==1) ? 'Lift : Yes' : 'Lift : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['cctv']==1) ? 'CCTV : Yes' :'CCTV : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['generator']==1) ? 'Generator : Yes' : 'Generator : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['intercom']==1) ? 'Intercom : Yes' : 'Intercom : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['car_parking_has']==1) ? 'Car Parking : Yes' : 'Car Parking : No'; ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo ($project['staff_toilet']==1) ? 'Staff Toilet : Yes' : 'Staff Toilet : No'; ?>
                                                </li>
                                                <li>
                                                   <?php echo ($project['staff_room']==1) ? 'Staff Room : Yes' : 'Staff Room : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['security']==1) ? 'Security : Yes' : 'Security : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['fire_exit']==1) ? 'Fire Exit : Yes' : 'Fire Exit : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['gym']==1) ? 'Gym : Yes' : 'Gym : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['club']==1) ? 'Club : Yes' : 'Club : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['swiming_pool']==1) ? 'Swimming Pool : Yes' : 'Swimming Pool : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['gas']==1) ? 'Gas : Yes' : 'Gas : No'; ?>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo ($project['water']==1) ? 'Water : Yes' : 'Water : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['electricity']==1) ? 'Electricity : Yes' : 'Electricity : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['community_hall']==1) ? 'Community Hall : Yes' : 'Community Hall : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['play_ground']==1) ? 'Play Ground : Yes' : 'Play Ground : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['helipad']==1) ? 'Helipad : Yes' : 'Helipad : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['roof_top']==1) ? 'Roof Top : Yes' : 'Roof Top : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['concealed_phone']==1) ? 'Concealed Phone : Yes' : 'Concealed Phone : No'; ?>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                <?php } ?>

                                <?php if($data_type == "land"){ ?>
                                    <div class="bottom40">

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo 'Handover Time : ' . $project['handover_time']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Distence From Mosque : ' . $project['mosque']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Distence From Bazar : ' . $project['bazar']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Distence From Hospital : ' . $project['hospital']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Distence From School : ' . $project['school']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Distence From College : ' . $project['college']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Distence From ATM : ' . $project['atm']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Road Details : ' . $project['road_details']; ?>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                <?php } ?>

                                <?php if($data_type == "comm"){ ?>
                                    <div class="bottom40">

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo 'Handover Time : ' . $project['handover_time']; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['lift']==1) ? 'Lift : Yes<br>' : 'Lift : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['cctv']==1) ? 'CCTV : Yes' :'CCTV : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['generator']==1) ? 'Generator : Yes' : 'Generator : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['intercom']==1) ? 'Intercom : Yes' : 'Intercom : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['car_parking_has']==1) ? 'Car Parking : Yes' : 'Car Parking : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['staff_toilet']==1) ? 'Staff Toilet : Yes' : 'Staff Toilet : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['staff_room']==1) ? 'Staff Room : Yes' : 'Staff Room : No'; ?>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo ($project['security']==1) ? 'Security : Yes' : 'Security : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['fire_exit']==1) ? 'Fire Exit : Yes' : 'Fire Exit : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['gym']==1) ? 'Gym : Yes' : 'Gym : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['club']==1) ? 'Club : Yes' : 'Club : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['swiming_pool']==1) ? 'Swimming Pool : Yes' : 'Swimming Pool : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['gas']==1) ? 'Gas : Yes' : 'Gas : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['water']==1) ? 'Water : Yes' : 'Water : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['electricity']==1) ? 'Electricity : Yes' : 'Electricity : No'; ?>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo ($project['community_hall']==1) ? 'Community Hall : Yes' : 'Community Hall : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['play_ground']==1) ? 'Play Ground : Yes' : 'Play Ground : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['helipad']==1) ? 'Helipad : Yes' : 'Helipad : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['roof_top']==1) ? 'Roof Top : Yes' : 'Roof Top : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($project['concealed_phone']==1) ? 'Concealed Phone : Yes' : 'Concealed Phone : No'; ?>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class=" bottom40">
                            <div class="agent_wrap">
                                <h3 class="text-uppercase bottom20">contact</h3>
                                <table class="agent_contact table">
                                    <tbody>
                                    <tr class="bottom10">
                                        <td><strong><?php echo $project['contact']; ?></strong></td>
                                    </tr>
                                    <tr class="bottom10">
                                        <td><strong>Phone:</strong></td>
                                        <td class="text-right"><?php echo $project['hotline']; ?></td>
                                    </tr>
                                    <tr class="bottom10">
                                        <td><strong>Email Adress:</strong></td>
                                        <td class="text-right"><?php echo $project['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Web:</strong></td>
                                        <td class="text-right"><a href="#."><?php echo $project['web']; ?></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="social_share">
                                            <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                                            <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                                            <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                                            <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <a class="submit_btn" href="uploads/leading/<?php echo $uploads_folder; echo $project['floor_plan']; ?>">Floor Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>