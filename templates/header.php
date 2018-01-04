


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>
        <?php
        if ($page_title == "")
            echo "Artificial Ignorance";
        else
            echo "Artificial Ignorance: $page_title";
        ?>
    </title>
    <link rel="stylesheet" href="bootstrap/Content/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">

</head>
<body>

<header>

    <?php require "nav.php" ?>

</header>


<main>


	<div class="fancyHeader">
	
		<section>
			<h1 >This is the <?php echo $page_title ?></h1>
		</section>

		<article>
			<p style="text-align: center">
				I'm a robot.
			</p>
		</article>
		
	</div>
	

</main>