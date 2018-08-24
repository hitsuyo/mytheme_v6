

<div style="margin-top: 50px;">

<footer id="footer" style="background-color: #F6F6F6; bottom: 0;">

        <div class="container" style="height: 50px;">

                <!-- <div class="row" id="footer-menu" style="height: 100%; "> -->

                        <!-- <div class="bottom-menu col s12" id="bottom-menu-ID" style="z-index: 9; "> -->

                                <!-- wp_nav_menu( array( 'theme_location' => 'my-main-menu', 'container_class' => 'my-custom-main-menu-class' ) );  -->

                                <!-- php echo do_shortcode( '[mtlevel_menu_bottom]' );?> -->

                        <!-- </div> -->

                <!-- </div> -->
                <a id="btn_Home" href="" ><img style="width: 32px; height: 32px;" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/house-black-building-shape.png"/></a>
                <!-- <button id="myBtnScrollTop" onclick="scrollToTop()"><img width="32px" height="32px" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/top-up.png"/></button> -->
                <style>
                #btn_Home img{margin-top: 10px;}
                #btn_Home:hover{opacity: 0.7;}
                
                </style>
        </div>
        

        <div><hr></div>

        <div class="container">

                <div class="row">

                        <div class="col s12">

                                <div class="col s12 l4 footer-so-1" style=" text-align:center; ">

                                <!-- <div class="six columns"> Skeleton -->

                                        <div style="width: 100%; margin-top: 20px;">

                                                <?php if ( is_active_sidebar( 'footer-1' ) ) : dynamic_sidebar( 'footer-1' ); endif; ?>

                                        </div>

                                </div>

                                <div class="col s12 l4 footer-so-2" style=" text-align:center; ">

                                <!-- <div class="six columns"> -->

                                        <div style="width: 100%; margin-top: 20px;">

                                                <?php if ( is_active_sidebar( 'footer-2' ) ) : dynamic_sidebar( 'footer-2' ); endif; ?>

                                        </div>

                                </div>

                                <div class="col s12 l4 footer-so-3" style=" text-align:center; ">

                                <!-- <div class="six columns"> -->

                                        <div style="width: 100%; margin-top: 20px;">

                                                <?php if ( is_active_sidebar( 'footer-3' ) ) : dynamic_sidebar( 'footer-3' ); endif; ?>

</div>

                                </div>

                        </div>

                </div>

        </div>

        <div id="quote">

                <div class="row" >

                        <!-- <div class="copyright" > -->

                        <!-- © php echo date('Y'); ?> php bloginfo( 'sitename' ); ?>. 

                        php _e('All rights reserved', 'tansang2'); ?>. php _e('This website is proundly to use WordPress', 'tansang2'); ?> -->

                        <!-- </div> -->



                        <div class="copyright" >

                        <?php _e('Copyright © ', 'VNPMEDIA'); ?><?php echo date('Y');?> <?php bloginfo( 'sitename' ); ?><?php _e(', All Rights Reserved.', 'VNPMEDIA'); ?>

                        </div>

                </div>

        </div>
</footer>


</div>



<?php wp_footer(); ?>



</article>

<script type="text/javascript">


// Load more Posts on CLick
var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
// var page = 1; // What page we are on.
var ppp = 3; // Post per page
var _offset = 3;
jQuery("#more_posts-ID").on("click",function(){ // When btn is pressed.
        // alert('Clicked');
        // jQuery("#more_posts-ID").attr("disabled",true); // Disable the button, temp.
        // $("#more_posts-ID").prop('disabled', true);
        jQuery('#more_posts-ID').remove(); // remove button/
        jQuery.post(ajaxUrl, {
                action:"more_post_ajax",
                // offset: (page * ppp) + 1,
                offset: 3,
                // ppp: ppp
                ppp: 3
        }).success(function(posts){
                // if(posts.length > 0){
                        // page++;
                        // _offset = _offset + 3;
                        jQuery(".load_post_here").append(posts); // CHANGE THIS!
                        jQuery("#more_posts-ID").attr("disabled",false);
                // }
                // else{
                //         jQuery("#more_posts-ID").html('No More Posts');  
                // }

        });
});

// wp_count_posts()->publish

</script>
<script>
        function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
        }

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
                if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                        document.getElementById("myBtnScrollTop").style.display = "block";
                } else {
                        document.getElementById("myBtnScrollTop").style.display = "none";
                }
        }

        var timeOut;
        function scrollToTop() {
                if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
                window.scrollBy(0,-95);
                timeOut=setTimeout('scrollToTop()',10);
                }
                else clearTimeout(timeOut);
        }
</script>

<script>
        // Current link CSS
        // jQuery(function() {
        //         var links = jQuery('li a.link').click(function() {
        //         links.removeClass('active');
        //         jQuery(this).addClass('active');
        //         });
        // });

        // hightlight current menu item
        jQuery("li a.link").on("click",function(){
                // alert('hello');
                var links = jQuery('li a.link').click(function() {
                links.removeClass('active');
                jQuery(this).addClass('active');
                });
        });
</script>

