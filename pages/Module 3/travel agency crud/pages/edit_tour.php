<?php

include(__DIR__ . '/functions/tour_crud.php');

include(__DIR__ . '/../_bootstrap.php');

if (!isset($_GET['id'])) {
    header('Location: list_tours.php');
    exit;
}


$tourId = (int)$_GET['id'];
$normalizedData = load_tour_data($tourId);

$formErrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $normalizedData = normalize_submitted_data($_POST);


    $formErrors = validate_normalized_data($normalizedData);

    if (count($formErrors) === 0) {
        $normalizedData['id'] = $tourId;
        save_tour_data($normalizedData);
        $_SESSION['message'] = 'The tour was updated successfully';
        header('Location: list_tours.php');
        exit;
    }
}

include(__DIR__ . '/../_header.php');
?>
    <p><a href="/list-tours">Go back to the list</a></p>
    <h1>Edit tour <?php echo $tourId; ?></h1>
<?php
include(__DIR__ . '/snippets/tour_form.php');

include(__DIR__ . '/../_footer.php');