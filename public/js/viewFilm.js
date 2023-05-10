
function addContent()
{
    const _DATA_CMT = window._DATA_CMT; // get data content
    const _DATA_FILM = window._DATA_FILM; // get data content
    
    // console.log(_DATA_CONTENT);
    if(_DATA_CMT)
    {
      
       // add cmt
      
        _DATA_CMT.forEach(function(row) {
            console.log(row);
          let  ids = row.film_id;
            let names = row.user_name;
            let txt = row.comment_content;
        
            
            let div_child = ' <div class="cmt cmt-4">'+
            '<div class="avt"><p><i class="fas fa-user-circle" style="color: #0056eb;"></i></p></div>'+
            '<div class="info-cmt">'+
                '<div class="name"><p>'+names+'</p></div>'+
                '<div class="text-cmt">'+
                    '<div class="text-peo-cmt">'+
                        '<p>'+txt+'</p>'+
                                                                    
                    '</div>'+
                '</div>'+

            '</div>'+
        '</div>';


        $('.peo-cmt').append(div_child);
           
    
        });
    }
    if(_DATA_FILM)
    {
        _DATA_FILM.forEach(function(row) {
            console.log(row);
          let  ids = row.film_id;
          let names = row.film_name;
          let imgs = row.film_name_img;
          let trailer = row.film_name_trailer;
          let video = row.film_link_video;
          let category = row.film_category_id;
            let txt = row.film_description;
          let info_img = 'title="'+names+'" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="'+names+'"'; // link img
          let info_link = 'title="'+names+'" href="' + _ROOT_HOST + '/views?film=' +ids + '&type=0"'; // views trailer
       
            let div_child = '<source src="'+_ROOT_HOST+'/public/video-trailer/'+trailer+'" type="video/mp4">';

            $('.div-video').append(div_child);
            $('.img-film').append('<img '+info_img+'" alt="" class="img-film-1">')
            $('.descr').append(' <h4>'+names+'</h4>'+
                  
                    '<p>'+txt+'</p>');
        });

    }
}

// use ajax for category
$(document).ready(function() {

    addContent();

   
  
});