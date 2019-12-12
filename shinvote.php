
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("connection.php");
$sql="update finalvote set votecount=votecount+1 where partyname like 'SHINCHAN HEROES' ";mysqli_query($conn,$sql);

header("location: conf_vote.php");
?>

<p><a href="javascript:close_window();">close</a></p>


</body>
</html>