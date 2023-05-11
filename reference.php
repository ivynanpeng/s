<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reference</title> 
	    <style>
        h1 {
            color:red;
            margin-left: 5px;
        }
        h2 {
            color:blue;
            margin: 5px;
        }
        p {
            color:green;
            margin-left: 5px;
        }
       
       
    </style> 
</head>
<body>
	<h1>Reference</h1>
    	<?php for ($i=0; $i <count ($data); $i++){ ?>
          
                    <h2><?php echo "[".$data[$i]['Id']."]" ?></h2>
              
                    <h2><?php echo "Source From:".$data[$i]['website']?></h2>
              
                    <h2><?php echo "Access date:".$data[$i]['d'] ?></h2>
                
    	<?php } ?>
        <a href="http://users.sussex.ac.uk/~np330/IvyPeng_web3D/IvyPeng_web3D/index.php">Back to Home</a>
</body>
</html>