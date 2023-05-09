function changeActionType(type) {
    var form = document.getElementById("my-form");
    var currentUrl = new URL(form.action);
    currentUrl.searchParams.set("type", type);
    form.action = currentUrl.toString();
}

function addContent()
{
    const _DATA_CONTENT = window._DATA_CONTENT; // get data content
    if(_DATA_CONTENT)
    {
        
        // console.log(_DATA_CONTENT);
    
        // add data to hot seris
        let i = 1;
        _DATA_CONTENT.forEach(function(row) {
    
            let  ids = row.film_id;
            let names = row.film_name;
            let imgs = row.film_name_img;
        
            let genres = row.category_name;
            let raiting = row.film_rating;
            let film_year = row.film_year;
    
            let info_img = 'title="'+names+'" src="'+_ROOT_IMG+'picture/'+imgs+'" alt="'+names+'"'; // link img
            let info_link = 'title="'+names+'" href="' + _ROOT_HOST + '/views?film=' +ids + '&type=0"'; // views trailer
            let info_link2 = 'title="'+names+'" href="' + _ROOT_HOST + '/views?film=' +ids + '&type=1"'; // views film
            let srcRaiting = "";
    
            if(raiting == '1')
            {
                srcRaiting = _ROOT_IMG + 'logo/1.jpg';
                console.log("1");
    
            }   
             if(raiting == '2'){
                srcRaiting = _ROOT_IMG + 'logo/2.jpg';
                console.log("2");
    
                
            }
             if(raiting == '3'){
                srcRaiting = _ROOT_IMG + 'logo/3.jpg';
                console.log("3");
    
                
            }
             if(raiting == '4'){
                srcRaiting = _ROOT_IMG + 'logo/4.jpg';
                console.log("4");
    
                
            }
             if(raiting == '5'){
                srcRaiting = _ROOT_IMG + 'logo/5.jpg';
    
                // console.log(srcRaiting +  " ============" + names);
    
            }
            
            let div_child = "";
            let active = "";
            if(i > 3)
            {
                div_child ='<div class="col-6 col-sm-4 col-xl-2 img">'+
                                    '<a '+info_link+'><img class="img-top-update" '+info_img+' ></img></a>'+
                                '</div>';
                addChild('.parent-hotseries', div_child);
            }
            else{
                
                
                if(i == 1)
                {
                    active ='<div class="carousel-item active">'
                    
                }
                else{
                    active = '<div class="carousel-item ">';
                }
    
                div_child = active + '<div class="row">'+
                                '<div class="  col-lg-3 img img-topic">'+
                                    '<img '+info_img+'" class="d-block img-topic" alt="'+names+'">'+
                                '</div>'+
                                '<div class=" col-lg-9  description description-topic ">'+
                                    '<div class="text">'+
                                        '<div class="description">'+
                                            '<p class="title-description-topic">'+names+'</p>'+
                                            // '<p class="small-title-description-topic">this is small text</p>'+
                                            '<div class="btn-button">'+
                                                // '<form id="my-form" action="http://localhost/views?film='+ids+'&type=0" method="GET">'+
                                                    '<div class="">'+
                                                       '<a '+info_link2+' style="background-color: #F35F16;" class="button-topic btn-film" name="film" value="'+ids+'">'+
                                                            '<i class="fa-solid fa-play" style="color: #ffffff;"></i> Start'+
                                                        '</a>'+
                                                        '<a '+info_link+' style="background-color: white" class="button-topic btn-trailer" name="film" value="'+ids+'">'+
                                                            '<i class="fa-solid fa-play" style="color: #F35F16;"></i>Trailer'+
                                                        '</a>'+
                                                    '</div>'+
                                                '</form>'+
                                            '</div>'+
                                            '<div class="raiting">'+
                                                'Raiting: <img src ="'+srcRaiting+'" alt="raiting" style="width: 90px;">'+
                                            '</div>'+                                                                 
                                            '<div class="year">'+
                                                'Year of production: '+ film_year +
                                            '</div>'+                                 
                                            '<div class="genres">'+
                                                'Genres: '+ genres +
                                            '</div></div></div></div></div></div>';
                addChild('.carousel-inner', div_child);
            }
           
            i++;
        });
    }
    
}

$(document).ready(function() {

    addContent()
});