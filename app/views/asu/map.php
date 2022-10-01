<?php $this->view("asu/header");?>

    <ul class="map-items">
        <div class="map-top">
            <div class="map-title">학교에서 가까운 서점을</br> 검색해보세요.</div>
            <input type="text" id="search" onkeyup="fillter()" placeholder="ex) 이름:안산문고, 주소:단원구">
        </div>

        <div class="roadview" style="display: none;"></div>
        <!-- <li class="map-item">
        -->
        <div class="map" style="width:150px;height:150px; display: none;"></div>
        <!--
            <div class="map-info">
                <div class="map-item-name">
                    안산시 상록구 162312
                </div>
                <div class="map-item-addr">
                    주소 :
                </div>
                <div class="map-item-tel">
                    tel :
                </div>
                <div class="map-item-url">
                    바로가기 :
                </div>
            </div>
        </li> -->
    </ul>
</body>
</html>

    <script>
        function fillter() {
            let search = document.getElementById("search").value.toLowerCase();
            let listInner = document.querySelectorAll('.map-item');

            for (let i = 0; i < listInner.length; i++) {
                NAME = listInner[i].getElementsByClassName("map-item-name");
                ADDR = listInner[i].getElementsByClassName("map-item-addr")
                console.log(listInner.length);
                if (NAME[0].innerHTML.toLowerCase().indexOf(search) != -1 || ADDR[0].innerHTML.toLowerCase().indexOf(search) != -1) {
                    listInner[i].style.display = "flex";
                } else {
                    listInner[i].style.display = "none";
                }
            }
        }
    </script>

