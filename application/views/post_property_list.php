<!--FAQ-->
<section id="faqs" class="padding_half bottom40">
    <div class="container">
        <div class="row">
            <?php foreach ($property_list as $property) { ?>
                <div class="col-sm-6">
                    <div class="single_post_property_list">
                        <div class="faq-text">
                            <h5><strong>ID : <?php echo $property['id']; ?> <span style="float: right"><?php echo $property['title']; ?> </span></strong></h5>
                        </div>

                        <span class="top15" style="float:right; color: #1F3F81;"><strong>Wants to <?php echo $property['type']; ?></strong></span>

                        <div class="faq-text margin40">
                            <span><strong>Posted :</strong> <?php echo date('jS F Y', strtotime($property['created'])); ?></span>
                        </div>

                        <div class="faq-text margin40">
                            <span><strong>Name :</strong> <?php echo $property['name']; ?> </span>
                        </div>

                        <div class="faq-text margin40">
                            <span><strong>Type :</strong> <?php echo $property['place']; ?> </span>
                        </div>

                        <div class="faq-text margin40">
                            <h5><strong>Details :</strong></h5>
                            <p class="top15"><?php echo $property['details']; ?></p>
                        </div>

                        <div class="faq-text margin40">
                            <span><strong>Location :</strong> <?php echo $property['area_name'].',&nbsp;'.$property['district_name']; ?></span>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--FAQ Ends-->
