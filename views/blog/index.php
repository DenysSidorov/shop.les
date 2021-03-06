<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>design blog - free css template</title>
    <meta name="keywords" content="free css templates, blog design, 2-column, web design, CSS, HTML" />
    <meta name="description" content="Design Blog - free css template, 2-column blog layout" />
    <link href="/template/css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript">
        function clearText(field)
        {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>
</head>
<body>

<div id="templatemo_body_wrapper">
    <div id="templatemo_wrapper">

        <div id="templatemo_header">

            <div id="site_title">
                <a href="#" target="_parent">Design
                    <span>Blog</span>
                    <span class="tagline">Designed by Free CSS Templates</span>
                </a>
            </div> <!-- end of site_title -->

            <div id="search_box">
                <form action="#" method="get">
                    <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                    <input type="submit" name="Search" value="Search" id="searchbutton" title="Search" />
                </form>
            </div>


            <div class="cleaner"></div>

        </div> <!-- end of header -->

        <div id="templatemo_menu">
            <ul>
                <li><a href="#" class="current"><span></span>Home</a></li>
                <li><a href="#"><span></span>Web 2.0</a></li>
                <li><a href="#"><span></span>Wordpress</a></li>
                <li><a href="#"><span></span>Graphics</a></li>
                <li><a href="#"><span></span>Inspirations</a></li>
                <li><a href="#"><span></span>Freebies</a></li>
            </ul>

            <div id="register_box">
                Already Registered? Click <a href="#" class="signup">Here</a> | <a href="#" class="new_reg">Register</a>
            </div>
        </div> <!-- end of templatemo_menu -->

        <div id="templatemo_main">

            <div id="templatemo_content">


                <?php foreach ($blogList as $newsItem):?>
                    <div class="post">
                        <h2 class="title"><a href="/news/<?php echo $newsItem['id'];?>"><?php echo $newsItem['title'];?></a></h2>
                        <p class="byline"><?php echo $newsItem['date'];?></p>
                        <div class="entry">
                            <p><?php echo $newsItem['short_content'];?></p>
                        </div>
                        <div class="meta">
                            <p class="links"><a href="/news/<?php echo $newsItem['id'];?>" class="comments">Read more</a></p>
                        </div>
                    </div>
                <?php endforeach;?>




            </div>

            <div id="templatemo_sidebar">

                <div id="aboutus">
                    <h3>About Design Blog</h3>
                    <div class="image_fl"><img src="/template/images/img_blog/templatemo_about.jpg" alt="about this blog" /></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat aliquet risus, a ornare orci scelerisque et. <a href="#" class="continue">more...</a></p>
                </div>

                <div class="cleaner_h20"></div>

                <div class="sidebar_box">

                    <h3>Our Sponsors</h3>

                    <div class="ads_125"><a href="#" target="_parent"><img src="/template/images/img_blog/ads_125.jpg" alt="ad 1" /></a></div>
                    <div class="ads_125 odd"><a href="#" target="_parent"><img src="/template/images/img_blog/ads_125.jpg" alt="ad 2" /></a></div>

                    <div class="ads_125"><a href="#" target="_parent"><img src="/template/images/img_blog/ads_125.jpg" alt="ad 3" /></a></div>
                    <div class="ads_125 odd"><a href="#" target="_parent"><img src="/template/images/img_blog/ads_125.jpg" alt="ad 4" /></a></div>

                    <div class="cleaner"></div>

                </div>

                <div class="sidebar_box">
                    <h3>Categories</h3>

                    <ul class="sidebar_menu">
                        <li><a href="#">&raquo; Web Design Tips <span>(260)</span></a></li>
                        <li><a href="#">&raquo; Beautiful Wallpapers <span>(380)</span></a></li>
                        <li><a href="#">&raquo; Free Fonts <span>(125)</span></a></li>
                        <li><a href="#">&raquo; Digital Illustrations <span>(215)</span></a></li>
                    </ul>

                </div>


                <div class="sidebar_box">
                    <h3>Archives</h3>
                    <ul class="sm_two_col">
                        <li><a href="#">&raquo; February 2048</a></li>
                        <li><a href="#">&raquo; January 2048</a></li>
                        <li class="cleaner"><a href="#">&raquo; December 2047</a></li>
                        <li><a href="#">&raquo; Novermber 2047</a></li>
                        <li><a href="#">&raquo; October 2047</a></li>
                        <li><a href="#">&raquo; September 2047</a></li>
                    </ul>

                    <div class="cleaner"></div>
                </div>


                <div class="sidebar_box">

                    <h3>Newsletter</h3>

                    <form method="get" action="#">
                        <input type="text" id="user" name="user" class="newsletter_email" value="Enter your email address"  onfocus="clearText(this)" onblur="clearText(this)" />
                        <input style="font-weight: bold;" type="submit" name="submit" id="submit" value="Subscribe" />
                    </form>

                    <div class="cleaner_h20"></div>
                    <a href="#" class="icon_link"><img src="/template/images/img_blog/templatemo_rss.jpg" alt="rss" /></a><a href="#" class="icon_link"><img src="/template/images/img_blog/templatemo_twitter.jpg" alt="twitter" /></a>
                </div>

            </div>

            <div class="cleaner"></div>
        </div>

    </div>
    <div class="cleaner"></div>
</div>


<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">

        <div class="footer_box col_w300">
            <h4>Related Posts</h4>
            <ul class="footer_menu">
                <li><a href="#">Duis vitae velit sed lesuada dignissim</a></li>
                <li><a href="#">Donec mollis aliquet ligula</a></li>
                <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                <li><a href="#">Vivamus leo velit, convallis id</a></li>
                <li><a href="#">Curabitur condimentum porttitor</a></li>
            </ul>
        </div>

        <div class="footer_box col_w160">
            <h4>Authors</h4>
            <ul class="footer_menu">
                <li><a href="#">Lesuada digni</a></li>
                <li><a href="#">Aliquet ligula</a></li>
                <li><a href="#">Convallis id</a></li>
                <li><a href="#">Maecenas adipis</a></li>
                <li><a href="#">Porttitor</a></li>
            </ul>
        </div>

        <div class="footer_box col_w160">
            <h4>Partners</h4>
            <ul class="footer_menu">
                <li><a href="#" target="_parent">Flash Components</a></li>
                <li><a href="#" target="_parent">Website Templates</a></li>
                <li><a href="#" target="_parent">Web Design</a></li>
                <li><a href="#" target="_parent">CSS Templates</a></li>
                <li><a href="#" target="_parent">Flash Web Gallery</a></li>
            </ul>
        </div>

        <div class="footer_box col_w260 fb_last">
            <h4>Tag Cloud</h4>
            <a href="#" style="font-size:12px">Aenean</a> <a href="#" style="font-size:11px">Cursus</a> <a href="#" style="font-size:16px">Maecenas</a> <a href="#" style="font-size:11px">Aliquam Ligula</a> <a href="#" style="font-size:20px">Egestas</a> <a href="#" style="font-size:16px">Suscipit</a> <a href="#" style="font-size:12px">Sapien</a> <a href="#" style="font-size:28px">Dignissim</a> <a href="#" style="font-size:14px">Vestibulum</a> <a href="#" style="font-size:12px">Lorem</a> <a href="#" style="font-size:14px">Urnain</a> <a href="#" style="font-size:20px">Neque</a> <a href="#" style="font-size:12px">Aenean</a>
        </div>

        <div class="cleaner"></div>
    </div>
</div>

<div id="templatemo_copyright">
    Copyright © 2048 <a href="#">Your Company Name</a> |
    <a href="#" target="_parent">Website Templates</a> by <a href="#" target="_parent">Free CSS Templates</a>
</div>

</body>
</html>
