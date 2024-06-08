<?php
$acf_header = get_field('header_settings', 'options');
?>
<div class="header__wrap" style="<?= !empty($acf_header['background_color']) ? 'background: ' . $acf_header['background_color'] : '';?>">
    <div class="container">
        <a class="header__logo" href="/">
            <?php if (!empty($acf_header['logo'])) { ?>
                <img src="<?=$acf_header['logo']['url'];?>" alt="<?=$acf_header['logo']['title'];?>" data-src="<?=$acf_header['logo']['url'];?>" decoding="async" class=" lazyloaded">
            <?php } ?>
        </a>
        <div class="items">
            <?php if (!empty($acf_header['nav_menu'])) { ?>
                <nav class="header__nav">
                    <ul class="main_menu">
                        <?php foreach ($acf_header['nav_menu'] as $nav_menu) { ?>
                            <?php if (!empty($nav_menu['item'])) { ?>
                                <li class="parent <?= (!empty($nav_menu['item']['subitems'])) ? 'has-child' : 'not-child';?>">
                                    <?php if (!empty($nav_menu['item']['link'])) { ?>
                                        <a href="<?= $nav_menu['item']['link']['url']; ?>" target="<?= $nav_menu['item']['link']['target'];?>" title="<?= $nav_menu['item']['link']['title']; ?>" class="main-item" style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>"><?= $nav_menu['item']['link']['title']; ?>
                                    <?php if (!empty($nav_menu['item']['subitems'])) { ?>
                                        <img src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" alt="arrow" data-src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" decoding="async" class=" lazyloaded">
                                    <?php } ?>
                                        </a>
                                    <?php } ?>
                                <?php if (!empty($nav_menu['item']['subitems'])) { ?>
                                    <ul class="child-menu dropdown show__wrap-services">
                                        <?php foreach ($nav_menu['item']['subitems'] as $subitem) { ?>
                                            <?php if (!empty($subitem['link'])) { ?>
                                                <li>
                                                    <a href="<?= $subitem['link']['url'];?>" target="<?= $subitem['link']['target'];?>" style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>">
                                                        <div class="title">
                                                            <?php if (!empty($subitem['icon'])) { ?>
                                                                <img src="<?= $subitem['icon']['url'];?>" alt="<?= $subitem['icon']['title'];?>" data-src="<?= $subitem['icon']['url'];?>" decoding="async" class=" lazyloaded">
                                                            <?php } ?>
                                                            <span><?= $subitem['link']['title'];?></span>
                                                        </div>
                                                        <div class="arrow">
                                                            <!--?xml version="1.0"?-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.44541 1.16793C5.90493 0.861582 6.5258 0.985755 6.83216 1.44528L10.8322 7.44528C11.0561 7.78118 11.0561 8.21879 10.8322 8.55468L6.83216 14.5547C6.5258 15.0142 5.90493 15.1384 5.44541 14.832C4.98588 14.5257 4.8617 13.9048 5.16806 13.4453L8.79826 7.99998L5.16806 2.55468C4.8617 2.09516 4.98588 1.47429 5.44541 1.16793Z" fill="#30292A"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } ?>

                                        <?php } ?>
                                    </ul>
                                <?php } ?>

                                </li>
                            <?php } ?>

                        <?php } ?>
                    </ul>
                </nav>
            <?php } ?>


            <?php if (!empty($acf_header['phones'])) { ?>
                <nav class="header__nav header__phones">
                    <ul class="main_menu">
                        <?php foreach ($acf_header['phones'] as $nav_menu) { ?>
                            <?php if (!empty($nav_menu['item'])) { ?>
                                <li class="parent <?= (!empty($nav_menu['item']['subitems'])) ? 'has-child' : 'not-child';?>" style="position: relative">
                                    <?php if (!empty($nav_menu['item']['link'])) { ?>
                                        <div class="header__mobile">
                                            <!--?xml version="1.0"?-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                <circle cx="12.9775" cy="12" r="12" fill="#30292A"></circle>
                                                <g clip-path="url(#clip0_1336_29)">
                                                    <path d="M18.0147 13.8766C17.28 13.8766 16.5586 13.7617 15.875 13.5358C15.54 13.4216 15.1283 13.5264 14.9238 13.7363L13.5745 14.7549C12.0098 13.9196 11.0459 12.9561 10.222 11.403L11.2106 10.0889C11.4674 9.83241 11.5596 9.45772 11.4492 9.10616C11.2223 8.41897 11.1071 7.69794 11.1071 6.96294C11.1071 6.43197 10.6751 6 10.1442 6H7.94045C7.40951 6 6.97754 6.43197 6.97754 6.96291C6.97754 13.0488 11.9287 18 18.0147 18C18.5456 18 18.9776 17.568 18.9776 17.0371V14.8395C18.9775 14.3086 18.5456 13.8766 18.0147 13.8766Z" fill="#FFD541"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1336_29">
                                                        <rect width="12" height="12" fill="white" transform="translate(6.97754 6)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <a href="<?= $nav_menu['item']['link']['url'];?>" target="<?= $nav_menu['item']['link']['target'];?>" style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>"><?= $nav_menu['item']['link']['title'];?></a>
                                        </div>
                                    <?php if (!empty($nav_menu['item']['subitems'])) { ?>
                                        <img src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" alt="" data-src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" decoding="async" class=" lazyloaded">
                                    <?php } ?>
                                        </a>
                                    <?php } ?>
                                <?php if (!empty($nav_menu['item']['subitems'])) { ?>
                                    <ul class="child-menu dropdown show__wrap-services">
                                        <?php foreach ($nav_menu['item']['subitems'] as $subitem) { ?>
                                            <?php if (!empty($subitem['link'])) { ?>
                                                <li>
                                                    <div class="header__mobile">
                                                        <!--?xml version="1.0"?-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                                            <circle cx="12.9775" cy="12" r="12" fill="#30292A"></circle>
                                                            <g clip-path="url(#clip0_1336_29)">
                                                                <path d="M18.0147 13.8766C17.28 13.8766 16.5586 13.7617 15.875 13.5358C15.54 13.4216 15.1283 13.5264 14.9238 13.7363L13.5745 14.7549C12.0098 13.9196 11.0459 12.9561 10.222 11.403L11.2106 10.0889C11.4674 9.83241 11.5596 9.45772 11.4492 9.10616C11.2223 8.41897 11.1071 7.69794 11.1071 6.96294C11.1071 6.43197 10.6751 6 10.1442 6H7.94045C7.40951 6 6.97754 6.43197 6.97754 6.96291C6.97754 13.0488 11.9287 18 18.0147 18C18.5456 18 18.9776 17.568 18.9776 17.0371V14.8395C18.9775 14.3086 18.5456 13.8766 18.0147 13.8766Z" fill="#FFD541"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_1336_29">
                                                                    <rect width="12" height="12" fill="white" transform="translate(6.97754 6)"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <a href="<?=$subitem['link']['url'];?>" target="<?=$subitem['link']['target'];?>" style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>"><?=$subitem['link']['title'];?></a>
                                                    </div>
                                                </li>
                                            <?php } ?>

                                        <?php } ?>
                                    </ul>
                                <?php } ?>

                                </li>
                            <?php } ?>

                        <?php } ?>
                    </ul>
                </nav>
            <?php } ?>



<!--            <div class="header__mobile">-->
<!--                ?xml version="1.0"?-->
<!--                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">-->
<!--                    <circle cx="12.9775" cy="12" r="12" fill="#30292A"></circle>-->
<!--                    <g clip-path="url(#clip0_1336_29)">-->
<!--                        <path d="M18.0147 13.8766C17.28 13.8766 16.5586 13.7617 15.875 13.5358C15.54 13.4216 15.1283 13.5264 14.9238 13.7363L13.5745 14.7549C12.0098 13.9196 11.0459 12.9561 10.222 11.403L11.2106 10.0889C11.4674 9.83241 11.5596 9.45772 11.4492 9.10616C11.2223 8.41897 11.1071 7.69794 11.1071 6.96294C11.1071 6.43197 10.6751 6 10.1442 6H7.94045C7.40951 6 6.97754 6.43197 6.97754 6.96291C6.97754 13.0488 11.9287 18 18.0147 18C18.5456 18 18.9776 17.568 18.9776 17.0371V14.8395C18.9775 14.3086 18.5456 13.8766 18.0147 13.8766Z" fill="#FFD541"></path>-->
<!--                    </g>-->
<!--                    <defs>-->
<!--                        <clipPath id="clip0_1336_29">-->
<!--                            <rect width="12" height="12" fill="white" transform="translate(6.97754 6)"></rect>-->
<!--                        </clipPath>-->
<!--                    </defs>-->
<!--                </svg>-->
<!--                <a href="tel:+38 068 282 73 73">+38 068 282 73 73</a>-->
<!--            </div>-->
<!--            <ul class="wpm-language-switcher switcher-dropdown">-->
<!--                <li class="item-language-main item-language-ua">-->
<!--          <span>-->
<!--            <span>Укр</span>-->
<!--          </span>-->
<!--                    <ul class="language-dropdown  v dfvd">-->
<!--                        <li class="item-language-ru">-->
<!--                            <a href="https://auto-electric.com.ua/ru/" data-lang="ru">-->
<!--                                <span>Рус</span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
        </div>
        <div class="burgerMenu">
            <div class="close_menu">
                <div class="burger">
                    <span></span>
                </div>
            </div>
            <nav class="hide">
                <div class="show__wrap">
                    <div class="show__wrap-burger">
                        <?php if (!empty($acf_header['nav_menu'])) { ?>
                            <div class="menu">
                                <ul class="main">
                                    <?php foreach ($acf_header['nav_menu'] as $nav_menu) { ?>
                                        <?php if (!empty($nav_menu['item'])) { ?>
                                            <?php if (!empty($nav_menu['item']['link'])) { ?>
                                                <li class="parent <?= (!empty($nav_menu['item']['subitems'])) ? 'has-child' : ''; ?> ">
                                                    <a href="<?= $nav_menu['item']['link']['url'];?>" target="<?= $nav_menu['item']['link']['target'];?>" title="<?= $nav_menu['item']['link']['title'];?>" style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>"><?= $nav_menu['item']['link']['title'];?>
                                                        <?php if (!empty($nav_menu['item']['subitems'])) { ?>
                                                            <img src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" alt="arrow" data-src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" decoding="async" class=" lazyloaded">
                                                        <?php } ?>

                                                    </a>
                                                </li>
                                            <?php } ?>

                                        <?php } ?>

                                    <?php } ?>

                                </ul>
                            </div>
                        <?php } ?>

                        <?php if (!empty($acf_header['phones'])) { ?>
                            <div class="info">
                                <ul class="header__mobile">
                                    <?php foreach ($acf_header['phones'] as $nav_menu) { ?>
                                        <?php if (!empty($nav_menu['item'])) { ?>
                                            <?php if (!empty($nav_menu['item']['link'])) { ?>
                                                <li class="parent <?= (!empty($nav_menu['item']['subitems'])) ? 'has-child' : ''; ?> ">
                                                    <a href="<?= $nav_menu['item']['link']['url'];?>" target="<?= $nav_menu['item']['link']['target'];?>" title="<?= $nav_menu['item']['link']['title'];?>"  style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>"><?= $nav_menu['item']['link']['title'];?></a>

                                                </li>
                                            <?php } ?>

                                        <?php } ?>

                                    <?php } ?>

                                </ul>
                            </div>
                        <?php } ?>

                    </div>
                    <?php if (!empty($acf_header['nav_menu'])) { ?>
                        <ul class="main_menu">
                            <?php foreach ($acf_header['nav_menu'] as $nav_menu) { ?>
                                <?php if (!empty($nav_menu['item']['link'])) { ?>
                                    <li class="parent <?= (!empty($nav_menu['item']['subitems'])) ? 'has-child' : 'not-child'; ?> ">
                                        <a href="<?= $nav_menu['item']['link']['url'];?>" target="<?= $nav_menu['item']['link']['target'];?>" title="<?= $nav_menu['item']['link']['title'];?>" class="main-item" style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>"><?= $nav_menu['item']['link']['title'];?>
                                            <?php if (!empty($nav_menu['item']['subitems'])) { ?>
                                                <img src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" alt="arrow" data-src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" decoding="async" class="lazyload">
                                            <?php } ?>
                                        </a>
                                    <?php if (!empty($nav_menu['item']['subitems'])) { ?>

                                        <ul class="child-menu dropdown show__wrap-services">
                                            <?php foreach ($nav_menu['item']['subitems'] as $subitem) { ?>
                                                <?php if (!empty($subitem['link'])) { ?>
                                                    <li>
                                                        <a href="<?= $subitem['link']['url'];?>" target="<?= $subitem['link']['target'];?>" style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>">
                                                            <div class="title">
                                                            <?php if (!empty($subitem['icon'])) { ?>
                                                                <img src="<?= $subitem['icon']['url'];?>" alt="<?= $subitem['icon']['title'];?>" data-src="<?= $subitem['icon']['url'];?>" decoding="async" class=" lazyloaded">
                                                            <?php } ?>
                                                                <span><?= $subitem['link']['title'];?></span>
                                                            </div>
                                                            <div class="arrow">
                                                                <!--?xml version="1.0"?-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.44541 1.16793C5.90493 0.861582 6.5258 0.985755 6.83216 1.44528L10.8322 7.44528C11.0561 7.78118 11.0561 8.21879 10.8322 8.55468L6.83216 14.5547C6.5258 15.0142 5.90493 15.1384 5.44541 14.832C4.98588 14.5257 4.8617 13.9048 5.16806 13.4453L8.79826 7.99998L5.16806 2.55468C4.8617 2.09516 4.98588 1.47429 5.44541 1.16793Z" fill="#30292A"></path>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php } ?>

                                            <?php } ?>

                                        </ul>
                                    <?php } ?>

                                    </li>
                                <?php } ?>
                            <?php } ?>


                            <?php foreach ($acf_header['phones'] as $nav_menu) { ?>
                                <?php if (!empty($nav_menu['item']['link'])) { ?>
                                    <li class="parent <?= (!empty($nav_menu['item']['subitems'])) ? 'has-child' : 'not-child'; ?> ">
                                        <a href="<?= $nav_menu['item']['link']['url'];?>" target="<?= $nav_menu['item']['link']['target'];?>" title="<?= $nav_menu['item']['link']['title'];?>" class="main-item" style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>"><?= $nav_menu['item']['link']['title'];?>
                                            <?php if (!empty($nav_menu['item']['subitems'])) { ?>
                                                <img src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" alt="arrow" data-src="/wp-content/themes/autolanding-vs/assets/images/arrow-down.svg" decoding="async" class="lazyload">
                                            <?php } ?>
                                        </a>
                                    <?php if (!empty($nav_menu['item']['subitems'])) { ?>

                                        <ul class="child-menu dropdown show__wrap-services">
                                            <?php foreach ($nav_menu['item']['subitems'] as $subitem) { ?>
                                                <?php if (!empty($subitem['link'])) { ?>
                                                    <li>
                                                        <a href="<?= $subitem['link']['url'];?>" target="<?= $subitem['link']['target'];?>" style="<?= !empty($acf_header['link_color']) ? 'color: ' . $acf_header['link_color'] .';' : '';?>">
                                                            <div class="title">
                                                            <?php if (!empty($subitem['icon'])) { ?>
                                                                <img src="<?= $subitem['icon']['url'];?>" alt="<?= $subitem['icon']['title'];?>" data-src="<?= $subitem['icon']['url'];?>" decoding="async" class=" lazyloaded">
                                                            <?php } ?>
                                                                <span><?= $subitem['link']['title'];?></span>
                                                            </div>
                                                            <div class="arrow">
                                                                <!--?xml version="1.0"?-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.44541 1.16793C5.90493 0.861582 6.5258 0.985755 6.83216 1.44528L10.8322 7.44528C11.0561 7.78118 11.0561 8.21879 10.8322 8.55468L6.83216 14.5547C6.5258 15.0142 5.90493 15.1384 5.44541 14.832C4.98588 14.5257 4.8617 13.9048 5.16806 13.4453L8.79826 7.99998L5.16806 2.55468C4.8617 2.09516 4.98588 1.47429 5.44541 1.16793Z" fill="#30292A"></path>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php } ?>

                                            <?php } ?>

                                        </ul>
                                    <?php } ?>

                                    </li>
                                <?php } ?>
                            <?php } ?>

                        </ul>

                    <?php } ?>

                </div>
            </nav>
        </div>
    </div>
</div>