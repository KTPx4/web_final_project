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
$(document).ready(function() {
  var clicked = false;
  $("#dark-mode").click(function() {
    if (!clicked) {
      $("#img1").attr("src", "../public/img/logo/brightness2.png");
      // $("#img1").css("background-color", "rgba(172, 30, 201, 0.986)");
      $("#img1").css("border-radius", "20px 0px 0px 20px");

      $("#img2").attr("src", "../public/img/logo/moon1.png");
      // $("#img2").css("background-color", "rgba(94, 13, 110, 0.986)");
      $("#img2").css("border-radius", "0 20px 20px 0");
      
      $('.body').css('background-color', 'white');
      $('.label').css('color', 'black');
      $('.content-changes').css('border-right', '1px solid rgb(0, 0, 0)');
    } else {
      $("#img1").attr("src", "../public/img/logo/brightness1.png");
      // $("#img1").css("background-color", "rgba(94, 13, 110, 0.986)");
      $("#img1").css("border-radius", "20px 0px 0px 20px");

      $("#img2").attr("src", "../public/img/logo/moon2.png");
      // $("#img2").css("background-color", "rgba(172, 30, 201, 0.986)");
      $("#img2").css("border-radius", "0 20px 20px 0");

      $('.body').css('background-color', '#131313');
      $('.label').css('color', 'white');
      $('.content-changes').css('border-right', '1px solid white');
    }
    clicked = !clicked;
  });
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
