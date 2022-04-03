<?php 
require( "layout/header.php" );
               
                if (isset($_SESSION['admin']) && $_SESSION['admin']){
                     require( "layout/menu.php" );
				require( "layout/footer.php" );
				}else{
					require( "login.php" );
				}


?>


