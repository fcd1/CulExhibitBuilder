<div class="gallery-thumbnails-text-top">
    <div class="primary">
        <div class="exhibit-text">
   <?php echo exhibit_builder_page_text(1,$exhibitPage); ?>
        </div>
    </div>
    <div class="secondary">
        <?php echo cul_exhibit_builder_thumbnail_gallery(1, 12,
							 array('class'=>'permalink'),
							 $exhibitPage,'thumbnail'); ?>
    </div>
</div>
