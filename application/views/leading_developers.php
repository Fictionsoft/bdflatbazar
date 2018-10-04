<div class="item_box_float">

  <div class="title-bg">

    <div class="title-featured">

      <span id="">Leading Developers</span>

    </div>

  </div>

  <div class="clear">

  </div>

  <div>

    <?php foreach($leading as $key=>$value): ?>

    <div style="float: left; overflow: hidden; text-align: center; width: 90px; height: 80px; margin-left: 2px;border:1px solid #cccccc; margin-bottom: 5px; padding-top:12px;">

      <a href="home/leading_developer/<?php echo $value['id']; ?>" style="text-decoration: none;"><img src="uploads/leading/<?php echo $value['logo']; ?>" width="90" /></a>
<?php /*?>	  <br />
      <a href="<?php echo prep_url($value['web']); ?>" style="text-decoration: none;" target="_blank">Web Link</a><?php */?>

    </div>

    <?php endforeach; ?>

    

    <div class="clear"></div>

    <div style="width: 100%; margin-right: 10px; float: left; padding-top: 10px;">

      <a href="home/leading_developer_list" style="font-size: 12px; font-weight: bold; font-stretch: condensed; float: right; text-decoration: none; color: #000;">View More</a>

    </div>

    <div class="clear"></div>

  </div>

</div>





<div class="item_box_floatright">

<img src="assets/images/asd.png" width="190" height="280"/>

<img src="assets/images/logo.png" width="190" height="120"/>

<img src="assets/images/adr1.png" width="190" height="120"/>



</div>



