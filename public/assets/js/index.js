let slideIndex = 0;
    showSlides();

     function showSlides() {
        let i;
        let slides = document.getElementsByClassName('mySlides');

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 4000);
}





const bookItem = document.querySelectorAll('.book-item');
const coverImg = document.querySelectorAll('.cover img');
const slider = document.querySelector('.slider');
// console.log(bookItem);

bookItem.forEach((bookItem) =>{
    bookItem.onmouseover = bookItem.onmouseout = transInfo;
})

// function transInfo(event) {
//     if (event.type == 'mouseover') {
//         event.currentTarget.style.background = 'pink';
//         console.log(event.target.tagName);
//     }  
//     if (event.type == 'mouseout') {
//         event.currentTarget.style.background = 'white';
//     }

// }

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

// function upfileStyle()
//   {
//     let photo = document.querySelector('.photo-upload-box > input');
//     let photoBox = document.querySelector('.photo-box');
//     if (photo.value !== null)
//     {
//       console.log("input.value exist");
//       photoBox.innerHTML = photo.value;
//     }
    
//   } 
//   upfileStyle();

