<?php 
require_once("includes/header.php"); 
require_once("includes/classes/videoPlayer.php"); 
require_once("includes/classes/videoInfoSection.php");
 

if(!isset($_GET["id"])) {
    echo "No url passed into page";
    exit();
}

$video = new Video($con, $_GET["id"], $userLoggedInObj);
$video->incrementViews();
?>

<script src="assets/js/videoPlayerActions.js"></script>

<div class="watchLeftColumn">

<?php
    $videoPlayer = new VideoPlayer($video);
    echo $videoPlayer->create(true);

    $videoPlayer = new videoInfoSection($con, $video, $userLoggedInObj);
    echo $videoPlayer->create();
  
?>


</div>

<div class="suggestions">

</div>




<?php require_once("includes/footer.php"); ?>
                