
<?php

$urlMap = [
    'Blok1/index' => 'index.php',
    'Blok2/index' => 'index.php',
    '/Blok3/index' => 'index.php',
    '/Blok4/index' => 'index.php',
    '/Module 2' => 'random.php',
    '/Module 3/public/index' => 'index.php',
    '/Oefeningen/Animation/Morde' => 'morde.html',
    '/' => 'homepage.php'

];

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';

if (isset($urlMap[$pathInfo])) {
    // Load a specific page script
    include(__DIR__ . '../pages/' . $urlMap[$pathInfo]);
} else {
    // Produce a 404 response
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include(__DIR__ . '/../pages/404.php');
}
?>

<h2> theTrackerApp </h2>
 <nav>
        <ul>
            <li><a href="./project_list.php">Projects list</a></li>
            <li><a href="./task_list.php">Tasks list</a></li>
            <li><a href="./project.php">Add project</a></li>
        </ul>
 </nav>
 <div>
     <p>tracks time spent on your projects and tasks</p>
 </div>