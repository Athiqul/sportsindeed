<!--
    #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    #------------------------------------    
-->
<style type="text/css">
<?php 

    // query dynamic css from theme color setup table
    $dcss  = $this->db->where('theme_name',$default_theme)->get('theme_color_setup')->row();

    $font_one = (@$dcss->font_one?@$dcss->font_one:'Lato, sans-serif');
    $font_two = (@$dcss->font_two?@$dcss->font_two:'Ubuntu, sans-serif');

    if ($font_one=='Lato') {
        $font_one = $font_one.', sans-serif';
    }
    if ($font_two=='Ubuntu') {
        $font_two = $font_two.', sans-serif';
    }

    $css='';
    $css.='body{font-family:'.@$font_one.';font-size:'.@$dcss->body_font_size.'px;line-height:'.@$dcss->body_line_hight.'}h1,h2,h3,h4,h5,h6{font-family:'.@$font_one.'}p{font-family:'.@$font_one.'}.category-headding{font-family:'.@$font_one.'}.slide .post-badge{font-family:'.@$font_one.'}.sidebar-nav ul li a{font-family:'.@$font_one.'}.post-editor-date{font-family:'.@$font_one.'}.item-details .sub-category-title{font-family:'.@$font_one.'}.headding-news .post-info span,.news-feed .post-info span,.weekly-news-inner .post-info span{font-family:'.@$font_one.'}.vote-inner .radio-inline{font-family:'.@$font_one.'}.footer-logo-address address{font-family:'.@$font_one.'}footer ul li a{font-family:'.@$font_one.'}.date ul li,.date ul li a{font-family:'.@$font_one.'}.newsticker li a{font-family:'.@$font_one.'}.video-headding{font-family:'.@$font_one.'}.cats-widget ul li{font-family:'.@$font_one.'}footer table tbody tr td a{font-family:'.@$font_one.'}.login-reg-inner label{font-family:'.@$font_one.'}.headding-news .post-info span,.news-feed .post-info span,.weekly-news-inner .post-info span{background-color:'.@$dcss->color_code.';color:#fff}.readmore i{background:'.@$dcss->color_code.'}.btn-top{color:'.@$dcss->color_code.';border:2px solid '.@$dcss->color_code.'}.btn_five{background-color:'.@$dcss->color_code.'}.btn-top:hover{background-color:'.@$dcss->color_code.'}.subscribe-class{background:'.@$dcss->color_code.'}.bg-color-1{background-color:'.@$dcss->color_code.'!important}.bg-color-2{background-color:'.@$dcss->color_code.'!important}.bg-color-3{background-color:'.@$dcss->color_code.'!important}.bg-color-4{background-color:'.@$dcss->color_code.'!important}.bg-color-5{color:#fff;background-color:'.@$dcss->color_code.'!important}.color-1{color:#fff!important}.color-2{color:#fff!important}.color-3{color:#fff!important}.color-4{color:#fff!important}.color-5{color:#fff!important}.date ul li a span{color:'.@$dcss->color_code.';font-weight:600}.btn-style{background-color:'.@$dcss->color_code.';border:2px solid '.@$dcss->color_code.'}a:hover{color:'.@$dcss->color_code.';text-decoration:none}.box-item:hover .td-module-title a{color:'.@$dcss->color_code.'}.navbar-nav>li>a:focus,.navbar-nav>li>a:hover{color:#fff;background-color:'.@$dcss->color_code.';border-bottom-color:'.@$dcss->color_code.'}.pagination a.active,.pagination a:active{background-color:'.@$dcss->color_code.';border-color:'.@$dcss->color_code.';color:#fff}.headding-border{position:relative;border-bottom:1px solid #ddd;background-color:'.@$dcss->color_code.';margin-bottom:30px}.current a{position:relative;border-bottom:1px solid '.@$dcss->color_code.';color:#111}#widget-slider.owl-theme .owl-dots .owl-dot.active span,#widget-slider.owl-theme .owl-dots .owl-dot:hover span{filter:Alpha(Opacity=100);opacity:1;background:'.@$dcss->color_code.'}.newsticker-inner a i:hover{background-color:'.@$dcss->color_code.';border-color:'.@$dcss->color_code.';color:#fff}.headding-news .post-info span,.news-feed .post-info span,.weekly-news-inner .post-info span{background-color:'.@$dcss->color_code.';color:#fff}.readmore i{background:'.@$dcss->color_code.'}.btn-top{color:'.@$dcss->color_code.';border:2px solid '.@$dcss->color_code.'}.btn_five{background-color:'.@$dcss->color_code.'}.btn-top:hover{background-color:'.@$dcss->color_code.'}.subscribe-class{background:'.@$dcss->color_code.'}.bg-color-1{background-color:'.@$dcss->color_code.'!important}.bg-color-2{background-color:'.@$dcss->color_code.'!important}.bg-color-3{background-color:'.@$dcss->color_code.'!important}.bg-color-4{background-color:'.@$dcss->color_code.'!important}.bg-color-5{color:#fff;background-color:'.@$dcss->color_code.'!important}.color-1{color:#fff!important}.color-2{color:#fff!important}.color-3{color:#fff!important}.color-4{color:#fff!important}.color-5{color:#fff!important}.date ul li a span{color:'.@$dcss->color_code.';font-weight:600}.btn-style{background-color:'.@$dcss->color_code.';border:2px solid '.@$dcss->color_code.'}a:hover{color:'.@$dcss->color_code.';text-decoration:none}.box-item:hover .td-module-title a{color:'.@$dcss->color_code.'}.pagination a.active,.pagination a:active{background-color:'.@$dcss->color_code.';border-color:'.@$dcss->color_code.';color:#fff}.headding-border{position:relative;border-bottom:1px solid #ddd;background-color:'.@$dcss->color_code.';margin-bottom:30px}.current a{position:relative;border-bottom:1px solid '.@$dcss->color_code.';color:#111}#widget-slider.owl-theme .owl-dots .owl-dot.active span,#widget-slider.owl-theme .owl-dots .owl-dot:hover span{filter:Alpha(Opacity=100);opacity:1;background:'.@$dcss->color_code.'}.newsticker-inner a i:hover{background-color:'.@$dcss->color_code.';border-color:'.@$dcss->color_code.';color:#fff}.owl-carousel .owl-nav button.owl-next:hover,.owl-carousel .owl-nav button.owl-prev:hover{border-color:'.@$dcss->color_code.';background-color:'.@$dcss->color_code.'}.search-area .btn-search{background-color:'.@$dcss->color_code.';border-color:'.@$dcss->color_code.'}';
    $css.='.home-bg-color-1 a { background-color: '.@$dcss->color_code.' !important;color: #fff; padding: 2px;}.breadcrumbs ul li i {color: '.@$dcss->color_code.';font-weight: 600;}';
    $css.='.navbar{background-color:'.@$dcss->menubg_color.';border-bottom:1px solid '.@$dcss->menubg_color.'}.header-sticky.sticky{background:'.@$dcss->menubg_color.';-webkit-animation:.3s ease-in-out 0s normal none 1 running fadeInDown;animation:.3s ease-in-out 0s normal none 1 running fadeInDown}.navbar-nav>li.active>a{color:'.@$dcss->menu_font_color.';background-color:'.@$dcss->menu_hover_color.';border-bottom-color:'.@$dcss->menu_hover_color.'}.navbar-nav>li>a:focus,.navbar-nav>li>a:hover{color:'.@$dcss->menu_font_color.';background-color:'.@$dcss->menu_hover_color.';border-bottom-color:'.@$dcss->menu_hover_color.'}.navbar-nav>li>a{font-size:'.@$dcss->menu_font_size.'px;font-family:'.@$font_one.';line-height:'.@$dcss->menu_line_hight.'}';
    $css.='.navbar-nav>li.active>a {color:'.@$dcss->menu_font_color.';background-color: '.@$dcss->menu_hover_color.';border-bottom-color: '.@$dcss->menu_hover_color.';}';
    $css.='.navbar-nav > li > a {color: '.@$dcss->menu_font_color.';font-size: '.@$dcss->menu_font_size.'px;font-family: '.@$font_one.';}';
    
   //calander css
    $css.='.ui-state-active,.ui-state-highlight,.ui-widget-content .ui-state-active,.ui-widget-content .ui-state-highlight{border:1px solid '.@$dcss->color_code.';background:'.@$dcss->color_code.';color:#fff}.ui-datepicker .ui-datepicker-header{background:'.@$dcss->color_code.';color:#fff}.ui-state-hover,.ui-widget-content .ui-state-hover{background:'.@$dcss->color_code.';color:#fff;border:1px solid '.@$dcss->color_code.'}';


    echo $css;
?>


</style>