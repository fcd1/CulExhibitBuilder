<div class="gallery-thumbnails-text-bottom">
    <div class="primary">
        <?php echo cul_exhibit_builder_thumbnail_gallery(1, 12,
							 array('class'=>'permalink'),
							 $exhibitPage,'thumbnail'); ?>
    </div>
    <?php if (exhibit_builder_page_text(1,$exhibitPage)): ?>
    <div class="secondary">
        <div class="exhibit-text">
       <?php echo exhibit_builder_page_text(1,$exhibitPage); ?>
        </div>
    </div>
    <?php endif; ?>
</div>
