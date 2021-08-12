const key_val = document.location.href.split('=')[1];
const decord_val = decodeURI(key_val);
const queryDOM = document.querySelector("#query_val");
const contentsBox = document.querySelector("#contents_box");
// console.log(decord_val);

$.ajax({
  url: `/API_project/php/key.php?key=${decord_val}`,
  Type: 'GET',
  dataType: 'json',

  success: function (result) {
    //console.log(result);
    const item = result.body.items.item;
    // console.log(Array.isArray(item));

    let currentItems = "";
    var map;

    //검색 키워드에 맞춰 구글 맵에 표시
    if (Array.isArray(item)) { //검색 결과가 여러개 일 때.
      item.forEach(carousel_item);

      //google Map Logics here
      function initMap() {
        centerTarget(item[0], 7);
        for (let i = 0; i < item.length; i++) {
          marker(item[i]);
        }
      }
      initMap();
    } else { //검색 결과가 한개 일 때
      carousel_item(item);

      //google Map Logics here
      function initMap() {
        centerTarget(item, 12);
        marker(item);
      }
      initMap();

    }



    function carousel_item(data) { //데이터들을 각각 뽑아오는 과정
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
    };


    function centerTarget(target, zoom) {
      var centerTarget = { lat: Number(target.mapY), lng: Number(target.mapX) };
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: zoom,
        center: centerTarget //지도를 가져왔을때 중앙을 어디에 맞출것인지 설정값
      });
    };

    function marker(target) {//지도 마커 이미지
      new google.maps.Marker({
        position: new google.maps.LatLng(Number(target.mapY), Number(target.mapX)),
        map: map,
        icon: '/API_project/img/marker.png'
      });
    };

  }
});