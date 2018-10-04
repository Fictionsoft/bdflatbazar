<section id="faqs" class="padding_half bottom40">
    <div class="container">
        <div class="row">
            <?php foreach ($property_list as $property) { ?>
                <div class="col-sm-6">
                    <div class="single_leading_developer">

                        <div class="row">
                            <div class="col-sm-8">
                                <h5><strong>ID : <?php echo $property['id']; ?></strong></h5>
                                <h5><strong>TITLE : <?php echo $property['title']; ?></strong></h5>
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2">
                                <p style="color: #1F3F81;">
                                    <?php
                                        $uploads_folder = "";
                                        if($type == "apt_sale"){
                                            echo $property['apt_type'];
                                            $uploads_folder = $type."/";
                                        }elseif($type == "land"){
                                            echo $property['land_status'];
                                            $uploads_folder = $type."_sale/";
                                        }elseif($type == "comm"){
                                            echo $property['project_type'];
                                            $uploads_folder = $type."_sale/";
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>

                        <div class="bottom20"></div>

                        <div class="row">

                            <div class="col-sm-6">

                                <?php if(!empty($property['perspective_view'])){ ?>
                                    <img src="uploads/<?php echo $uploads_folder; echo $property['perspective_view']; ?>" width="150" height="115";style="display: block; margin: 5px auto;" />
                                <?php } else echo '<img src="uploads/default.jpg" width="150" height="115";style="display: block; margin: 5px auto;" />'; ?>

                            </div>

                            <div class="col-sm-6">

                                <p>
                                    <strong> POSTED : </strong>
                                    <?php echo date('jS F Y', strtotime($property['created'])); ?>
                                </p>
                                <p> <?php if($type == "apt_sale"){ ?>

                                        <font color="#253DE8"><b>PRICE : <?php echo $property['price_sft']; ?></b>TK Per Sft</font>

                                    <?php }elseif($type == "land"){ ?>

                                        <font color="#253DE8"><b> PRICE :</b> <?php echo $property['total_price']; ?></font>

                                    <?php }elseif($type == "comm"){ ?>

                                        <font color="#253DE8"> <b> PRICE :</b> <?php echo $property['rent']; ?> TK Per Sft</font>

                                    <?php } ?>
                                </p>
                                <p><strong>DETAILS : </strong>Size : <?php echo $property['size'] . ', Status:' . $property['status'] . '<br /> Area: ' . $property['area_name'] . ', District:' . $property['district_name']; ?>
                            </div>
                        </div>

                        <div class="details_leading_project">
                            <a class="submit_btn" href="home/buy_property_details/<?php echo $type . '/' .$property['id']; ?>">Details</a>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
