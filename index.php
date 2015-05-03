<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

    <title>
        <?php bloginfo( 'name'); ?>
        <?php wp_title(); ?>
    </title>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <!-- leave this for stats please -->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_get_archives( 'type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>
</head>

<body>

    <div id="header">

        <!-- заголовок вашего блога.  -->
        <a href="<?php site_url(); ?>">
            <?php bloginfo(‘name’); ?>
        </a>
        <!--bloginfo(‘url’) — вызвать блогинфо, в частности адрес, или URL, первой страницы блога  -->
        <br/>
        <!-- описание -->
        <?php bloginfo( 'description'); ?>

    </div>

    <div id="container">
        <!-- проверить есть ли у вас пост;  -->
        <?php if(have_posts()) : ?>
        <!-- выполнять the_post(), пока у вас есть  пост в стеке;  -->
        <!-- отобразить пост;  -->
        <?php while(have_posts()) : the_post(); ?> ______________________________________________________________________________
        <br/>

        <div class="post" id='post-<?php the_ID(); ?>'>
            <!-- отобразить заголовак + ссилка  -->
            <h2>
                <a href="<?php the_permalink(); ?>"   title="<?php the_title(); ?>" >
                  <?php the_title(); ?>
                </a>
            </h2>

            <div class="entry">
                <?php the_content(); ?>

                <p class="postmetadata">
                    <?php _e( 'Категории:'); ?>

                    <?php the_category( ', ') ?>.
                    <?php _e( 'Автор'); ?>
                    <?php the_author(); ?>
                    <br />
                    <?php comments_popup_link( 'Нет комментариев  ;', '1 комментарий &#187;', '% комментариев                                     &#187;'); ?>
                    <?php edit_post_link( 'Edit', ' &#124; ', ''); ?>
                </p>

            </div>
        </div>
        <?php endwhile; ?>
        <!-- вызвать ссылки на Следующую и Предыдущую страницы.  -->
        <div class="navigation">
            <?php posts_nav_link(); ?>
        </div>

        <!-- якщо пост незнайдено  -->
        <?php else : ?>

        <div class="post">
            <h2><?php _e('Not Found'); ?></h2>
        </div>

        <?php endif; ?>
    </div>

    <div class="sidebar">
        <ul>


            <!--add widget from wordpress admin panel -->
            <?php if ( function_exists( 'dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

            <?php endif; ?> ______________________
            <br/> ______________________
            <!--or add widget php -->
            <?php wp_list_pages(); ?>

            <li>
                <h2><?php _e('Categories'); ?></h2>
                <ul>
                    <?php wp_list_categories( 'sort_column=name&show_count=1&hierarhical=0&title_li='); ?>
                </ul>


                <li>
                    <h2><?php _e('Archives'); ?></h2>
                    <ul>
                        <?php wp_get_archives( 'type=monthly'); ?>
                    </ul>
                </li>

                <?php get_links_list(); ?>
                <li id="calendar">
                    <h2><?php _e('Календарь'); ?></h2>
                    <div id="_mcePaste">
                        <?php get_calendar(); ?>
                    </div>

                </li>

                <li>
                    <h2><?php _e('Meta'); ?></h2>
                    <ul>
                        <?php wp_register(); ?>
                        <li>
                            <?php wp_loginout(); ?>
                        </li>
                        <?php wp_meta(); ?>
                    </ul>
                </li>


            </li>
        </ul>
    </div>

    <div id="footer">
        <p>Копирайт &#169;
            <?php echo date( 'Y'); ?>
            <?php bloginfo( 'name'); ?>
        </p>
    </div>
</body>










</html>