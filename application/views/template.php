<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('head'); ?>
  </head>
  <body>
      <div class="header">
          <?php $this->load->view('header'); ?>
      </div>

      <div class="main_content">

<!--          --><?php //$this->load->view($leftbar); ?>

          <?php $this->load->view($content); ?>

<!--          <div class="rightbar">-->
<!--              --><?php //$this->load->view('user_login'); ?>
<!--              --><?php //if($this->uri->segment(1)=="post"){ $this->load->view('latest_requirement'); } ?>
<!--              --><?php //if(!empty($leading)){ $this->load->view('leading_developers'); } ?>
<!--          </div>-->

      </div>
  <div class="footer">
      <?php $this->load->view('footer'); ?>
  </div>
  </body>
</html>
