<!-- My Properties  -->
<section id="property" class="padding listing1">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <h2 class="text-uppercase bottom40">Add Your Requirement</h2>

                <?php echo form_open_multipart('post/submit_requirment', 'class="callus clearfix border_radius submit_property"'); ?>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="callus clearfix border_radius submit_property">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Title</label>
                                <input type="text" name="title" class="keyword-input" placeholder="Enter your property title">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Name *</label>
                                <input name="name" required="required" type="text" class="keyword-input" placeholder="Enter your name">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Cell</label>
                                <input name="cell" type="text" class="keyword-input" placeholder="Enter your cell">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Phone *</label>
                                <input name="phone" type="text" required="required" class="keyword-input" placeholder="Enter your phone">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Email *</label>
                                <input name="email" type="text" required="required" class="keyword-input" placeholder="Enter your email">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>I Want to </label>
                                <div class="intro">
                                    <select name="type">
                                        <option value="Buy">Buy</option>
                                        <option value="Sell">Sell</option>
                                        <option value="Joint Venture">Joint Venture</option>
                                        <option value="Rent">Rent</option>
                                        <option value="Rent Out">Rent Out</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Property Type </label>
                                <div class="intro">
                                    <select name="place">
                                        <option value="Residential Apartment">Residential Apartment</option>
                                        <option value="Furnished Apartment">Furnished Apartment</option>
                                        <option value="Apartment for Office">Apartment for Office</option>
                                        <option value="Commercial Space">Commercial Space</option>
                                        <option value="Independent House">Independent House</option>
                                        <option value="Sublet With Familiy">Sublet With Family</option>
                                        <option value="Mess">Mess</option>
                                        <option value="Garage">Garage</option>
                                        <option value="Storage">Storage</option>
                                        <option value="Shop">Shop/Showroom</option>
                                        <option value="Plot">Plot/Land</option>
                                        <option value="Studio type Apartment">Studio type Apartment</option>
                                        <option value="Other residential Apartment">Other residential Apartment</option>
                                        <option value="Other commercial office">Other commercial office</option>
                                        <option value="Industrial land">Industrial land</option>
                                        <option value="Factory">Factory</option>
                                        <option value="Time Share">Time Share</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>District </label>
                                <div class="intro">
                                    <select name="district_id" id="district_id" style="width: 200px;">
                                        <option>Select One</option>
                                        <?php foreach($districts as $district){ ?>
                                            <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Area </label>
                                <div class="intro">
                                    <select name="area_id" id="area_id" style="width: 200px;">
                                        <option>Select District First</option>
                                        <?php foreach($areas as $area){ ?>
                                            <option value="<?php echo $area['id']; ?>"><?php echo $area['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-12">
                        <h3 class="bottom15 form-group margin40">Propertie Description </h3>
                        <textarea name="details" id="txtEditor"></textarea>
                    </div>

                    <div class="col-sm-12">
                        <div class="captcha_sec margin40">
                            <?php
                            require_once('assets/plugin/recaptchalib.php');
                            $publickey = "6Lct6eYSAAAAABlAMAx9DcbLq-2zg5d7O4Qp5xdu"; // you got this from the signup page
                            echo recaptcha_get_html($publickey);
                            ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button name="submit" type="submit" class="submit_btn text-center text-uppercase border_radius margin40">submit property</button>
                    </div>
                    <?php echo form_close(); ?>

                    <?php
                        if(isset($_POST['submit']))
                        {
                            if ($_POST['name']!='')
                            {
                                echo "<h2>Success!!!</h2>";
                            }
                        }
                    ?>

            </div>

            <div class="row bottom20"></div>

            <div class="col-sm-12">
                <div class="construct_head">
                    <h3>Latest Requirements</h3>
                </div>
            </div>

            <?php foreach ($latest as $feature): ?>
                <div class="col-sm-4">
                    <div class="single_latest_req">
                        <div class="offer_img">
                            <h4> I Wants to </h4><p><?php echo $property['type']; ?></p></h4>
                            <p><a style="color: #1F3F81;text-decoration: underline" href="home/requirments_details/<?php echo $feature['id']; ?>" id=""><?php echo $feature['type']; ?>   <?php echo $feature['place']; ?></a></p>
                            <p><?php echo substr(strip_tags($feature['details']), 0, 40); ?></p>
                            <p>Name : <?php echo $feature['name']; ?></p>
                            <p>ID : <?php echo $feature['id']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!--FAQ Ends-->



