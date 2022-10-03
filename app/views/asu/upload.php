<?php $this->view("asu/header");?>

<!-- <form method="post" enctype="multipart/form-data">
	<input type="text" name="subject">제목
	<input type="file" name="upfile" accept="image/jpg, image/jpeg, image/png" multiple="">
	<input type="text" name="content">content
	<button type="submit">submit</button>
</form> -->

<div class="section">
        <form  method="post" name="upload_form" class="main_form" enctype="multipart/form-data">
            <div class="product">
                <ul>
                    <li class="product-left">
                        <span>상품이미지</span>
                        (<span class="count-span">0</span>/6)
                    </li>

                    <li class="photo-upload-box">

                        <div class="img-box">
                            <img src="../imgs/camera.svg" alt="">
                            <span>이미지 등록</span>
                        </div>
                        <input type="file" name="upfile[]" accept="image/jpg, image/jpeg, image/png" multiple="multiple">
                    </li>

                    <li class="photo-box">
                        
                        <!--
                            <img src="../imgs/book-img.jpg" alt="">
                            <img src="../imgs/book-img.jpg" alt="">
                            <img src="../imgs/book-img.jpg" alt="">
                        -->


                    </li>
                </ul>
            </div>

            <div class="product-title">
                <div class="product-left">
                    <span>제목</span>
                </div>
                <div class="product-title-right">
                    <div class="product-title-right-left">
                        <input name="subject" type="text" placeholder="상품 이름을 입력해주세요." maxlength="29" oninput="countLetters(this.value);" onkeydown="subLetters(event);" oninput="subLetters(event);">
                        <a href="#">거래금지 품목</a>
                    </div>
                    &ensp;&ensp;
                    <div class="product-title-count">
                         (<span>0</span>/30)
                    </div>

                </div>

            </div>

            <div class="product-cate">
                <div class="product-left">
                    <span>카테고리</span>
                </div>

                <div class="product-cate-right">
                    <div class="select">
                        <select name="cate1" class="cate1">
                            <option value='' selected>-- 선택 --</option>
                            <option value="ㄱ">(ㄱ)학과</option>
                            <option value="ㄷㄹㅁ">(ㄷ/ㄹ/ㅁ)학과</option>
                            <option value="ㅂ">(ㅂ)학과</option>
                            <option value="ㅅ">(ㅅ)학과</option>
                            <option value="ㅇ">(ㅇ)학과</option>
                            <option value="ㅋ">(ㅋ)학과</option>
                            <option value="ㅎ">(ㅎ)학과</option>
                            <option value="기타도서">기타도서</option>
                        </select>

                        <select name="cate2" class="cate2">
                            <option value='' selected>-- 선택 --</option>

                            <!--
                            <option value="간호학과"></option>
                            <option value="건축디자인과"></option>
                            <option value="경영과"></option>
                            <option value="경찰정보과"></option>
                            -->
                        </select>

                        <div class="select-cate">
                            <span class="selected">
                                선택된 카테고리 :

                            </span>
                            <span class="selected_span" style="display:inline"></span>
                            <span class="selected_span2" style="display:inline"></span>
                        </div>

                    </div>

                </div>

            </div>

            <div class="product-state">
                <div class="product-left">
                    <span>상태</span>
                </div>


                <input type="radio" name="used" value="중고상품">
                중고상품
                <input type="radio" name="used" value="새상품">
                새상품



            </div>

            <div class="product-refund rr">
                <div class="product-left">
                    <span>환불여부</span>
                </div>
                <input type="radio" name="exchange" value="교환불가">
                교환불가
                <input type="radio" name="exchange" value="교환가능">
                교환가능
            </div>

            <div class="product-price">
                <div class="product-left">
                    <span>가격</span>
                </div>
                <div class="product-price-right">

                    <input type="number" placeholder="정가를 입력해주세요." class="price-input" name="price">
                    
                    <span>원</span>
                    <div class="product-price-sale">
                        <input type="radio" name="persent" onclick="getPersent(70)">30%
                        <input type="radio" name="persent" onclick="getPersent(50)">50%
                        <input type="radio" name="persent" onclick="getPersent(40)">60%
                    </div>
                    <div class="sale-price">
                    	<input type="hidden" name="discount">
                     	<span>
                     		
                     	</span>원에 판매됩니다.
                    </div>
                </div>
            </div>

            <div class="product-info">
                <div class="product-left">
                    <span>설명</span>
                </div>
                <div class="product-info-right">
                    <textarea name="content"></textarea>
                </div>
            </div>

            <div class="product-tag"></div>

            <div class="product-regist">
                <button type="submit">등록하기</button>
            </div>
        </form>
    </div>
