<div class="home_middle">

  <div class="home-item-box" style="margin-top: 5px;">
    <div>
      <div id="divHomeRent1">
        <?php foreach ($property_list as $property) { ?>
          <div style="text-transform: uppercase; font-weight: bold; color: #FFF; font-size: 12px; background: #009BDE; border: 1px solid #2C5662; float: left; width: 565px; padding: 5px;; margin-top: 5px;">
            <div style="float: left; width: 80px;">
              ID : <?php echo $property['id']; ?>
            </div>
            <div style="float: left; width: 400px;">
              TITLE : <?php echo $property['title']; ?>
            </div>
            <div style="float: left; width: 60px;">
              <?php //echo $property['status']; ?>
            </div>
          </div>
          <div style="width: 575px; height: 170px; background: #CDFFFE; border: 1px solid #2C5662; border-bottom: none; float: left;">
            <div style="float: left; width: 200px; height: 150px; float: left;">
              <img src="uploads/post/<?php echo $property['picture']; ?>" width="170" style="display: block; margin: 5px auto;" />
            </div>
            <div style="float: left; padding: 10px;">
              POSTED : <?php echo date('jS F Y', strtotime($property['created'])); ?>
            </div>
            <div style="float: left; padding: 10px;">
              DETAILS : <?php echo $property['details']; ?>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>


</div>