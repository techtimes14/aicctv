<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<?php $inner_banner_image = get_field('inner_banner_image');
      $common_inner_banner = get_field('common_inner_banner','options');?>
<div class="themify_builder_row module_row clearfix repeat module_row_10 themify_builder_127_row module_row_127-10 <?php if(is_page('17') || is_page('19') || is_page('21')){?> tb_i46k78 <?php } elseif(is_page('13')) {?> tb_u861794<?php } else {?> tb_2nom830 <?php } ?>" style="background-image: url(<?php if(get_field('inner_banner_image')) {?> <?php echo $inner_banner_image['url']; ?> <?php } else { ?><?php echo $common_inner_banner['url']; ?> <?php } ?>);">
    <div class="builder_row_cover"></div>
    <div class="row_inner col_align_top">

        <div class="module_column tb-column col4-2 first tb_127_column module_column_0 module_column_127-10-0 <?php if(is_page('17') || is_page('19') || is_page('21')){?> tb_gy9r79 <?php } elseif(is_page('13')) {?> tb_zdc9794<?php } else {?> tb_9bje833 <?php } ?>">
            <div class="tb-column-inner">
                <div class="module module-text <?php if(is_page('17') || is_page('19') || is_page('21')){?> tb_b0av79 <?php } elseif(is_page('13')) {?> tb_ttgd794<?php } else {?> tb_s3fj352 <?php } ?>">
                    <div class="tb_text_wrap">
                        <h2>Talk To An AI Security Expert In:</h2>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="module_column tb-column col4-1 middle tb_127_column module_column_1 module_column_127-10-1 <?php if(is_page('17') || is_page('19') || is_page('21')){?> tb_dz1g80 <?php } elseif(is_page('13')) {?> tb_bwxe795<?php } else {?> tb_3sec490 <?php } ?>">
            <div class="tb-column-inner">
                <div
                    class="module module-buttons <?php if(is_page('17') || is_page('19') || is_page('21')){?> tb_xeik80 <?php } elseif(is_page('13')) {?> tb_wka0795<?php } else {?> tb_w0in273 <?php } ?> normal solid squared wow fadeInRight tb-align-left">
                    <div class="module-buttons">
                        <div class="module-buttons-item  buttons-horizontal"> <a
                                href="<?php echo get_permalink('25'); ?>" class="ui builder_button tb_default_color">
                                <span>AUS</span> </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="module_column tb-column col4-1 middle tb_127_column module_column_1 module_column_127-10-1 <?php if(is_page('17') || is_page('19') || is_page('21')){?> tb_dz1g80 <?php } elseif(is_page('13')) {?> tb_bwxe795<?php } else {?> tb_3sec490 <?php } ?>">
            <div class="tb-column-inner">
                <div
                    class="module module-buttons <?php if(is_page('17') || is_page('19') || is_page('21')){?> tb_xeik80 <?php } elseif(is_page('13')) {?> tb_wka0795<?php } else {?> tb_w0in273 <?php } ?> normal solid squared wow fadeInRight tb-align-left">
                    <div class="module-buttons">
                        <div class="module-buttons-item  buttons-horizontal"> <a
                                href="https://gundetection.co.nz/contact-nz/" class="ui builder_button tb_default_color">
                                <span>NZ</span> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>