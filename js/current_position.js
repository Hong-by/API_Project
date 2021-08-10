
navigator.geolocation.getCurrentPosition((position) => {

  const lat = position.coords.latitude;
  const lon = position.coords.longitude;
  // console.log(lat, lon);
  const loca = window.location.href;
  const radiVal = loca.split('=')[1];
  const queryDOM = document.querySelector('#query_val');
  const kmVal = radiVal.slice(0, 2);

  queryDOM.innerHTML = `${kmVal}  KM 반경 캠핑장`;


  $.ajax({
    url: `/API_project/php/location.php?lat=${lat}&lon=${lon}&radi=${radiVal}`,
    type: 'GET',
    dataType: 'json',
    success: function (result) {
      // console.log(result);
      const item = result.body.items.item;
      console.log(item);

      //구글 맵 마커 추가
      var map;

      function initMap() {
        var centerTarget = { lat: Number(lat), lng: Number(lon) };
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: centerTarget
        });

        // console.log(item.length);

        for (let i = 0; i < item.length; i++) {
          new google.maps.Marker({
            position: new google.maps.LatLng(Number(item[i].mapY), Number(item[i].mapX)),
            map: map,
            icon: '/API_project/img/marker.png'
          });
        }

      }
      initMap();
    }

  });
});

