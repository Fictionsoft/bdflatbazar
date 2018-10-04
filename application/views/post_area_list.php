<div class="home_middle">

  <div class="home-item-box" style="margin-top: 5px;">
    <div>
      <div id="divHomeRent1">
        <?php foreach ($post_list as $post) { ?>
          <div class="title-bg">
            <span id="" style="text-transform: uppercase; font-weight: bold; color: #FFF; font-size: 12px;">
              <?php echo $post['name']; //print_r($post); ?>
            </span>
          </div>
          <?php
          if (count($post['area']) > 0) {
            foreach ($post['area'] as $area) {
              ?>
              <div style="width: 90%; padding-bottom: 8px; font-weight: bold; padding-left: 20px;">
                <a href="home/post_property_list/<?php echo $type . '/' . $area['area_id']; ?>"><?php echo $area['area_name'] . ' ( ' . $area['total_by_area'] . ' )'; ?></a>
              </div>
              <?php
            }
          }
          ?>
        <?php } ?>
      </div>

      <div class="clear"></div>
    </div>
  </div>


</div>