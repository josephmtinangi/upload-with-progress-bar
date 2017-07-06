<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . time() . ' - ' . $_FILES['file']['name'])) {
        echo 'Success';
    } else {
        echo 'Failed';
    }

} else {
    echo 'Only POST request is allowed.';
}
