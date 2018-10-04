<div class="arrowblue">
  <ul>
    <li><a href="" <?php if($menu=='home'){ ?>class="selected"<?php } ?> title="">Home</a></li>
    <li><a href="#" title="">Buy Property</a></li>
    <li><?php if($this->session->userdata('user_id')){ ?><a href="my_account/property" title=""><?php }else{ ?><a href="home/register_1?keepThis=true&TB_iframe=true&height=300&width=400" title="Please Register" class="thickbox"><?php } ?>Sale Property</a></li>
    <li><a href="#" title="">To-Let</a></li>
    <li><a href="home/under" <?php if($menu=='under'){ ?>class="selected"<?php } ?> title="">Hotel / Guest House</a></li>
    <li><a href="#" title="">Buyer / Seller</a></li>
    <li><a href="#" title="">Tenant / Owner</a></li>
    <li><a href="#" title="">Joint Venture</a></li>
    <li><a href="home/leading_developer_list" title="">Leading Developers</a></li>
    <li><a href="home/contact" <?php if($menu=='contact'){ ?>class="selected"<?php } ?> title="">Contact Us</a></li>
  </ul>
</div>