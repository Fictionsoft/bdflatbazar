<!--FAQ-->
<section id="faqs" class="padding_half bottom40">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div class="construct_head">
                    <h3>All Developers</h3>
                </div>
            </div>

            <?php foreach($developers as $developer): ?>
                <div class="col-sm-6">
                    <div class="single_leading_developer">

                        <div class="faq-text">
                            <h5><strong><?php echo $developer['name']; ?></strong></h5>
                        </div>

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="col-sm-7">
                                    <img src="uploads/leading/<?php echo $developer['logo']; ?>" width="90" />
                                </div>

                                <div class="col-sm-5">
                                    <?php echo $developer['type']; ?>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <a href="home/leading_developer/<?php echo $developer['id']; ?>" style="color: #1F3F81;">Company Profile</a> |
                                <a href="home/leading_project_list/<?php echo $developer['id']; ?>/apt/All" style="color: #1F3F81;">View Projects</a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!--FAQ Ends-->



