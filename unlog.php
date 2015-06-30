<?php

session_start();

//para destruir la session
session_destroy();

	echo '
<html>
     <head>
          <meta http-equiv= "REFRESH" content="0;url=index.php">
     </head>

</html>

';

?>