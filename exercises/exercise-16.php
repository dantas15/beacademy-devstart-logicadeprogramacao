<?php

require __DIR__ . '/../vendor/autoload.php';

$formIsSent = isset($_POST['name']) && isset($_POST['password']);

if ($formIsSent) {

    $name = $_POST['name'];
    $password = $_POST['password'];

    $errorMsg = '';
    $successMsg = '';

    if ($name != 'Marcos' || $password != 'paylivre') {
        if ($name != 'Marcos') {
            $errorMsg = 'Incorrect name';
        } else {
            $errorMsg = 'Incorrect password for user ' . $name;
        }
    } else {
        $successMsg = 'You\'re logged in, ' . $name . '!';
    }
}

include __DIR__ . '/../includes/head.php';
?>

<div x-data="{formIsSent: <?= $formIsSent ? 'true' : 'false' ?>, error: <?= $errorMsg != '' ? 'true' : 'false' ?>, success: <?= $successMsg != '' ? 'true' : 'false' ?>}">

    <template x-if="formIsSent">
        <div>
            <div x-show="error">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $errorMsg ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

            <div x-show="success">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $successMsg ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </template>

    <form method="post" class="container-sm">
        <div class="mb-3 mt-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
        </div>
    </form>

    <hr/>

<?php
include __DIR__ . '/../includes/foot.php';
?>