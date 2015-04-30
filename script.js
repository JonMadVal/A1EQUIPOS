$(document).ready(function(){
	//$(".screen-reader-text,.search-submit, .entry-meta").hide();
// mapa de ubicación
	function init_map(){
			var myOptions = {
				zoom:15,center:new google.maps.LatLng(6.226338342067173,-75.58195478902434),mapTypeId: google.maps.MapTypeId.ROADMAP};
				map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
				marker = new google.maps.Marker({
					map: map,position: new google.maps.LatLng(6.226338342067173,-75.58195478902434)});
				infowindow = new google.maps.InfoWindow({
					content:"<b>A1 EQUIPOS</b><br/>Calle 25 #57-05 Bodega 1G<br/> Medell&iacute;n" });
				google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
				infowindow.open(map,marker);
			}
				google.maps.event.addDomListener(window, 'load', init_map);
	init_map();
//scroll top
	$(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
  
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

   
	 	
})