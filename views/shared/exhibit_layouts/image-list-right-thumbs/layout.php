<div class="image-list-right-thumbs">
    <?php
    for ($i = 1; $i <= 8; $i++):
      $text = exhibit_builder_page_text($i,$exhibitPage);
$attachment = exhibit_builder_page_attachment($i,0,$exhibitPage);
        if ($text || $attachment):
    ?>
    <div class="image-text-group">
        <?php if ($text): ?>
        <div class="exhibit-text">
            <?php echo $text; ?>
        </div>
        <?php endif; ?>
        <?php if ($attachment): ?>
        <div class="exhibit-item">
            <?php echo cul_exhibit_builder_attachment_markup($attachment,
							     array('imageSize' => 'thumbnail'),
							     array('class' => 'permalink')); ?>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; endfor; ?>
</div>
