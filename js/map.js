// JavaScript Document
var map;
function initialize() {
	var myOptions = {
		zoom: 15,
		center: new google.maps.LatLng(42.089982,-80.099647),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		disableDefaultUI: true
	};
		map = new google.maps.Map(document.getElementById('map_listing'),
myOptions);
		var image = 'img/mapicon.png';
		var myLatLng1 = new google.maps.LatLng(42.089982,-80.099647);
		
var mapiconimage = new google.maps.Marker({
		position: myLatLng1,
		map: map,
	    icon: image
        //title: "38th Street"
	});
    //attachMessage(mapiconimage);
    

/*function attachMessage(marker){
    var addressText = "<p>38th Street</p>";
    var infowindow = new google.maps.InfoWindow(
      { content: addressText,
        size: new google.maps.Size(50,50)
      });
  
    infowindow.open(map,marker);
 
*/
}
google.maps.event.addDomListener(window, 'load', initialize);