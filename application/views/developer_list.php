<div class="home_middle">

  <?php foreach($developers as $developer): ?>
  <div class="home-item-box">
    <div class="title-bg">
      <div class="title-featured">
        <span id=""><?php echo $developer['name']; ?></span>            
      </div>
    </div>
    <div class="clear">
    </div>
    <div>
      <div id="divHomeRent1" style="float: left; margin-right: 15px; height: 100px; width: 150px;">
        <img src="uploads/leading/<?php echo $developer['logo']; ?>" width="90" />
      </div>
      <div style="float: left; width: 150px;">
        <?php echo $developer['type']; ?>
      </div>
      <div style="float: left; width: 200px;">
        <a href="">Company Profile</a> |
        <a href="">View Projects</a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <?php endforeach; ?>
</div>