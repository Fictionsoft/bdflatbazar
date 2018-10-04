
<section id="faqs" class="padding_half bottom40">
    <div class="container">

        <?php foreach ($property_list as $property){ ?>
            <div class="single_leading_project">


                <div class="row">
                    <div class="col-sm-2">
                        <h3>ID : <?php echo $property['id']; ?></h3>
                    </div>
                    <div class="col-sm-9">
                        <h3>TITLE : <?php echo $property['title']; ?></h3>
                    </div>
                    <div class="col-sm-1">
                        <h4 style="color: #1F3F81;">
                            <?php
                                if($type == "apt_sale"){
                                    echo $property['apt_type'];
                                }elseif($type == "land"){

                                    echo $property['land_status'];
                                }elseif($type == "comm"){

                                    echo $property['project_type'];
                                }
                                else{

                                    echo $property['status'];
                                }
                            ?>
                        </h4>
                    </div>
                </div>

                <div class="bottom40"></div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="leading_project_description">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="text-uppercase bottom20">Property Description</h3>
                                </div>
                                <div class="col-sm-6">
                                    <span style="float: right;">POSTED : <?php echo date('jS F Y', strtotime($property['created'])); ?></span>
                                </div>
                            </div>

                            <p><?php echo $property['details']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="financial_specification bottom40">
                            <h3 class="text-uppercase bottom20">Address</h3>
                            <h4>
                                <?php echo '<p><b>House : </b>' . $property['house'] . ', <b>Road : </b>' . $property['road'] . ', <b>Sector : </b>' . $property['sector'].','; ?>
                                <?php echo '<b>Area : </b>' . $property['area_name'] . ', <b>District : </b> ' . $property['district_name'].'</p>'; ?>
                            </h4>
                        </div>
                    </div>

                    <div class="col-sm-2"></div>

                    <div class="col-sm-4">
                        <div class="financial_specification bottom40">
                            <h3 class="text-uppercase bottom20">Financial Specification</h3>
                            <h4>
                                <?php if($type == "apt_sale"){

                                    echo '<p><b>Rent Price :</b> ' . $property['rent'].'</p>';

                                    echo '<p><b>Advance :</b> ' . $property['advance'].'</p>';

                                    echo '<p><b>Security Charge :</b> ' . $property['security_charge'].'</p>';

                                    echo '<p><b>Service Charge :</b> ' . $property['service_charge'].'</p>';

                                }elseif($type == "land"){

                                    echo '<p><b>Lease Price :</b> ' . $property['price_total'].' '.$property['price_type'].'</p>';

                                    echo '<p><b>Advance :</b> ' . $property['advance_price'].'</p>';

                                }elseif($type == "comm"){

                                    echo '<p><b>Rent Price :</b> ' . $property['rent'].'</p>';

                                    echo '<p><b>Advance :</b> ' . $property['advance'].'</p>';

                                    echo '<p><b>Security :</b> ' . $property['security_charge'].'</p>';

                                    echo '<p><b>Service Charge :</b> ' . $property['service_charge'].'</p>';
                                }else{
                                    echo '<p><b>Rent Price :</b> ' . $property['rent'].'</p>';

                                    echo '<p><b>Advance : </b>' . $property['advance'].'</p>';

                                    echo '<p><b>Security :</b> ' . $property['security_charge'].'</p>';

                                    echo '<p><b>Service Charge :</b> ' . $property['service_charge'].'</p>';
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

                            <?php if($type == "apt_sale") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Apt. Type</b></td>
                                                <td class="text-right"><?php echo $property['apt_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Size</b></td>
                                                <td class="text-right"><?php echo $property['size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Common Bath</b></td>
                                                <td class="text-right"><?php echo $property['common_bath'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bed</b></td>
                                                <td class="text-right"><?php $property['bed'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Veranda</b></td>
                                                <td class="text-right"><?php echo $property['veranda'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Car Parking</b></td>
                                                <td class="text-right"><?php echo $property['car_parking'] ?></td>
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
                                                    if($property['status'] == 'Active')  echo 'Available';
                                                    else echo $property['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Floor</b></td>
                                                <td class="text-right"><?php echo $property['floor'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Attached Bath</b></td>
                                                <td class="text-right"><?php echo $property['attached_bath'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Living</b></td>
                                                <td class="text-right"><?php echo $property['living']?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Dining</b></td>
                                                <td class="text-right"><?php echo $property['dining'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if($type == "land") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Status</b></td>
                                                <td class="text-right"><?php
                                                    if($property['status'] == 'Active')  echo 'Available';
                                                    else echo $property['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Land Type</b></td>
                                                <td class="text-right"><?php echo $property['land_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Land Size</b></td>
                                                <td class="text-right"><?php echo $property['size'].'&nbsp;'.$property['size_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Front Road Size</b></td>
                                                <td class="text-right"><?php echo $property['front_road_size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Land Status</b></td>
                                                <td class="text-right"><?php $property['land_status'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if($type == "comm") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Status</b></td>
                                                <td class="text-right"><?php
                                                    if($property['status'] == 'Active')  echo 'Available';
                                                    else echo $property['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Project Type</b></td>
                                                <td class="text-right"><?php echo $property['project_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Space Size</b></td>
                                                <td class="text-right"><?php echo $property['size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Front Road Size</b></td>
                                                <td class="text-right"><?php echo $property['front_road_size'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Floor</b></td>
                                                <td class="text-right"><?php echo $property['total_floor'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Project Status</b></td>
                                                <td class="text-right"><?php $property['project_status'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if($type == "hostel_rent") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Member Per Room</b></td>
                                                <td class="text-right"><?php echo $property['total_members'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Bed</b></td>
                                                <td class="text-right"><?php echo $property['total_bed'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Present Member</b></td>
                                                <td class="text-right"><?php echo $property['current_members'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Required Member</b></td>
                                                <td class="text-right"><?php $property['required_members'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Food</b></td>
                                                <td class="text-right"><?php echo $property['food'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Kitchen</b></td>
                                                <td class="text-right"><?php echo $property['kitchen'] ?></td>
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
                                                    if($property['status'] == 'Active')  echo 'Available';
                                                    else echo $property['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Attached Bath</b></td>
                                                <td class="text-right"><?php echo $property['attached_bath'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if($type == "mess_rent") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Member Per Room</b></td>
                                                <td class="text-right"><?php echo $property['total_members'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Bed</b></td>
                                                <td class="text-right"><?php echo $property['total_bed'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Present Member</b></td>
                                                <td class="text-right"><?php echo $property['current_members'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Required Member</b></td>
                                                <td class="text-right"><?php $property['required_members'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Food</b></td>
                                                <td class="text-right"><?php echo $property['food'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Kitchen</b></td>
                                                <td class="text-right"><?php echo $property['kitchen'] ?></td>
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
                                                    if($property['status'] == 'Active')  echo 'Available';
                                                    else echo $property['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Attached Bath</b></td>
                                                <td class="text-right"><?php echo $property['attached_bath'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if($type == "sublet_rent") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Total Bed</b></td>
                                                <td class="text-right"><?php echo $property['total_bed'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Present Member</b></td>
                                                <td class="text-right"><?php echo $property['current_members'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Required Member</b></td>
                                                <td class="text-right"><?php $property['required_members'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bed for Sublet</b></td>
                                                <td class="text-right"><?php $property['bed_sublet'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Food</b></td>
                                                <td class="text-right"><?php echo $property['food'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Kitchen</b></td>
                                                <td class="text-right"><?php echo $property['kitchen'] ?></td>
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
                                                    if($property['status'] == 'Active')  echo 'Available';
                                                    else echo $property['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Attached Bath</b></td>
                                                <td class="text-right"><?php echo $property['attached_bath'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <?php } ?>

                            <?php if($type == "land") { ?>

                                <div class="row property-d-table bottom40">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <table class="table table-striped table-responsive">
                                            <tbody>
                                            <tr>
                                                <td><b>Status</b></td>
                                                <td class="text-right"><?php
                                                    if($property['status'] == 'Active')  echo 'Available';
                                                    else echo $property['status'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Space</b></td>
                                                <td class="text-right"><?php echo $property['total_space'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Length</b></td>
                                                <td class="text-right"><?php echo $property['length'].'&nbsp;'.$property['size_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Width</b></td>
                                                <td class="text-right"><?php echo $property['width'] ?></td>
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
                            <h3 class="uppercase bottom20">Project Name : <?php echo $property['project_name']; ?></h3>
                            <div id="agent-2-slider" class="owl-carousel">
                                <div class="item">
                                    <div class="property_item heading_space">
                                        <div class="image">
                                            <?php
                                            if( !empty($property['perspective_view'])) {
                                                $uploads_folder = "";
                                                if ($type == "apt_sale") {
                                                    $uploads_folder = $type . "/";
                                                } elseif ($type == "land") {
                                                    $uploads_folder = $type . "_rent/";
                                                } elseif ($type == "comm") {
                                                    $uploads_folder = $type . "_sale/";
                                                } else {
                                                    $uploads_folder = $type . "/";
                                                }
                                            ?>
                                                <img class="img-responsive" src="uploads/<?php echo $uploads_folder; echo $property['perspective_view']; ?>" />
                                            <?php } else echo '<img class="img-responsive" src="uploads/default.jpg"/>'; ?>

                                            <div class="price clearfix">
                                                <span class="tag pull-right">
                                                    <?php if($type == "apt_sale"){ ?>
                                                        RENT : <?php echo $property['rent']; ?>
                                                    <?php }elseif($type == "land"){ ?>
                                                        RENT : <?php echo $property['price_total']; ?>
                                                    <?php }elseif($type == "comm"){ ?>
                                                        RENT : <?php echo $property['rent']; ?>
                                                    <?php }else { ?>
                                                        RENT : <?php echo $property['rent']; ?>
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
                                <?php if($type == "apt_sale"){ ?>
                                    <div class="bottom40">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo 'Building Facing : ' . $property['building_facing']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Flat Facing : ' . $property['flat_facing']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Front Road Size : ' . $property['front_road_size']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Handover Time : ' . $property['handover_time']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Building Type : ' . $property['building_type']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Floor Type : ' . $property['floor_type']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Project Land Size : ' . $property['project_land_size']; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['lift']==1) ? 'Lift : Yes' : 'Lift : No'; ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo ($property['cctv']==1) ? 'CCTV : Yes' :'CCTV : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['generator']==1) ? 'Generator : Yes' : 'Generator : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['intercom']==1) ? 'Intercom : Yes' : 'Intercom : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['concealed_phone']==1) ? 'Concealed Phone : Yes' : 'Concealed Phone : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['staff_toilet']==1) ? 'Staff Toilet : Yes' : 'Staff Toilet : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['staff_room']==1) ? 'Staff Room : Yes' : 'Staff Room : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['security']==1) ? 'Security : Yes' : 'Security : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['fire_exit']==1) ? 'Fire Exit : Yes' : 'Fire Exit : No'; ?>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo ($property['gym']==1) ? 'Gym : Yes' : 'Gym : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['club']==1) ? 'Club : Yes' : 'Club : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['swiming_pool']==1) ? 'Swimming Pool : Yes' : 'Swimming Pool : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['gas']==1) ? 'Gas : Yes' : 'Gas : No'; ?>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                <?php } ?>

                                <?php if($type == "land"){ ?>
                                    <div class="bottom40">

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo 'Handover Time : ' . $property['handover_time']; ?>
                                                </li>
                                                <li>
                                                    <?php echo 'Road Details : ' . $property['road_details']; ?>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                <?php } ?>

                                <?php if($type == "comm"){ ?>
                                    <div class="bottom40">

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo 'Handover Time : ' . $property['handover_time']; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['lift']==1) ? 'Lift : Yes<br>' : 'Lift : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['cctv']==1) ? 'CCTV : Yes' :'CCTV : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['generator']==1) ? 'Generator : Yes' : 'Generator : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['intercom']==1) ? 'Intercom : Yes' : 'Intercom : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['concealed_phone']==1) ? 'Concealed Phone : Yes' : 'Concealed Phone : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['staff_toilet']==1) ? 'Staff Toilet : Yes' : 'Staff Toilet : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['staff_room']==1) ? 'Staff Room : Yes' : 'Staff Room : No'; ?>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo ($property['security']==1) ? 'Security : Yes' : 'Security : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['fire_exit']==1) ? 'Fire Exit : Yes' : 'Fire Exit : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['gym']==1) ? 'Gym : Yes' : 'Gym : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['club']==1) ? 'Club : Yes' : 'Club : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['swiming_pool']==1) ? 'Swimming Pool : Yes' : 'Swimming Pool : No'; ?>
                                                </li>
                                                <li>
                                                    <?php echo ($property['gas']==1) ? 'Gas : Yes' : 'Gas : No'; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if($type == "hostel_rent"){ ?>
                                    <div class="bottom40">

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo 'Member Occupation : ' . $property['member_occupation']; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if($type == "mess_rent"){ ?>
                                    <div class="bottom40">

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo 'Member Occupation : ' . $property['member_occupation']; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if($type == "sublet_rent"){ ?>
                                    <div class="bottom40">

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo 'Member Occupation : ' . $property['member_occupation']; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if($type == "wearhouse_rent"){ ?>
                                    <div class="bottom40">

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <ul class="pro-list">
                                                <li>
                                                    <?php echo 'Height : ' . $property['height']; ?>
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
                                        <td><strong>Owner name:</strong></td>
                                        <td class="text-right"><?php echo $property['owner_name']; ?></td>
                                    </tr>
                                    <tr class="bottom10">
                                        <td><strong>Owner number:</strong></td>
                                        <td class="text-right"><?php echo $property['owner_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Address :</strong></td>
                                        <td class="text-right">House - <?php echo $property['house'] . ', Road - ' . $property['road'] . '<br /> Area - ' . $property['area_name'] . ', District - ' . $property['district_name']; ?></td>
                                    </tr>
                                    <tr class="bottom10">
                                        <td><strong>Phone:</strong></td>
                                        <td class="text-right"><?php echo $property['phone']; ?></td>
                                    </tr>
                                    <tr class="bottom10">
                                        <td><strong>Email:</strong></td>
                                        <td class="text-right"><?php echo $property['email']; ?></td>
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
                                        <a class="submit_btn" href="uploads/leading/<?php echo $uploads_folder; echo $property['floor_plan']; ?>">Floor Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
