<div class="item_box_float">
  <div class="title-bg">
    <div class="title-featured">
      <span id="">Latest Requirements</span>            
    </div>
  </div>
  <div class="clear">
  </div>
  <div>
    <div id="divHomeRent1">
      <table cellspacing="0" border="0" style="border-collapse:collapse;" class="picture" id="">
        <tbody>
          <?php foreach ($latest as $feature): ?>
            <tr>
              <td valign="top" style="width:175px;">
                <div style=" max-width: 160px;" class="property-item">
                <div style="text-align:left; padding-right:10px; font-weight:bold; color:#cc0000;">
						I Wants to <?php echo $property['type']; ?>	
					</div>			  
                  <div><strong><a href="home/requirments_details/<?php echo $feature['id']; ?>" id=""><?php echo $feature['type']; ?>   <?php echo $feature['place']; ?></a></strong></div>
                  <div class="homePageProDesc"><?php echo substr(strip_tags($feature['details']), 0, 40); ?></div>
                  <div class="homePageProDesc">Name : <?php echo $feature['name']; ?></div>
                  <div class="homePageProDesc">ID : <?php echo $feature['id']; ?></div>
                   
                </div>
                <div class="clear" style="padding-bottom: 10px;"></div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="clear">
    </div>
  </div>
</div>