<!DOCTYPE html>
<html lang="en">

<?php include("main_blocks/head.php") ?>

<body class="catalog_categories_lev2 subcategory_page catalog_section">

<!-- =========================>>> HEADER <<<============================= -->
<?php include("main_blocks/header_fixed.php") ?>

<?php include("main_blocks/header.php") ?>

<!-- =========================>>> HEADER END <<<============================= -->
<!-- =========================>>> CONTENT <<<============================= -->

<div id="content">
    <div class="container">
        <div class="row">
            <a href="javascript:;" class="filter_box_lk"></a>
            <div class="black_bg"></div>
            <div class="col-lg-3">
                <div class="filter_box b-white">
                    <h3 class="headline">Подбор по параметрам</h3>
                    <form action="" id="filter">
                        <div class="filter_basic filter_section bdb2">
                            <input type="checkbox" id="filter_basic1">
                            <label class="filter_label duble" for="filter_basic1">Все</label>
                            <input type="checkbox" id="filter_basic2">
                            <label class="filter_label duble" for="filter_basic2">Акции</label>
                            <input type="checkbox" id="filter_basic3">
                            <label class="filter_label duble" for="filter_basic3">Распродажа</label>
                            <input type="checkbox" id="filter_basic4">
                            <label class="filter_label duble" for="filter_basic4">Новинки</label>
                        </div>
                        <div class="filter_price filter_section bdb2">
                            <h4 class="filter_title">Цена</h4>                    
                            <div id="slider-range"></div>
                            <div class="clearfix1">
                                <span class="price_min f_left">0</span>
                                <span class="price_max f_right">50000</span>
                            </div>
                            <p class="slider_inp">
                              <label for="amount1">от
                                <input type="text" id="amount1">
                                </label>
                              <label for="amount2">до
                                <input type="text" id="amount2">
                              </label>
                            </p>
                        </div>
                        
                        <div class="filter_additionally">
                            <div class="filter_materials filter_section bdb2">
                                <h4 class="filter_title">Материал</h4>
                                <input type="checkbox" id="filter_materials1">
                                <label class="filter_label" for="filter_materials1">Натуральная кожа
                                </label>
                                <input type="checkbox" id="filter_materials2">
                                <label class="filter_label" for="filter_materials2">Металл</label>
                                <input type="checkbox" id="filter_materials3">
                                <label class="filter_label" for="filter_materials3">Дуб</label>
                                <input type="checkbox" id="filter_materials4">
                                <label class="filter_label" for="filter_materials4">Стекло</label>
                                <a href="#" class="vacancy_more filter_lk p_abs">Показать все</a>
                            </div>
                            <div class="filter_brand filter_section bdb2">
                                <h4 class="filter_title">Бренды</h4>
                                <input type="checkbox" id="filter_brand1">
                                <label class="filter_label" for="filter_brand1">Dupen</label>
                                <input type="checkbox" id="filter_brand2">
                                <label class="filter_label" for="filter_brand2">Bontempi</label>
                                <input type="checkbox" id="filter_brand3">
                                <label class="filter_label" for="filter_brand3">Gomlden</label>
                                <input type="checkbox" id="filter_brand4">
                                <label class="filter_label" for="filter_brand4">Galleria Classico</label>
                                <a href="#" class="vacancy_more filter_lk p_abs">Показать все</a>
                            </div>
                            <div class="filter_color filter_section bdb2">
                                <h4 class="filter_title">Цвет</h4>
                                <input type="checkbox" id="filter_color1">
                                <label class="filter_label" for="filter_color1">Белый</label>
                                <input type="checkbox" id="filter_color2">
                                <label class="filter_label" for="filter_color2">Черный</label>
                                <input type="checkbox" id="filter_color3">
                                <label class="filter_label" for="filter_color3">Венге</label>
                                <input type="checkbox" id="filter_color4">
                                <label class="filter_label" for="filter_color4">Выбеленный дуб</label>
                                <a href="#" class="vacancy_more filter_lk p_abs">Показать все</a>
                            </div>
                            <div class="filter_sleeper filter_section bdb2">
                                <h4 class="filter_title">Спальное место<i class="question"></i></h4>
                                <input type="checkbox" id="filter_sleeper1">
                                <label class="filter_label duble" for="filter_sleeper1">90*180</label>
                                <input type="checkbox" id="filter_sleeper2">
                                <label class="filter_label duble" for="filter_sleeper2">160*180</label>
                                <input type="checkbox" id="filter_sleeper3">
                                <label class="filter_label duble" for="filter_sleeper3">140*180</label>
                                <input type="checkbox" id="filter_sleeper4">
                                <label class="filter_label duble" for="filter_sleeper4">200*220</label>
                            </div>
                            <div class="filter_hoist filter_section bdb2">
                                <h4 class="filter_title">Подъемный механизм<i class="question"></i></h4>
                                <input type="checkbox" id="filter_hoist1">
                                <label class="filter_label duble" for="filter_hoist1">Да</label>
                                <input type="checkbox" id="filter_hoist2">
                                <label class="filter_label duble" for="filter_hoist2">Нет</label>
                                <input type="checkbox" id="filter_hoist3">
                                <label class="filter_label duble" for="filter_hoist3">Незнаю</label>
                            </div>
                            <div class="filter_style filter_section bdb2">
                                <h4 class="filter_title">Стиль</h4>
                                <input type="checkbox" id="filter_style1">
                                <label class="filter_label duble" for="filter_style1">Класика</label>
                                <input type="checkbox" id="filter_style2">
                                <label class="filter_label duble" for="filter_style2">Модерн</label>
                            </div>
                            <div class="filter_form filter_section bdb2">
                                <h4 class="filter_title">Форма</h4>
                                <input type="checkbox" id="filter_form1">
                                <label class="filter_label duble" for="filter_form1">Круглая</label>
                                <input type="checkbox" id="filter_form2">
                                <label class="filter_label duble" for="filter_form2">Квадратная</label>
                                <input type="checkbox" id="filter_form3">
                                <label class="filter_label duble" for="filter_form3">Неважно</label>
                            </div>
                            <div class="filter_coutry filter_section bdb2">
                                <h4 class="filter_title">Страна производитель</h4>
                                <input type="checkbox" id="filter_coutry1">
                                <label class="filter_label duble" for="filter_coutry1">Испания</label>
                                <input type="checkbox" id="filter_coutry2">
                                <label class="filter_label duble" for="filter_coutry2">Турция</label>
                                <input type="checkbox" id="filter_coutry3">
                                <label class="filter_label duble" for="filter_coutry3">Италия</label>
                            </div>
                            </div>
                        <div class="filter_btn filter_section clearfix1">
                            <batton type="reset" class="reset_lk">Сбросить</batton>
                            <button class="sub_btn">ПОДОБРАТЬ</button>
                        </div>
                        <div class="al_center">
                            <a href="#content" class="filter_additionally_lk">Дополнительно</a>
                        </div>
                    </form>
                </div>
                <div class="sales ml-hidden460">
                    <a href="#" class="unit sidebar_banner">
                        <span class="pict">
                            <img src="images/spanish-bedroom.jpg" alt="">
                        </span>    
                        <span class="body">
                            <span class="text">
                                <i class="icn icn-percent"></i>
                                Итальянкские спальни со скидкой 10%
                            </span>
                        </span>
                    </a>
                </div>  
                <div class="sidebar_box1 b-white ml-hidden460">
                    <h3 class="headline">Несколько слов о нашем каталоге мебели</h3>
                    <div class="sidebar_text1">
                        <p>
                            Превосходный дизайн и качество — это ключевые характеристики, отличающие мебель в интернет-магазине Надиване.рф
                        </p>
                        <p>
                            Мебельные марки: Nieri, Natisa (Effezeta), Calligaris (O&G), Vierhaus, Dupen, Gomlden и многие другие фабрики из Италии, Германии, Испании и Китая, известны и хорошо.
                        </p>
                        <p>
                            Превосходный дизайн и качество — это ключевые характеристики, отличающие мебель в интернет-магазине Надиване.рф. Мебельные марки: Nieri, Natisa (Effezeta), Calligaris (O&G), Vierhaus, Dupen, Gomlden и многие другие фабрики из Италии, Германии, Испании и Китая, известны и хорошо.
                        </p>
                        <p>
                            Превосходный дизайн и качество — это ключевые характеристики, отличающие мебель в интернет-магазине Надиване.рф
                        </p>
                        <p>
                            Мебельные марки: Nieri, Natisa (Effezeta), Calligaris (O&G), Vierhaus, Dupen, Gomlden и многие другие фабрики из Италии, Германии, 
                        </p>
                        <a href="#" class="more1">Далее</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="breadcrumbs">
                            <li class="breadcrumbs_it">
                                <a href="index.html" class="breadcrumbs_lk"></a>
                            </li>
                            <li class="breadcrumbs_it">
                                <a href="about_company.html" class="breadcrumbs_lk">Каталог</a>
                            </li>
                            <li class="breadcrumbs_it">
                                <a href="about_company.html" class="breadcrumbs_lk">Мебель для спальни</a>
                            </li>
                            <li class="breadcrumbs_it p_rel">
                                <span class="breadcrumbs_current subcategory_btn">Кровати</span>
                                <div class="subcategory p_abs">
                                    <div class="p_rel">
                                        <hr>
                                        <ul class="subcategory_list">
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Двуспальные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Односпальные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Кровати с механизмом</a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Кожаные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Металлические кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Деревянные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Круглые кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Двуспальные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Односпальные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Кровати с механизмом</a>
                                            </li>
                                        </ul>
                                        <ul class="subcategory_list">
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Кожаные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Металлические кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Деревянные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Круглые кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Двуспальные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Односпальные кровати </a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Кровати с механизмом</a>
                                            </li>
                                            <li class="subcategory_list_it">
                                                <a href="#" class="subcategory_list_lk">Кожаные кровати </a>
                                            </li>
                                        </ul>
                                        <a href="#" class="vacancy_more catalog_list_lk1 p_abs">Показать все</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="flexslider">
                            <ul class="slides clearfix1">
                                <li class="flex_it clearfix1 p_rel">
                                    <figure class="large-photo p_rel f_left">
                                        <a href="" class="flex_link">
                                            <img src="images/photo-slide.jpg" alt="">
                                            <figcaption class="desc animation_class opacity app_left tr1">
                                                 Диван Meteor G/4738 (O&G)
                                                 <span> от 88 785,–</span>
                                            </figcaption>
                                        </a>
                                    </figure>
                                    <div class="special-col f_right p_abs">
                                        <a href="#" class="special-col_top p_rel animation_class opacity app_top tr3">
                                            <div class="special-col_marker p_abs animation_class opacity app_top tr4">
                                                <i></i><span><strong>Товар дня</strong><br>
                                                Успейте купить!</span>
                                            </div>
                                        </a>
                                        <a href="#" class="special-col_bottom p_rel animation_class opacity app_right tr5">
                                            <div class="special-col_marker p_abs animation_class opacity app_right tr6">
                                                <i></i><span><strong>Количество<br>
                                                ограниченно!</strong>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="flex_it clearfix1 p_rel">
                                    <figure class="large-photo p_rel f_left">
                                        <a href="" class="flex_link">
                                            <img src="images/photo-slide.jpg" alt="">
                                            <figcaption class="desc animation_class opacity app_left tr1">
                                                 Диван Meteor G/4738 (O&G)
                                                 <span> от 88 785,–</span>
                                            </figcaption>
                                        </a>
                                    </figure>
                                    <div class="special-col f_right p_abs">
                                        <a href="#" class="special-col_top p_rel animation_class opacity app_top tr3">
                                            <div class="special-col_marker p_abs animation_class opacity app_top tr4">
                                                <i></i><span><strong>Товар дня</strong><br>
                                                Успейте купить!</span>
                                            </div>
                                        </a>
                                        <a href="#" class="special-col_bottom p_rel animation_class opacity app_right tr5">
                                            <div class="special-col_marker p_abs animation_class opacity app_right tr6">
                                                <i></i><span><strong>Количество<br>
                                                ограниченно!</strong>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="flex_it clearfix1 p_rel">
                                    <figure class="large-photo p_rel f_left">
                                        <a href="" class="flex_link">
                                            <img src="images/photo-slide.jpg" alt="">
                                            <figcaption class="desc animation_class opacity app_left tr1">
                                                 Диван Meteor G/4738 (O&G)
                                                 <span> от 88 785,–</span>
                                            </figcaption>
                                        </a>
                                    </figure>
                                    <div class="special-col f_right p_abs">
                                        <a href="#" class="special-col_top p_rel animation_class opacity app_top tr3">
                                            <div class="special-col_marker p_abs animation_class opacity app_top tr4">
                                                <i></i><span><strong>Товар дня</strong><br>
                                                Успейте купить!</span>
                                            </div>
                                        </a>
                                        <a href="#" class="special-col_bottom p_rel animation_class opacity app_right tr5">
                                            <div class="special-col_marker p_abs animation_class opacity app_right tr6">
                                                <i></i><span><strong>Количество<br>
                                                ограниченно!</strong>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <article class="categories_box b-white">
                            <h2 class="headline">Кровати</h2>
                            <ul class="categories_list clearfix1">
                                <li class="categories_list_it active">
                                    <a href="#" class="categories_list_lk">Все кровати</a>
                                </li>
                                <li class="categories_list_it">
                                    <a href="#" class="categories_list_lk">Двуспальные кровати</a>
                                </li>
                                <li class="categories_list_it">
                                    <a href="#" class="categories_list_lk">Односпальные кровати</a>
                                </li>
                                <li class="categories_list_it">
                                    <a href="#" class="categories_list_lk">Круглые кровати</a>
                                </li>
                                <li class="categories_list_it">
                                    <a href="#" class="categories_list_lk">Кованые кровати</a>
                                </li>
                                <li class="categories_list_it">
                                    <a href="#" class="categories_list_lk">Металлические кровати</a>
                                </li>
                                <li class="categories_list_it">
                                    <a href="#" class="categories_list_lk">Деревянные кровати</a>
                                </li>
                                <li class="categories_list_it">
                                    <a href="#" class="categories_list_lk">Кровати с подъемным  механизмом</a>
                                </li>
                                <li class="categories_list_it">
                                    <a href="#" class="categories_list_lk">Показать еще →</a>
                                </li>
                            </ul>
                            <div class="sort_box clearfix1">
                                <div class="sort1 f_left">
                                    <span>Сортировть:</span>
                                    <button class="active">Популярности</button>
                                    <button>Цене</button>
                                    <button>Дате добавления</button>
                                </div>
                                <div class="show2 f_right">
                                    <label for="show_show">Выводить по:</label>
                                    <select name="" id="show_show">
                                        <option value="show_show">20</option>
                                        <option value="show_show">18</option>
                                        <option value="show_show">9</option>
                                        <option value="show_show">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="categories_box1 clearfix1">
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 22</span>
                                        </div>
                                        <a class="title" href="#">Кровать 959 (Татами)</a>
                                        <ul class="color_list">
                                            <li class="color_list_it gray_color"></li>
                                            <li class="color_list_it slate_grey_color"></li>
                                            <li class="color_list_it white_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="old-price ml-hidden460">89 150,–</span>
                                            <strong class="current-price">61 785,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 12 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>При общем заказе 60 000,– доставка бесплатная</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img2.jpg" alt="">
                                        </a>
                                        <div class="marker3">
                                            <i class="mark3 f_left"></i>
                                            <h5 class="f_left"><strong>хит продаж</strong></h5>
                                        </div>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 18</span>
                                        </div>
                                        <a class="title" href="#">Кровать ДЖУЛЬЕТТА 180x200</a>
                                        <ul class="color_list">
                                            <li class="color_list_it red_color"></li>
                                            <li class="color_list_it blue_color"></li>
                                            <li class="color_list_it white_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="price_for ml-hidden460">за пагонный метр</span>
                                            <strong class="current-price">73 450,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 15 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>Доставка в течении 2-3 дней</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img3.jpg" alt="">
                                        </a>
                                        <div class="marker2">
                                          <i class="mark2 f_left">new</i>
                                          <h5 class="f_left">новинки</h5>
                                        </div>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 155</span>
                                        </div>
                                        <a class="title" href="#">Кровать Afrodita S 015 BLACK (TS)</a>
                                        <ul class="color_list">
                                            <li class="color_list_it orenge_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="price_for ml-hidden460">за 2 позиции</span>
                                            <strong class="current-price">61 785,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 12 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>При общем заказе 60 000,– доставка бесплатная</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 22</span>
                                        </div>
                                        <a class="title" href="#">Кровать 959 (Татами)</a>
                                        <ul class="color_list">
                                            <li class="color_list_it gray_color"></li>
                                            <li class="color_list_it slate_grey_color"></li>
                                            <li class="color_list_it white_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="old-price ml-hidden460">89 150,–</span>
                                            <strong class="current-price">61 785,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 12 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>При общем заказе 60 000,– доставка бесплатная</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img2.jpg" alt="">
                                        </a>
                                        <div class="marker3">
                                            <i class="mark3 f_left"></i>
                                            <h5 class="f_left"><strong>хит продаж</strong></h5>
                                        </div>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 18</span>
                                        </div>
                                        <a class="title" href="#">Кровать ДЖУЛЬЕТТА 180x200</a>
                                        <ul class="color_list">
                                            <li class="color_list_it red_color"></li>
                                            <li class="color_list_it blue_color"></li>
                                            <li class="color_list_it white_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="price_for ml-hidden460">за пагонный метр</span>
                                            <strong class="current-price">73 450,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 15 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>Доставка в течении 2-3 дней</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img3.jpg" alt="">
                                        </a>
                                        <div class="marker2">
                                          <i class="mark2 f_left">new</i>
                                          <h5 class="f_left">новинки</h5>
                                        </div>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 155</span>
                                        </div>
                                        <a class="title" href="#">Кровать Afrodita S 015 BLACK (TS)</a>
                                        <ul class="color_list">
                                            <li class="color_list_it orenge_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="price_for ml-hidden460">за 2 позиции</span>
                                            <strong class="current-price">61 785,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 12 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>При общем заказе 60 000,– доставка бесплатная</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 22</span>
                                        </div>
                                        <a class="title" href="#">Кровать 959 (Татами)</a>
                                        <ul class="color_list">
                                            <li class="color_list_it gray_color"></li>
                                            <li class="color_list_it slate_grey_color"></li>
                                            <li class="color_list_it white_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="old-price ml-hidden460">89 150,–</span>
                                            <strong class="current-price">61 785,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 12 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>При общем заказе 60 000,– доставка бесплатная</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img2.jpg" alt="">
                                        </a>
                                        <div class="marker3">
                                            <i class="mark3 f_left"></i>
                                            <h5 class="f_left"><strong>хит продаж</strong></h5>
                                        </div>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 18</span>
                                        </div>
                                        <a class="title" href="#">Кровать ДЖУЛЬЕТТА 180x200</a>
                                        <ul class="color_list">
                                            <li class="color_list_it red_color"></li>
                                            <li class="color_list_it blue_color"></li>
                                            <li class="color_list_it white_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="price_for ml-hidden460">за пагонный метр</span>
                                            <strong class="current-price">73 450,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 15 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>Доставка в течении 2-3 дней</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img3.jpg" alt="">
                                        </a>
                                        <div class="marker2">
                                          <i class="mark2 f_left">new</i>
                                          <h5 class="f_left">новинки</h5>
                                        </div>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 155</span>
                                        </div>
                                        <a class="title" href="#">Кровать Afrodita S 015 BLACK (TS)</a>
                                        <ul class="color_list">
                                            <li class="color_list_it orenge_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="price_for ml-hidden460">за 2 позиции</span>
                                            <strong class="current-price">61 785,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 12 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>При общем заказе 60 000,– доставка бесплатная</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 22</span>
                                        </div>
                                        <a class="title" href="#">Кровать 959 (Татами)</a>
                                        <ul class="color_list">
                                            <li class="color_list_it gray_color"></li>
                                            <li class="color_list_it slate_grey_color"></li>
                                            <li class="color_list_it white_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="old-price ml-hidden460">89 150,–</span>
                                            <strong class="current-price">61 785,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 12 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>При общем заказе 60 000,– доставка бесплатная</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img2.jpg" alt="">
                                        </a>
                                        <div class="marker3">
                                            <i class="mark3 f_left"></i>
                                            <h5 class="f_left"><strong>хит продаж</strong></h5>
                                        </div>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 18</span>
                                        </div>
                                        <a class="title" href="#">Кровать ДЖУЛЬЕТТА 180x200</a>
                                        <ul class="color_list">
                                            <li class="color_list_it red_color"></li>
                                            <li class="color_list_it blue_color"></li>
                                            <li class="color_list_it white_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="price_for ml-hidden460">за пагонный метр</span>
                                            <strong class="current-price">73 450,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 15 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>Доставка в течении 2-3 дней</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories_it maxheight">
                                    <figure class="p_rel categories_it_img">
                                        <a href="#">
                                            <img src="images/categories_it_img3.jpg" alt="">
                                        </a>
                                        <div class="marker2">
                                          <i class="mark2 f_left">new</i>
                                          <h5 class="f_left">новинки</h5>
                                        </div>
                                    </figure>
                                    <div class="categories_description">
                                        <div class="review-row">
                                            <div class="rating in-block">
                                                <img src="images/reit.png" alt="">
                                            </div>
                                            <span class="ml-hidden460">Отзывов: 155</span>
                                        </div>
                                        <a class="title" href="#">Кровать Afrodita S 015 BLACK (TS)</a>
                                        <ul class="color_list">
                                            <li class="color_list_it orenge_color"></li>
                                            <li class="color_list_it black_color"></li>
                                        </ul>
                                        <div class="price-row">
                                            <span class="price_for ml-hidden460">за 2 позиции</span>
                                            <strong class="current-price">61 785,–</strong>
                                        </div>
                                        <a class="add_basket ml-hidden460" href="javascript:;">
                                          <i></i>
                                        </a>
                                        <a class="buy-credit ml-hidden460" href="#">
                                            Купить в кредит за 12 300,– в месяц
                                        </a>
                                        <div class="delivery">
                                            <span>При общем заказе 60 000,– доставка бесплатная</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="al_center">
                                <button class="download_more">Загрузить еще</button>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">    
            <div class="col-lg-12">
                <div class="subscribe-form ml-hidden460 mb">
                    <form action="#">
                        <div class="col left txt-right">
                            <label>Подпишитесь на рассылку и получайте скидки</label>
                        </div>
                        <div class="col right">
                            <div class="field">
                                <input type="text" value="Введи Ваш email" onblur="if(this.value=='') this.value='Введи Ваш email'" onfocus="if(this.value =='Введи Ваш email' ) this.value=''">
                                <input type="submit" value="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =========================>>> CONTENT END <<<============================= -->
