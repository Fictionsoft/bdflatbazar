<title><?php echo $title; ?></title>
<base href="<?php echo base_url(); ?>" />

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<link type="text/css" href="assets/css/admin.css" rel="stylesheet" />

<script type="text/javascript" src="assets/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript" src="assets/plugin/ckeditor/ckeditor.js"></script>

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