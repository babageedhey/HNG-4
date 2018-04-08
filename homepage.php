<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sample Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

</head>
<body>
    <h1>HNG Internship</h1>
    <p>Current Time: 
    	<span>
        
    		<?php
				date_default_timezone_set("GMT");
				echo "The time is " . date("h:i:sa");
			?>

    	</span>
	</p>
</body>
</html>       