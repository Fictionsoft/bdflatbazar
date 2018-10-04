<title><?php echo $title; ?></title>
<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="flat in dhaka, apartment in dhaka,ready flat, ready apartment, property for sale, real estate service, real estate news, flat for sale, land for sale, house rent, flat rent,  " />
<meta name="description" content="this is a real estate site, here people buy sell rent their flat, apartment, land, commercial space, this site provide real estate service, real estate news, ready flat flai in dhaka, and all kind of useful information about real estate" />
<link rel="icon" 
      type="image/png" 
      href="http://localhost/myicon.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--<link rel="stylesheet" type="text/css" href="assets/css/style.css"  />-->
<!--<link rel="stylesheet" type="text/css" href="assets/css/nav.css"  />-->

<link rel="stylesheet" type="text/css" href="assets/css/custom/fs_custom.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/reality-icon.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/bootsnav.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/settings.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/search.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/editor.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/dropzone.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom/style.css">
<link rel="icon" href="assets/images/icon.png">


<script type="text/javascript" src="assets/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript" src="assets/plugin/thickbox3.1/thickbox.js"></script>
<link rel="stylesheet" type="text/css" href="assets/plugin/thickbox3.1/thickbox.css" />

<script>
  $(document).ready(function() {
    $("#content div").hide(); // Initially hide all content
    $("#tabs li:first").attr("id", "current"); // Activate first tab
    $("#content div:first").fadeIn(); // Show first tab content

    $('#tabs a').click(function(e) {
      e.preventDefault();
      if ($(this).closest("li").attr("id") == "current") { //detection for current tab
        return
      }
      else {
        $("#content div").hide(); //Hide all content
        $("#tabs li").attr("id", ""); //Reset id's
        $(this).parent().attr("id", "current"); // Activate this
        $('#' + $(this).attr('name')).fadeIn(); // Show content for current tab
      }
    });

    $("#district_id").click(function() {
      var district = $('#district_id').val();
      $.ajax({
        type: "POST",
        url: "post/get_area",
        data: {district_id: district},
        success: function(msg) {
          $("#area_id").html(msg);
        }
      });
    });
    
    $(".district_id").click(function() {
      var district = $('.district_id').val();
      $.ajax({
        type: "POST",
        url: "post/get_area",
        data: {district_id: district},
        success: function(msg) {
          $(".area_id").html(msg);
        }
      });
    });
  });
</script>