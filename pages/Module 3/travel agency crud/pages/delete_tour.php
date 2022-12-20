<?php

include(__DIR__ . '/functions/tour_crud.php');

include(__DIR__ . '/../_bootstrap.php');

if (!isset($_GET['id'])) {
    header('Location: list_tours.php');
    exit;
}
$tourId = (int)$_GET['id'];

delete_tour($tourId);

$_SESSION['message'] = 'Successfully deleted tour ' . $tourId;
header('Location: list_tours.php');
exit;