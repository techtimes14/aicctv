<?php
/** Template name: Threat Detection Page*/

get_header();
?>

<div id="layout" class="pagewidth clearfix">
    <div id="content" class="clearfix">
        <div id="page-396" class="type-page">
            <div class="page-content entry-content">
                <div class="themify_builder_content themify_builder_content-396 themify_builder">
                    <?php get_template_part('template-parts/inner', 'banner'); ?>
                    <div class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn9351">
                        <div class="tb_row_frame tb_row_frame_top "></div>
                        <div class="row_inner col_align_top">
                            <div class="tb-column middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                <div class="tb-column-inner">
                                    <div class="benifit_lists">
                                        <h2><?php the_field('gun_detection_heading');?></h2>
                                        <?php the_field('gun_detection_text');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="themify_builder_row module_row clearfix fullcover module_row_3 themify_builder_396_row module_row_396-3 tb_p76v995">
                        <div class="row_inner col_align_top">
                            <div
                                class="module_column tb-column col-full first tb_396_column module_column_0 module_column_396-3-0 tb_tvc7996">
                                <div class="tb-column-inner">
                                    <div
                                        class="themify_builder_sub_row module_subrow clearfix sub_row_3-0-0 tb_xqcn996">
                                        <div class="subrow_inner col_align_middle">
                                            <div class="sub_column module_column col4-1 last sub_column_post_396 sub_column_3-0-0-1 tb_xue2997">
                                                <div class="tb-column-inner">
                                                    <div class="module module-image tb_j5s2998  image-center   wow fadeInRight">
                                                        <div class="thread_img_cntnt">
                                                            <div class="image-wrap">
                                                            <?php $gun_detection_image = get_field('gun_detection_image')?>
                                                                <img src="<?php echo $gun_detection_image['url']; ?>" width="150" alt="<?php echo $gun_detection_image['alt']; ?>" />
                                                            </div>
                                                            <p><?php the_field('gun_detection_image_text'); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sub_column module_column col4-3 first sub_column_post_396 sub_column_3-0-0-0 tb_88pr997">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text tb_8n4l997">
                                                        <div class="tb_text_wrap">
                                                            <?php the_field('gun_detection_content'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn935">
                        <div class="tb_row_frame tb_row_frame_top "></div>
                        <div class="tb_row_frame tb_row_frame_bottom "></div>
                        <div class="row_inner col_align_top">
                            <div
                                class="module_column tb-column col4-1 first tb_396_column module_column_0 module_column_396-2-0 tb_jjj7936">
                            </div>
                            <div
                                class="module_column tb-column col4-2 middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                <div class="tb-column-inner">
                                    <div class="module module-video tb_3k89937 video-top   video-autoplay"
                                        style="z-index:7;">
                                        <div class="video-wrap">
                                            <div style="width: 640px; " class="wp-video">
                                            <?php $gun_detection_video = get_field('gun_detection_video')?>
                                            <video class="wp-video-shortcode" style="width: 100%; height: 100%;" id="video-396-1" width="640" height="360" autoplay preload="metadata" controls="controls">
                                                <source type="video/mp4" src="<?php echo $gun_detection_video['url']; ?>" />
                                            </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="module_column tb-column col4-1 last tb_396_column module_column_2 module_column_396-2-2 tb_qfoo937">
                            </div>
                        </div>
                    </div>

                    <div class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn9352">
                        <div class="tb_row_frame tb_row_frame_top "></div>
                        <div class="row_inner col_align_top">
                            <div class="tb-column middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                <div class="tb-column-inner">
                                    <div class="benifit_lists">
                                        <h2><?php the_field('weapons_detection_heading'); ?></h2>
                                        <?php the_field('weapons_detection_text'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="themify_builder_row module_row clearfix fullcover module_row_3 themify_builder_396_row module_row_396-3 tb_p76v995">
                        <div class="row_inner col_align_top">
                            <div
                                class="module_column tb-column col-full first tb_396_column module_column_0 module_column_396-3-0 tb_tvc7996">
                                <div class="tb-column-inner">
                                    <div class="themify_builder_sub_row module_subrow clearfix sub_row_3-0-0 tb_xqcn996">
                                        <div class="subrow_inner col_align_middle">
                                            <div class="sub_column module_column col4-3 first sub_column_post_396 sub_column_3-0-0-0 tb_88pr997">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text tb_8n4l997">
                                                        <div class="tb_text_wrap">
                                                            <?php the_field('weapons_detection_content'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sub_column module_column col4-1 last sub_column_post_396 sub_column_3-0-0-1 tb_xue2997">
                                                <div class="tb-column-inner">
                                                    <div class="module module-image tb_j5s2998  image-center   wow fadeInRight">
                                                        <div class="thread_img_cntnt">
                                                            <div class="image-wrap">
                                                            <?php $weapons_detection_image = get_field('weapons_detection_image')?>
                                                                <img src="<?php echo $weapons_detection_image['url']; ?>" width="250" alt="<?php echo $weapons_detection_image['alt']; ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn9352">
                        <div class="tb_row_frame tb_row_frame_top "></div>
                        <div class="row_inner col_align_top">
                            <div class="tb-column middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                <div class="tb-column-inner">
                                    <div class="benifit_lists">
                                        <h2><?php the_field('intruder_detection_heading'); ?></h2>
                                        <?php the_field('intruder_detection_text'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="themify_builder_row module_row clearfix fullcover module_row_3 themify_builder_396_row module_row_396-3 tb_p76v995">
                        <div class="row_inner col_align_top">
                            <div
                                class="module_column tb-column col-full first tb_396_column module_column_0 module_column_396-3-0 tb_tvc7996">
                                <div class="tb-column-inner">
                                    <div
                                        class="themify_builder_sub_row module_subrow clearfix sub_row_3-0-0 tb_xqcn996">
                                        <div class="subrow_inner col_align_middle">
                                            <div class="sub_column module_column col4-1 last sub_column_post_396 sub_column_3-0-0-1 tb_xue2997">
                                                <div class="tb-column-inner">
                                                    <div class="module module-image tb_j5s2998  image-center   wow fadeInRight">
                                                        <div class="thread_img_cntnt">
                                                            <div class="image-wrap">
                                                            <?php $intruder_detection_image = get_field('intruder_detection_image')?>
                                                                <img src="<?php echo $intruder_detection_image['url']; ?>" width="150" alt="<?php echo $intruder_detection_image['alt']; ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sub_column module_column col4-3 first sub_column_post_396 sub_column_3-0-0-0 tb_88pr997">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text tb_8n4l997">
                                                        <div class="tb_text_wrap">
                                                            <?php the_field('intruder_detection_content'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if(get_field('intruder_detection_video')):?>
                                            <div class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn93511 intruder_detection_video">
                                                <div class="tb_row_frame tb_row_frame_top "></div>
                                                <div class="tb_row_frame tb_row_frame_bottom "></div>
                                                <div class="row_inner col_align_top">
                                                    <div
                                                        class="module_column tb-column col4-1 first tb_396_column module_column_0 module_column_396-2-0 tb_jjj7936">
                                                    </div>
                                                    <div
                                                        class="module_column tb-column col4-2 middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                                        <div class="tb-column-inner">
                                                            <div class="module module-video tb_3k89937 video-top   video-autoplay"
                                                                style="z-index:7;">
                                                                <div class="video-wrap">
                                                                    <div style="width: 640px; " class="wp-video">
                                                                    <?php $intruder_detection_video = get_field('intruder_detection_video')?>
                                                                    <video class="wp-video-shortcode" style="width: 100%; height: 100%;" id="video-396-1" width="640" height="360" autoplay preload="metadata" controls="controls">
                                                                        <source type="video/mp4" src="<?php echo $intruder_detection_video['url']; ?>" /></video>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="module_column tb-column col4-1 last tb_396_column module_column_2 module_column_396-2-2 tb_qfoo937">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <div class="sub_column module_column sub_column_post_396 sub_column_3-0-0-0 tb_88pr997">
                                                <div class="tb-column-inner">
                                                    <div class="module bottom_txt">
                                                        <div class="tb_text_wrap">
                                                            <p><?php the_field('intruder_detection_bottom_content'); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php get_template_part('template-parts/include', 'footertop'); ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();