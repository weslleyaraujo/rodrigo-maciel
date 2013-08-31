<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie ie6" lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" > <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie ie7" lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" > <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie ie8" lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" > <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie ie9" lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" > <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" > <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    
    <script type="text/javascript">
        var BASEURL = '<?php echo bloginfo("siteurl"); ?>';
    </script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="<?php bloginfo('template_url'); echo '/js/vendor/jquery-1.9.1.min.js' ?>"><\/script>')</script>

    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script>window.html5 || document.write('<script src="<?php bloginfo('template_url'); echo '/js/vendor/html5shiv.js'; ?>"><\/script>')</script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); echo '/js/vendor/selectivizr-min.js'; ?>"></script>
    <![endif]-->

    <script type="text/javascript" src="<?php bloginfo('template_url'); echo '/js/plugins.js'; ?>"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); echo '/js/scripts.js'; ?>"></script>


    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXX-Y']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    
    <?php

        // Manipulate title
        $finalTitle = '';
        if (isset($title)) {
            $finalTitle = '-'.$title;
        }

        // Manipulate fbImage
        $finalFbImage = get_bloginfo('template_url'). '/images/main-fb-200x200.jpg';
        if (isset($fbImage)) {
            $finalFbImage = $fbImage[0];
        }
    ?>

    <title>
        <?php

            global $page, $paged;

            // get wp title
            echo get_bloginfo('name');

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && (is_home() || is_front_page())) {   
                echo " | $site_description";
            }

        ?>
    </title>
    <meta property="og:image" content="<?php echo $finalFbImage; ?>"/>
    <meta property="og:description" content="<?php echo $site_description; ?>"/> 
    <meta property="og:title" content="Rodrigo Maciel <?php echo $finalTitle; ?>"/>
    <meta property="og:url" content="<?php echo get_bloginfo('siteurl'); ?>/"/>
    <meta property="og:site_name" content="Rodrigo Maciel"/>

</head>
<body <?php body_class(); ?> >

    <header class="full-wrap">
        <div class="wrap">
            <nav class="full-wrap main">
                <ul class="clear">
                    <li><h1><a href="<?php echo bloginfo('siteurl'); ?>">RODRIGO MACIEL</a></h1></li>
                    <li><a href="<?php echo bloginfo('siteurl'); ?>/artwork-jobs">ARTWORK</a></li>
                    <li><a href="<?php echo bloginfo('siteurl'); ?>/sketchbook-jobs">SKETCHBOOK</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="<?php echo bloginfo('siteurl'); ?>/about">ABOUT</a></li>
                    <li><a href="#">STORE</a></li>
                </ul>
            </nav>
        </div>
    </header>