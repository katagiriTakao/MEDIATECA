<?php
				

				include ('menu.php');

		
			foreach ($_GET as $key=>$value) {

					echo "	<tr> <td> ".$value."</td><td></td></tr>
								";
				
				}

		

				print_r ($recp);
				echo "</table>"
?>