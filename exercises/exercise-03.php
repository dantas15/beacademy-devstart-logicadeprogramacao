<?php

require __DIR__ . '/../vendor/autoload.php';

if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $ageMoreThan18 = $age > 18 ? 'true' : 'false';

    // 2 inverted result vars
    $NotAgeIsNot25 = $age != 25 ? 'false' : 'true';
    $NotAgeEquals25andNameIsNotMarcos = $age != 25 && $name == 'Marcos' ? 'false' : 'true';

    $ageIsNot25orNameEqualsMarcos = $age != 25 || $name == 'Marcos' ? 'true' : 'false';
    $ageDividedByTwoEqualsZero = $age / 2 == 0 ? 'true' : 'false';



    $display = '
    <h2>Result:</h2>
    <p><span class="fs-5 fw-semibold">Name:</span> ' . $name . '</p>
    <p><span class="fs-5 fw-semibold">Age:</span> ' . $age . '</p>
    <p><span class="fs-5 fw-semibold"> Age > 18?</span> ' . $ageMoreThan18 . '</p>
    <p><span class="fs-5 fw-semibold"> !(Age != 25) ?</span> ' . $NotAgeIsNot25 . '</p>
    <p><span class="fs-5 fw-semibold"> !(Age != 25 AND Name == Marcos) ?</span> ' . $NotAgeEquals25andNameIsNotMarcos . '</p>
    <p><span class="fs-5 fw-semibold"> Age != 25 OR Name == Marcos ?</span> ' . $ageIsNot25orNameEqualsMarcos . '</p>
    <p><span class="fs-5 fw-semibold"> Age / 2 == 0</span> ' . $ageDividedByTwoEqualsZero . '</p>
';
}

include __DIR__ . '/../includes/head.php';
?>

    <form method="post" class="container-sm">
        <div class="mb-3 customBg">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $_POST['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?= $_POST['age'] ?>" required>
        </div>
        <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
        </div>
    </form>

    <hr/>

<?= $display ?>

<?php
include __DIR__ . '../includes/foot.php';
?>