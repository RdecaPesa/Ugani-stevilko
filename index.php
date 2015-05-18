<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Skrita številka</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

	<?php
		$stevilo = 5;
			

		if (isset($_POST['stevilo'])) {
			
			if ($stevilo == $_POST['stevilo']) {
				$izpis = "Čestitam, uganili ste številko!";
			}

			elseif ($stevilo < $_POST['stevilo']) {
				$izpis = "Številka je manjša, poskusi znova!";
			}

			else {
				$izpis = "Številka je večja, poskusi znova!";
			}

		}

		else {
				$izpis = "Ugani skrito številko!";
			}

	?>


	<div class="container">

	        <div class="naslov">
	          <p><?php echo $izpis ?></p>
	        </div>
			
            
            <form action="index.php" method="post" class="box">
			  	<div class="form">				  			  		
					<label for="stevilka" class="vpisi-stevilko">Vpiši številko:</label>

					<div class="krog">						
							<input type="text" class="form-control" id="stevilo" name="stevilo" placeholder="številka">					  	
						
			  				<button type="submit" class="btn btn-default">Potrdi</button>			  			
		  			</div>
		  		</div>
			
			</form>
    </div>


	
</body>
</html>