<?php
include "connect.php";

$sql = 'SELECT * FROM slideshow where visible =1;';

$result = mysqli_query( $conn, $sql );


?>
<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Javascript slider" />
	
	
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	

</head>
	<style>
	#wowslider-container1 {
  display: table;
  zoom: 1;
  position: relative;
  width: 100%;
  max-width: 1600px;
  max-height: 900px;
  margin: 0px auto 0px;
  z-index: 90;
  text-align: left; /* reset align=center */
  font-size: 10px;
  text-shadow: none; /* fix some user styles */
  /* reset box-sizing (to boostrap friendly) */
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
	</style>
<body style="background-color:#ffffff;margin:auto">
	
	
	<div id="wowslider-container1">
	<div class="ws_images">
	<ul>
			 <?php 
                            foreach ( $result as $key => $value ) {
								
                        ?>
			
		<li><a href="">
			<img src="images/<?= $value['hinh'] ?>" title="" id=""/>
			</a>
			</li>		
	  <?php
                            }   ?>
		
	</ul>
		</div>
	<div class="ws_bullets"><div>
		<?php 
                            foreach ( $result as $key => $value ) {
								
                        ?>
		<a href="#" title="<?= $value['tieude'] ?>"><span><img src="" /></span></a>
		
		<?php
                            }   ?>
	</div></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>


</body>
</html>