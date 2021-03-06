navigator.geolocation.getCurrentPosition((position) => {

  const lat = position.coords.latitude;
  const lon = position.coords.longitude;
  const queryDOM = document.querySelector("#query_val");
  const contentsBox = document.querySelector("#contents_box");
  const loca = window.location.href;
  const radiVal = loca.split('=')[1];
  const kmVal = radiVal.slice(0, 2);

  queryDOM.innerHTML = `${kmVal} KM 반경 캠핑장`;

  $.ajax({
    url: `/API_project/php/location.php?lat=${lat}&lon=${lon}&radi=${radiVal}`,
    type: 'GET',
    dataType: 'json',
    success: function (result) {
      const item = result.body.items.item;
      let currentItems = "";

      item.forEach(function (data) { //데이터들을 각각 뽑아오는 과정
        console.log(data);
        currentItems = `
          <div class="carousel_item">
            <div class="item_card">
              <a href="/API_project/detail_position.php?lon=${data.mapX}&lat=${data.mapY}">
                <div class="sl_img">
                  <img src="${data.firstImageUrl}" alt="" onerror="this.src='/API_project/img/no_image.png'">
                </div>
              </a>
              <div class="sl_txt">
                <h2>${data.facltNm}</h2>
                <p>${data.addr1}</p>
              </div>
              <div class="sl_icons">
                <img src="img/ico_mart.png" alt="">
                <em>${data.sbrsCl}</em>
              </div>
            </div>
          </div>
        `;
        contentsBox.innerHTML += currentItems;
      });

      //google map logics here..
      var map;

      function initMap() {
        var centerTarget = { lat: Number(lat), lng: Number(lon) };
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: centerTarget
        }
        );

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