<script>


	
	
	function getPersent(e)
	{
		
		let price = document.querySelector('.price-input')
		let priceSpan = document.querySelector('.sale-price > span');
		let priceInput = document.querySelector('.sale-price > input');
		
		if (e)
		{
			let persent = Math.ceil(price.value * e / 100);
			priceSpan.innerHTML = persent;
			priceStyle(price);
			priceInput.value = priceSpan.innerHTML;
		}
		
	}

	function priceStyle(price)
	{
		price.style.textDecoration = "line-through";
		price.style.textDecorationColor = "red";
		price.style.color = "gray";

	}

    let count = 0;
    let countSpan = document.querySelector('.count-span');
    let n = Number(countSpan.innerHTML);

    const photo = document.querySelector('.photo-upload-box > input');
    const photoBox = document.querySelector('.photo-box');
    
    function readMultipleImage(selectedFile)
    {

        selectedFile.forEach((file,index) => {
            let fileArray = Array.from(selectedFile);
            const reader = new FileReader();
            let img = document.createElement("img");
            let deleteBtn = document.createElement('button');
            let imgBox = document.createElement('div');
            imgBox.setAttribute("id", file.lastModified);
            imgBox.style.position = 'relative';
            deleteBtn.classList.add('img-delete-btn');  
            deleteBtn.setAttribute('data-index', file.lastModified);
            

            reader.onload = (e) => {            
                if(file != undefined && count < 6)
                {
                    
                    img.src = e.target.result;
                    photoBox.append(imgBox);
                    imgBox.append(img);
                    imgBox.append(deleteBtn);
                    count += 1;
                    n += 1;
                    countSpan.innerHTML = n;
                    deleteBtn.onclick = (e) => {
                        imgRemove(e);
                    }
                    
                    
                    }
                    if (count > 3) {
                        photoBox.style.height = "420px";
                    }
                
                   
                }  
                 reader.readAsDataURL(file);

        })
    }

    function imgRemove(e)
    {
        e.preventDefault();
        if(e.target.className !== 'img-delete-btn') return;
        const removeTargetId = e.target.dataset.index;
        const removeTarget = document.getElementById(removeTargetId);
        const files = document.querySelector('.photo-upload-box > input').files;
        const dataTranster = new DataTransfer();

        Array.from(files)
            .filter(file => file.lastModified != removeTargetId)
            .forEach(file => {
            dataTranster.items.add(file);
        });
        document.querySelector('.photo-upload-box > input').files = dataTranster.files;   
        removeTarget.remove();
           
}


    photo.addEventListener('change', (e) =>{
        const selectedFile = [...photo.files];
        readMultipleImage(selectedFile);
    })
    



    

    
    let titleCountSpan = document.querySelector('.product-title-count > span');
    let titleCount = 1;
    function countLetters(value)
    {

        if (value.length == titleCount && value.length < 31)
        {
            titleCountSpan.innerHTML = titleCount;
            titleCount += 1;
            
        }
    }
    function subLetters(event)
    {
        
        
        if (event.key === "Backspace" && titleCountSpan.innerHTML != 0)
        {
            titleCount -= 2;
            titleCountSpan.innerHTML = titleCount;
        }


    }


    // test

    let cate1 = document.querySelector('.cate1');
    let cate2 = document.querySelector('.cate2');
    let selectedSpan = document.querySelector('.selected_span');
    let selectedSpan2 = document.querySelector('.selected_span2');
    
    let subOptions = {
        a: ['-- 선택 --','간호학과', '건축디자인과', '경영과', '경찰정보과'],
        b: ['-- 선택 --','디지털정보통신과', '멀티미디어디자인과', '물리치료학과', '레저스포츠케어과'],
        c: ['-- 선택 --','방사선학과','보건의료정보학과','보육과','뷰티아트과','비서사무행정과'],
        d: ['-- 선택 --','사회복지과', '세무회계과', '시각미디어디자인과','식품영양학과','스마트콘텐츠과'],
        e: ['-- 선택 --','IT융합비즈니스과','인공지능소프트웨어과','유아교육과','의료미용과','의료정보과','임상병리과','에이블자립학과'],
        f: ['-- 선택 --','컴퓨터정보과','컴퓨터공학과'],
        g: ['-- 선택 --','항공관광영어과','항공비서사무과','호텔관광과','호텔조리과'],
        h: ['-- 선택 --','기타도서'],
    }

    cate1.addEventListener('change', () => {
        switch (cate1.selectedOptions[0].value) {
            case 'ㄱ':
                selectedSpan.innerHTML = '(ㄱ)학과 >';
                var subOption = subOptions.a;
                appendOption(subOption);

                break;
            case 'ㄷㄹㅁ':
                selectedSpan.innerHTML = '(ㄷ/ㄹ/ㅁ)학과 >';
                var subOption = subOptions.b;
                appendOption(subOption);
                break;
            case 'ㅂ':
                selectedSpan.innerHTML = '(ㅂ)학과 >';
                var subOption = subOptions.c;
                appendOption(subOption);
                break;
            case 'ㅅ':
                 selectedSpan.innerHTML = '(ㅅ)학과 >';
                 var subOption = subOptions.d;
                appendOption(subOption);
                break;
            case 'ㅇ':
                 selectedSpan.innerHTML = '(ㅇ)학과 >';
                 var subOption = subOptions.e;
                appendOption(subOption);
                break;
            case 'ㅋ':
                 selectedSpan.innerHTML = '(ㅋ)학과 >';
                 var subOption = subOptions.f;
                appendOption(subOption);
                break;
            case 'ㅎ':
                 selectedSpan.innerHTML = '(ㅎ)학과 >';
                 var subOption = subOptions.g;
                appendOption(subOption);
                break;
        }
    })
    
    function appendOption(subOption)
    {
            cate2.options.length = 0; // 초기화
            selectedSpan2.innerHTML = "";
            for (var i = 0; i < subOption.length; i++)
                {
                   
                    let option = document.createElement('option');
                    option.innerHTML = subOption[i];
                    cate2.append(option);

                }


    }

    cate2.addEventListener('change', (event) => {
         selectedSpan2.innerHTML = event.target.value;

    })

    
   

	




</script>

</body>
</html>