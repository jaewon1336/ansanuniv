// let cate = document.querySelector('.cate');
// let cate2 = document.querySelector('.cate2');
// cate.addEventListener('change', (event) => {
//     let selected = document.querySelector('.selected');
//     const options = event.currentTarget.options
//     const index = event.currentTarget.options.selectedIndex
//     selected.textContent = `선택된 카테고리 : ${options[index].textContent}`
    
// });
// cate2.addEventListener('change', (event) => {
//         let selectedSpan = document.querySelector('.selected_span');
//         const options = event.currentTarget.options
//         const index = event.currentTarget.options.selectedIndex
//         selectedSpan.innerHTML = ` > ${options[index].textContent}`
// });



// cate.onchange =function() {
//     let cate2 = document.querySelector('.cate2');
//     let mainOption = cate.options[cate.selectedIndex].innerText;
//     console.log(mainOption);
    
//     let subOptions = {
//         ab:['-- 선택 --'],
//         a: ['-- 선택 --','간호학과', '건축디자인과', '경영과', '경찰정보과'],
//         b: ['-- 선택 --','디지털정보통신과', '멀티미디어디자인과', '물리치료학과', '레저스포츠케어과'],
//         c: ['-- 선택 --','방사선학과','보건의료정보학과','보육과','뷰티아트과','비서사무행정과'],
//         d: ['-- 선택 --','사회복지과', '세무회계과', '시각미디어디자인과','식품영양학과','스마트콘텐츠과'],
//         e: ['-- 선택 --','IT융합비즈니스과','인공지능소프트웨어과','유아교육과','의료미용과','의료정보과','임상병리과','에이블자립학과'],
//         f: ['-- 선택 --','컴퓨터정보과','컴퓨터공학과'],
//         g: ['-- 선택 --','항공관광영어과','항공비서사무과','호텔관광과','호텔조리과'],
//         h: ['-- 선택 --','기타도서'],
//     }

//     switch (mainOption) {
//         case '-- 선택 --' :
//             var subOption = subOptions.ab;
//             break;
//         case '(ㄱ)학과' :
//             var subOption = subOptions.a;
//             break; 
//         case '(ㄷ/ㄹ/ㅁ)학과' :
//             var subOption = subOptions.b;
//             break;
//         case '(ㅂ)학과' :
//             var subOption = subOptions.c;
//             break;    
//         case '(ㅅ)학과' :
//             var subOption = subOptions.d;
//             break;
//         case '(ㅇ)학과' :
//             var subOption = subOptions.e;
//             break;
//         case '(ㅋ)학과' :
//             var subOption = subOptions.f;
//             break;
//         case '(ㅎ)학과' :
//             var subOption = subOptions.g;
//             break;
//         case '기타도서' :
//             var subOption = subOptions.h;
//             break;
    
//     }
    
//     cate2.options.length = 0;

//     for (var i=0; i< subOption.length; i++) {
//         var option = document.createElement('option');
//         option.innerHTML = subOption[i];
//         cate2.append(option);
//     }
// }

function checkOnlyOne(element) {
    const checkBoxes = document.getElementsByName("check");

    checkBoxes.forEach((cb) => {
        cb.checked = false;
    });

    element.checked = true;
}
function checkOnlyOne2(element) {
    const checkBoxes = document.getElementsByName("check2");

    checkBoxes.forEach((cb) => {
        cb.checked = false;
    });

    element.checked = true;
}


// let price = document.getElementsByName('price');
// function getPersent(e) {
//     let priceSpan = document.querySelector('.sale-price > span');
//     if (e == 30) {
//         let persent30 = price[0].value * 30/100;
//         priceSpan.innerHTML = persent30;
//         price[0].style.textDecoration = "line-through";
//         price[0].style.textDecorationColor = "red";
//         price[0].style.color = "gray";
//     }
//     if (e == 50) {
//         let persent50 = price[0].value * 50/100;
//         priceSpan.innerHTML = persent50;
//         price[0].style.textDecoration = "line-through";
//         price[0].style.textDecorationColor = "red";
//         price[0].style.color = "gray";
//     }
//     if (e == 65) {
//         let persent65 = price[0].value * 65/100;
//         priceSpan.innerHTML = persent65;
//         price[0].style.textDecoration = "line-through";
//         price[0].style.textDecorationColor = "red";
//         price[0].style.color = "gray";
//     }
//     let priceDiscount = priceSpan.innerHTML;
//     deletePrice();
// }



// function deletePrice() {
//     price[0].addEventListener('click', () => {
//         price[0].style.textDecoration = "none";
//         price[0].style.textDecorationColor = "none";
//         price[0].style.color = "black";
//     });
//     price[0].addEventListener('select', () => {
//         price[0].style.textDecoration = "none";
//         price[0].style.textDecorationColor = "none";
//         price[0].style.color = "black";
//     });
//     price[0].addEventListener('blur', () => {
//         price[0].style.textDecoration = "line-through";
//         price[0].style.textDecorationColor = "red";
//         price[0].style.color = "gray";
//     });
// }