<!-- =========================>>> FOOTER <<<============================= -->
<?php include("main_blocks/footer.php") ?>
<!-- =========================>>> FOOTER END <<<============================= -->


<script>
var doc_w = $(document).width();

function initSlider(currentSlider, currentScrollbar){
    if(!currentSlider){
        var currentSlider = "#swiper_slider_0";
    }
    if(!currentScrollbar){
        var currentScrollbar = "#scrollbar_drag0";
    }
    if(doc_w <= 768){

        $("#content").find(".swiper-container").each(function(){
            var mySwiper = new Swiper(this ,{
                scrollContainer: true,
                // scrollbar: {
                //   container: '.swiper-scrollbar'
                // }
             })
            $('.arrow-left').on('click', function(e){
                e.preventDefault();
                mySwiper.swipePrev();
              })
              $('.arrow-right').on('click', function(e){
                e.preventDefault();
                mySwiper.swipeNext();
              })
        })
        
    }
    else{
        var mySwiper = new Swiper(currentSlider, {
            scrollContainer: true,
            scrollbar: {
              container: currentScrollbar
            }
         })
        $('.arrow-left').on('click', function(e){
            e.preventDefault();
            mySwiper.swipePrev();
          })
          $('.arrow-right').on('click', function(e){
            e.preventDefault();
            mySwiper.swipeNext();
          })
        
    }
    
}

