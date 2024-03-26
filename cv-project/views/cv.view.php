<section style="width: 80%;">
    <img width="100%" src="/cv-project/uploads/img/<?= $img_name ?? '' ?>" alt="Profile Picture">
</section>
<section>
    <h2>Persönliche Daten</h2>
    <table>
        <tr>
            <td>Vorname</td>
            <td><?= $data['firstname'] ?? '' ?></td>
        </tr>
        <tr>
            <td>Nachname</td>
            <td><?= $data['lastname'] ?? '' ?></td>
        </tr>
        <tr>
            <td>Geschlecht</td>
            <td><?= $data['sex'] == 1 ? 'Mann' : 'Frau' ?></td>
        </tr>
        <tr>
            <td>Alter</td>
            <td><?= $data['age'] ?? '' ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $data['email'] ?? '' ?></td>
        </tr>
        <tr>
            <td>Telefon</td>
            <td><?= $data['phone'] ?? '' ?></td>
        </tr>
        <tr>
            <td>Straße</td>
            <td><?= $data['street'] ?? '' ?></td>
        </tr>
        <tr>
            <td>PLZ</td>
            <td><?= $data['zip'] ?? '' ?></td>
        </tr>
        <tr>
            <td>Ort</td>
            <td><?= $data['city'] ?? '' ?></td>
        </tr>

    </table>
</section>