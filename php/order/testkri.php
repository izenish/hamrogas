<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

if(isset($_POST['submit]){
  
}

<p id="myText"></p>

<form action="" onSubmit="getLocation()" type="POST">
  <input type="hidden" value="" id ="lat" name="lat" />
  <input type="hidden" value="" id ="long" name="long" />
 <input type="submit" name="submit" value="Submit"/>
</form>




<p id="demo"></p>


<script>
var long = document.getElementById("long");
var lat = document.getElementById("lat");
var myText = document.getElementById("myText");


function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    myText.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  long.value = position.coords.longitude;
    lat.value=position.coords.latitude;
    myText.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>

</body>
</html>