<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
<div id="layout" class="pagewidth clearfix">
    <div id="content" class="clearfix">
        <div id="page-377" class="type-page">
            <div class="page-content entry-content">
                <div class="themify_builder_content themify_builder_content-377 themify_builder">
                <?php get_template_part('template-parts/inner', 'banner'); ?>
                    <div class="themify_builder_row module_row clearfix module_row_1 themify_builder_377_row module_row_377-1 tb_je3h81">
                        <div class="row_inner col_align_top">
<div class="module_column tb-column first tb_377_column module_column_0 module_column_377-1-0 <?php if(is_page('252')) {?>thank_you <?php } ?>tb_6bqj82">
                                <div class="tb-column-inner">
                                    <div class="module module-text tb_a15v1">
                                        <div class="tb_text_wrap">
                                            <div class="page" title="Page 1">
                                                <div class="layoutArea">
                                                    <div class="column">
                                                        <?php
                                                            while ( have_posts() ) :
                                                                the_post();
                                                                the_content();
                                                            endwhile;
                                                        ?>  
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
