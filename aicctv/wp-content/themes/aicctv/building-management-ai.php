<?php
/** Template name: Building Management Page*/

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
                                        <?php the_field('building_management_list'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="module_column tb-column col4-1 last tb_396_column module_column_2 module_column_396-2-2 tb_qfoo937">
                            </div>
                        </div>
                    </div>
                    <div class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn9351">
                        <div class="tb_row_frame tb_row_frame_top "></div>
                        <div class="row_inner col_align_top">
                            <div class="module_column tb-column middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                <div class="tb-column-inner">
                                    <div class="tb_text_wrap">
                                       <?php the_field('building_management_content'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn9351">
                        <div class="tb_row_frame tb_row_frame_top "></div>
                        <div class="row_inner col_align_top">
                            <div
                                class="module_column tb-column col4-1 first tb_396_column module_column_0 module_column_396-2-0 tb_jjj7936">
                            </div>
                            <div class="module_column tb-column col4-2 middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                <div class="tb-column-inner">
                                    <div class="building_management_imgtxt">
                                        <h2><?php the_field('bm_image_heading_1'); ?></h2>
                                        <div class="building_management_img">
                                            <?php $bm_image_1 = get_field('bm_image_1')?>
                                            <img src="<?php echo $bm_image_1['url']; ?>" alt="<?php echo $bm_image_1['alt']; ?>" title="Building Management1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="module_column tb-column col4-1 last tb_396_column module_column_2 module_column_396-2-2 tb_qfoo937">
                            </div>
                        </div>
                    </div>
                    <div class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn9351">
                        <div class="tb_row_frame tb_row_frame_top "></div>
                        <div class="row_inner col_align_top">
                            <div
                                class="module_column tb-column col4-1 first tb_396_column module_column_0 module_column_396-2-0 tb_jjj7936">
                            </div>
                            <div
                                class="module_column tb-column col4-2 middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                <div class="tb-column-inner">
                                    <h2><?php the_field('bm_image_heading_2'); ?></h2>
                                    <div class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn9352">
                                        <div class="tb_row_frame tb_row_frame_top "></div>
                                        <div class="row_inner col_align_top">
                                            <div
                                                class="module_column tb-column col2-1 middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936 first">
                                                <div class="tb-column-inner">
                                                    <div class="building_management_imgtxt">
                                                        <span><?php the_field('bm_image_subheading_2'); ?></span>
                                                        <div class="building_management_img">
                                                            <?php $bm_image_2 = get_field('bm_image_2')?>
                                                            <img src="<?php echo $bm_image_2['url']; ?>" alt="<?php echo $bm_image_2['alt']; ?>" title="Building Management4" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="module_column tb-column col2-1 middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                                <div class="tb-column-inner">
                                                    <div class="building_management_imgtxt">
                                                        <span><?php the_field('bm_image_subheading_3'); ?></span>
                                                        <div class="building_management_img">
                                                            <?php $bm_image_3 = get_field('bm_image_3')?>
                                                            <img src="<?php echo $bm_image_3['url']; ?>" alt="<?php echo $bm_image_3['alt']; ?>" title="Building Management4" />
                                                        </div>
                                                    </div>
                                                </div>
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
                    <div class="themify_builder_row module_row clearfix fullcover module_row_2 themify_builder_396_row module_row_396-2 tb_8wfn9351">
                        <div class="tb_row_frame tb_row_frame_top "></div>
                        <div class="row_inner col_align_top">
                            <div
                                class="module_column tb-column col4-1 first tb_396_column module_column_0 module_column_396-2-0 tb_jjj7936">
                            </div>
                            <div
                                class="module_column tb-column col4-2 middle tb_396_column module_column_1 module_column_396-2-1 tb_0tdz936">
                                <div class="tb-column-inner">
                                    <div class="building_management_imgtxt">
                                        <h2><?php the_field('bm_image_heading_4'); ?></h2>
                                        <span><?php the_field('bm_image_subheading_4'); ?></span>
                                        <div class="building_management_img">
                                            <?php $bm_image_4 = get_field('bm_image_4')?>
                                            <img src="<?php echo $bm_image_4['url']; ?>" alt="<?php echo $bm_image_4['alt']; ?>" title="Building Management4" />
                                        </div>
                                        <div class="tb_text_wrap">
                                            <p><?php the_field('bm_image_4_bottom_text'); ?></p>
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