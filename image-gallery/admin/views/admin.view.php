<section>
    <h2>Bilder bearbeiten oder löschen</h2>
	<?php if ( isset( $images ) ) : ?>
      <table>
          <thead>
          <tr>
              <th>Bild</th>
              <th>Alt-Text</th>
              <th>Aktionen</th>
          </tr>
          </thead>
				<?php foreach ( $images as $image ) : ?>
            <tr>
                <td><img src="../uploads/img/<?= e( $image->file_name ) ?>" alt="<?= e( $image->alt ) ?>" width="150rem"></td>
                <td><?= e( $image->alt ) ?></td>
                <td>
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="id" value="<?= e( $image->id ) ?>">
                        <button style="margin: 10px; padding: 5px">Löschen</button>
                        <span style="color: red"><?= $delte_error ?? '' ?></span>
                    </form>
                    <form action="edit.php" method="POST">
                        <input type="hidden" name="id" value="<?= e( $image->id ) ?>">
                        <button style="margin: 10px; padding: 5px">Bearbeiten</button>
                        <span style="color: red"><?= $edit_error ?? '' ?></span>
                    </form>
                </td>
            </tr>
				<?php endforeach; ?>
      </table>
	<?php else : ?>
      <p>Es wurden bisher noch keine Bilder erfasst.</p>
	<?php endif; ?>
</section>
<section>
    <h2>Bilder hinzufügen</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="image">Bild hochladen</label>
			<?php if ( $error ?? '' ): ?>
          <div style="background-color: lightcoral; padding: 5px"><?= $error ?></div>
			<?php endif; ?>
        <input type="file" name="image" id="image" accept="image/jpeg, image/jpg, image/png">
        <label for="alt">Alt-Text</label>
        <input type="text" name="alt" id="alt">
        <input type="submit" value="Hochladen">
    </form>
</section>
