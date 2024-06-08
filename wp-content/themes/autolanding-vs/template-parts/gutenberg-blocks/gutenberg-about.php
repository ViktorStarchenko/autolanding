<?php
$acf_fields = get_fields();

if ($acf_fields['enable'] == false && !is_admin()) {
    return;
}
?>
<section id="about">
    <div class="row about" style="<?= !empty($acf_fields['background']) ? 'background: ' . $acf_fields['background'] : '';?>">
        <?php if (!empty($acf_fields['column_left'])) { ?>
            <div class="col-md-6 col-sm-12">
                <div class="about__wrap">
                    <?php if (!empty($acf_fields['column_left']['title'])) { ?>
                        <div class="about__title title-big" style="<?= !empty($acf_fields['column_left']['text_color']) ? 'color: '. $acf_fields['column_left']['text_color'] . ';' : '';?>"><?= $acf_fields['column_left']['title']; ?></div>
                    <?php } ?>
                    <?php if (!empty($acf_fields['column_left']['description'])) { ?>
                        <div class="about__description" style="<?= !empty($acf_fields['column_left']['text_color']) ? 'color: '. $acf_fields['column_left']['text_color'] . ';' : '';?>"><?=$acf_fields['column_left']['description'];?></div>
                    <?php } ?>

                    <?php if (!empty($acf_fields['column_left']['buttons'])) { ?>
                        <div class="button-group">
                            <?php foreach ($acf_fields['column_left']['buttons'] as $button) { ?>
                                <?php if (!empty($button['button'])) { ?>
                                    <a href="<?= $button['button']['url'];?>" target="<?= $button['button']['target'];?>" class="btn-yellow about__btn"><?= $button['button']['title'];?></a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <?php if (!empty($acf_fields['column_right'])) { ?>
            <div class="col-md-6 col-sm-12 right lazyloaded" style="background-image: url(<?= !empty($acf_fields['column_right']['background_image']) ? $acf_fields['column_right']['background_image']['url'] : '';?>);" data-back="<?= !empty($acf_fields['column_right']['background_image']) ? $acf_fields['column_right']['background_image']['url'] : '';?>">
                <?php if (!empty($acf_fields['column_right']['info'])) { ?>
                    <div class="about__right">
                        <div class="about__right-wrap" style="<?= !empty($acf_fields['column_right']['text_color']) ? 'color: '. $acf_fields['column_right']['text_color'] . ';' : '';?> <?= !empty($acf_fields['column_right']['info_background']) ? 'background: '. $acf_fields['column_right']['info_background'] . ';' : '';?>"><?= $acf_fields['column_right']['info'];?></div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>