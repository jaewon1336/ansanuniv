var container = document.querySelector('.map');
            var options = {
                center: new kakao.maps.LatLng(33.450701, 126.570667),
                level: 4
            };

var map = new kakao.maps.Map(container, options);

var roadviewContainer = document.querySelector(`.roadview`);
var roadview = new kakao.maps.Roadview(roadviewContainer); //로드뷰 객체
var roadviewClient = new kakao.maps.RoadviewClient(); //좌표로부터 로드뷰 파노ID를 가져올 로드뷰 helper객체
var position = new kakao.maps.LatLng(33.450701, 126.570667);
roadviewClient.getNearestPanoId(position, 50, function(panoId) {
    roadview.setPanoId(panoId, position); //panoId와 중심좌표를 통해 로드뷰 실행
});





            
            


$(function() {
    $(document).ready(function() {
        $.ajax({
            method: "GET",
            url: "https://dapi.kakao.com/v2/local/search/keyword.json?query=서점&도서관&y=37.30889&x=126.87558&radius=20000",
            data: {
                query : $('.input').val(),
            },
            
            headers: {Authorization : "KakaoAK 2d3c3f5ce30006d0e2cd5dfa1ba54ee8"},
        })
        .done(function(msg) {  
            // console.log(msg.documents)
            
            for (var i = 0; i < msg.documents.length; i++) {
                var id = msg.documents[i].id;
                var URL = `https://map.kakao.com/link/to/${id}`;
                var x = msg.documents[i].x;
                var y = msg.documents[i].y;
                
                if (msg.documents[i].phone == "") {
                    msg.documents[i].phone = '---'
                }

                $('.map-items').append(
                `<li class="map-item">
                    <div class="map${i} map"></div>
                   
                    <div class="map-info">
                        <div class="map-item-name">
                            ${msg.documents[i].place_name}
                            <div class="map-item-name-sub">
                                ${msg.documents[i].road_address_name}
                            </div>
                            
                        </div>
                        
                        <div class="map-item-addr">
                            <strong>주소</strong> : ${msg.documents[i].address_name}
                        </div>
                        <div class="map-item-tel">
                            <strong>Tel</strong> : ${msg.documents[i].phone}
                        </div>
                        <div class="map-item-buttons">
                        <a href='${msg.documents[i].place_url}'target="_blank" style="color:rgb(122, 122, 238);">
                             바로가기 링크
                         </a>             
                         <a href="${URL}" class="find-road" target="_blank">길 찾기</a>  
                         </div>
                    </div>
                    
                    <div class="roadview${i}"></div>
                </li>`
                

                );

                var container = document.querySelector(`.map${i}`);
                var options = {
                    center: new kakao.maps.LatLng(y, x),
                    level: 4
                };
                var map = new kakao.maps.Map(container, options);
               
                var roadviewContainer = document.querySelector(`.roadview${i}`);
                var roadview = new kakao.maps.Roadview(roadviewContainer);
    
    
                
                roadView(i, x, y);

               


                

                var markerPosition  = new kakao.maps.LatLng(y, x); 
                // 마커를 생성합니다
                var marker = new kakao.maps.Marker({
                    position: markerPosition
                });
                marker.setMap(map);
            }
            
          
            
            
        })
    })
})

function roadView(i,x,y) {
    var roadviewContainer = document.querySelector(`.roadview${i}`);
    var roadview = new kakao.maps.Roadview(roadviewContainer);


    
    var roadviewClient = new kakao.maps.RoadviewClient(); //좌표로부터 로드뷰 파노ID를 가져올 로드뷰 helper객체
    var position = new kakao.maps.LatLng(y, x);
    roadviewClient.getNearestPanoId(position, 50, function(panoId) {
        roadview.setPanoId(panoId, position); //panoId와 중심좌표를 통해 로드뷰 실행
    });
}


var sortBtn = document.querySelector('.sort');
var sortSpan = document.querySelector('.sort span');

sortBtn.addEventListener('click', () => {
    if (sortSpan.innerHTML === "[가까운]") {
        sortSpan.innerHTML = "[먼]";

    } else {
        sortSpan.innerHTML = "[가까운]";
    
    }
})
    
   
function sortItems() {

}