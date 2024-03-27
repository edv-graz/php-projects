<section class="gallery grid">
	<?php if ( isset( $images ) ) : ?>
		<?php foreach ( $images as $image ) : ?>
          <div class="gallery-item">
              <img src="<?= e( $image->getSrc() ) ?>" alt="<?= e( $image->alt ) ?>">
              <p><?= e( $image->alt ) ?></p>
          </div>
		<?php endforeach; ?>
	<?php else : ?>
      <p>Es wurden bisher noch keine Bilder erfasst.</p>
	<?php endif; ?>
</section>


