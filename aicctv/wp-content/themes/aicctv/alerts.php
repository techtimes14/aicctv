<?php
/** Template name: Alert Page*/

get_header();
?>
<div id="layout" class="pagewidth clearfix">
    <div id="content" class="clearfix">
        <div id="page-557" class="type-page">
            <div class="page-content entry-content">
                <div class="themify_builder_content themify_builder_content-557 themify_builder">
                <?php get_template_part('template-parts/inner', 'banner'); ?>
                    <div
                        class="themify_builder_row module_row clearfix module_row_1 themify_builder_557_row module_row_557-1 tb_je3h81">
                        <div class="row_inner col_align_middle">
                            <div
                                class="module_column tb-column col4-2 first tb_557_column module_column_0 module_column_557-1-0 tb_6bqj82">
                                <div class="tb-column-inner">
                                    <div class="module module-text tb_rsp6404    ">
                                        <div class="tb_text_wrap">
                                            <?php the_field('vms_content');?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="module_column tb-column col4-1 middle tb_557_column module_column_1 module_column_557-1-1 tb_xmjs641">
                                <div class="tb-column-inner">
                                    <div class="module module-image tb_bshs316  image-top  ">
                                        <div class="image-wrap">
                                            <?php $vms_image_1 = get_field('vms_image_1')?>
                                            <a class="fancybox" data-fancybox="img" href="<?php echo $vms_image_1['url']; ?>">
                                                <img src="<?php echo $vms_image_1['sizes']['alert-popup']; ?>" height="300" class=" wp-post-image wp-image-569" alt="<?php echo $vms_image_1['alt']; ?>" />
                                            </a>
                                        </div>
                                        <div class="image-content">
                                            <div class="image-caption tb_text_wrap"><?php the_field('vms_image_text_1'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="module_column tb-column col4-1 last tb_557_column module_column_2 module_column_557-1-2 tb_1qhr893">
                                <div class="tb-column-inner">
                                    <div class="module module-image tb_ptw0753  image-top  ">
                                        <div class="image-wrap">
                                        <?php $vms_image_2 = get_field('vms_image_2')?>
                                            <a class="fancybox" data-fancybox="img" href="<?php echo $vms_image_2['url']; ?>">
                                                <img src="<?php echo $vms_image_2['sizes']['alert-popup']; ?>" height="300" alt="<?php echo $vms_image_2['alt']; ?>" />
                                            </a>
                                        </div>
                                        <div class="image-content">
                                            <div class="image-caption tb_text_wrap"> <?php the_field('vms_image_text_2'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="themify_builder_row module_row clearfix module_row_2 themify_builder_557_row module_row_557-2 tb_bhk0254">
                        <div class="row_inner col_align_middle direction-rtl" data-desktop_dir="rtl">
                            <div
                                class="module_column tb-column col4-2 last tb_557_column module_column_0 module_column_557-2-0 tb_2ezv256">
                                <div class="tb-column-inner">
                                    <div class="module module-text tb_qin3257    ">
                                        <div class="tb_text_wrap">
                                            <?php the_field('stand_alone_content'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="module_column tb-column col4-2 first tb_557_column module_column_1 module_column_557-2-1 tb_eruy257">
                                <div class="tb-column-inner">
                                    <div class="module module-video tb_1hgc627 video-top   video-autoplay">
                                        <div class="video-wrap">
                                            <div style="width: 640px; " class="wp-video">
                                            <?php $stand_alone_video = get_field('stand_alone_video'); 
                                                  $stand_alone_video_poster_image = get_field('stand_alone_video_poster_image') ?>
                                                <video muted="1" class="wp-video-shortcode" id="video-557-1" width="640" height="360" poster="<?php echo $stand_alone_video_poster_image['url']; ?>" preload="metadata" controls="controls">
                                                    <source type="video/mp4" src="<?php echo $stand_alone_video['url']?>" />
                                                    <a href="<?php echo $stand_alone_video['url']?>"><?php echo $stand_alone_video['url']?></a></video>
                                            </div>
                                        </div>
                                        <div class="video-content">
                                            <div class="video-caption tb_text_wrap"><?php the_field('stand_alone_video_caption'); ?></div>
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

<?php
get_footer();