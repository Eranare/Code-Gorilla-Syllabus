<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
   <header class="header">
    
    <nav class="header_nav header_container" id="navbar">

        <button onclick="history.back()" style="position: fixed; left: 50px; top: 15px;">Go Back</button><h2>Educative Module 3:</h2>
        </nav>
   </header>
   
    <content class="main">
    <a href="/opdrachten/Code-Gorilla-Syllabus/pages/blok2/index.php"><h1>Back to Blok 2</h1></a>
    <h1>Serving resources and PHP scripts.</h1>
        <a href="Dynamic/random.php">Dynamic Recourses</a> <br>
        <a href="Dynamic/random2.php">RNG with a link that shows cat pictures based on what your rng number is</a> <br>
        <a href="#">linking pages.</a>(the module explained how to link to other html pages at this point) <br>
        <a href="Dynamic/kittens.php">Html wrapped in if statement</a> (kittens.php has an if statement to make sure at least 1 kitten loads if the link gets visited while skipping the rng link) <br>
    <h1>Forms</h1>
        <a href="Forms/kittens2.php">HTML forms</a> Copy of kittens but updated <br>
        <a href="Forms/pictures.php">adding Select Element to the Form</a> 2 pictures swapped by selecting from a form <br>
        <a href="Forms/pictures2.php">Submitting Data via the Request Body: POST Requests</a> pictures work by changing all the GET methods to POST <br>
        <a href="Forms/random.php">"Submitting Data via the Request Body: Reviving Functionality"</a> reintegrating a rng page. 
    <h1>Cookies</h1>
        <a href="Cookies/name.php">Setting a Cookies</a> <br>
        <a href="Cookies/name2.php">Using a Cookie</a><br>
        <a href="#">Cookies are headers(no examples just reading text)</a><br>
    <a href="Cookies/name3.php">Redirecting after Processing a POST Request</a> if a cookie already exists, when pressing refresh or submit, will autodirect to random4.php <br>
        <a href="Cookies/random.php">Security Announcement</a>Random.php also has a display limit of 25 characters now for the name cookie<br>
    <h3>Challenges</h3>
        <a href="congrats.php">Showing "Congratulations!"</a><br> 
    <h3>Sessions</h3>
        <a href="Sessions/name.php">Sessions</a> Anonymous doesn't work anymore.<br>
        <a href="Sessions/namevardump.php">Session Files and Serialized Data.</a><br>
        <a href="Sessions/name2.php">Flash Messages.</a>Name is still set even if left empty, same as with the first Sessions<br>
        <a href="Sessions/name3.php">Using Flash Messages Everywhere.</a><br>
    <h3>Authentication</h3>
        <a href="../Secret.php">Secret</a><br>
        <?php include(__DIR__ . '/Authent/login.php'); ?><br>
    <h3>PHP Project Structure</h3>
        <a href="../secondlogin.php">Header & Footer</a> 
        <a href="../thirdlogin.php">navigation to header</a>
    <h3>CRUD</h3>

    </content>
<footer> </footer>
</body>

</html>