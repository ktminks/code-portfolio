// add button to toggle cel/far


$(document).ready(function() {
	var lat;
	var lon;
	var api = "http://api.wunderground.com/api/82afcdd27c7b42cc/conditions/q/0,0.json";

  //JSON call to get lat/lon coords using IP address
  $.getJSON("http://ip-api.com/json", function(data2) {
    lat = data2.lat;
    lon = data2.lon;
    //set API variable to wunderground API link using dynamically updating lat/lon
    api = "http://api.wunderground.com/api/82afcdd27c7b42cc/conditions/q/" + lat + "," + lon + ".json";

    //JSON call for Wunderground API
    $.getJSON(api, function(data){
      //this is where you can do stuff with dynamically updating local weather data

      //fahrenheit temp
      var fTemp = data.current_observation.feelslike_f;
      //celsius temp
      var cTemp = data.current_observation.feelslike_c;
      //units degree symbol
      var fUnits = "&#8457"; //fahrenheit
      var cUnits = "&#8451"; //celsius

      //display location of weather station used for this info
      $("#loc").html(data.current_observation.observation_location.full + ", " + data.current_observation.observation_location.country);

      //set temp to fahrenheit by default, click converts to and from celsius
      var tempSwap = true;
      $("#temp").html(fTemp + fUnits);
      $("#temp").click(function (){
        if (tempSwap == false) {
          $("#temp").html(cTemp + cUnits);
          tempSwap = true;
        } else {
          $("#temp").html(fTemp + fUnits);
          tempSwap = false;
        }
      });

      //display weather description and corresponding icon
      $("#desc").html(data.current_observation.weather);
      $("#icon").html('<img src="' + data.current_observation.icon_url + '">')

      //change background to reflect fTemp
      if (fTemp > 80) {
        $("body").css('background-image', 'url("https://images.unsplash.com/photo-1434478427415-fabdb71624ee?dpr=1&auto=format&fit=crop&w=1500&h=1016&q=80&cs=tinysrgb&crop=")');
      } else if (fTemp > 60) {
        $("body").css('background-image', 'url("https://images.unsplash.com/photo-1463062511209-f7aa591fa72f?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=")');
      } else if (fTemp > 40) {
        $("body").css('background-image', 'url("https://images.unsplash.com/photo-1463780324318-d1a8ddc05a11?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=")');
      } else {
        $("body").css('background-image', 'url("https://images.unsplash.com/photo-1468536029150-d16666b345a1?dpr=1&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=")');
      }
    });
  });
});
