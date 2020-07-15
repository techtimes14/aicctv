<?php
/** Template name: Benefits Page*/

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
                            <div
                                class="module_column tb-column col4-1 first tb_396_column module_column_0 module_column_396-2-0 tb_jjj7936">
                            </div>
                            <div
                                class="module_column tb-column col4-2 middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                <div class="tb-column-inner">
                                    <div class="benifit_lists">
                                        <?php the_field('benefit_lists'); ?>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="module_column tb-column col4-1 last tb_396_column module_column_2 module_column_396-2-2 tb_qfoo937">
                            </div>
                        </div>
                    </div>
                    <div
                        class="themify_builder_row module_row clearfix fullcover module_row_3 themify_builder_396_row module_row_396-3 tb_p76v995">
                        <div class="row_inner col_align_top">
                            <div class="module_column tb-column col-full benefit_lists first tb_396_column module_column_0 module_column_396-3-0 tb_tvc7996">
                                <?php if(get_field('benefit_image_content')): ?>
                                <div class="tb-column-inner">
                                <?php $k = 0; while(has_sub_field('benefit_image_content')):
                                        $benefit_image = get_sub_field('benefit_image');
                                        $benefit_heading =  get_sub_field('benefit_heading');
                                        $benefit_content =  get_sub_field('benefit_content');
                                    ?>
                                    <div class="themify_builder_sub_row module_subrow clearfix <?php if($k == 0){?>sub_row_3-0-0 tb_xqcn996 <?php }elseif($k == 1) {?>sub_row_3-0-1 tb_bqsy577 <?php }elseif($k == 2) {?>sub_row_3-0-2 tb_trvv998 <?php }elseif($k == 3) {?> sub_row_3-0-3 tb_fj7m999 <?php } else {?>sub_row_3-0-4 tb_z8od0 <?php } ?>">
                                        <div class="subrow_inner col_align_middle">
                                            <div class="sub_column module_column col2-1 sub_column_post_396 <?php if(($k % 2) == 0){?> last <?php } else {?> first <?php } ?> <?php if($k == 0){?>sub_column_3-0-0-0 tb_88pr997 <?php }elseif($k == 1) {?>sub_column_3-0-1-0 tb_va1a577 <?php }elseif($k == 2) {?>sub_column_3-0-2-1 tb_4jj9999 <?php }elseif($k == 3) {?> sub_column_3-0-3-1 tb_zh4l0 <?php } else {?>sub_column_3-0-4-1 tb_8fpw1 <?php } ?>">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text <?php if($k == 0){?>tb_8n4l997 <?php }elseif($k == 1) {?>tb_kdvh578 <?php }elseif($k == 2) {?>tb_wl00999 <?php }elseif($k == 3) {?> tb_n4a60 <?php } else {?>tb_l62h1 <?php } ?>">
                                                        <div class="tb_text_wrap">
                                                            <h3><?php echo $benefit_heading; ?></h3>
                                                            <?php echo $benefit_content; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="sub_column module_column col2-1 sub_column_post_396 <?php if(($k % 2) == 0){?> first <?php } else {?> last <?php } ?> <?php if($k == 0){?>sub_column_3-0-0-1 tb_xue2997 <?php }elseif($k == 1) {?>sub_column_3-0-1-1 tb_mmxq578 <?php }elseif($k == 2) {?>sub_column_3-0-2-0 tb_fddh998 <?php }elseif($k == 3) {?> sub_column_3-0-3-0 tb_0zsu999 <?php } else {?>sub_column_3-0-4-0 tb_6sat1 <?php } ?>">
                                                <div class="tb-column-inner">
                                                    <div class="module module-image image-center wow <?php if(($k % 2) == 0){?> fadeInLeft <?php } else {?> fadeInRight <?php } ?> <?php if($k == 0){?>tb_j5s2998 <?php }elseif($k == 1) {?>tb_nrcn578 <?php }elseif($k == 2) {?>tb_y5t7999 <?php }elseif($k == 3) {?>tb_91190 <?php } else {?>tb_oin91 <?php } ?>">
                                                        <div class="image-wrap">
                                                            <img src="<?php echo $benefit_image['url']; ?>" width="150" alt="<?php echo $benefit_image['alt']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $k++; endwhile; ?>
                                </div>
                                <?php endif; ?>
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
                                            <?php $benefit_bottom_video = get_field('benefit_bottom_video')?>
                                            <video class="wp-video-shortcode" style="width: 100%; height: 100%;" id="video-396-1" width="640" height="360" autoplay preload="metadata" controls="controls">
                                                <source type="video/mp4" src="<?php echo $benefit_bottom_video['url']; ?>" /></video>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="module module-text tb_prin764    ">
                                        <div class="tb_text_wrap">
                                            <p>**Demonstrations at installed sites</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="module_column tb-column col4-1 last tb_396_column module_column_2 module_column_396-2-2 tb_qfoo937">
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