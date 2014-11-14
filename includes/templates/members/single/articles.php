<?php

/**
 * BuddyPress - Users Home
 *
 * @package BuddyPress
 * @subpackage bp-default
 */
global $bp;

?>

<div id="buddypress">

    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12">
            <?php do_action( 'bp_before_member_home_content' ); ?>
                <div id="item-header" role="complementary" class="col-xs-12">
                    <?php bp_get_template_part( 'members/single/member-header' ) ?>
                </div><!-- #item-header -->
            </div>
        </div>
     
         <div class="row">
            <div class="col-xs-12">
                <div class="item-list-tabs no-ajax" id="subnav">
                    <ul>
                        <?php bp_get_options_nav(); ?>

                        <?php do_action( 'bp_member_plugin_options_nav' ); ?>
                    </ul>
                </div><!-- .item-list-tabs -->
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-xs-12">

                <div id="item-body" role="main">
                    
                    <?php do_action( 'bp_before_member_body' ); ?>


                        <?php do_action( 'template_notices' ); ?>
                        <div class="social-articles-main" role="main">
                            <div id="articles-dir-list" class="articles dir-list">
                                <?php
                                switch($bp->current_action){
                                    case 'new':
                                        social_articles_load_sub_template( 'members/single/articles/new' );
                                        break;
                                    case 'articles':
                                        social_articles_load_sub_template( 'members/single/articles/loop' );;
                                        break;
                                    case 'draft':
                                        social_articles_load_sub_template( 'members/single/articles/draft' );
                                        break;
                                    case 'under-review':
                                        social_articles_load_sub_template( 'members/single/articles/pending' );
                                        break;
                                }
                                ?>

                            </div>
                        </div>

                </div><!-- #item-body -->

            </div>
        </div><!-- .row -->

        <?php do_action( 'bp_after_member_home_content' ); ?>

    </div>

</div><!-- #buddypress -->