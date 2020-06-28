<?php $inner_banner_image = get_field('inner_banner_image');
      $common_inner_banner = get_field('common_inner_banner','options');?>
<div class="themify_builder_row module_row clearfix builder-parallax-scrolling module_row_0 <?php if(is_page('17') || is_page('19') || is_page('21')){?>tb_2qbe152 <?php } elseif(is_page('13')) {?> tb_4nuq315<?php } else {?>tb_ilm610 <?php } ?>"
<?php if(get_field('')) {?>style="background-image: url(<?php echo $inner_banner_image['url']; ?>);"<?php } else {?>style="background-image: url(<?php echo $common_inner_banner['url']; ?>);"<?php }?>>
    <div class="builder_row_cover"></div>
    <div class="tb_row_frame tb_row_frame_bottom "></div>
    <div class="row_inner col_align_top">
        <div
            class="module_column tb-column col-full first module_column_0">
            <div class="tb-column-inner">
<div class="module module-text <?php if(is_page('17') || is_page('19') || is_page('21')){?>tb_rkqi154 <?php } elseif(is_page('13')) {?> tb_o4ue736<?php } else {?>tb_2gsr11 <?php } ?>">
                    <div class="tb_text_wrap">
                        <?php if(is_404()){?>
                        <h1>Page is Not Found</h1>
                        <?php } else {?>
                        <h1><?php the_title(); ?></h1>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>