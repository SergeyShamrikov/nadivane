<!DOCTYPE html>
<html lang="en">
<?php include("main_blocks/head.php") ?>
<body class="menu_hover">
<!-- ============>>>>>>>>>>>>>>> HEADER <<<<<<<<<<<<<<<===================== -->

<?php include("main_blocks/header_fixed.php") ?>

<?php include("main_blocks/header.php") ?>
<!-- ============>>>>>>>>>>>>>>> CONTENT <<<<<<<<<<<<<<<===================== -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs_it">
                        <a href="index.html" class="breadcrumbs_lk"></a>
                    </li>
                    <li class="breadcrumbs_it">
                        <span class="breadcrumbs_current">Карта сайта</span>
                    </li>
                </ul>
            </div>
        </div>    
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
                <div class="map">
                    <div class="map_box b-white">
                        <h4 class="header-section b2">Карта сайта</h4>
                        <div class="pb55 clearfix1 ml-50">
                            <div class="box_item">
                                <h5>Каталог</h5>
                                <ul class="box_item-col">
                                    <li class="box_item-page"><a href="#">Распродажа</a></li>
                                    <li class="box_item-page"><a href="#">Акции</a></li>
                                    <li class="box_item-page"><a href="#">Хиты продаж</a></li>
                                    <li class="box_item-page"><a href="#">Новые поступления</a></li>
                                    <li class="box_item-page"><a href="#">Столы и стулья </a></li>
                                    <li class="box_item-page"><a href="#">Мебель для гостинной</a></li>
                                    <li class="box_item-page"><a href="#">Мягкая мебель</a></li>
                                    <li class="box_item-page"><a href="#">Мебель для спальни</a></li>
                                    <li class="box_item-page"><a href="#">Прихожие</a></li>
                                    <li class="box_item-page"><a href="#">Детская мебель</a></li>
                                    <li class="box_item-page"><a href="#">Летняя мебель</a></li>
                                    <li class="box_item-page"><a href="#">Товары для дома</a></li>
                                </ul>
                            </div>
                            <div class="box_item">
                                <h5>О магазине</h5>
                                <ul class="box_item-col">
                                    <li class="box_item-page"><a href="#">Отзывы</a></li>
                                    <li class="box_item-page"><a href="#">Документация</a></li>
                                    <li class="box_item-page"><a href="#">Партнеры</a></li>
                                    <li class="box_item-page"><a href="#">Вакансии</a></li>
                                    <li class="box_item-page"><a href="#">Контакты</a></li>
                                </ul>
                            </div>
                            <div class="box_item">
                                <h5>Сервис</h5>
                                <ul class="box_item-col">
                                    <li class="box_item-page"><a href="#">Виды оплаты</a></li>
                                    <li class="box_item-page"><a href="#">Доставка</a></li>
                                    <li class="box_item-page"><a href="#">Сборка</a></li>
                                    <li class="box_item-page"><a href="#">Скидки</a></li>
                                </ul>
                            </div>
                            <div class="box_item">
                                <h5>Помощь</h5>
                                <ul class="box_item-col">
                                    <li class="box_item-page"><a href="#">Как заказать</a></li>
                                    <li class="box_item-page"><a href="#">Гарантии</a></li>
                                    <li class="box_item-page"><a href="#">Ремонт</a></li>
                                    <li class="box_item-page"><a href="#">Вопросы и ответы</a></li>
                                    <li class="box_item-page"><a href="#">Глоссарий</a></li>
                                </ul>
                            </div>
                            <div class="box_item">
                                <h5>Статьи и обзоры</h5>
                            </div>
                            <div class="box_item">
                                <h5>Новости</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="subscribe-form ml-hidden460 mb">
                    <form action="#">
                        <div class="col left txt-right">
                            <label>Подпишитесь на рассылку и получайте скидки</label>
                        </div>
                        <div class="col right">
                            <div class="field">
                                <input type="text" value="" placeholder="Введи Ваш email">
                                <input type="submit" value="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============>>>>>>>>>>>>>>> FOOTER <<<<<<<<<<<<<<<===================== -->
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
$(document).ready(function(){
    $(".top-level-btn").click(function(){
        $(".catalog_nav").toggleClass("active")
    })
    $(".form_btn").click(function(){
        $("#contacts").slideToggle()
        $(".form_btn").toggleClass("active")
    })
    $( ".tabs_box" ).tabs();
    $('select, input').styler();
});
</script>

</body>
</html>