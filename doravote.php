<?php
include("connection.php");
$sql="update finalvote set votecount=votecount+1 where partyname like 'DORA EXPLORERS' ";mysqli_query($conn,$sql);
header("location: conf_vote.php");
?>