<?php
    if (session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}
	
    
   
?>

<div class="views">
    <div class="label-views label">
        <h3>Hot Series</h3>
    </div>

    <div class="container-fluid" style="width:100%;">
        <div class="row">
            <!-- <p class="col-md-6 name-movie-1">Name: Movie 1</p> -->
            <p class="name-movie">Name:Movie</p>
            <div class="col-12 col-xl-8 watch">
                <div class="view-film">
                    <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                    <!-- <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="<?=HOST?>/public/video-trailer/DETECTIVE CONAN_ THE SCARLET BULLET.mp4" style="width:100%;"></iframe>
                    </div>
                 -->
                    <div class="ratio ratio-16x9">
                        <video controls class="div-video">

                        </video>
                    </div>
                </div>

                <div class="btn-views">
                <!-- Nội dung hàng thứ hai -->
                    <!-- Button Xem phim -->
                    <button class="btn-views-films btn-watch-film">Watch Film</button>
                    <!-- Button Xem trailer -->
                    <button class="btn-views-films btn-watch-trailer">Watch Trailer</button>
                    
                </div>
                <div class="episode">
                    
                    <div class="label-epi">
                        <h4 style="color: black;">Episode</h4>
                    </div>

                    <div class="epiii d-none">
                        <div class="container">
                            <div class="row">
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                                <div class="col-2">
                                    <button class="btn-eipi ">1000</button>
                                </div>
                              
                                
    
                            </div>
                        </div>

                    </div>
                </div>
                <div>
                    <div class="description-film">
                        <div class="img-film">
                            
                        </div>
                        <div class="descr">
                           
                        </div>
                    </div>

                </div>
            
            
            
            
            
            </div>

            <div class="col-12 col-xl-4 container con-cmt">
                <div class="box-cmt">

                    <div class="comment-film">
                            <div class="my-cmt">
                                <div class="me">
                                    <div class="avt"><p><i class="fas fa-user-circle" style="color: red;"></i></p></div>
                                    <div class="input-cmt">
                                            <input class="input-cmt" type="text"/>
                                            <button onclick="checkSession()" class="push" >Comment</button>
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="peo-cmt">
                                
                               
                               
                            </div>
                              
                                
                    </div>
                </div>

            </div>
        </div>
    </div>
        
</div>

