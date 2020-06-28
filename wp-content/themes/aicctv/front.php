<?php
/* Template name: Home Page */

get_header();
?>

<div id="layout" class="pagewidth clearfix">
                <div id="content" class="clearfix">
                    <div id="page-127" class="type-page">
                        <div class="page-content entry-content">
                            <div id="themify_builder_content-127" data-postid="127"
                                class="themify_builder_content themify_builder_content-127 themify_builder">
                                <div class="themify_builder_row module_row clearfix fullcover module_row_0 themify_builder_127_row module_row_127-0 tb_zjot539">
                                    <div class="big-video-wrap">
                                    <?php $banner_video = get_field('banner_video')?>
                                        <video class="video--1417319353" muted="true" autoplay="true" loop="true" playsinline="true">
                                            <source src="<?php echo $banner_video['url']; ?>" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="builder_row_cover"></div>
                                    <div class="tb_row_frame tb_row_frame_bottom in_front"></div>
                                    <div class="row_inner col_align_middle">
                                        <div
                                            class="module_column tb-column col3-2 first tb_127_column module_column_0 module_column_127-0-0 tb_f28s539">
                                            <div class="tb-column-inner">
                                                <div class="module module-text tb_9wqw120 wow fadeIn ">
                                                    <div class="tb_text_wrap">
                                                        <h1 class="title aos-init aos-animate" data-aos="fade-up"
                                                            data-aos-delay="150"><?php the_field('banner_heading'); ?></h1>
                                                    </div>
                                                </div>
                                                <div
                                                    class="module module-text tb_uynq66 wow fadeIn animation_effect_delay_0.2 ">
                                                    <div class="tb_text_wrap">
                                                        <h3><?php the_field('banner_subheading'); ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="module_column tb-column col3-1 last tb_127_column module_column_1 module_column_127-0-1 tb_5i7s429">
                                            <div class="tb-column-inner">
                                                <div
                                                    class="themify_builder_sub_row module_subrow clearfix sub_row_0-1-0 tb_mnia126 hide-tablet hide-mobile">
                                                    <div class="subrow_inner col_align_top">
                                                        <div
                                                            class="sub_column module_column col2-1 first sub_column_post_127 sub_column_0-1-0-0 tb_pb1w128">
                                                            <div class="tb-column-inner">
                                                                <div
                                                                    class="module module-image tb_zfzm190  image-left   wow fadeInLeft  auto_fullwidth">
                                                                    <div class="image-wrap">
                                                                        <?php $banner_logo = get_field('banner_logo')?>
                                                                        <img src="<?php echo $banner_logo['url']; ?>" alt="<?php echo $banner_logo['alt']; ?>" />
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
                                    class="themify_builder_row module_row clearfix module_row_1 themify_builder_127_row module_row_127-1 tb_53yj117">
                                    <div class="row_inner col_align_top">
                                        <div
                                            class="module_column tb-column col-full first tb_127_column module_column_0 module_column_127-1-0 tb_298i119">
                                            <div class="tb-column-inner">
                                                <div class="module module-text tb_q7aw382    ">
                                                    <div class="tb_text_wrap">
                                                        <h1 class="aos-init aos-animate" data-aos="fade-up"
                                                            data-aos-delay="250"><?php the_field('how_to_use_heading'); ?></h1>
                                                    </div>
                                                </div>
                                                <div class="module module-divider tb_ybva26 double   wow fadeInUpBig animation_effect_delay_0.2 divider-custom divider-center"
                                                    style="border-width: 4px;border-color: rgba(255,123,0, 0.74);width: 125px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="themify_builder_row module_row clearfix repeat fullwidth module_row_2 themify_builder_127_row module_row_127-2 tb_xjgz737">
                                    <?php if(get_field('how_to_use_icon_text')): ?>
                                    <div class="row_inner col_align_top">
                                    <?php $i = 0; while(has_sub_field('how_to_use_icon_text')):
                                        $how_to_use_icon = get_sub_field('how_to_use_icon');
                                        $how_to_use_text =  get_sub_field('how_to_use_text');
                                    ?>

                                    <div class="module_column tb-column col3-1 tb_127_column<?php if($i==0){ ?> first module_column_0 module_column_127-2-0 tb_iwle738 <?php } elseif($i==1){?> middle module_column_1 module_column_127-2-1 tb_wlff739<?php} else {?> last module_column_2 module_column_127-2-2 tb_evs6739<?php } ?>">
                                            <div class="tb-column-inner">
                                    <div class="module module-image <?php if($i == 0){?>tb_l7g0365 <?php }elseif($i == 1) {?>tb_p77b240 <?php } else {?>tb_aq8q480 <?php } ?>image-center">
                                                    <div class="image-wrap">
                                                        <img src="<?php echo $how_to_use_icon['url']?>" width="75" alt="<?php echo $how_to_use_icon['alt']?>" />
                                                    </div>
                                                </div>
                                                <div class="module module-text <?php if($i == 0){?>tb_1x1j899 <?php }elseif($i == 1) {?>tb_c9ty157 <?php } else {?>tb_34ds329 <?php } ?>">
                                                    <div class="tb_text_wrap">
                                                        <h6 style="text-align: center;"><?php echo $how_to_use_text; ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $i++; endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div
                                    class="themify_builder_row module_row clearfix repeat module_row_3 themify_builder_127_row module_row_127-3 tb_fll8196">
                                    <div class="tb_row_frame tb_row_frame_top "></div>
                                    <div class="tb_row_frame tb_row_frame_bottom "></div>
                                    <div class="row_inner col_align_top">
                                        <div
                                            class="module_column tb-column col4-1 first tb_127_column module_column_0 module_column_127-3-0 tb_5pgb197">
                                        </div>
                                        <div
                                            class="module_column tb-column col4-2 middle tb_127_column module_column_1 module_column_127-3-1 tb_k3gb240">
                                            <div class="tb-column-inner">
                                                <div class="module module-image tb_q8r4817  image-center  ">
                                                    <div class="image-wrap">
                                                    <?php $how_to_use_bottom_icon = get_field('how_to_use_bottom_icon')?>
                                                        <img src="<?php echo $how_to_use_bottom_icon['url']; ?>" width="75"
                                                            alt="<?php echo $how_to_use_bottom_icon['alt']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="module module-text tb_f3du907 ">
                                                    <div class="tb_text_wrap">
                                                        <?php the_field('how_to_use_bottom_text'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="module_column tb-column col4-1 last tb_127_column module_column_2 module_column_127-3-2 tb_z0p7240">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="themify_builder_row module_row clearfix module_row_4 themify_builder_127_row module_row_127-4 tb_cqpe431">
                                    <div class="row_inner col_align_top">
                                        <div
                                            class="module_column tb-column col-full first tb_127_column module_column_0 module_column_127-4-0 tb_c54w432">
                                            <div class="tb-column-inner">
                                                <div class="module module-text tb_ofh2433    wow fadeIn ">
                                                    <div class="tb_text_wrap">
                                                        <h2 class="title aos-init aos-animate" data-aos="fade-up"
                                                            data-aos-delay="150"><?php the_field('real_time_alert_heading'); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="module module-divider tb_fcck434 double   wow fadeInUpBig animation_effect_delay_0.2 divider-custom divider-center"
                                                    style="border-width: 4px;border-color: rgba(255,123,0, 0.74);width: 125px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="themify_builder_row module_row clearfix fullcover module_row_5 themify_builder_127_row module_row_127-5 tb_imlk261">
                                    <div class="tb_row_frame tb_row_frame_top "></div>
                                    <div class="tb_row_frame tb_row_frame_bottom "></div>
                                    <div class="row_inner col_align_top">
                                        <div
                                            class="module_column tb-column col4-1 first tb_127_column module_column_0 module_column_127-5-0 tb_evg4263">
                                        </div>
                                        <div
                                            class="module_column tb-column col4-2 middle tb_127_column module_column_1 module_column_127-5-1 tb_mwsc841">
                                            <div class="tb-column-inner">
                                                <div class="module module-text tb_fkya320    ">
                                                    <div class="tb_text_wrap">
                                                        <h6 style="text-align: center;"><?php the_field('real_time_alert_text'); ?></h6>
                                                    </div>
                                                </div>
                                                <div class="module module-accordion tb_ftd2373  "
                                                    data-behavior="accordion">
                                                    <ul class="ui module-accordion plus-icon-button  orange">
                                                        <li>
                                                            <div class="accordion-title realtime_accordion-title"> <a href="javascript:void(0);"
                                                                    aria-controls="acc-tb_ftd2373-0"
                                                                    aria-expanded="false"> <span
                                                                        class="tb_title_accordion">Read More ...</span>
                                                                </a></div>
                                                            <div id="acc-tb_ftd2373-0" aria-hidden="true"
                                                                class="accordion-content clearfix  realtime_accordion-content" style="display: none;" >
                                                                <div class="tb_text_wrap">
                                                                    <?php the_field('alert_read_more_content'); ?>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="module_column tb-column col4-1 last tb_127_column module_column_2 module_column_127-5-2 tb_pxy8841">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="themify_builder_row module_row clearfix module_row_6 themify_builder_127_row module_row_127-6 tb_5914948">
                                    <div class="row_inner col_align_top">
                                        <div
                                            class="module_column tb-column col-full first tb_127_column module_column_0 module_column_127-6-0 tb_lmy9950">
                                            <div class="tb-column-inner">
                                                <div class="module module-text tb_itia951    wow fadeIn ">
                                                    <div class="tb_text_wrap">
                                                        <h2 class="title aos-init aos-animate" data-aos="fade-up"
                                                            data-aos-delay="150"><?php the_field('pose_risk_design_heading'); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="module module-divider tb_8fy5951 double wow fadeInUpBig animation_effect_delay_0.2 divider-custom divider-center"
                                                    style="border-width: 4px;border-color: rgba(255,123,0, 0.74);width: 125px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="themify_builder_row module_row clearfix fullwidth module_row_7 themify_builder_127_row module_row_127-7 tb_mvlw20">
                                    <?php if(get_field('pose_risk_design_image_text')): ?>
                                    <div class="row_inner col_align_top gutter-none" data-basecol="5" data-col_mobile="column4-2">
                                        <?php $j = 0; while(has_sub_field('pose_risk_design_image_text')):
                                            $pose_risk_design_image = get_sub_field('pose_risk_design_image');
                                            $pose_risk_design_text =  get_sub_field('pose_risk_design_text');
                                        ?>

                                        <div class="module_column tb-column col5-1 tb_127_column <?php if($j == 0){?>first module_column_0 module_column_127-7-0 tb_385e23 <?php }elseif($j == 1) {?>second module_column_1 module_column_127-7-1 tb_vgqj23 <?php }elseif($j == 2) {?>third module_column_2 module_column_127-7-2 tb_wzrn24 <?php }elseif($j == 3) {?> fourth module_column_3 module_column_127-7-3 tb_3ueb24 <?php } else {?>last module_column_4 module_column_127-7-4 tb_kohm777 <?php } ?>">
                                            <div class="tb-column-inner">
                                                <div class="module module-image tb_9tnl772  image-full-overlay  ">
                                                    <div class="image-wrap">
                                                        <img src="<?php echo $pose_risk_design_image['url']; ?>"
                                                            width="700" height="400" alt="<?php echo $pose_risk_design_image['alt']; ?>" />
                                                    </div>
                                                    <div class="image-content">
                                                        <h3 class="image-title"> <?php echo $pose_risk_design_text; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $j++; endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div
                                    class="themify_builder_row module_row clearfix module_row_8 themify_builder_127_row module_row_127-8 tb_r2jn916">
                                    <div class="row_inner col_align_top">
                                        <div
                                            class="module_column tb-column col-full first tb_127_column module_column_0 module_column_127-8-0 tb_notg918">
                                            <div class="tb-column-inner">
                                                <div class="module module-text tb_3v1j918    wow fadeIn ">
                                                    <div class="tb_text_wrap">
                                                        <h2 class="title aos-init aos-animate" data-aos="fade-up"
                                                            data-aos-delay="150"><?php the_field('demonstration_heading'); ?></h2>
                                                    </div>
                                                </div>
                                                <div class="module module-divider tb_uv6x857 double   wow fadeInUpBig animation_effect_delay_0.2 divider-custom divider-center"
                                                    style="border-width: 4px;border-color: rgba(255,123,0, 0.74);width: 125px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="themify_builder_row module_row clearfix fullcover module_row_9 themify_builder_127_row module_row_127-9 tb_3poz200">
                                    <div class="tb_row_frame tb_row_frame_top "></div>
                                    <div class="tb_row_frame tb_row_frame_bottom "></div>
                                    <div class="row_inner col_align_top">
                                        <div
                                            class="module_column tb-column col4-1 first tb_127_column module_column_0 module_column_127-9-0 tb_k1f3200">
                                        </div>
                                        <div
                                            class="module_column tb-column col4-2 middle tb_127_column module_column_1 module_column_127-9-1 tb_m0lb201">
                                            <div class="tb-column-inner">
                                                <div class="module module-video tb_14wm201 video-top   video-autoplay"
                                                    style="z-index:7;">
                                                    <div class="video-wrap">
                                                        <div style="width: 640px; " class="wp-video">
                                                        <?php $demonstration_video = get_field('demonstration_video'); ?>
                                                            <video class="wp-video-shortcode" width="640" height="360" autoplay preload="metadata" controls="controls">
                                                                <source type="video/mp4" src="<?php echo $demonstration_video['url']?>" />
                                                            </video>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="module_column tb-column col4-1 last tb_127_column module_column_2 module_column_127-9-2 tb_6zzb201">
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