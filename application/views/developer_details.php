<div class="home_middle">

  <div class="home-item-box">
    <div class="title-bg">
      <div class="title-featured">
        <span id=""><?php echo $developer['name']; ?></span>            
      </div>
    </div>
    <div class="clear">
    </div>
    <div>
      <div id="divHomeRent1">
        <div>
          <img src="upload/leading/<?php echo $developer['logo']; ?>" width="90" />
        </div>
        <div>
          <strong>Profile</strong><br />
          <?php echo $developer['profile']; ?>
        </div>
        <div style="margin-top: 10px;">
          <strong>Management</strong><br />
          <?php echo $developer['management']; ?>
        </div>
        <div style="margin-top: 10px;">
          <strong>Experience</strong><br />
          <?php echo $developer['experience']; ?>
        </div>
        <div style="margin-top: 10px;">Web : <a href="<?php echo prep_url($developer['web']); ?>" target="_blank"><?php echo $developer['web']; ?></a></div>
      </div>

      <div class="clear">
      </div>
    </div>
  </div>

</div>