if (doc_w){        
    $('ul.tabs').each(function() {  
        $(this).find('li').each(function(i) {  
            $(this).click(function(){  
                var initCurrentSlider = $(this).data("slider");
                var initCurrentScrollbar = $(this).data("scrollbar");
                $(this).addClass('current').siblings().removeClass('current')  
                .parents('.section-tabs, .tabs').find('.tab').eq(i).fadeIn(150).siblings('.tab').hide(); 
                initSlider(initCurrentSlider, initCurrentScrollbar);
                
            });  
        });  
    }); 
} else {
    $('.special-text-tabs ul.tabs').each(function() {  
        $(this).find('li').each(function(i) {  
            $(this).click(function(){  
                $(this).addClass('current').siblings().removeClass('current')  
                .parents('.section-tabs, .tabs').find('.tab').eq(i).fadeIn(150).siblings('.tab').hide();  
                initSlider();
            });  
        });  
    });     
};


var page_h = screen.width;
if (page_h >= 761) {
function scrollbarSlider() {

    $(window).load(function(){

        // var ScrollbarSlider = $(".slider-products");

        
        // $(".slider-products").mCustomScrollbar({
        //     scrollInertia:550,
        //     horizontalScroll:true,
        //     mouseWheelPixels:290,
        //     updateOnContentResize:true,
        //     scrollButtons:{
        //         enable:true,
        //         scrollType:"pixels",
        //         scrollAmount:290
        //     },
        //     callbacks:{
        //         onScroll:function(){ snapScrollbar(); }
        //     } 
        // });
          
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
};

};

$(function() {
    $(window).resize(scrollbarSlider());
    initSlider();
});


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

$('ul.main-level').find('.p-subitems').find('.p-link').on('click', function(e){
    e.preventDefault();
    $(this).parent().toggleClass('visible');
});
$(document).ready(function(){
    $('.flexslider').flexslider({
      animation: "slide"
    });
    $(".sidebar_list_it").hover(
      function () {
        $(this).find(".sidebar_sub_list").slideDown();
      },
      function () {
        $(".sidebar_sub_list").stop();
        $(this).find(".sidebar_sub_list").slideUp();
      }
    );
     $(".top-level-btn").click(function(){
        $(".catalog_nav").toggleClass("active")
    })
    $(".form_btn").click(function(){
        $("#contacts").slideToggle()
        $(".form_btn").toggleClass("active")
    })
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 50000,
      values: [ 10000, 30000 ],
      slide: function( event, ui ) {
        $( "#amount1" ).val( ui.values[ 0 ]);
        $( "#amount2" ).val( ui.values[ 1 ]);
      }
    });
    $( "#amount1" ).val( $( "#slider-range" ).slider( "values", 0 ));
    $( "#amount2" ).val( $( "#slider-range" ).slider( "values", 1 ) );
    $('select').styler();
    $('.add_basket').click(function(){
        $(this).addClass('added_on_basket');
    });
    $('.subcategory_btn').click(function(){
        $('.subcategory').slideToggle();
    })
    $('.filter_box_lk').click(function(){
        setTimeout(function() { 
            $('.filter_box').toggleClass('active');
            $('.filter_box_lk,.black_bg').toggleClass('active');
        },100);
        
    });
    $('.filter_additionally_lk').click(function(){
        $('.filter_additionally').slideToggle();
        $(this).toggleClass('active');
    });
    
});
$(document).click(function(event) {
    if ($(event.target).closest(".filter_box").length) return;
    $(".filter_box").removeClass("active");
    event.stopPropagation();
    $('.black_bg,.filter_box_lk').removeClass('active');
  });
</script>

</body>
</html>