
function addContent()
{
    const _DATA_CONTENT = window._DATA_CONTENT; // get data content
    
    // console.log(_DATA_CONTENT);
    if(_DATA_CONTENT)
    {
       
      
        // add data to hot seris
        let i = 1;
        let category_names ="Category: ";
        _DATA_CONTENT.forEach(function(row) {
          let  ids = row.film_id;
            let names = row.film_name;
            let imgs = row.film_name_img;
            category_names = "Category: " + row.category_name;

        
            let info_img = 'title="'+names+'" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="'+names+'"'; // link img
            let info_link = 'title="'+names+'" href="' + _ROOT_HOST + '/views?film=' +ids + '&type=0"'; // views trailer
            let div_child = '<div class="col-4 col-sm-3 col-md-2 col-xl-2 img">'+
                              '<a '+info_link+' > <img class="img-top-film" style="width:80px" '+info_img+'> </a></div>'
          
            addChild('.category-div', div_child);
      
          });
          $("#label-category").html(category_names);
    }
    
}

// use ajax for category
$(document).ready(function() {

    addContent()

    $('.type-category').click(function(event){ // event click on menubar
  
 
            event.preventDefault(); // chặn chuyển hướng
            // Xử lý thêm tại đây nếu cần thiết
        
          // code xử lý sự kiện khi click vào thẻ a có class="type-category"
          
        // get category
        
            var types = $(this).attr('type-value');  // get type cate gory
            var year = $(this).attr('type-year');
            if(types) // if have choose in column genres
            {
              // console.log("ok");
              let category_names ="Category: ";
  
              // use ajax for type category click in nvbar
              $.ajax({
                url: "http://localhost/app/models/server.php",
                type: "GET",
                data: { type: types },
                success: function(response){
                  // Xử lý phản hồi thành công từ server
                  $('.category-div').html('');
                  // if()
                  const decode = JSON.parse(response); // encode json
                  if(decode)
                  {
                    // console.log("ok");
                    arrFilm = decode['data'];
                    // console.log(arrFilm);
                  
                    
                    arrFilm.forEach(function(row) {
                      let  ids = row.film_id;
                       let names = row.film_name;
                       let imgs = row.film_name_img;
                       let trailer = row.film_name_trailer;
                       let video = row.film_link_video;
                       let category = row.film_category_id;
                       category_names = "Category: " + row.category_name;
  
                       let info_img = 'title="'+names+'" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="'+names+'"'; // link img
                       let info_link = 'title="'+names+'" href="' + _ROOT_HOST + '/views?film=' +ids + '&type=0"'; // views trailer
                      
                       let div_child = '<div class="col-4 col-sm-3 col-md-2 col-xl-2 img">'+
                       '<a '+info_link+' > <img class="img-top-film" style="width:80px" '+info_img+'> </a></div>'
   
                      //  console.log(imgs);
                    
                       addChild('.category-div', div_child);
                       
                       $("#label-category").html(category_names);
                       //console.log(row.film_id);
                      // xử lý từng phần tử ở đây
                     });
                  }
                  /*
    
                 
    
                */
    
                },
                error: function(){
                  // Xử lý khi có lỗi xảy ra
                }
              });
            }
            
            if(year)// nvbar click in column year
            {
                 // console.log("ok");
              let category_names ="Year: ";
  
              // use ajax for type category click in nvbar
              $.ajax({
                url: "http://localhost/app/models/server.php",
                type: "GET",
                data: { year: year },
                success: function(response){

                  // Xử lý phản hồi thành công từ server
                  $('.category-div').html('');
                  // if()
                  const decode = JSON.parse(response); // encode json
                  if(decode)
                  {
                    // console.log("ok");
                    arrFilm = decode['data'];
                    // console.log(arrFilm);
                  
                    
                    arrFilm.forEach(function(row) {
                      let  ids = row.film_id;
                       let names = row.film_name;
                       let imgs = row.film_name_img;
                       let trailer = row.film_name_trailer;
                       let video = row.film_link_video;
                       let category = row.film_category_id;
                    
                       category_names = "Year: " + row.film_year;
  
                       let info_img = 'title="'+names+'" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="'+names+'"'; // link img
                       let info_link = 'title="'+names+'" href="' + _ROOT_HOST + '/views?film=' +ids + '&type=0"'; // views trailer
                      
                       let div_child = '<div class="col-4 col-sm-3 col-md-2 col-xl-2 img">'+
                       '<a '+info_link+' > <img class="img-top-film" style="width:80px" '+info_img+'> </a></div>'
   
                      //  console.log(imgs);
                    
                       addChild('.category-div', div_child);
                       
                       $("#label-category").html(category_names);
                       //console.log(row.film_id);
                      // xử lý từng phần tử ở đây
                     });
                  }
                
    
                },
                error: function(){
                  // Xử lý khi có lỗi xảy ra
                }
              });
            }

            // console.log(types);
           
          
  });
  
});