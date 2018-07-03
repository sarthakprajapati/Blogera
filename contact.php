<?php require_once('inc/top.php'); ?>
<body>

<?php require_once('inc/header.php'); ?>

<div class="jumbotron">
	<div class="container-fluid">
		<div  class="animated fadeInLeft" id="details">
			<h1>Contact<span> Us</span></h1>
			<p>Available 24x7. So Feel Free To Contact Us</p>
		</div>
	</div>
</div>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">'
          <div class="col-md-12">
                  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBXLUAvfnZWs0irxaMF8DBQscU64AhKqac'></script><div style='overflow:hidden;height:382px;width:100%;'><div id='gmap_canvas' style='height:382px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://mapswebsite.net/'> </a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=f14cedb025e3f86b8ec7b7839aa95a36aad8847f'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(28.380163,79.41054689999999),mapTypeId: google.maps.MapTypeId.SATELLITE};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.380163,79.41054689999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Hartman College Road</strong><br>Paras Sweet<br>243001 Bareilly<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script> 
            </div>
          <div class="col-md-12 contact-form">
            <h2>Contact Form</h2>
            <hr>
            <form action="">
              <div class="form-group">
                <label for="full-name">Full Name*:</label>
                <input type="text" id="full-name" placeholder="Full Name" class="form-control">
              </div>

              <div class="form-group">
                <label for="email">Email*:</label>
                <input type="text" id="email" placeholder="Email" class="form-control">
              </div>

              <div class="form-group">
                <label for="website">Website:</label>
                <input type="text" id="website" placeholder="Website" class="form-control">
              </div>

              <div class="form-group">
                <label for="message">Message*:</label>
                <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Your Message Should Be Here!"></textarea>
              </div>           
              <input type="submit" name="submit" value="Submit" class="btn btn-primary">                               
            </form>
          </div>
			</div>
			<div class="col-md-4">
				 <?php require_once('inc/sidebar.php'); ?>
		</div>
	</div>
</section>


<?php require_once('inc/footer.php'); ?>
</body>
</html>