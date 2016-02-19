
<div class="footer-wrap">
  <div class="container">
      <div class="row">
      <div class="col-xs-12 col-md-4">
        <h3>bellsana</h3>
        <ul>
          <li><a href="index.php">home</a></li>
          <li><a href="philosophy.php">our philosophy</a></li>
          <li><a href="index.php#teambanner">team</a></li>
          <li><a href="services.php">services</a></li>
          <li><a href="#">work for us</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4">
        <h3>contact</h3>
        <ul>
          <li>+41 (0) 44 281 31 31 T</li>
          <li>+41 (0) 44 281 31 32 F</li>
          <li>info@bellsana.ch</li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-4">
        <h3>location</h3>
        <ul>
          <li>bleicherweg 54</li>
          <li>n&auml;he Paradeplatz</li>
          <li>CH-8002 Z&uuml;rich</li>
        </ul>
      </div>
      <div class="col-xs-12">
        <p>Copyright &copy; <?php echo date('Y'); ?></p>
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /footer-wrap -->
</div><!-- /fader -->
<script>
	  function initialize() {

			var myLatLng = {lat: 47.367585, lng: 8.534131};
      var windowWidth = $(window).width();
      var centerLatLng;
      if (windowWidth <= 768) {
        centerLatLng = myLatLng;
      }
      else {
        centerLatLng = {lat: 47.367570, lng: 8.529153};
      }

			var mapCanvas = document.getElementById('map');
			var mapOptions = {
        scrollwheel: false,
	      center: centerLatLng,
	      zoom: 16,
	      mapTypeId: google.maps.MapTypeId.ROADMAP

	    }

	    var map = new google.maps.Map(mapCanvas, mapOptions);
			var marker = new google.maps.Marker({
			  position: myLatLng,
			  map: map,
        icon: 'img/marker.png'
			});

		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

  <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.19/dist/jquery.flip.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
