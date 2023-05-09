
const _ROOT_IMG = document.querySelector('meta[root-img]').getAttribute('root-img');
const _ROOT_TRAILER = document.querySelector('meta[root-trailer]').getAttribute('root-trailer');
const _ROOT_HOST = document.querySelector('meta[root-host]').getAttribute('root-host');




// var ids = "";
// var names = "";
// var imgs = "";
// var trailer = "" ;
// var video = "" ;
// var category = ""; 


// get data from load page and fill to page
function addMain_content() {

const encodedData = document.getElementById("my-data").getAttribute("data-json");// get from 

  if(encodedData)
  {

      const decode = JSON.parse(atob(encodedData)); // encode json
    
      const _DATA_TOP_UPDATE = decode['top_update'];
      const _DATA_LIST_FILM = decode['list_film'];
      const _DATA_CONTENT =  decode['content'];
      window._DATA_CONTENT = _DATA_CONTENT; // write to local variable use for an other file js
    
      
      _DATA_LIST_FILM.forEach(function(row) {
          let  ids = row.film_id;
            let names = row.film_name;
            let imgs = row.film_name_img;
            let trailer = row.film_name_trailer;
            let video = row.film_link_video;
            let category = row.film_category_id;
        
            let info_img = 'title="'+names+'" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="'+names+'"'; // link img
            let info_link = 'title="'+names+'" href="' + _ROOT_HOST + '/views?film=' +ids + '&type=0"'; // views trailer
            let div_child = '<div class="col-4 col-sm-4 col-xl-2 img-category-div">'+
                              '<a '+info_link+' > <img class="img-top-film" '+info_img+'> </a></div>'
          
            addChild('.list-all-film', div_child);
      
          });

      _DATA_TOP_UPDATE.forEach(function(row) {
          let  ids = row.film_id;
            let names = row.film_name;
            let imgs = row.film_name_img;
            let trailer = row.film_name_trailer;
            let video = row.film_link_video;
            let category = row.film_category_id;
        
            let info_img = 'title="'+names+'" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="'+names+'"'; // link img
            let info_link = 'title="'+names+'" href="' + _ROOT_HOST + '/views?film=' +ids + '&type=0"'; // views trailer
          
            let div_child =' <tr class="tr-top-update"> ' +
                                '<td> <a '+info_link+' >' +
                                  '<div class="card-update"><div class="row" style="width: 100%;">' +
                                      '<div class="col-6 col-sm-4"> <img class="img-top-update" '+info_img+' ></img> </div>' +
                                      '<div class="col-6 col-sm-8"><div class="description-update"><p class="card-text-descr">'+names+'</p></div>'+
                                      '</div></div>'+
                                  '</div>' +
                                '</a>   </td>' +
                              '</tr>';
          
            addChild('.tbody-top-update', div_child);
      
          });
    }
}


function addChild(parent, child)
{
  // console.log("hi");
      $(parent).append(child);
      // parentDIV.innerHTML = '';
}






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
   
// call funtion 

let x = window.matchMedia("(min-width: 992px)");
myFunction(x)
x.addListener(myFunction);

addMain_content(); // fill value to page

 
var clicked = false;

// restore dark mode 
var darkMode = getCookie("darkMode");
  if (darkMode === "true") {
      //Thiết lập lại trạng thái của giao diện ở chế độ light
      $("#img1").attr("src", "../public/img/logo/brightness2.png");
      $("#img1").css("border-radius", "20px 0px 0px 20px");
      // $(".card-text-descr").css("color", "black");

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
    
    // $(".card-text-descr").css("color", "black");

    $("#img2").attr("src", "../public/img/logo/moon1.png");
    $("#img2").css("border-radius", "0 20px 20px 0");
    
    // $('.body').css('background-color', 'rgb(220, 220, 220)');
    $('.body').css('background-image', 'url("http://localhost/public/img/logo/light-background.jpg")');
    $('.label').css('color', 'black');
    $('.content-changes').css('border-right', '1px solid rgb(0, 0, 0)');

  } else { // dark themes
    $("#img1").attr("src", "../public/img/logo/brightness1.png");
    $("#img1").css("border-radius", "20px 0px 0px 20px");

    // $(".card-text-descr").css("color", "white");


    $("#img2").attr("src", "../public/img/logo/moon2.png");
    $("#img2").css("border-radius", "0 20px 20px 0");

    // $('.body').css('background-color', '#131313');
    $('.body').css('background-image', 'url("http://localhost/public/img/logo/background.jpg")');
    $('.label').css('color', '#46E1FF');
    $('.content-changes').css('border-right', '1px solid white');
  }
  clicked = !clicked;
  document.cookie = "darkMode=" + clicked + "; path=/"; // store to cookie
});

// menubar click
$('.type-categoryssssssssssss').click(function(event){
  
 
    event.preventDefault(); // chặn chuyển hướng
    // Xử lý thêm tại đây nếu cần thiết

  // code xử lý sự kiện khi click vào thẻ a có class="type-category"
  
// get category

          var types = $(this).attr('type-value'); 
          $.ajax({
            url: "http://localhost/app/models/server.php",
            type: "GET",
            data: { type: types },
            success: function(response){
              // Xử lý phản hồi thành công từ server
              $('.parent-hotseries').html('');
              const decode = JSON.parse(response); // encode json
              console.log(decode);
              /*

              arrFilm = decode['data'];
              // console.log(arrFilm);
            
            
              arrFilm.forEach(function(row) {
                let  ids = row.film_id;
                 let names = row.film_name;
                 let imgs = row.film_name_img;
                 let trailer = row.film_name_trailer;
                 let video = row.film_link_video;
                 let category = row.film_category_id;
                //  console.log(imgs);
              
                 addChild('.parent-hotseries', '<div class="col-6 col-sm-4 col-xl-2 img"><a href=""><img class="img-top-update" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="top update" ></img></a></div>');
                 
         
                 //console.log(row.film_id);
                // xử lý từng phần tử ở đây
               });

            */

            },
            error: function(){
              // Xử lý khi có lỗi xảy ra
            }
          });
        
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

