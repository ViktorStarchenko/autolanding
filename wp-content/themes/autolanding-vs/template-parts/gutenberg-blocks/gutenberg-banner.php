<?php
$acf_fields = get_fields();
if ($acf_fields['enable'] == false && !is_admin()) {
    return;
}
if (!wp_script_is('slick', 'enqueued')) {
    wp_enqueue_script('slick');
}
if (!wp_script_is('banner-slider', 'enqueued')) {
    wp_enqueue_script('banner-slider');
}

?>
<section id="top_banner_home">
    <div class="topBannerHome">
        <div class="topBannerHome__wrap">
            <?php if (!empty($acf_fields['slides'])) { ?>
                <?php foreach($acf_fields['slides'] as $slide) { ?>
                    <div>
                        <div class="topBannerHome__wrap-item" style="background-image: url(<?= !empty($slide['image_desktop']) ? $slide['image_desktop']['url'] : '';?>);data-back="<?= !empty($slide['image_desktop'])? $slide['image_desktop']['url'] : '';?>">
                            <div class="container">
                                <?php if (!empty($slide['title'])) { ?>
                                    <h1 class="title title-big" style="<?= !empty($slide['text_color']) ? 'color: '. $slide['text_color'] . ';' : '';?>"><?=$slide['title'];?></h1>
                                <?php } ?>
                                <?php if (!empty($slide['description'])) { ?>
                                <div class="description text-bold" style="<?= !empty($slide['text_color']) ? 'color: '. $slide['text_color'] . ';' : '';?>"><?=$slide['description'];?></div>
                                <?php } ?>
                                <?php if (!empty($slide['buttons'])) { ?>
                                    <div class="button-group">
                                        <?php foreach ($slide['buttons'] as $button) { ?>
                                            <?php if (!empty($button['button'])) { ?>
                                                <a href="<?= $button['button']['url'];?>" target="<?= $button['button']['target'];?>" class="button btn-callback btn-yellow"><?= $button['button']['title'];?></a>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            <?php } ?>

        </div>
        <div class="topBannerHome__nav">
            <div class="dots">
            </div>
            <div class="topBannerHome-arrow">
                <div class="prev slick-arrow slick-hidden" aria-disabled="true" tabindex="-1">
                    <!--?xml version="1.0"?-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="-1 -1 50 50" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.5548 17.1679C26.0953 16.8616 25.4744 16.9858 25.1681 17.4453L21.1681 23.4453C20.9442 23.7812 20.9442 24.2188 21.1681 24.5547L25.1681 30.5547C25.4744 31.0142 26.0953 31.1384 26.5548 30.832C27.0144 30.5257 27.1385 29.9048 26.8322 29.4453L23.202 24L26.8322 18.5547C27.1385 18.0952 27.0144 17.4743 26.5548 17.1679Z" fill="#FFD541"></path>
                        <path d="M24 47C36.7025 47 47 36.7025 47 24H49C49 37.8071 37.8071 49 24 49V47ZM1 24C1 36.7025 11.2975 47 24 47V49C10.1929 49 -1 37.8071 -1 24H1ZM24 1C11.2975 1 1 11.2975 1 24H-1C-1 10.1929 10.1929 -1 24 -1V1ZM24 -1C37.8071 -1 49 10.1929 49 24H47C47 11.2975 36.7025 1 24 1V-1Z" fill="#FFD541"></path>
                    </svg>
                </div>
                <div class="next slick-arrow slick-hidden" aria-disabled="true" tabindex="-1">
                    <!--?xml version="1.0"?-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="-1 -1 50 50" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4454 17.1679C21.9049 16.8616 22.5258 16.9858 22.8322 17.4453L26.8322 23.4453C27.0561 23.7812 27.0561 24.2188 26.8322 24.5547L22.8322 30.5547C22.5258 31.0142 21.9049 31.1384 21.4454 30.832C20.9859 30.5257 20.8617 29.9048 21.1681 29.4453L24.7983 24L21.1681 18.5547C20.8617 18.0952 20.9859 17.4743 21.4454 17.1679Z" fill="#FFD541"></path>
                        <path d="M24 47C11.2975 47 1 36.7025 1 24H-1C-1 37.8071 10.1929 49 24 49V47ZM47 24C47 36.7025 36.7025 47 24 47V49C37.8071 49 49 37.8071 49 24H47ZM24 1C36.7025 1 47 11.2975 47 24H49C49 10.1929 37.8071 -1 24 -1V1ZM24 -1C10.1929 -1 -1 10.1929 -1 24H1C1 11.2975 11.2975 1 24 1V-1Z" fill="#FFD541"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>