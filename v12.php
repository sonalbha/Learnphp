<?php 
    // $a=3;
    // $b=20;

    // // echo $a==$b;
    // // echo $a===$b;
    // // echo $a!=$b;
    // // echo $a!==$b;
    // // echo $a>$b;
    // // echo $a<$b;
    // // echo $a>=$b;
    // // echo $a<=$b;
    // echo $a<=>$b;
    function twoSum($nums, $target) {
        $map = [];  // Initialize an empty hash map
    
        // Iterate through the array
        foreach ($nums as $index => $num) {
            $complement = $target - $num;  // Calculate the complement
    
            // Check if the complement exists in the hash map
            if (array_key_exists($complement, $map)) {
                // If found, return the indices
                return [$map[$complement], $index];
            }
    
            // Otherwise, add the number and its index to the hash map
            $map[$num] = $index;
        }
    
        // If no solution is found, return an empty array
        return [];
    }
    
    // Example usage:
    $nums = [2, 7, 11, 15];
    $target = 9;
    $result = twoSum($nums, $target);
    print_r($result);  // Output: Array ( [0] => 0 [1] => 1 )
    
    $nums = [3, 2, 4];
    $target = 6;
    $result = twoSum($nums, $target);
    print_r($result);  // Output: Array ( [0] => 1 [1] => 2 )
    
    $nums = [3, 3];
    $target = 6;
    $result = twoSum($nums, $target);
    print_r($result);  

?>

