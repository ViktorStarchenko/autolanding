<?php
$acf_fields = get_fields();

if ($acf_fields['enable'] == false && !is_admin()) {
    return;
}
?>
<section id="seo_text" style="<?= !empty($acf_fields['background']) ? 'background: ' . $acf_fields['background'] : '';?>">
    <div class="seoText container">
        <?php if (!empty($acf_fields['section_title'])) { ?>
            <div class="title" style="<?= !empty($acf_fields['title_color']) ? 'color: '. $acf_fields['title_color'] . ';' : '';?>"><?=$acf_fields['section_title'];?></div>
        <?php } ?>

        <?php if (!empty($acf_fields['content'])) { ?>
            <div class="text" style="<?= !empty($acf_fields['content_color']) ? 'color: '. $acf_fields['content_color'] . ';' : '';?>"><?=$acf_fields['content'];?></div>
        <?php } ?>

    </div>
</section>