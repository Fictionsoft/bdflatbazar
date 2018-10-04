<section id="faqs" class="padding_half bottom40">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div class="construct_head">
                    <h3>Buy Property</h3>
                </div>
            </div>

            <div class="col-sm-12">
                <!--Search-->
                <div class="buy_pro_search_sec">

                    <?php echo form_open('', 'class="callus clearfix"'); ?>
                        <div class="col-sm-2">
                            <div class="apartment_type">

                                <?php if($type == 'apt_sale')

                                {
                                    echo '<h4>Apartment Type :</h4>';

                                    $options = array(

                                        'All'  => 'All',

                                        'Ready'    => 'Ready',

                                        'Ongoing'   => 'Ongoing',

                                        'Used' => 'Used',

                                        'Upcoming' => 'Upcoming'

                                    );

                                }

                                elseif($type == 'land')

                                {

                                    echo '<h4>Land Type :</h4>';

                                    $options = array(

                                        'All'  => 'All',

                                        'Ready'    => 'Ready',

                                        'Ongoing'   => 'Ongoing'

                                    );

                                }

                                elseif($type == 'comm')

                                {

                                    echo '<h4>Project Type :</h4>';

                                    $options = array(

                                        'All'  => 'All',

                                        'Ready'    => 'Ready',

                                        'Ongoing'   => 'Ongoing',

                                        'Used' => 'Used',

                                        'Upcoming' => 'Upcoming'

                                    );

                                } ?>

                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="single-query form-group">
                                <div class="intro">
                                    <?php echo form_dropdown('vtype', $options, set_value("vtype", $vtype)); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 text-right">
                            <?php /*echo form_submit(array('name'=>'show', 'value'=>'SHOW', 'class' =>'advanced text-center text-uppercase border_radius')); */?>
                            <button name="show" type="submit" class="submit_btn text-center text-uppercase border_radius"><i class="icon-search"></i>show</button>
                        </div>
                    <?php echo form_close(); ?>
                </div>
                <!--Search-->
            </div>

            <?php foreach ($buy_list as $buy) { ?>
                <div class="col-sm-12">
                    <div class="single_construction">

                        <div class="faq-text">
                            <h5><strong> <?php echo $buy['name']; ?></strong></h5>
                        </div>

                        <ul class="bg" role="menu">
                            <li>
                                <div class="row">

                                    <?php if (count($buy['area']) > 0) {

                                        foreach ($buy['area'] as $area) { ?>

                                            <div class="col-menu col-md-3">
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li>
                                                            <a href="home/buy_property_list/<?php echo $type . '/' . $area['area_id'] .'/'.$vtype; ?>"><?php echo $area['area_name'] . ' ( ' . $area['total_by_area'] . ' )'; ?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        <?php } ?>

                                    <?php } ?>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</section>
