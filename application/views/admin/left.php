<div id="left-column">
  <?php if($menu == 'post'){ ?>
  <h3>Post Req. Option</h3>
  <ul class="nav">
    <li><a href="admin/post/save">Post Req. Entry</a></li>
    <li><a href="admin/post/post_list">Post Req. List</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'leading_developers'){ ?>
  <h3>Leading Dev. Option</h3>
  <ul class="nav">
    <li><a href="admin/leading_developer/save">Leading Dev. Entry</a></li>
    <li><a href="admin/leading_developer">Leading Dev. List</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'apartments'){ ?>
  <h3>Apartment Option</h3>
  <ul class="nav">
    <!--<li><a href="admin/apartment/save">Apartment Entry</a></li>-->
    <li><a href="admin/apartment">Sales List</a></li>
    <li><a href="admin/apartment/rent">Rent List</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'lands'){ ?>
  <h3>Land Option</h3>
  <ul class="nav">
    <li><a href="admin/land">Sales List</a></li>
    <li><a href="admin/land/rent">Rent List</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'commercials'){ ?>
  <h3>Commercial Option</h3>
  <ul class="nav">
    <!--<li><a href="admin/rent/save">Rent Entry</a></li>-->
    <li><a href="admin/commercial">Sales List</a></li>
    <li><a href="admin/commercial/rent">Rent List</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'rents'){ ?>
  <h3>Rent Option</h3>
  <ul class="nav">
    <li><a href="admin/rent/index/hostel">Hostel Rent List</a></li>
    <li><a href="admin/rent/index/mess">Mess List</a></li>
    <li><a href="admin/rent/index/sublet">Sublet List</a></li>
    <li><a href="admin/rent/index/wearhouse">Wearhouse List</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'offer'){ ?>
  <h3>Offer Option</h3>
  <ul class="nav">
    <li><a href="admin/offer">Offer List</a></li>
    <li><a href="admin/offer/save">Offer Save</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'loan'){ ?>
  <h3>Loan Option</h3>
  <ul class="nav">
    <li><a href="admin/loan">Loan List</a></li>
    <li><a href="admin/loan/save">Loan Save</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'estate'){ ?>
  <h3>Estate Option</h3>
  <ul class="nav">
    <li><a href="admin/estate">Estate List</a></li>
    <li><a href="admin/estate/save">Estate Save</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'settings'){ ?>
  <h3>Settings Option</h3>
  <ul class="nav">
    <li><a href="admin/settings/district_save">District Entry</a></li>
    <li><a href="admin/settings">District List</a></li>
    <li><a href="admin/settings/area_save">Area Entry</a></li>
    <li><a href="admin/settings/area_list">Area List</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php }elseif($menu == 'user'){ ?>
  <h3>User Option</h3>
  <ul class="nav">
    <li><a href="admin/user/add">User Entry</a></li>
    <li><a href="admin/user">User List</a></li>
    <li class="last">&nbsp;</li>
  </ul>
  <?php } ?>
</div>