
// const formOpenBtn = document.querySelector("#form-open"),
//   home = document.querySelector(".home"),
//   formContainer = document.querySelector(".form_container"),
//   formCloseBtn = document.querySelector(".form_close"),
//   signupBtn = document.querySelector("#signup"),
//   loginBtn = document.querySelector("#login"),
//   pwShowHide = document.querySelectorAll(".pw_hide");

// formOpenBtn.addEventListener("click", () => home.classList.add("show"));
// formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

// pwShowHide.forEach((icon) => {
//   icon.addEventListener("click", () => {
//     let getPwInput = icon.parentElement.querySelector("input");
//     if (getPwInput.type === "password") {
//       getPwInput.type = "text";
//       icon.classList.replace("uil-eye-slash", "uil-eye");
//     } else {
//       getPwInput.type = "password";
//       icon.classList.replace("uil-eye", "uil-eye-slash");
//     }
//   });
// });

// signupBtn.addEventListener("click", (e) => {
//   e.preventDefault();
//   formContainer.classList.add("active");
// });
// loginBtn.addEventListener("click", (e) => {
//   e.preventDefault();
//   formContainer.classList.remove("active");
// });

// $(document).ready(function() {
//   $('.switch-toggle').click(function() {
//     if ($(this).is(':checked')) {
//       $('.body').css('background-color', 'white'); // change color background
//       $('.label').css('color', 'black'); // change text
//       $('.content-changes').css('border-right', '1px solid rgb(0, 0, 0)'); // change right border

//     } else {
//       $('.body').css('background-color', '#131313');
//       $('.label').css('color', 'white');
//       $('.content-changes').css('border-right', '1px solid white');

//     }
//   });
// });
function getCookie(name) {
  var cookieArr = document.cookie.split(";");
  for (var i = 0; i < cookieArr.length; i++) {
      var cookiePair = cookieArr[i].split("=");
      if (name === cookiePair[0].trim()) { // if name = name cokie store
          return decodeURIComponent(cookiePair[1]); // return value in cokie
      }
  }
  return null;
}
$(document).ready(function() {
  var clicked = false;

  var darkMode = getCookie("darkMode");
    if (darkMode === "true") {
        //Thiết lập lại trạng thái của giao diện ở chế độ light
        $("#img1").attr("src", "../public/img/logo/brightness2.png");
        $("#img1").css("border-radius", "20px 0px 0px 20px");

        $("#img2").attr("src", "../public/img/logo/moon1.png");
        $("#img2").css("border-radius", "0 20px 20px 0");
        $('.body').css('background-color', 'white');
        $('.label').css('color', 'black');
        $('.content-changes').css('border-right', '1px solid rgb(0, 0, 0)');
    }

    $("#dark-mode").click(function() {
        //...
    });

  //buton dark-mode click
  $("#dark-mode").click(function() {
    if (!clicked) {
      $("#img1").attr("src", "../public/img/logo/brightness2.png");
      $("#img1").css("border-radius", "20px 0px 0px 20px");

      $("#img2").attr("src", "../public/img/logo/moon1.png");
      $("#img2").css("border-radius", "0 20px 20px 0");
      
      $('.body').css('background-color', 'white');
      $('.label').css('color', 'black');
      $('.content-changes').css('border-right', '1px solid rgb(0, 0, 0)');

    } else {
      $("#img1").attr("src", "../public/img/logo/brightness1.png");
      $("#img1").css("border-radius", "20px 0px 0px 20px");

      $("#img2").attr("src", "../public/img/logo/moon2.png");
      $("#img2").css("border-radius", "0 20px 20px 0");

      $('.body').css('background-color', '#131313');
      $('.label').css('color', 'white');
      $('.content-changes').css('border-right', '1px solid white');
    }
    clicked = !clicked;
    document.cookie = "darkMode=" + clicked + "; path=/"; // store to cookie
  });


function myFunction(x) {
  let imgElements = document.querySelectorAll('.img');
  let descriptionElements = document.querySelectorAll('.description');
  
  if (x.matches) {
    // thay đổi class của các thẻ div khi kích thước màn hình lớn hơn hoặc bằng 992px
    imgElements.forEach((element) => {
      element.classList.remove('col-12');
      element.classList.add('col-lg-3');
    });
    
    descriptionElements.forEach((element) => {
      element.classList.remove('d-none');
    });
  } else {
    // thay đổi class của các thẻ div khi kích thước màn hình nhỏ hơn 992px
    imgElements.forEach((element) => {
      element.classList.remove('col-lg-3');
      element.classList.add('col-12');
    });
    
    descriptionElements.forEach((element) => {
      element.classList.add('d-none');
    });
  }
}

let x = window.matchMedia("(min-width: 992px)");
myFunction(x)
x.addListener(myFunction);




});



// const toggle = document.getElementById('toggleDark');
// const body = document.querySelector('body');

// toggle.addEventListener('click', function() {
//   this.classList.toggle('fa-duotone fa-moon');
// })


// var myCarousel = document.querySelector('#topicCarouse')
// var carousel = new bootstrap.Carousel(myCarousel, {
//   interval: 2000,
//   wrap: true
// })

