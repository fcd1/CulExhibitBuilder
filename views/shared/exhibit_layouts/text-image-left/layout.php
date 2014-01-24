<div class="text-image-left">
    <div class="image-left">
   <?php if ($attachment = exhibit_builder_page_attachment(1,0,$exhibitPage)):?>
        <div class="exhibit-item">
            <?php echo cul_exhibit_builder_attachment_markup($attachment,
							     array('imageSize' => 'fullsize'),
							     array('class' => 'permalink')); ?>
        </div>
        <?php endif; ?>
    </div>
    <?php echo exhibit_builder_page_text(1,$exhibitPage); ?>
</div>
