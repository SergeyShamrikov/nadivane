<!DOCTYPE html>
<html lang="en">

<?php include("main_blocks/head.php") ?>

<body class="about_company_page menu_hover">
                <!--******************** header   ********************-->

<?php include("main_blocks/header_fixed.php") ?>

<?php include("main_blocks/header.php") ?>

                <!--******************** content   ********************-->   
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs clearfix">
                    <li class="breadcrumbs_it">
                        <a href="index.html" class="breadcrumbs_lk"></a>
                    </li>
                    <li class="breadcrumbs_it">
                        <span class="breadcrumbs_current">О компании</span>
                    </li>
                </ul>
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-12">
            
                <?php include("components/menu_about.php") ?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about_company wrapper">
                    <div class="company b-white mb">
                        <h2 class="headline">О КОМПАНИИ</h2>
                        <div class="padt27 clearfix1">
                            <div class="about_left">
                                <p class="padb20">Затем взгляд Грегора устремился в окно, и пасмурная погода – слышно было, как по жести подоконника стучат капли дождя – привела его и вовсе в грустное настроение. «Хорошо бы еще немного поспать и забыть всю эту чепуху», – подумал он, но это было совершенно неосуществимо, он привык спать на правом боку, а в теперешнем своем состоянии он никак не мог принять этого положения. С какой бы силой ни поворачивался он на правый бок, он неизменно сваливался опять на спину.</p>
                
                                <p class="padb20">Я так счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты.
                                </p>
                
                                <p class="padb20">Когда от милой моей долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный мирок, что снует между стебельками, наблюдаю эти неисчислимые, непостижимые разновидности червяков и мошек и чувствую близость всемогущего, создавшего нас по своему подобию.
                                </p>
                            </div>
                            <div class="about_right">
                                <p class="padb20">«Хорошо бы еще немного поспать и забыть всю эту чепуху», – подумал он, но это было совершенно неосуществимо, он привык спать на правом боку, а в теперешнем своем состоянии он никак не мог принять этого положения. С какой бы силой ни поворачивался он на правый бок, он неизменно сваливался опять на спину.</p> 
                
                                <p class="padb20">Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты.Когда от милой моей долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу крошечный мирок, что снует между стебельками, наблюдаю эти неисчислимые, непостижимые разновидности червяков и мошек</p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="carousel-banners b-white ml-hidden460">
                    <div class="jcarousel-wrapper">
                        <div class="jcarousel">
                            <ul>
                                <li><a href="#"><img src="images/partner1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/partner2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/partner3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/partner4.jpg" alt=""></a></li>
                
                                <li><a href="#"><img src="images/partner1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/partner2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/partner3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/partner4.jpg" alt=""></a></li>
                            </ul>
                        </div>
                
                        <a href="#" class="jcarousel-control-prev"><span></span></a>
                        <a href="#" class="jcarousel-control-next"><span></span></a>
                
                        <p class="jcarousel-pagination"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                <!--******************** footer   ********************-->
<?php include("main_blocks/footer.php") ?>

<script type="text/javascript">
function initFixedHeader() {

    $(window).on('scroll', function(e){
        var top = $(window).scrollTop();
        var heightHeight = $('#header').height();
        if(top>=heightHeight ) {
            $('.fixed-header').slideDown();
        } else {
            $('.fixed-header').slideUp();
        };
    });
};
$(function() {
    $(window).resize(initFixedHeader());
});
var doc_w = $(document).width();

if (doc_w >= 760) {        
    $('ul.tabs').each(function() {  
        $(this).find('li').each(function(i) {  
            $(this).click(function(){  
                $(this).addClass('current').siblings().removeClass('current')  
                .parents('.section-tabs, .tabs').find('.tab').eq(i).fadeIn(150).siblings('.tab').hide();  
            });  
        });  
    }); 
};

(function($){
    $(window).load(function(){

        var ScrollbarSlider = $(".slider-products");
        var width = ScrollbarSlider.innerWidth();

        if (width >= 1190) {
            $(".slider-products").mCustomScrollbar({
                scrollInertia:550,
                horizontalScroll:true,
                mouseWheelPixels:290,
                scrollButtons:{
                    enable:true,
                    scrollType:"pixels",
                    scrollAmount:290
                },
                callbacks:{
                    onScroll:function(){ snapScrollbar(); }
                } 
            });
        } else if (width >= 700 ) {
            $(".slider-products").mCustomScrollbar({
                scrollInertia:550,
                horizontalScroll:true,
                mouseWheelPixels:234,
                scrollButtons:{
                    enable:true,
                    scrollType:"pixels",
                    scrollAmount:234
                },
                callbacks:{
                    onScroll:function(){ snapScrollbar(); }
                } 
            });
        } else if (width <= 700 ) {
            $(".slider-products").mCustomScrollbar({
                scrollInertia:550,
                horizontalScroll:true,
                mouseWheelPixels:150,
                scrollButtons:{
                    enable:true,
                    scrollType:"pixels",
                    scrollAmount:150
                },
                callbacks:{
                    onScroll:function(){ snapScrollbar(); }
                } 
            });
        };        
        /* toggle buttons scroll type */
        var content=$(".slider-products");
        $("a[rel='toggle-buttons-scroll-type']").html("<code>scrollType: \""+content.data("scrollButtons_scrollType")+"\"</code>");
        $("a[rel='toggle-buttons-scroll-type']").click(function(e){
            e.preventDefault();
            var scrollType;
            if(content.data("scrollButtons_scrollType")==="pixels"){
                scrollType="continuous";
            }else{
                scrollType="pixels";
            }
            content.data({"scrollButtons_scrollType":scrollType}).mCustomScrollbar("update");
            $(this).html("<code>scrollType: \""+content.data("scrollButtons_scrollType")+"\"</code>");
        });
        /* snap scrollbar fn */
        var snapTo=[];
        $(".slider-products .images_container .slide").each(function(){
            var $this=$(this),thisX=$this.position().left;
            snapTo.push(thisX);
        });
        function snapScrollbar(){
            var posX=$(".slider-products .mCSB_container").position().left,closestX=findClosest(Math.abs(posX),snapTo);
            $(".slider-products").mCustomScrollbar("scrollTo",closestX,{scrollInertia:350,callbacks:false});
        }
        function findClosest(num,arr){
            var curr=arr[0];
            var diff=Math.abs(num-curr);
            for(var val=0; val<arr.length; val++){
                var newdiff=Math.abs(num-arr[val]);
                if(newdiff<diff){
                    diff=newdiff;
                    curr=arr[val];
                }
            }
            return curr;
        }
    });
})(jQuery);


</script>

</body>
</html>