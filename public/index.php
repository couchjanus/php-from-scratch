<?php

## Indexed or Numeric Arrays

// These type of arrays can be used to store any type of elements, but an index is always a number. By default, the index starts at zero. These arrays can be created in two different ways as shown in the following example:
      
// One way to create an indexed array 

$routes = array("Home", "About", "Blog", "Contact",); 
      
// Accessing the elements directly 

echo "Accessing the 1st array elements directly:\n"; 
echo $routes[2], "\n"; 
echo $routes[0], "\n"; 
echo $routes[3], "\n"; 

echo "<br>"; 
// unset — Unset a given variable
unset($routes);

// Second way to create an indexed array 

$routes[0] = "Home"; 
$routes[1] = "About"; 
$routes[2] = "Contact"; 
$routes[3] = "Blog"; 

// Accessing the elements directly 

echo "Accessing the 2nd array elements directly:\n"; 
echo $routes[2], "\n"; 
echo $routes[0], "\n"; 
echo $routes[3], "\n"; 
echo "<br>"; 
// Traversing: We can traverse an indexed array using loops in PHP. We can loop through the indexed array in two ways. First by using for loop and secondly by using foreach. You can refer to PHP | Loops for the syntax and basic use.

// One way of Looping through an array usign foreach 

echo "Looping using foreach: \n"; 
    
foreach ($routes as $val){ 
    echo $val. "\n"; 
} 
echo "<br>"; 
// count() function is used to count
// the number of elements in an array 

$round = count($routes);  
echo "\nThe number of elements are $round \n"; 
echo "<br>"; 
// Another way to loop through the array using for 

echo "Looping using for: \n"; 

for($n = 0; $n < $round; $n++){ 
    echo $routes[$n], "\n"; 
} 
echo "<br>"; 
// current() - Return the current element in an array
echo "<h3>current(): Return the current element in an array</h3>";
// by default, the pointer is on the first element
echo "current() - by default, the pointer is on the first element: ", current($routes) . "\n"; // "first element"
echo "<br>"; 
// next() - Advance the internal pointer of an array
// skip two steps
next($routes);
next($routes);
echo "next() - Advance the internal pointer of an array: ", current($routes) . "\n"; // "third element"
echo "<br>"; 
// reset pointer, start again on first element
reset($routes);
echo "reset() - reset pointer, start again on first element: ", current($routes) . "\n"; // "first element"
echo "<br>"; 
// end() - Set the internal pointer of an array to its last element
end($routes);
echo "end() - Set the internal pointer of an array to its last element: ", current($routes) . "\n"; // "end element"
echo "<br>"; 
// prev() - Rewind the internal array pointer
prev($routes);
echo "prev() - Rewind the internal array pointer: ", current($routes) . "\n"; // "prev element"
echo "<br>"; 

// each() - Return the current key and value pair from an array and advance the array cursor
prev($routes);
echo "each() - Return the current key and value pair from an array and advance the array cursor: ";
print_r(each($routes));
echo "<br>"; 
// array_key_first() - Gets the first key of an array
echo "array_key_first() - Gets the first key of an array: " . array_key_first($routes) . "\n"; // "prev element"
echo "<br>"; 

unset($routes);

// Associative Arrays
    
// These type of arrays are similar to the indexed arrays but instead of linear storage, every value can be assigned with a user-defined key of string type.
    
// One way to create an associative array 

$routes = array("Home" => "home.php", "About" => "about.php", "Blog" => "blog.php", "Contact" => "contact.php",); 
      
// Second way to create an associative array 

$routes["Home"] = "home.php";
$routes["About"] = "about.php"; 
$routes["Blog"] = "blog.php";
$routes["Contact"] = "contact.php"; 
      
// Accessing the elements directly 
echo "<h2>Accessing the elements directly:</h2>"; 
echo $routes["Home"],"<br>";
echo $routes["About"],"<br>"; 
echo $routes["Blog"],"<br>";
echo $routes["Contact"],"<br>"; 
echo "<br>"; 
      
// Traversing Associative Arrays: We can traverse associative arrays in a similar way did in numeric arrays using loops. We can loop through the associative array in two ways. First by using for loop and secondly by using foreach. You can refer to PHP | Loops for the syntax and basic use.
     
// Looping through an array using foreach 
echo "<h2>Looping using foreach: </h2>"; 

foreach ($routes as $key => $value){ 
    echo "Key is ".$key." and Value is ".$value."<br>"; 
}
      
// Looping through an array using for 
echo "<h2>Looping using for: </h2>"; 

$keys = array_keys($routes); 
$round = count($routes);  
      
for($i=0; $i < $round; ++$i) { 
    echo $keys[$i] . ' ' . $routes[$keys[$i]] . "<br>"; 
} 

// Multidimensional Arrays
    
// Multi-dimensional arrays are such arrays which stores an another array at each index instead of single element. In other words, we can define multi-dimensional arrays as array of arrays. As the name suggests, every element in this array can be an array and they can also hold other sub-arrays within. Arrays or sub-arrays in multidimensional arrays can be accessed using multiple dimensions.
      
