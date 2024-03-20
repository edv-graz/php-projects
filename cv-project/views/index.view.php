<section>
    <h2>Input Personal Data</h2>
    <form action="/cv.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Geschlecht</legend>
            <label for="sex">
                <input type="radio" name="sex" value="m">männlich
                <input type="radio" name="sex" value="w">weiblich
                <input type="radio" name="sex" value="d">divers
            </label>
            <span style="color: red"><?= $errors['sex'] ?? '' ?></span>
        </fieldset>
        <label for="firstname">
            <input type="text" name="firstname" id="firstname" placeholder="firstname" value="<?= $data['firstname'] ?? 'Christoph' ?>">
            <span style="color: red"><?= $errors['firstname'] ?? '' ?></span>
        </label>
        <label for="lastname">
            <input type="text" name="lastname" id="lastname" placeholder="lastname" value="<?= $data['lastname'] ?? 'Mitterwallner' ?>">
            <span style="color: red"><?= $errors['lastname'] ?? '' ?></span>
        </label>
        <label for="age">
            <input type="number" name="age" id="age" placeholder="age" value="<?= $data['age'] ?? '34' ?>">
            <span style="color: red"><?= $errors['age'] ?? '' ?></span>
        </label>
        <label for="email">
            <input type="email" name="email" id="email" placeholder="email" value="<?= $data['email'] ?? 'chris@mail.at' ?>">
            <span style="color: red"><?= $errors['email'] ?? '' ?></span>
        </label>
        <label for="phone">
            <input type="text" name="phone" id="phone" placeholder="tel" value="<?= $data['phone'] ?? '+4366012334123' ?>">
            <span style="color: red"><?= $errors['phone'] ?? '' ?></span>
        </label>
        <label for="street">
            <input type="text" name="street" id="street" placeholder="street" value="<?= $data['street'] ?? 'Am Anger 8' ?>">
            <span style="color: red"><?= $errors['street'] ?? '' ?></span>
        </label>
        <label for="zip">
            <input type="text" name="zip" id="zip" placeholder="zip" value="<?= $data['zip'] ?? '8054' ?>">
            <span style="color: red"><?= $errors['zip'] ?? '' ?></span>
        </label>
        <label for="city">
            <input type="text" name="city" id="city" placeholder="city" value="<?= $data['city'] ?? 'Seiersberg-Prika' ?>">
            <span style="color: red"><?= $errors['city'] ?? '' ?></span>
        </label>
        <label for="profile-pic">Upload Profile Picture: <input type="file" name="image" id="image"
                                                                accept="image/jpeg, imager/jpg, image/png"></label>
        <span style="color: red"><?= $img_error ?? '' ?></span>
        <input type="submit" value="Save">
    </form>
</section>