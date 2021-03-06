<?php
HTML_Render_Head($js_vars,getTxt('SearchData'));
echo $CSS_Main;
echo $JS_JQuery;
echo $JS_Maps;
HTML_Render_Body_Start();
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<div class='col-md-9'>
<?php showMsgs();?>
<div id="mapOuter" style="width:100%; height:875px;">
	<div id="mapContainer" style="width:100%;">
		<div id="map" style="width:100%; height:100%;"> </div>
	</div>
	<div>
	<div id="mapFilters">
        <div class="btn-group" role="group">
        <input id="pac-input" class="controls" type="text" placeholder="Search Any Site Here">
        <input type="button" class="btn-btn-default" id="fullscreen"  value="<?php echo getTxt('FullScreen'); ?>"/></input>
        <input type="button" class="btn-btn-default" id="exitfullscreen" value="<?php echo getTxt('EFullScreen'); ?>"/></input>
        <div class="input-group">
        <input type="checkbox" class="checkbox" id="allSitesCheck" onClick="loadall()" value="allSites"><?php echo getTxt('AllSites'); ?></input>
        </div>
        </div>
        <div id="mapLocations" >
		<select name="locationSelect" id="locationSelect" style="width:100%;"></select>
	</div>      
		<p class="instruction">
		<?php echo getTxt('EnterSearchLocation') ?>
		</p>
		
	</div>		
</div>
</div>
</div>


<!--This is a possible drop down menu for the items at the bottom of the map
<div class="dropdown keep-open">
    <!-- Dropdown Button -->
 <!--   <button id="mapbar" role="button" href="#" class="btn btn-primary"
            data-toggle="dropdown" data-target="#" >
        Dropdown <span class="caret"></span>
    </button>


    <!-- Map Dropdown Menu -->
 <!--   <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        
        <input type="button" class="btn-btn-default" onClick="searchLocations()" value="<?php echo getTxt('Search'); ?>"/>
        <input type='button' class="btn-btn-default" onClick="loadall()" value="<?php echo getTxt('ResetSearch'); ?>"/>
        <input type='button' class="btn-btn-default" onClick="track_loc()" value="<?php echo getTxt('FindSites'); ?>"/>
        <input type="button" class="btn-btn-default" id="fullscreen"  value="<?php echo getTxt('FullScreen'); ?>"/></input>
        <input type="button" class="btn-btn-default" id="exitfullscreen" value="<?php echo getTxt('EFullScreen'); ?>"/></input>
        <input type="checkbox" class="checkbox" id="allSitesCheck" onClick="loadall()" value="allSites"><?php echo getTxt('AllSites'); ?></input>
        <div id="mapFilters">
		<input type="text" id="addressInput" class="short"/>
		<select name="radiusSelect" id="radiusSelect">
		  <option value="25" selected><?php echo getTxt('TwentyFive'); ?></option>
              <option value="50"><?php echo getTxt('Fifty'); ?></option>
              <option value="100"><?php echo getTxt('OneHundred'); ?></option>
              <option value="200"><?php echo getTxt('TwoHundred'); ?></option>
              <option value="300"><?php echo getTxt('ThreeHundred'); ?></option>
              <option value="400"><?php echo getTxt('FourHundred'); ?></option>
              <option value="500"><?php echo getTxt('FiveHundred'); ?></option>
		</select>
        
    </ul>
</div>



-->









<script>
	load();
$(document).ready(function(){
// Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  //Testing the new Github account
  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(0,0),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(0, 0),
        scaledSize: new google.maps.Size(0, 0)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  
 $('#fullscreen').click(function(){
    $("#mapOuter").css("position", 'fixed').
      css('top', 0).
      css('left', 0).
      css("width", '100%').
      css("height", '100%');
    google.maps.event.trigger(map, 'resize');
    return false;
  });
 
  $('#exitfullscreen').click(function(){
    $("#mapOuter").css("position", 'relative').
      css('top', 0).
      css("width", googleMapWidth).
      css("height", googleMapHeight);
    google.maps.event.trigger(map, 'resize');
    return false;
	
  });

$.fn.scrollView = function () {
    return this.each(function () {
        $('html, body').animate({
            scrollTop: $(this).offset().top
        });
    });
}
$('#mapOuter').scrollView();
});

</script>
<?php
HTML_Render_Body_End();
?>