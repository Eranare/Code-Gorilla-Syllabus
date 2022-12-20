<?php
include(__DIR__ . '/functions/tour_crud.php');
include(__DIR__ . '/../_bootstrap.php');
$toursData = load_all_tours_data();

$title = "List of tours";

$toursJsonFile = __DIR__ . '/../data/tours.json';
if (file_exists($toursJsonFile)) {
    $jsonData = file_get_contents($toursJsonFile);

    $toursData = json_decode($jsonData, true);
} else {
    $toursData = [];
}
$toursData = array_filter(
    load_all_tours_data(),
    function (array $tourData) {
        return !isset($tourData['is_deleted']) ||
            !$tourData['is_deleted'];
    }
);


include(__DIR__ . '/../_header.php');
?>
<p>
<a href="create-tour.php" class="btn btn-primary">Add a tour</a>
</p>
<?php
if (count($toursData) === 0) {
    ?>
    <p>There are no tours (yet).</p>
    <?php
}
else {
    ?>
    <table class="table">
    <thead>
        <tr>
            <th>Destination</th>
            <th>Number of tickets</th>
            <th>Is accessible</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($toursData as $tourData) {
        if (isset($tourData['is_deleted']) && $tourData['is_deleted']) {
            continue;
        }
        ?>
        <tr>
            <td>
            <a href="tour.php?id=<?php echo htmlspecialchars(
                $tourData['id'],
                ENT_QUOTES
            ); ?>">
                <?php echo htmlspecialchars(
                    $tourData['destination'],
                    ENT_QUOTES
                ); ?>
            </a> 
            </td>
            <td>
            <?php echo htmlspecialchars(
                $tourData['number_of_tickets_available'],
                ENT_QUOTES
            ); ?>
            </td>
            <td>
                <?php
                echo $tourData['is_accessible'] ? 'Yes' : 'No';
                ?>
            </td>
            <td>
            <td>

        
                    <a href="edit_tour.php?id=<?php
                    echo htmlspecialchars($tourData['id'], ENT_QUOTES);
                    ?>" class="btn btn-primary">Edit</a>
                
                <form action="delete_tour.php">
                    <input type="hidden" name="id" value="<?php
                    echo htmlspecialchars($tourData['id'], ENT_QUOTES);
                    ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    </table>
    <?php
}



include(__DIR__ . '/../_footer.php');
?>