<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <?php $this->load->view('admin/head'); ?>
  </head>
  <body>
    <div id="main">
      <?php $this->load->view('admin/header'); ?>
      <div id="middle">
        <?php $this->load->view('admin/left'); ?>
        <?php $this->load->view($content); ?>
      </div>
      <?php $this->load->view('admin/footer'); ?>
    </div>
  </body>
</html>
