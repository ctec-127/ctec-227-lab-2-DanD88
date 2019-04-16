<?php

setcookie("username", "", time() - 3600);

setcookie('firstname', 'Betty', time() - 3600); 

setcookie('lastname', 'White', time() - 3600);
?>
<html>
<body>

<?php

// if (count($_COOKIE) > 0) {
//     echo 'There are ' .count($_COOKIE). ' cookies saved';
// } else {
//     echo 'There are no cookies saved';
// }

echo "Cookie 'username' is deleted. <br>";
echo "Cookie 'firstname' is deleted. <br>";
echo "Cookie 'lastname' is deleted. <br>";

?>

</body>
</html>
