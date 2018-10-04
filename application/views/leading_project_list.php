<section id="faqs" class="padding_half bottom40">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div class="leading_developer_head">

                    <div class="row">
                        <div class="col-sm-6">
                            <h3><?php echo $developer['name']; ?></h3>
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

            <?php foreach($projects as $project): ?>
                <div class="col-sm-6">
                    <div class="single_leading_developer">

                        <div class="row">
                            <div class="col-sm-6">
                                <h5><strong>TITLE : <?php echo $project['title']; ?></strong></h5>
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-2">
                                <?php
                                $uploads_folder = "";
                                if($data_type == "apt"){
                                    echo '<p style="color: #1F3F81;">'.$project['apt_type'].'</p>';
                                    $uploads_folder = "apts/";
                                }elseif($data_type == "land"){
                                    echo '<p style="color: #1F3F81;">'.$project['land_status'].'</p>';
                                    $uploads_folder = "lands/";
                                }elseif($data_type == "comm"){
                                    echo '<p style="color: #1F3F81;">'.$project['project_type'].'</p>';
                                    $uploads_folder = "commercials/";
                                }
                                ?>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-6">

                                <?php if(!empty($project['perspective_view'])){ ?>
                                    <img src="uploads/leading/<?php echo $uploads_folder; echo $project['perspective_view']; ?>" width="180" height="170";style="display: block; margin: 5px auto;" />
                                <?php } else echo '<img src="uploads/default.jpg" width="180" height="170";style="display: block; margin: 5px auto;" />'; ?>

                            </div>

                            <div class="col-sm-6">

                                <?php if($data_type == "apt"){ ?>
                                    <p><strong>PRICE : </strong><?php echo $project['price_total']; ?></p>
                                <?php }elseif($data_type == "land"){ ?>
                                    <p><strong>PRICE : </strong><?php echo $project['total_price']; ?></p>
                                <?php }elseif($data_type == "comm"){ ?>
                                    <p><strong>PRICE : </strong><?php echo $project['advance']; ?></p>
                                <?php } ?>

                                <p><strong>DETAILS : </strong>House - <?php echo $project['house'] . ', Road - ' . $project['road'] . '<br /> Area - ' . $project['area_name'] . ', District - ' . $project['district_name']; ?></p>
                            </div>
                        </div>

                        <div class="details_leading_project">
                            <a class="submit_btn" href="home/leading_project_details/<?php echo $developer['id'].'/'.$data_type . '/' .$project['id']; ?>">Details</a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
