<?php
$acf_fields = get_fields();

if ($acf_fields['enable'] == false && !is_admin()) {
    return;
}
?>
<section id="why-we">
    <div class="whyWe  dark" style="<?= !empty($acf_fields['background']) ? 'background: ' . $acf_fields['background'] : '';?>">
        <div class="container">
            <?php if (!empty($acf_fields['section_title'])) { ?>
                <div class="whyWe__title title-big" style="<?= !empty($acf_fields['title_color']) ? 'color: '. $acf_fields['title_color'] . ';' : '';?>"><?= $acf_fields['section_title'];?></div>
            <?php } ?>
            <?php if (!empty($acf_fields['section_subtitle'])) { ?>
                <div class="whyWe__subtitle" style="<?= !empty($acf_fields['title_color']) ? 'color: '. $acf_fields['title_color'] . ';' : '';?>"><?= $acf_fields['section_subtitle'];?></div>
            <?php }?>
            <?php if (!empty($acf_fields['items'])) { ?>
                <div class="whyWe__items">
                    <div class="row">
                        <?php foreach ($acf_fields['items'] as $item) { ?>
                            <div class="col-md-4 col-6 whyWe__items-item">
                                <div class="img">
                                    <img src="<?= !empty($item['image']) ? $item['image']['url'] : '';?>" alt="<?= !empty($item['image']) ? $item['image']['title'] : 'why we icon';?>" data-src="<?= !empty($item['image']) ? $item['image']['url'] : '';?>" decoding="async" class=" lazyloaded">
                                </div>
                                <div class="title" style="<?= !empty($acf_fields['tiles_color']) ? 'color: '. $acf_fields['tiles_color'] . ';' : '';?>"><?=$item['title'];?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>