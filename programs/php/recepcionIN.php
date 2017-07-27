<?php
				

				include ('menu.php');

				echo "<table>";
				for ($a=0;$a<100;$a++){
					$recp=$_GET['resp'];
				}
			/*	foreach ($_GET['resp'] as $value) {

					echo "	<tr> <td> ".$value."</td><td></td></tr>
								";
					# code...
				}

			*/

				print_r ($recp);
				echo "</table>"
?>