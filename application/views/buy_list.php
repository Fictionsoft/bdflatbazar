<div class="home_middle">

  <div class="home-item-box" style="margin-top: 5px;">
    <div class="title-bg">
      <div class="title-featured">
        <span id="" style="text-transform: uppercase;">
          <?php if($type == "apt_rent"){ ?>
          Apartment List
          <?php }else{ ?>
          Buy List
          <?php } ?>
        </span>          
      </div>
    </div>
    <div class="clear">
    </div>
    <div>
      <div id="divHomeRent1">        
        <table width="100%" cellspacing="3" cellpadding="3" border="0">
          <thead>
            <tr>
              <th width="40%">Title</th>
              <th width="25%">Picture</th>
              <th width="25%">Address</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($buy_list as $value){ ?>
            <tr>
              <td><?php echo $value['title']; ?></td>
              <td><?php if($value['perspective_view']!=""){ ?><img src="uploads/<?php echo $type . '/' . $value['perspective_view']; } ?>" /></td>
              <td>
                House # <?php echo $value['house']; ?>, Road # <?php echo $value['road']; ?><br />
                Sector # <?php echo $value['sector']; ?>
              </td>
              <td></td>
            </tr>
            <tr>
              <td colspan="4"><div style="border-bottom: 1px solid; width: 100%;"></div></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="clear"></div>
    </div>
  </div>


</div>