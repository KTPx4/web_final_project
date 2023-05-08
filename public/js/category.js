

function addFilm(parent) {
      
    // get data json
    const encodedData = document.getElementById("my-data").getAttribute("data-json");
    const de = JSON.parse(atob(encodedData)); // encode json
    
    const data = de['data'];
    // console.log(data);
    // console.log("hi");
    // console.log(de['data']); // in ra giá trị film_id của phần tử đầu tiên trong mảng myData
    // console.log(de); // in ra giá trị film_name của phần tử thứ hai trong mảng myData
    
    data.forEach(function(row) {
        
       let  ids = row.film_id;
        let names = row.film_name;
        let imgs = row.film_name_img;
        let trailer = row.film_name_trailer;
        let video = row.film_link_video;
        let category = row.film_category_id;

        addChild(parent, '<div class="col-4 col-sm-4 col-xl-2 img-category-div"><a href=""><img class="img-top-update" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="top update"></a></div>');
     
        addChild(parent, '<div class="col-4 col-sm-4 col-xl-2 img-category-div"><a href=""><img class="img-top-update" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="top update"></a></div>');
     
        addChild(parent, '<div class="col-4 col-sm-4 col-xl-2 img-category-div"><a href=""><img class="img-top-update" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="top update"></a></div>');
     
        addChild(parent, '<div class="col-4 col-sm-4 col-xl-2 img-category-div"><a href=""><img class="img-top-update" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="top update"></a></div>');
     

        // console.log(row.film_id);
        // xử lý từng phần tử ở đây
      });
  }
// load page ready
$(document).ready(function() {
    
    let parent = '.category-div';
    let child = '<div class="col-4 col-sm-4 col-xl-2 img-category-div"><a href=""><img class="img-top-update" src="'+window._ROOT_IMG+'picture/'+window.imgs+'" alt="top update"></a></div>';
    window.addFilm(parent, child)
     

});