// Get cookỉe
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

// load page ready
$(document).ready(function() {
     
  var clicked = false;

  // restore dark mode 
  var darkMode = getCookie("darkMode");
    if (darkMode === "true") {
        //Thiết lập lại trạng thái của giao diện ở chế độ light
        $("#img1").attr("src", "../public/img/logo/brightness2.png");
        $("#img1").css("border-radius", "20px 0px 0px 20px");
        $(".card-text-descr").css("color", "black");

        $("#img2").attr("src", "../public/img/logo/moon1.png");
        $("#img2").css("border-radius", "0 20px 20px 0");
        // $('.body').css('background-color', 'white');
        $('.body').css('background-image', 'url("http://localhost/public/img/logo/light-background.jpg")');

        $('.label').css('color', 'black');
        $('.content-changes').css('border-right', '1px solid rgb(0, 0, 0)');

        clicked = true;
    }

   
  //buton dark-mode click
  $("#dark-mode").click(function() {
    if (!clicked) { // light themes
      $("#img1").attr("src", "../public/img/logo/brightness2.png");
      $("#img1").css("border-radius", "20px 0px 0px 20px");
      
      $(".card-text-descr").css("color", "black");

      $("#img2").attr("src", "../public/img/logo/moon1.png");
      $("#img2").css("border-radius", "0 20px 20px 0");
      
      // $('.body').css('background-color', 'rgb(220, 220, 220)');
      $('.body').css('background-image', 'url("http://localhost/public/img/logo/light-background.jpg")');
      $('.label').css('color', 'black');
      $('.content-changes').css('border-right', '1px solid rgb(0, 0, 0)');

    } else { // dark themes
      $("#img1").attr("src", "../public/img/logo/brightness1.png");
      $("#img1").css("border-radius", "20px 0px 0px 20px");

      $(".card-text-descr").css("color", "white");


      $("#img2").attr("src", "../public/img/logo/moon2.png");
      $("#img2").css("border-radius", "0 20px 20px 0");

      // $('.body').css('background-color', '#131313');
      $('.body').css('background-image', 'url("http://localhost/public/img/logo/background.jpg")');
      $('.label').css('color', 'white');
      $('.content-changes').css('border-right', '1px solid white');
    }
    clicked = !clicked;
    document.cookie = "darkMode=" + clicked + "; path=/"; // store to cookie
  });


// topic at home action follow to screen 
function myFunction(x) {
  let imgElements = document.querySelectorAll('.img-topic');
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



// call funtion 

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

