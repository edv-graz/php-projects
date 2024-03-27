<form action="edit.php" method="post">
    <label for="alt">
        <input type="hidden" name="img-id" id="img-id" value="<?= e( $image->id ?? '' ) ?>">
        <input type="text" name="alt" id="alt" value="<?= e( $image->alt ) ?>">
    </label>
    <button type="submit">Speichern</button>
</form>