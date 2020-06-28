<?php
/** Template name: Integration Page*/

get_header();
?>
<div id="layout" class="pagewidth clearfix">
    <div id="content" class="clearfix">
        <div id="page-281" class="type-page">
            <div class="page-content entry-content">
                <div class="themify_builder_content themify_builder_content-281 themify_builder">
                    <?php get_template_part('template-parts/inner', 'banner'); ?>
                    <div
                        class="themify_builder_row module_row clearfix module_row_1 themify_builder_281_row module_row_281-1 tb_i1xw394">
                        <div class="row_inner col_align_top">
                            <div class="module_column tb-column col-full integration_sec first tb_281_column module_column_0 module_column_281-1-0 tb_ai3s394">
                            <?php if(get_field('integration_section')): ?>
                                <div class="tb-column-inner">
                                <?php while(has_sub_field('integration_section')):
                                        $integration_left_content = get_sub_field('integration_left_content');
                                        $integration_right_content =  get_sub_field('integration_right_content');
                                    ?>

                                <div class="themify_builder_sub_row module_subrow clearfix sub_row_1-0-0 tb_b54j565">
                                    <div class="subrow_inner col_align_middle">
                                        <div
                                            class="sub_column module_column col2-1 first sub_column_post_281 sub_column_1-0-0-0 tb_diao182">
                                            <div class="tb-column-inner">
                                                <div class="module module-text tb_nezk182    ">
                                                    <div class="tb_text_wrap">
                                                        <?php echo $integration_left_content; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="sub_column module_column col2-1 last sub_column_post_281 sub_column_1-0-0-1 tb_487i182">
                                            <div class="tb-column-inner">
                                                <div class="module module-text tb_6pxm565    ">
                                                    <div class="tb_text_wrap">
                                                        <?php echo $integration_right_content; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
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