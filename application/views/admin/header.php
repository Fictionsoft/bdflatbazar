<div id="header">
  <div style="float: left; padding-left: 10px; padding-top: 5px;"><img src="assets/images/logo.jpg" alt="" height="60" /></div>
  <ul id="top-navigation">

    <?php if ($menu == "post"): ?>
      <li class="active"><span><span>Post Requirements</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/post">Post Requirements</a></span></span></li>
    <?php endif; ?>

    <?php if ($menu == "leading_developers"): ?>
      <li class="active"><span><span>Leading Developers</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/leading_developer">Leading Developers</a></span></span></li>
    <?php endif; ?>

    <?php if ($menu == "apartments"): ?>
      <li class="active"><span><span>Apartments</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/apartment">Apartments</a></span></span></li>
    <?php endif; ?>

    <?php if ($menu == "lands"): ?>
      <li class="active"><span><span>Lands</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/land">Lands</a></span></span></li>
    <?php endif; ?>

    <?php if ($menu == "commercials"): ?>
      <li class="active"><span><span>Commercial</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/commercial">Commercial</a></span></span></li>
    <?php endif; ?>

    <?php if ($menu == "rents"): ?>
      <li class="active"><span><span>Rent</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/rent/index/hostel">Rent</a></span></span></li>
    <?php endif; ?>

    <?php if ($menu == "offer"): ?>
      <li class="active"><span><span>Offer</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/offer">Offer</a></span></span></li>
    <?php endif; ?>
      
    <?php if ($menu == "loan"): ?>
      <li class="active"><span><span>Home Loan</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/loan">Home Loan</a></span></span></li>
    <?php endif; ?>
      
    <?php if ($menu == "estate"): ?>
      <li class="active"><span><span>Estate News</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/estate">Estate News</a></span></span></li>
    <?php endif; ?>
      
    <?php if ($menu == "hotel"): ?>
      <li class="active"><span><span>Hotel</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/hotel">Hotel</a></span></span></li>
    <?php endif; ?>
      
    <?php if ($menu == "settings"): ?>
      <li class="active"><span><span>Settings</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/settings">Settings</a></span></span></li>
    <?php endif; ?>

    <?php if ($menu == "user"): ?>
      <li class="active"><span><span>User</span></span></li>
    <?php else: ?>
      <li><span><span><a href="admin/user">User</a></span></span></li>
    <?php endif; ?>

    <li><span><span><a href="login/logout">Logout</a></span></span></li>

  </ul>
</div>