<?php
$acf_footer = get_field('footer_settings', 'options');
?>

<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-6 order-sm-1 order-2">
            <div class="footer__title"><?=$acf_footer['contacts']['title'];?></div>
            <div class="info">
                <?php if (!empty($acf_footer['contacts']['address'])) { ?>
                    <?php foreach ($acf_footer['contacts']['address'] as $address) { ?>
                        <div class="info__address">
<!--                            <img src="https://auto-electric.com.ua/wp-content/uploads/2021/06/subtract2.svg" alt="" data-src="https://auto-electric.com.ua/wp-content/uploads/2021/06/subtract2.svg" decoding="async" class=" lazyloaded">-->
                            <?php if (!empty($address['icon'])) { ?>
                                <i class="<?= $address['icon']; ?>"></i>
                            <?php } ?>
                            <?php if (!empty($address['link'])) { ?>
                                <a href="<?= $address['link']['url'];?>"><?= $address['link']['title'];?></a>
                            <?php } ?>
                            <?= !empty($address['text']) ? $address['text'] : ''; ?>
                        </div>
                    <?php } ?>
                <?php } ?>

                <?php if (!empty($acf_footer['contacts']['phones'])) { ?>
                    <div class="info__tel">
                        <?php foreach($acf_footer['contacts']['phones'] as $phone) { ?>
                            <?php if (!empty($phone)) { ?>
                                <div class="info__tel-item">
<!--                                    <img src="https://auto-electric.com.ua/wp-content/uploads/2021/06/group10.svg" alt="" data-src="https://auto-electric.com.ua/wp-content/uploads/2021/06/group10.svg" decoding="async" class=" lazyloaded">-->

                                    <?php if (!empty($phone['icon'])) { ?>
                                        <i class="<?= $phone['icon']; ?>"></i>
                                    <?php } ?>
                                    <?php if (!empty($phone['link'])) { ?>
                                        <a href="<?= $phone['link']['url'];?>"><?= $phone['link']['title'];?></a>
                                    <?php } ?>
                                    <span><?= !empty($phone['text']) ? $phone['text'] : ''; ?></span>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>

<!--                <div class="info__call"> <span class="button btn-yellow btn-callback">Замовити дзвінок</span></div>-->
            </div>
            <?php if (!empty($acf_footer['contacts']['map_url'])) { ?>
                <div class="map">
                    <div id="map" data-role="map-2gis" data-zoom="15" data-markers="markers"></div>
                    <div class="map__button">
                        <a target="<?= $acf_footer['contacts']['map_url']['target'] ;?>" class="btn-yellow" href="<?= $acf_footer['contacts']['map_url']['url'] ;?>">
                            <span><?= $acf_footer['contacts']['map_url']['title'] ;?></span> <!--?xml version="1.0"?-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                <rect x="7.5564" y="15.0713" width="2" height="10" rx="1" transform="rotate(-135 7.5564 15.0713)" fill="black"></rect>
                                <rect x="6.14209" y="2.34326" width="2" height="10" rx="1" transform="rotate(-45 6.14209 2.34326)" fill="black"></rect>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div class="col-md-7 col-sm-6 order-sm-2 order-1">
            <div class="row">
                <div class="col-md-6">
                    <?php if (!empty($acf_footer['about']['title'])) { ?>
                        <div class="footer__title"><?= $acf_footer['about']['title']; ?></div>
                    <?php } ?>
                    <div class="footer__menu">
                        <?php if (!empty($acf_footer['about']['items'])) { ?>
                            <ul>
                                <?php foreach ($acf_footer['about']['items'] as $item) { ?>
                                    <?php if (!empty($item['link'])) { ?>
                                        <li class=""> <a href="<?= $item['link']['url'];?>" title="<?= $item['link']['title'];?>"><?= $item['link']['title'];?></a></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-md-6 footer__services">
                    <?php if (!empty($acf_footer['services'])) { ?>
                        <?php if (!empty($acf_footer['services']['title'])) { ?>
                            <div class="footer__title"><?= $acf_footer['services']['title'];?></div>
                        <?php } ?>
                        <?php if (!empty($acf_footer['services']['items'])) { ?>
                            <ul>
                                <?php foreach($acf_footer['services']['items'] as $item) { ?>
                                    <?php if (!empty($item['link'])) { ?>
                                        <li class=""> <a href="<?= $item['link']['url']; ?>" title="<?= $item['link']['title']; ?>"><?= $item['link']['title']; ?></a></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                            <span class="more btn-yellow">Показати більше</span>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <span class="col-md-12 order-sm-3 order-3 footer__line"></span>
        <div class="col-md-12 order-sm-4 order-4">
            <div class="footer__contact">
                <div class="footer__contact-link copiright"> <a href="/"><?= $acf_footer['copyright'] ;?><?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?></a></div>
                <div class="footer__contact-socials">
                    <?php  if (!empty($acf_footer['socials'])) { ?>
                        <ul>
                            <?php foreach ($acf_footer['socials'] as $item) { ?>
                                <?php if (!empty($item['link'])) { ?>
                                    <li>
                                        <a class="f__main-menu-link" href="<?= $item['link']['url'];?>" target="<?= $item['link']['target'];?>" style="<?= !empty($item['icon_color']) ? 'color: '. $item['icon_color'] : '';?>; <?= !empty($item['background']) ? 'background: '. $item['background'] : '';?>;">
                                            <?php if (!empty($item['icon'])) { ?>
                                                <i class="<?= $item['icon'];?>"></i>
<!--                                                <img src="https://auto-electric.com.ua/wp-content/uploads/2022/02/viber-1.svg" alt="" data-src="https://auto-electric.com.ua/wp-content/uploads/2022/02/viber-1.svg" decoding="async" class=" lazyloaded">-->
                                            <?php } ?>
                                        </a>
                                    </li>
                                <?php } ?>

                            <?php } ?>
                        </ul>
                    <?php } ?>

                </div>
<!--                <div class="footer__contact-company">-->
<!--                    <div class="title"> Розробка і просування</div>-->
<!--                    <div class="logo">-->
<!--                        <a href="https://www.udigital.com.ua/">-->
<!--                            <img src="https://auto-electric.com.ua/wp-content/uploads/2022/02/ud_logo_light.png" alt="" data-src="https://auto-electric.com.ua/wp-content/uploads/2022/02/ud_logo_light.png" decoding="async" class=" lazyloaded">-->
<!--                            <noscript><img src=" https://auto-electric.com.ua/wp-content/uploads/2022/02/ud_logo_light.png" alt="" data-eio="l"></noscript>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="footer__contact-linkMob"> <a href="/"><?= $acf_footer['copyright'] ;?><?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?></a></div>
            </div>
        </div>
    </div>
</div>