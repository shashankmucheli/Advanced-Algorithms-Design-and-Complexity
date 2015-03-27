<?php
/* PHP Code to implement Chapter 4, Exersise 6(Completion Scheduling Algorithm) in Algorithm Design Book by Jon Kleinberg and  Eva Tardos.
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
	for ($i = 1; $i <= 10; $i++){
	$contestants[$i] = array(rand(1,10),rand(1,10),rand(1,10)); // in the order of Swim(s), Bike(b), Run(r)
	$contestants[$i]["br"] = $contestants[$i][1] + $contestants[$i][2]; // the sum of b and r
	}
	echo "Input<br />";
	var_dump($contestants);
	$sortArray = array();
	foreach($contestants as $c){					//All Input stuff, Does not matter for the time complexity!
		foreach($c as $key=>$value){                //All Input stuff, Does not matter for the time complexity!
			$sortArray[$key][] = $value;            //All Input stuff, Does not matter for the time complexity!
		}                                           //All Input stuff, Does not matter for the time complexity!
	}
	array_multisort($sortArray["br"],SORT_DESC,$contestants); //Sorting the array based on the sums of bikeing time and running time.
	echo "Schedule<br />";
	var_dump($contestants);
?>