// Defining a multidimensional array 
unset($routes);

$routes = array( 
    array( 
        "title" => "Home", 
        "path" => "home.php", 
        "status" => true, 
        "permission" => 0, 
    ), 
    array( 
        "title" => "About", 
        "path" => "about.php", 
        "status" => true, 
        "permission" => 0, 
    ), 
    array( 
        "title" => "Blog", 
        "path" => "blog.php", 
        "status" => true, 
        "permission" => 0, 
    ), 
    array( 
        "title" => "Contact", 
        "path" => "contact.php", 
        "status" => true, 
        "permission" => 0, 
    ), 
    array( 
        "title" => "Admin", 
        "path" => "admin.php", 
        "status" => true, 
        "permission" => 2, 
    ), 
    array( 
        "title" => "Profile", 
        "path" => "profile.php", 
        "status" => false, 
        "permission" => 1, 
    ), 
    
); 
      
// Accessing elements 
echo "<h2>Accessing elements</h2>";
echo "Path of Admin is: " . $routes[4]["path"], "<br>"; 
echo "Permission of Profile is: " . $routes[5]["permission"], "<br>"; 

// Traversing Multidimensional Arrays: We can traverse through the multidimensional array using for and foreach loop in a nested way. That is, one for loop for the outer array and one for loop for the inner array.
    
// Using for and foreach in nested form 

// Looping through an array using foreach 
echo "<h2>Looping using foreach:</h2>";  

foreach ($routes as $k => $v){  
    echo "Key of current ".$v." is ".$k."<br>";  
}

// Looping through an array using for
echo "<h2>Looping through an array using for:</h2>";  

// Here array_keys() function is used to find indices names given to them and count() function is used to count number of indices in associative arrays.

$keys = array_keys($routes);  
        
for($i=0; $i < count($routes); ++$i) {
    echo $keys[$i] . ' ' . $routes[$keys[$i]] . "<br>";  
}  

echo "<h2>Using for and foreach in nested form</h2>";

$keys = array_keys($routes); 

for($i = 0; $i < count($routes); $i++) { 
    echo "Current Key: ", $keys[$i] . "<br>"; 
    foreach($routes[$keys[$i]] as $key => $value) { 
        echo $key . " : " . $value . "<br>"; 
    } 
    echo "<br>"; 
} 
    
echo "<h2>Navigation Bar</h2>";
echo "<ul>";
for($i = 0; $i < count($routes); $i++) { 
    echo '<li><a href="'.$routes[$i]['path'].'">'.$routes[$i]['title']."</a></li>"; 
} 
echo "</ul>";


// Defining a multidimensional array 
unset($routes);

$routes = array( 
    array( 
        'en' => array( 
            "title" => "Home", 
            "path" => "home.php",
        ),
        
        "status" => true, 
        "permission" => 0, 
    ), 
    array( 
        'en' => array( 
            "title" => "About", 
            "path" => "about.php", 
        ),
        
        "status" => true, 
        "permission" => 0, 
    ), 
    array( 
        'en' => array( 
            "title" => "Blog", 
            "path" => "blog.php", 
        ),

        "status" => true, 
        "permission" => 0, 
    ), 
    array( 
        'en' => array( 
            "title" => "Contact", 
            "path" => "contact.php", 
        ),

        "status" => true, 
        "permission" => 0, 
    ), 
    array( 
        'en' => array( 
            "title" => "Admin", 
            "path" => "admin.php", 
        ),

        "status" => true, 
        "permission" => 2, 
    ), 
    array( 
        'en' => array( 
            "title" => "Profile", 
            "path" => "profile.php", 
        ),

        "status" => false, 
        "permission" => 1, 
    ), 
); 


echo "<h2>Navigation Bar For EN</h2>";

echo "<ul>";
for($i = 0; $i < count($routes); $i++) { 
    echo '<li><a href="'.$routes[$i]['en']['path'].'">'.$routes[$i]['en']['title']."</a></li>"; 
} 
echo "</ul>";

// How to search by key=>value in a multidimensional array in PHP ?
 
// Function to recursively search for a given key=>value  

function search($array, $key, $value) { 
    $results = array(); 
      
    // if it is array 
    if (is_array($array)) { 
          
        // if array has required key and value 
        // matched store result  
        if (isset($array[$key]) && $array[$key] == $value) { 
            $results[] = $array; 
        } 
          
        // Iterate for each element in array 
        foreach ($array as $subarray) { 
              
            // recur through each element and append result  
            $results = array_merge($results,  
                    search($subarray, $key, $value)); 
        } 
    } 
  
    return $results; 
} 


$res = search($routes, 'permission', 1); 

echo "<h2>How to search by key=>value in a multidimensional array in PHP</h2>";
foreach ($res as $var) { 
    echo $var['en']['title']." - ".$var['en']['path'] . "<br>"; 
} 
