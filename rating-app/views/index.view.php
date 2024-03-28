<section class="grid">
	<?php foreach ( $products as $product ) : ?>
      <article>
          <img src="uploads/img/<?= e( $product->getSrc() ); ?>" alt="<?php echo $product->getTitle(); ?>">
          <h2><?php echo $product->getTitle(); ?></h2>
				<?php if ( $login->logged_in ) : ?>
            <form action="voting.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo e( $product->id ); ?>">
                <button type="submit" name="vote" value="up">Upvote <?= e( $product->getUpVotes() ) ?></button>
            </form>
            <form action="voting.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo e( $product->id ); ?>">
                <button type="submit" name="vote" value="down">Downvote <?= e( $product->getDownVotes() ) ?></button>
            </form>
				<?php endif; ?>
          <span>Voting: <?= $product->getVoting() ?></span>
      </article>
	<?php endforeach; ?>
</section>