<p class="">this is view film</p>
<?php 
    if(isset($_POST['film']))
    {
        print_r($_POST['film']);
    }
    if(isset($_POST['trailer']))
    {
        print_r($_POST['trailer']);
    }
    if(isset($_POST['details']))
    {
        print_r($_POST['details']);
    }
?>