<!DOCTYPE html>
<html lang="en">

<?php include("main_blocks/head.php") ?>

<body class="contacts_page menu_hover">
<!-- ============>>>>>>>>>>>>>>> HEADER <<<<<<<<<<<<<<<===================== -->

<?php include("main_blocks/header_fixed.php") ?>

<?php include("main_blocks/header.php") ?>

<!-- ============>>>>>>>>>>>>>>> CONTENT <<<<<<<<<<<<<<<===================== -->

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs_it">
                        <a href="index.html" class="breadcrumbs_lk"></a>
                    </li>
                    <li class="breadcrumbs_it">
                        <a href="about_company.html" class="breadcrumbs_lk">О компании</a>
                    </li>
                    <li class="breadcrumbs_it">
                        <span class="breadcrumbs_current">Контакты</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-12">
                
                <?php include("components/menu_about.php") ?>

            </div>
        </div>
        <div class="contacts_box row">
            <div class="col-lg-6">
                <div class="contacts_box_col1 b-white">
                    <div id="tabs" class="tabs_box">
                        <ul class="tabs_list">
                            <li class="tabs_list_it"><a href="#tabs_1" class="tabs_list_lk">Контакты для связи</a></li>
                            <li class="tabs_list_it"><a href="#tabs_2" class="tabs_list_lk">Реквизиты и юридический адрес</a></li>
                        </ul>
                        <div id="tabs_1">
                            <h4 class="tabs_title1">Вы всегда можете связаться с нами удобным для Вас способом</h4>
                            <ul class="tabs_list2">
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="tel_icon bg_orenge"></span></div>
                                    <div class="contact_it f_left">
                                        <h6 class="title3">Для звонков из Москвы и МО</h6>
                                        <span class="tabs_tel cont_item">8 (495) 741-84-68</span>
                                        <span class="tabs_tel cont_item">8 (499) 705-50-07</span>
                                        <br>
                                        <br>
                                        <h6 class="title3">Для звонков из регионов РФ (звонок бесплатный)</h6>
                                        <span class="tabs_tel cont_item">8-800-333-88-78</span>
                                    </div>
                                </li>
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="mail_icon bg_orenge"></span></div>
                                    <div class="contact_it f_left">
                                        <span class="cont_item">nfo@nadivane.su</span>
                                    </div>
                                </li>
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="social_icon bg_orenge"></span></div>
                                    <div class="contact_it f_left">
                                        <span class="cont_item">Мы в социальных сетях</span><div class="socials-icns d_in_block">
                                            <ul>
                                                <li><a href="#" class="icn-vk"></a></li>
                                                <li><a href="#" class="icn-fb"></a></li>
                                                <li><a href="#" class="icn-li"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="write_us_icon bg_orenge"></span></div>
                                    <div class="contact_it padl18 f_left">
                                        <span class="cont_item form_btn">Напишите нам <i></i></span>
                                        <form action="" id="contacts">
                                            <div class="clearfix1">
                                                <div class="inp_box1">
                                                    <label for="name" class="contacts_label padt23 padb5">ФИО</label>
                                                    <input type="text" id="name">
                                                </div>
                                                
                                                <div class="inp_box2">
                                                    <label for="tel" class="contacts_label">Телефон </label>
                                                    <input type="text" id="tel">
                                                </div>
                                                
                                                <div class="inp_box1">
                                                    <label for="mail" class="contacts_label">Электронная почта</label>
                                                    <input type="text" id="mail">
                                                </div>
                                                
                                                <div class="inp_box2">
                                                    <label for="thems" class="contacts_label padt34">Выберите тему</label>
                                                    <select name="" id="thems">
                                                        <option value="">Предложение по улучшению магазина</option>
                                                        <option value="">Тема1</option>
                                                        <option value="">Тема2</option>
                                                        <option value="">Тема3</option>
                                                        <option value="">Тема4</option>
                                                        <option value="">Тема5</option>
                                                        <option value="">Тема6</option>
                                                        <option value="">Тема7</option>
                                                        <option value="">Тема8</option>
                                                        <option value="">Тема9</option>
                                                    </select>
                                                </div>
                                            </div>
                        
                                            <label for="your_message" class="contacts_label padt34">Ваше сообщение </label>
                                            <textarea class="h112" name="" id="your_message"></textarea>
                                            <div class="clearfix1">
                                                <input id="consent" type="checkbox" class="f_left"><label for="consent" class="f_left">Я согласен с <a href="#" class="consent_lk">политикой обработки персональных данных</a></label>
                                                <button class="btn_sub mb0 button1 f_right">отправить</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tabs_2">
                            <h4 class="tabs_title1">Вы всегда можете связаться с нами удобным для Вас способом</h4>
                            <ul class="tabs_list2">
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="mail_icon bg_orenge"></span></div>
                                    <div class="contact_it padl18 f_left">
                                        <span class="cont_item">nfo@nadivane.su</span>
                                    </div>
                                </li>
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="tel_icon bg_orenge"></span></div>
                                    <div class="contact_it padl18 f_left">
                                        <h6 class="title3">Для звонков из Москвы и МО</h6>
                                        <span class="tabs_tel cont_item">8 (495) 741-84-68</span>
                                        <span class="tabs_tel cont_item">8 (499) 705-50-07</span>
                                        <br>
                                        <br>
                                        <h6 class="title3">Для звонков из регионов РФ (звонок бесплатный)</h6>
                                        <span class="tabs_tel cont_item">8-800-333-88-78</span>
                                    </div>
                                </li>
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="social_icon bg_orenge"></span></div>
                                    <div class="contact_it padl18 f_left">
                                        <span class="cont_item">Мы в социальных сетях</span><div class="socials-icns d_in_block">
                                            <ul>
                                                <li><a href="#" class="icn-vk"></a></li>
                                                <li><a href="#" class="icn-fb"></a></li>
                                                <li><a href="#" class="icn-li"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contacts_box_col2 b-white">
                    <div id="tabs1" class="tabs_box">
                        <ul class="tabs_list">
                            <li class="tabs_list_it"><a href="#tabs_3" class="tabs_list_lk">карта проезда до магазина</a></li>
                            <li class="tabs_list_it"><a href="#tabs_4" class="tabs_list_lk">карта проезда до склада</a></li>
                        </ul>
                        <div id="tabs_3">
                            <div class="map_adress">
                                <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=xYL0DhKzhD-xrD9wj7R8bLnsceoo4DLs&"></script>
                            </div>
                            <h4 class="tabs_title1 mb11">Как добраться</h4>
                            <ul class="tabs_list2">
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="car_icon bg_green"></span></div>
                                    <div class="contact_it line-h f_left">
                                        <p>Вы можете приобрести необходимый вам товар по цене нашего интернет-магазина, находясь в любом регионе России! Наши менеджеры возьмут на себя организацию доставки в Ваш город. Срок доставки по России составляет от 2-х до 14 рабочих дней в зависимости от дальности региона. Для отправки заказа можно воспользоваться транспортными компаниями: Деловые линии, ПЭК, Желдорэкспедиция, РГ ГРУПП или любой другой экспедиторской компанией на ваш выбор.</p>
                                    </div>
                                </li>
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="gumshoes_icon bg_green"></span></div>
                                    <div class="contact_it line-h f_left">
                                        <p>Вы можете самостоятельно выбрать транспортную компанию, либо положиться на наш опыт и предоставить данный выбор нашим менеджерам. Мы возьмем на себя оформление транспортных документов и поможем выбрать наиболее подходящий тариф на доставку мебели в ваш город. Подробности по телефону: 8 800 333-88-78 (Звонок по России бесплатный). Стоимость доставки до складского терминала транспортной компании — 1000 рублей. Вы можете самостоятельно расчитать стоимость доставки груза через транспортную компанию "Деловые Линии". Вам необходимо указать город отправки — Москва, пункт прибытия — Ваш город, вес и объем упаковки, а так же выбрать необходимые опции.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tabs_4">
                            <div class="map_adress">
                                <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=xYL0DhKzhD-xrD9wj7R8bLnsceoo4DLs&"></script>
                            </div>
                            <h4 class="tabs_title1">Как добраться</h4>
                            <ul class="tabs_list2">
                                <li class="tabs_list2_it clearfix1">
                                    <div class="f_left contact_icon"><span class="car_icon bg_green"></span></div>
                                    <div class="contact_it f_left">
                                        <p>Вы можете приобрести необходимый вам товар по цене нашего интернет-магазина, находясь в любом регионе России! Наши менеджеры возьмут на себя организацию доставки в Ваш город. Срок доставки по России составляет от 2-х до 14 рабочих дней в зависимости от дальности региона. Для отправки заказа можно воспользоваться транспортными компаниями: Деловые линии, ПЭК, Желдорэкспедиция, РГ ГРУПП или любой другой экспедиторской компанией на ваш выбор.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
    
    
});
</script>

</body>
</html>