<!-- <script>
        window.onload=function(){
                jQuery('.slider').slick({
                autoplay:true,
                autoplaySpeed:1500,
                arrows:true,
                prevArrow:'<button type="button" class="slick-prev"></button>',
                nextArrow:'<button type="button" class="slick-next"></button>',
                centerMode:true,
                slidesToShow:3,
                slidesToScroll:1
                });
        };
</script> -->

<script>

    var slideCount = jQuery('div#slider ul li').length;
    var slideWidth = jQuery('div#slider ul li').width();
    var slideHeight = jQuery('div#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

//     jQuery('div#slider').css({ width: slideWidth, height: slideHeight });

//     jQuery('div#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

//     $('div#slider ul li:last-child').prependTo('div#slider ul');

    function moveLeft() {
        jQuery('div#slider ul').animate({
        left: + slideWidth
    }, 150, function () {
        jQuery('div#slider ul li:last-child').prependTo('div#slider ul');
        jQuery('div#slider ul').css('left', '');
    });
    };

    function moveRight() {
        jQuery('div#slider ul').animate({
        left: - slideWidth
    }, 200, function () {
        jQuery('div#slider ul li:first-child').appendTo('div#slider ul');
        jQuery('div#slider ul').css('left', '');
    });
    };

//     jQuery('div#slider p#control_prev-ID').click(function () {
//     moveLeft();
//     });

//     jQuery('p.control_next').click(function () {
//     moveRight();
//     });

jQuery("div#slider p#control_prev-ID").on("click",function(){
        // alert('Hello');
        moveLeft(); 
});

jQuery("div#slider p#control_next-ID").on("click",function(){
        // alert('Hello');
        moveRight(); 
});

// jQuery("div#slider p#control_prev-ID").on("click",function(){
//         alert('hello');
// });


//     $('#checkbox').change(function(){
//     setInterval(function () {
//         moveRight();
//     }, 3000);
//     });

//     setInterval(function () {
//         moveRight();
//     }, 6000);
//     });

window.onload = function(){

};

setInterval(moveRight, 6000);
</script>

<!-- taxanomy -->

<!-- <script>
function term_ajax_get(termID) {
//     jQuery("a.ajax").removeClass("current");
//     jQuery("a.ajax").addClass("current"); //adds class current to the category menu item being displayed so you can style it with css
//     jQuery("#post_filtered").show();
    var ajaxurl = "<php echo admin_url('admin-ajax.php')?>";
    jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        // data: {"action": "load-filter2", term: termID },
        data: {"action": "prefix_load_term_posts", term: termID },
        success: function(response) {
            jQuery("#post_filtered").html(response);
        //     jQuery("#loading-animation").hide();
            return false;
        }
    });
}
</script> -->


<script type="text/javascript">
    jQuery(document).ready(function(){
        
        
        filter_posts_by_category('all', 1);
        
    });


        var filter_posts_by_category = function(cat_slug, paged){
        // var ajax_url = window.location.protocol + "//" + window.location.host +'/wp-admin/admin-ajax.php';
        var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";

        var total_posts = -1; // -1 for show all posts

        var data = {
                
        //     'action'    : 'filter_posts_by_category', 
        // 'action'    : 'ajax_filter_posts_by_category',
        'action'    : 'Alert',
        // 'cat_slug'    : cat_slug,
        // 'posts'        : total_posts,
        // 'paged'        : paged,
        };

        jQuery.ajax({
        method:"POST",
        url: ajax_url,
        data: data,
        beforeSend : function(){
                // functionality to select unselect category
                // jQuery('.filter_icon').each(function(){
                //     jQuery(this).removeClass('selected_cat');
                // });
                
                // jQuery('.'+cat_slug).addClass('selected_cat');
                
                // function to set calender icon url to another location
                // setCalenderUrl(cat_slug);
                
                // jQuery('#post_filtered').html('<p style="text-align:center"><img class="img_loader" src="' + window.location.protocol + '//' + window.location.host + '/images/postloading.gif" /></p>');
                },
                success: function(result){
                        jQuery('.post_filtered').append(result);
                },
                error: function(xhr,status,error){
                        // console.log(error);
                }
                });
        }
    
</script>


<script>
        var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
        jQuery("p#show_aj").on("click",function(){ // When btn is pressed.
                alert('Clicked');
                // jQuery("#more_posts-ID").attr("disabled",true); // Disable the button, temp.
                // $("#more_posts-ID").prop('disabled', true);
                // jQuery('#more_posts-ID').remove(); // remove button/
                jQuery.ajax( {
                        url: ajaxUrl,
                        type: 'post',
                        
                        data : {
                                action:"alert" 
                        }
                        // offset: (page * ppp) + 1,
                        // offset: 3,
                        // ppp: 3
                }).success(function(posts){
                        // if(posts.length > 0){
                                // page++;
                                // _offset = _offset + 3;
                                jQuery(".post_filtered").html(posts); // CHANGE THIS!
                                // jQuery("#more_posts-ID").attr("disabled",false);
                        // }
                        // else{
                        //         jQuery("#more_posts-ID").html('No More Posts');  
                        // }

                });
        });
</script>

</body>

</html>



