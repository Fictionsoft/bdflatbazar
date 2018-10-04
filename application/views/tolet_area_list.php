<section id="faqs" class="padding_half bottom40">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div class="construct_head">
                    <h3>To-Let</h3>
                </div>
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
                                                            <a href="home/tolet_property_list/<?php echo $type . '/' . $area['area_id']; ?>"><?php echo $area['area_name'] . ' ( ' . $area['total_by_area'] . ' )'; ?></a>
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
