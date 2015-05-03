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