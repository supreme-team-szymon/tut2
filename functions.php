<?php 
function getProps($order){
	$db = new PDO('mysql:host=miko0059.keaweb.dk;dbname=miko0059;charset=utf8', 'miko0059', 'kea310590#',array(PDO::ATTR_EMULATE_PREPARES => false, 
	                                                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		try {

		    foreach($db->query("SELECT * FROM wp_space_for_rent ORDER BY price $order") as $row) {
		   echo "
		    <div class='property'>
			 <h3>".$row['city']." ".$row['zip_code']." ".$row['street']." ".$row['number']."</h3>
			 <h4>Price per desk: ".$row['price']." kr.</h4>
			 
			 <ul>
			 <li>Desks available for rent: ".$row['space']."</li>      
	         <li>Availible at: ".$row['availability']."</li>
	         <li>Availible from: ".$row['a_from']."</li>
	         
			 
			 
			 
			 
			 <li>Availible to: ".$row['a_to']."</li>
	         <li>Type of rented space: ".$row['tors']."</li>
	         <li>Additional services: ".$row['services']."</li>
	         </ul>
			 
	            
	            
	         	
          </div>
          ";
		}


	} catch(PDOException $ex) {
	    echo "An Error occured!"; //user friendly message

	}
	
}

?>
