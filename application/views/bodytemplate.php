<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('head'); ?>
  </head>
  <body>
    <div class="wrapper">
      <div class="container">
        <?php $this->load->view('header'); ?>
      </div>

      <div class="container">
        
        <?php $this->load->view($leftbar); ?>
        
        <?php $this->load->view($content); ?>
        
        

      </div>

      <div class="container" style="margin-top: 10px;">
        <?php $this->load->view('footer'); ?>
      </div>
    </div>
  </body>
</html>
