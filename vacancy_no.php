<!DOCTYPE html>
<html lang="en">

<?php include("main_blocks/head.php") ?>

<body class="vacancy_no menu_hover">
                <!--******************** header   ********************-->

<?php include("main_blocks/header_fixed.php") ?>

<?php include("main_blocks/header.php") ?>

                <!--******************** content   ********************-->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs_it">
                        <a href="index.php" class="breadcrumbs_lk"></a>
                    </li>
                    <li class="breadcrumbs_it">
                        <a href="about_company.php" class="breadcrumbs_lk">О компании</a>
                    </li>
                    <li class="breadcrumbs_it">
                        <span class="breadcrumbs_current">Вакансии</span>
                    </li>
                </ul>
            </div>
        </div>        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <?php include("components/menu_about.php") ?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="our_partners b-white mb">
                    <h2 class="headline">
                            Вакансии
                        </h2>
                    <div class="clearfix1">
                        <div class="our1 clearfix1 f_left">
                            <img src="images/vacancy_no.jpg" class="vacancy_img" alt="">
                            <p class="img-text ml3">
                                На сегодняшний день в нашем магазине нет открытый вакансий. Но вы можете заполнить анкету, в случае открытия вакансии по профилю, сотрудники кашей компании свяжутся с Вами.
                            </p>
                        </div>    
                        <div class="our3 f_right">
                            <h4 class="notes-write2">
                                Заполнить анкету соискателя                   
                            </h4>
                            <form action="" id="worksheet">
                                <div class="clearfix1">
                                    <div class="clearfix1">
                                        <div class="worksheet_left">
                                            <label for="name" class="contacts_label">ФИО</label>
                                            <input type="text" id="name">
                                        </div>
                                        <div class="worksheet_right">
                                            <label for="name" class=" contacts_label">Дата рождения</label>
                                            <input type="text" id="datepicker" class="w140">
                                        </div>
                                    </div>
                                    <div class="clearfix1">
                                        <div class="worksheet_left">
                                            <label for="tel" class="pat34 contacts_label">Ваша должность</label>
                                            <input type="text" id="tel">
                                        </div>
                                        <div class="worksheet_right">
                                            <label for="name" class=" contacts_label">Желаемый оклад</label>
                                            <input class="w140" type="text" id="name">
                                            <h5 class="rur ">рублей</h5>
                                        </div>
                                    </div>
                                    <div class="clearfix1">
                                        <div class="worksheet_left">
                                            <label for="name" class="pat32 contacts_label"> Желаемый тип занятости</label>
                                            <input type="text" id="name">
                                        </div>
                                        <div class="worksheet_right">
                                            <label for="name" class=" contacts_label"> Прикрепить резюме</label>
                                            <input type="file" class=" f_left" value="Выберите файл">
                                        </div>
                                    </div>
                                </div>
                                <div class="knob1 clearfix1">
                                        <label for="name" class="contacts_label"> Введите код с картинки</label>  
                                    <div class="enter clearfix1">
                                        <img src="images/code-pic.jpg" alt="">
                                        <input class="ring2" type="text" >
                                        <button class="btn_sub button1 f_right ">отправить заявку</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
$(document).ready(function(){
   
});
</script>

</body>
</html>