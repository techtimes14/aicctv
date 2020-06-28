<?php
/** Template name: Contact Page*/

get_header();
?>
<div id="layout" class="pagewidth clearfix">
    <div id="content" class="clearfix">
        <div id="page-348" class="type-page">
            <div class="page-content entry-content">
                <div class="themify_builder_content themify_builder_content-348 themify_builder">
                    <?php get_template_part('template-parts/inner', 'banner'); ?>
                    <div
                        class="themify_builder_row module_row clearfix module_row_1 themify_builder_348_row module_row_348-1 contact_section tb_o7q3910">
                        <div class="row_inner col_align_top">
                            <div class="module_column tb-column col2-1 first tb_348_column module_column_0 module_column_348-1-0 tb_v4vw911">
                                <div class="cntct_form">
                                    <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form"]' )?>
                                </div>
                            </div>
                            <div
                                class="module_column tb-column col2-1 last tb_348_column module_column_1 module_column_348-1-1 contact_details tb_7p7v912">
                                <div class="tb-column-inner">
                                    <div class="themify_builder_sub_row module_subrow clearfix sub_row_1-1-0 tb_xc0n912">
                                        <div class="subrow_inner col_align_top">
                                            <div class="sub_column module_column col4-2 first sub_column_post_348 sub_column_1-1-0-0 tb_4rpj912">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text tb_wgsk913">
                                                        <div class="tb_text_wrap">
                                                            <h4 style="text-align: right;">Phone</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="sub_column module_column col4-2 last sub_column_post_348 sub_column_1-1-0-1 tb_dllu913">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text tb_q0zx913">
                                                        <div class="tb_text_wrap">
                                                            <p><?php the_field('phone_number','options') ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="themify_builder_sub_row module_subrow clearfix sub_row_1-1-1 tb_x9q8914">
                                        <div class="subrow_inner col_align_top">
                                            <div
                                                class="sub_column module_column col4-2 first sub_column_post_348 sub_column_1-1-1-0 tb_1qcp914">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text tb_oc2o915    ">
                                                        <div class="tb_text_wrap">
                                                            <h4 style="text-align: right;">Address</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="sub_column module_column col4-2 last sub_column_post_348 sub_column_1-1-1-1 tb_jcu2915">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text tb_lwbi915    ">
                                                        <div class="tb_text_wrap">
                                                            <p><?php the_field('address','options') ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="themify_builder_sub_row module_subrow clearfix sub_row_1-1-2 tb_m2xa916">
                                        <div class="subrow_inner col_align_top">
                                            <div
                                                class="sub_column module_column col4-2 first sub_column_post_348 sub_column_1-1-2-0 tb_8i6u916">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text tb_fchr916    ">
                                                        <div class="tb_text_wrap">
                                                            <h4 style="text-align: right;">Email</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="sub_column module_column col4-2 last sub_column_post_348 sub_column_1-1-2-1 tb_6iua917">
                                                <div class="tb-column-inner">
                                                    <div class="module module-text tb_czpy604    ">
                                                        <div class="tb_text_wrap">
                                                            <p><a href="mailto:<?php the_field('email_id','options') ?>"><?php the_field('email_id','options') ?></a>
                                                            </p>
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
            </div>
        </div>
    </div>
</div>
<?php
get_footer();