<!DOCTYPE html>
<html>

    <head>
        <title>Beanstalk CodeCode Demo</title>
    </head>
		<body bgcolor="#BF1530">
				<div align="center">
                <h1>Welcome to the Demo site</h1>
                <h2>Congrats, You have successfully deployed a PHP app into Beanstalk!</h2>
                <div align="center"><img src="https://s3-us-west-2.amazonaws.com/awsfordevs-assets/codecore_logo.jpg" width="400" height="400"></div>
                <p>Underlying instance hostname: <?php echo gethostname(); ?></p>
                <p>Underlying instance PHP version <?php echo phpversion(); ?></p>
        </div>
    </body>
</html>
