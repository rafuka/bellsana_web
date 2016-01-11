
<div class="footer-wrap">
  <div class="container">

  </div>
</div>

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
			  map: map
			});

    /*  map.addListener('zoom_changed', function() {
        map.setCenter(centerLatLng);
      }); */
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
  <script src="js/scripts.js"></script>
</body>
</html>
