<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        function aboutMe($name, $age) {
            echo "Hello! My name is " . $name . ", and i am " . $age . "years old.";
        }
        $name = 'Vova';
        $age = 100
        aboutMe($name, $age);
        ?>
      </p>
    </body>
</html>