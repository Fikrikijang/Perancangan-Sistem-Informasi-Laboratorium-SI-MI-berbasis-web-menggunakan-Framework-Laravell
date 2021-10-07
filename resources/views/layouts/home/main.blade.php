<!DOCTYPE html>
<html lang="en-US" class="html_stretched responsive av-preloader-active av-preloader-enabled av-default-lightbox  html_header_top html_logo_left html_main_nav_header html_menu_right html_slim html_header_sticky html_header_shrinking html_header_transparency html_header_glassy html_mobile_menu_tablet html_header_searchicon_disabled html_content_align_center html_header_unstick_top html_header_stretch_disabled html_minimal_header html_minimal_header_shadow html_av-overlay-side html_av-overlay-side-classic html_av-submenu-noclone html_entry_id_86 av-no-preview html_text_menu_active ">
<head>
<meta charset="UTF-8" />
<meta name="robots" content="index, follow" />


<!-- mobile setting -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Scripts/CSS and wp_head hook -->
<title>ILABSIMI STMIK Jakarta STI&K @yield('title')</title>

<!-- Untuk Ukuran Prosedur besar -->
<link rel="stylesheet" id="avia-grid-css"  href="{{url('frontend/assets/stmik/css/grid.css')}}" type="text/css" media="all" />
<!-- Bagian Navbar penting-->
<link rel="stylesheet" id="avia-base-css"  href="{{url('frontend/assets/stmik/css/base.css')}}" type="text/css" media="all" />
<!-- Bagian penghubung navbar dengan image penting -->
<link rel="stylesheet" id="avia-layout-css"  href="{{url('frontend/assets/stmik/css/layout.css')}}" type="text/css" media="all" />
<!-- Bagian Slider Gambarpenting -->
<link rel="stylesheet" id="avia-scs-css"  href="{{url('frontend/assets/stmik/css/shortcodes.css')}}" type="text/css" media="all" />
<!-- Bagian tidak tahu -->
<link rel="stylesheet" id="avia-popup-css-css"  href="{{url('frontend/assets/stmik/js/aviapopup/magnific-popup.css?ver=4.2.1')}}" type="text/css" media="screen" />
<!-- Bagian tidak tahu -->
<link rel="stylesheet" id="avia-print-css"  href="{{url('frontend/assets/stmik/css/print.css')}}" type="text/css" media="print" />
<!-- Bagian Tulisan Navbar penting -->
<link rel="stylesheet" id="avia-dynamic-css"  href="{{url('frontend/assets/stmik/css/enfold.css')}}" type="text/css" media="all" />

<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}}">

<!-- Bagian tidak tahu -->
<link rel="stylesheet" id="avia-custom-css"  href="{{url('frontend/assets/stmik/css/custom.css')}}" type="text/css" media="all" />
<!-- Bagian loading --> 


<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">

<script type="text/javascript" src="{{url('frontend/assets/stmik/js/jquery/jquery.js?ver=1.12.4')}}"></script>
<!-- Bagian Tidak Tahu -->
<script type="text/javascript" src="{{url('frontend/assets/stmik/js/jquery/jquery-migrate.min.js?ver=1.4.1')}}"></script>
<!-- Bagian Tidak Tahu -->
<script type="text/javascript" src="{{url('frontend/assets/stmik/js/avia-compat.js?ver=4.2.1')}}"></script>

</head>




