<?php
$acf_fields = get_fields();

if ($acf_fields['enable'] == false && !is_admin()) {
    return;
}
?>
<section id="faq" style="<?= !empty($acf_fields['background']) ? 'background: ' . $acf_fields['background'] : '';?>">
    <div class="faq container">
        <div class="faq__wrap">
            <?php if (!empty($acf_fields['section_title'])) { ?>
                <div class="faq__title title-big" style="<?= !empty($acf_fields['title_color']) ? 'color: '. $acf_fields['title_color'] . ';' : '';?>"><?=$acf_fields['section_title'];?></div>
            <?php } ?>

            <?php if (!empty($acf_fields['items'])) { ?>
                <div class="faq__list">
                    <?php foreach ($acf_fields['items'] as $item) { ?>
                        <?php if (!empty($item)) { ?>
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="accordion">
                                        <div class="accordion__title" style="<?= !empty($acf_fields['item_title_color']) ? 'color: '. $acf_fields['item_title_color'] . ';' : '';?>"><?=$item['title'];?></div>
                                        <div class="accordion__icon">
                                            <!--?xml version="1.0"?-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="28" viewBox="-1 0 27 25" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8319 9.44541C19.1383 9.90493 19.0141 10.5258 18.5546 10.8322L12.5546 14.8322C12.2187 15.0561 11.7811 15.0561 11.4452 14.8322L5.4452 10.8322C4.98567 10.5258 4.86149 9.90493 5.16784 9.44541C5.4742 8.98588 6.09507 8.8617 6.55459 9.16806L11.9999 12.7983L17.4452 9.16806C17.9047 8.8617 18.5256 8.98588 18.8319 9.44541Z" fill="#30292A"></path>
                                                <path d="M0.999999 12C1 5.92487 5.92487 0.999999 12 0.999999L12 -1C4.8203 -1 -1 4.8203 -1 12L0.999999 12ZM12 23C5.92487 23 0.999999 18.0751 0.999999 12L-1 12C-1 19.1797 4.8203 25 12 25L12 23ZM23 12C23 18.0751 18.0751 23 12 23L12 25C19.1797 25 25 19.1797 25 12L23 12ZM25 12C25 4.8203 19.1797 -1 12 -1L12 0.999999C18.0751 1 23 5.92487 23 12L25 12Z" fill="#30292A"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="panel" style="display: none; <?= !empty($acf_fields['item_description_color']) ? 'color: '. $acf_fields['item_description_color'] . ';' : '';?>"><?=$item['description'];?></div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>
</section>