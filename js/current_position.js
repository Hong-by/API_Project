navigator.geolocation.getCurrentPosition((position) => {
  const lat = position.coords.latitude;
  const lon = position.coords.longitude;
  // console.log(lat, lon);
  const raditVal = 20000;

  $.ajax({
    url: `/API_project/php/location.php?lat=${lat}&lon=${lon}&radi=${raditVal}`,
    type: 'GET',
    dataType: 'json',
    success: function (result) {
      // console.log(result);
      const item = result.body.items.item;
      console.log(item);
    }
  });
});