<body id="top" class="home page-template-default page page-id-86 page-parent stretched open_sans no_sidebar_border elementor-default" itemscope="itemscope" itemtype="" >

    <div class='av-siteloader-wrap av-transition-enabled av-transition-with-logo'>
        <div class='av-siteloader-inner'>
            <div class='av-siteloader-cell'>
                <img class='av-preloading-logo' src='{{url("frontend/assets/img/logolab1.png")}}' alt='Loading' title='Loading' />
                <div class='av-siteloader'>
                    <div class='av-siteloader-extra'></div>
                    </div>
                </div>
            </div>
        </div>
        <div id='wrap_all'>
            <header id='header' class='all_colors header_color light_bg_color av_header_top av_logo_left av_main_nav_header av_menu_right av_slim av_header_sticky av_header_shrinking av_header_stretch_disabled av_mobile_menu_tablet av_header_transparency av_header_glassy av_header_searchicon_disabled av_header_unstick_top av_minimal_header av_minimal_header_shadow av_bottom_nav_disabled  av_alternate_logo_active av_header_border_disabled'  role="banner" itemscope="itemscope" itemtype="" >
                <div  id='header_main' class='container_wrap container_wrap_logo'>
                    <div class='container av-logo-container'>
                        <div class='inner-container'>
                            <span class='logo'>
                                <a href=''>
                                    <!-- Gambar Untuk Responsif -->
                                    <img height='100' width='300' src='{{url("frontend/assets/img/logolab.png")}}' alt='Welcome to The Integrated Laboratory' />
                                        <span class='subtext'>
                                        <!--    //Gambar Utama -->
                                            <img src='{{url("frontend/assets/img/logolab.png")}}' class='alternate' alt='' title='' />
                                        </span>
                                </a>
                            </span>
                                <nav class='main_menu' data-selectname='Select a page'  role="navigation" itemscope="itemscope" itemtype="" >
                                    <div class="avia-menu av-main-nav-wrap">
                                        <ul id="avia-menu" class="menu av-main-nav">
                                            <li id="menu-item-90" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-86 current_page_item menu-item-top-level menu-item-top-level-1">
                                                <a href="{{ url('/') }}">
                                                    <span class="avia-bullet"></span>
                                                    <span class="avia-menu-text">Beranda</span>
                                                    <span class="avia-menu-fx">
                                                        <span class="avia-arrow-wrap">
                                                            <span class="avia-arrow"></span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-top-level menu-item-top-level-2">
                                                <a href="">
                                                    <span class="avia-bullet"></span>
                                                    <span class="avia-menu-text">Profil</span>
                                                    <span class="avia-menu-fx">
                                                        <span class="avia-arrow-wrap">
                                                            <span class="avia-arrow"></span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ url('/visi-misi') }}">
                                                            <span class="avia-bullet"></span>
                                                            <span class="avia-menu-text">Visi dan Misi</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ url('/struktur') }}">
                                                            <span class="avia-bullet"></span>
                                                            <span class="avia-menu-text">Struktur Organisasi</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ url('/asistens') }}">
                                                            <span class="avia-bullet"></span>
                                                            <span class="avia-menu-text">Asisten Laboratorium</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ url('/artikels') }}">
                                                            <span class="aviamd-bullet"></span>
                                                            <span class="avia-menu-text">Berita dan Kegiatan</span>
                                                        </a>
                                                    </li>z
                                                </ul>
                                            </li>
                                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-top-level menu-item-top-level-2">
                                                <a href="">
                                                    <span class="avia-bullet"></span>
                                                    <span class="avia-menu-text">ILab</span>
                                                    <span class="avia-menu-fx">
                                                        <span class="avia-arrow-wrap">
                                                            <span class="avia-arrow"></span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ url('/jadwals') }}">
                                                            <span class="avia-bullet"></span>
                                                            <span class="avia-menu-text">Jadwal Praktikum</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ url('/tahapan') }}">
                                                            <span class="avia-bullet"></span>
                                                            <span class="avia-menu-text">Tahapan Praktikum</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ url('/prosedur') }}">
                                                            <span class="avia-bullet"></span>
                                                            <span class="avia-menu-text">Prosedur Praktikum</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ url('/buku_praktikum') }}">
                                                            <span class="avia-bullet"></span>
                                                            <span class="avia-menu-text">Buku Praktikum</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-3">
                                                <a href="{{ url('/student/login') }}">
                                                    <span class="avia-bullet"></span>
                                                    <span class="avia-menu-text">Aktivasi</span>
                                                    <span class="avia-menu-fx">
                                                        <span class="avia-arrow-wrap">
                                                            <span class="avia-arrow"></span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            
                                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-5">
                                                <a href="{{ route('pendaftaran.index') }}">
                                                    <span class="avia-bullet"></span>
                                                    <span class="avia-menu-text">Open Recruitment</span>
                                                    <span class="avia-menu-fx">
                                                        <span class="avia-arrow-wrap">
                                                            <span class="avia-arrow"></span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="av-burger-menu-main menu-item-avia-special ">
                                                <a href="#">
                                                    <span class="av-hamburger av-hamburger--spin av-js-hamburger">
                                                        <span class="av-hamburger-box">
                                                            <span class="av-hamburger-inner"></span>
                                                                <strong>
                                                                    Menu
                                                                </strong>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                        </div> 
                     </div> 
                    <!-- end container_wrap-->
                </div>
                <div class='header_bg'>
                </div>
            <!-- end header -->
            </header>
                <div id='main' class='all_colors' data-scroll-offset='88'>
                        <div id='fullscreen_slider_1' class='avia-fullscreen-slider main_color   avia-builder-el-0  el_before_av_section  avia-builder-el-first  container_wrap fullsize'   >
                            <a href='#down' title='' class='scroll-down-link av-control-default' aria-hidden='true' data-av_iconfont='entypo-fontello'><img src='{{url("frontend/assets/img/down.png")}}'></a>
                                <div  data-size='large'  data-lightbox_size='large'  data-animation='fade'  data-ids='642,643,824,819,820'  data-video_counter='0'  data-autoplay='true'  data-bg_slider='true'  data-slide_height='100'  data-handle='av_fullscreen'  data-interval='8'  data-class=' '  data-css_id='fullscreen_slider_1'  data-scroll_down='aviaTBscroll_down'  data-control_layout='av-control-default'  data-custom_markup=''  data-perma_caption='aviaTBperma_caption'  data-autoplay_stopper=''  data-image_attachment=''  data-min_height='0px'  data-stretch=''  class='avia-slideshow avia-slideshow-1 av-slider-scroll-down-active av-control-default av-default-height-applied avia-slideshow-large av_fullscreen   avia-fade-slider '  itemscope="itemscope" itemtype="https://schema.org/ImageObject" >
                                    <ul class='avia-slideshow-inner' style='padding-bottom: 56.31067961165%;'>
                                        <li style='background-position:center center;' data-img-url='{{url("frontend/assets/img/Slider1.jpg")}}' class=' slide-1 ' >
                                            <div data-rel='slideshow-1' class='avia-slide-wrap'  ></div>
                                            
                                        </li>
                                        <li style='background-position:center center;' data-img-url='{{url("frontend/assets/img/Slider2.jpg")}}' class=' slide-2 ' >
                                            <div data-rel='slideshow-1' class='avia-slide-wrap'  ></div>
                                        </li>
                                        <li style='background-position:center center;' data-img-url='{{url("frontend/assets/img/Slider3.jpg")}}' class=' slide-3 ' >
                                            <div data-rel='slideshow-1' class='avia-slide-wrap'  ></div>
                                        </li>
                                        <li style='background-position:center center;' data-img-url='{{url("frontend/assets/img/Slider4.jpg")}}' class=' slide-4 ' >
                                            <div data-rel='slideshow-1' class='avia-slide-wrap'  ></div>
                                        </li>
                                        <li style='background-position:center center;' data-img-url='{{url("frontend/assets/img/Slider5.jpg")}}' class=' slide-5 ' >
                                            <div data-rel='slideshow-1' class='avia-slide-wrap'  ></div>
                                        </li>
                                    </ul>
                                    <div class='avia-slideshow-arrows avia-slideshow-controls'>
                                        <a href='#prev' class='prev-slide' aria-hidden='true' data-av_icon='<' data-av_iconfont='entypo-fontello'>Previous</a>
                                        <a href='#next' class='next-slide' aria-hidden='true' data-av_icon='>' data-av_iconfont='entypo-fontello'>Next</a>
                                    </div>
                                    <div class='avia-slideshow-dots avia-slideshow-controls'>
                                        <a href='#1' class='goto-slide active' >1</a>
                                        <a href='#2' class='goto-slide ' >2</a>
                                        <a href='#3' class='goto-slide ' >3</a>
                                        <a href='#4' class='goto-slide ' >4</a>
                                        <a href='#5' class='goto-slide ' >5</a>
                                    </div>
                                    <div class = "caption_fullwidth av-slideshow-caption caption_bottom caption_bottom_framed caption_framed">
                                        <div class = "container caption_container">
                                            <div class = "slideshow_caption">
                                                <div class = "slideshow_inner_caption">
                                                    <div class = "slideshow_align_caption">
                                                        <h2  style='font-size:60px; color:#FFD700; ' class='avia-caption-title '  itemprop="name" >Integrated Laboratory</h2>
                                                            <div class='avia-caption-content  av_inherit_color'  itemprop="description"   style='font-size:35px; color:#ffffff; '>
                                                                <p>STMIK Jakarta STI&K</p>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>


                        @yield('container')

                        <footer class='container_wrap socket_color' id='socket'  role="contentinfo" itemscope="itemscope" itemtype="https://schema.org/WPFooter" >
                            <div class='container'>
                                <div class="text-center">
                                    <a href="http://labsimi.net/">Copyright &copy; 2020 Integrated Laboratory SI/MI</a><br>
                                    <a href="http://jak-stik.ac.id/">STMIK JAKARTA STI&K</a>
                                    <div class="bullet"></div> Design By <a href="">Ade Fikriatul Ilmi</a>
                                </div>
                            </div>
                        <!-- ####### END SOCKET CONTAINER ####### -->
                        </footer>
                        
                    <!-- end main -->
                </div>
        
        <!-- end wrap_all -->
        </div>
    </div>
    
     <!-- Bagian Loading -->
     <script type="text/javascript" src="{{url('frontend/assets/stmik/js/avia.js')}}"></script>
     <!-- Bagian Loading pop up -->
    <script type="text/javascript" src="{{url('frontend/assets/stmik/js/shortcodes.js?ver=4.2.1')}}"></script>
    <!-- Bagian isi slider dan gambar -->
    <script type="text/javascript" src="{{url('frontend/assets/stmik/js/aviapopup/jquery.magnific-popup.min.js?ver=4.2.1')}}"></script>
    <!-- Bagian tidak tahu -->
    <script type="text/javascript" src="{{url('frontend/assets/stmik/js/mediaelement/wp-mediaelement.min.js?ver=4.9.8')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/stmik/js/comment-reply.min.js?ver=4.9.8')}}"></script>
    <script type="text/javascript" src="{{url('frontend/assets/stmik/js/wp-embed.min.js?ver=4.9.8')}}"></script>


     <!-- General JS Scripts -->
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
      <script src="{{ asset('assets/js//stisla.js')}}"></script>

      <!-- Template JS File -->
      <script src="{{ asset('assets/js/scripts.js') }}"></script>
      <script src="{{ asset('assets/js/custom.js') }}"></script>
      {{-- <script src="../assets/js/scripts.js"></script>
      <script src="../assets/js/custom.js"></script> --}}


        <a href='#top' title='Scroll to top' id='scroll-top-link' aria-hidden='true' data-av_iconfont='entypo-fontello'>
            <img src='{{url("frontend/assets/img/top.png")}}'>
            <span class="avia_hidden_link_text">Scroll to top</span>
        </a>
        <div id="fb-root"></div>
</body>
</html>