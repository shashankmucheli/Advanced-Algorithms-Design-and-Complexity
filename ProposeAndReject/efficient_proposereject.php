<?php
/* PHP Code to implement Gale - Shapley Algorithm Efficiently.
 * Name: Shashank Mucheli Sukumar
 * ID: 01442857
 *  
 * IDE: Notepad++
 * 		Version:  6.6.9
 * 
 * Developed at 101-D, CIS Research Labs, Textile Building, UMass Dartmouth.
 * 
 * Course CIS 522 - Advanced Algorithm Design And Complexity.
 * Instructor: Dr. Shelley Zhang.
 * Computer and Information Science Department.
 * University Of Massachusetts Dartmouth. 
 *
 * Running PHP code: Install PHP on your local machine and follow the usage instructions: http://goo.gl/v5mVRs 
 * Further Documentation: http://goo.gl/siaLX
 */
	$men = array(
		"Victor" 	=> array("Bertha","Amy","Diane","Erika","Clare"),
		"Wyatt" 	=> array("Diane","Bertha","Amy","Clare","Erika"),
		"Xavier" 	=> array("Bertha","Erika","Clare","Diane","Amy"),
		"Yancey" 	=> array("Amy","Diane","Clare","Bertha","Erika"),
		"Zeus" 		=> array("Bertha","Diane","Amy","Erika","Clare")
	);
	
	$women = array(
		"Amy" 		=> array("Zeus","Victor","Wyatt","Yancey","Xavier"),
		"Bertha"	=> array("Xavier","Wyatt","Yancey","Victor","Zeus"),
		"Clare" 	=> array("Wyatt","Xavier","Yancey","Zeus","Victor"),
		"Diane" 	=> array("Victor","Zeus","Yancey","Xavier","Wyatt"),
		"Erika" 	=> array("Yancey","Wyatt","Zeus","Xavier","Victor")
	);
	
	$matches 	= array();
	$wife 		= array();
	$husband 	= array();
	$count 		= array(
		"Victor" 	=> 0,
		"Wyatt" 	=> 0,
		"Xavier" 	=> 0,
		"Yancey" 	=> 0,
		"Zeus" 		=> 0
	);
	while(!empty($men)){
		foreach ($men as $m => $prefs){
			foreach ($prefs as $p){
				if(!isset($matches[$p])){
					$matches[$p] 	= $m;
					$husband[$p]	= $m;
					$wife[$m]		= $p;
					$data[$m] = $prefs;
					$count[$m]++; 
					unset($men[$m]);
					break;
				}
				else{
					if(array_search($matches[$p],$women[$p]) > array_search($m,$women[$p])){ //this is to implement inverse preference
						$dicthed_guy	= $matches[$p];
						$men[$dicthed_guy]	= $data[$dicthed_guy];
						$matches[$p]	= $m;
						$husband[$p]	= $m;
						$wife[$m]		= $p;
						$data[$m] 		= $prefs;
						$count[$m]++;
						unset($men[$m]);
						break;
					}
				}
			}
		}
	}
	
	var_dump($matches);
?>