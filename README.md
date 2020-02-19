# php-from-scratch
## php from scratch again

# Constants

Constants are either identifiers or simple names that can be assigned any fixed values. They are similar to a variable except that they can never be changed. They remain constant throughout the program and cannot be altered during execution. Once a constant is defined, it cannot be undefined or redefined. Constant identifiers should be written in upper case following the convention. By default, a constant is always case-sensitive, unless mentioned. A constant name must never start with a number. It always starts with a letter or underscores, followed by letter, numbers or underscore. It should not contain any special characters except underscore, as mentioned.

## Creating a PHP Constant

The define() function in PHP is used to create a constant as shown below:
```php
define(name, value, case_insensitive)
```
### The parameters are as follows:

- name: The name of the constant.
- value: The value to be stored in the constant.
- case_insensitive: Defines whether a constant is case insensitive. By default this value is False, i.e., case sensitive.

```php 
  
// This creates a case-sensitive constant 
define("ROOT", "realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR)"); 
echo ROOT; 
  
// This creates a case-insensitive constant 
define("ROOT", "realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR)", true); 
echo root; 
  
```

## constant() function

Instead of using the echo statement ,there is an another way to print constants using the constant() function.
```php

    define("CONFIG", ROOT.'/config'); 
    
    // same as previous  
    const CONFIG = ROOT.'/config';
  
```

Constants are Global: By default, constants are automatically global, and can be used throughout the script, accessible inside and outside of any function.

```php 

const VENDOR = ROOT.DIRECTORY_SEPARATOR.'vendor';  
function testGlobal() { 
    echo VENDOR; 
} 
   
testGlobal(); 
  
```

## Constants vs Variables

    A constant, once defined can never be undefined but a variable can be easily undefined.
    There is no need to use dollar sign($) before constants during assignment but while declaring variables we use a dollar sign.
    A constant can only be defined using a define() function and not by any simple assignment.
    Constants dont need to follow any variable scoping rules and can be defined anywhere.

## Magic Constants

Magic constants: Magic constants are the predefined constants in PHP which is used on the basis of their use. These constants are created by various extensions. There are nine magic constant in the PHP and all of the constant resolved at the compile-time, not like the regular constant which is resolved at run time. There are eight magic constants that start and end with double underscores (__).
All the constants are listed below with the example code:

### __LINE__: 
This magic constant return the current line number of the file. If you use this magic constant in your program file somewhere then this constant will display the line number during compile time.

```php 
       
    echo "The Line number is : ". __LINE__; 
``` 

### __FILE__: 
This magic constant return the full path of the executed file with the name of the file.

```php 
       
    echo "The file name is : ". __FILE__; 
       
```
   
### __DIR__: 
This magic constant return the directory of the executed file.

```php 
       
    echo "The directory is : ". __DIR__; 
       
``` 

### __function__: 
This magic constant return the name of the function where this magic constant is included.

```php 
    function Geeks(){ 
        echo "The function name is : ". __function__; 
    } 
    Geeks(); 
```

### __class__: 
This magic constant return the name of the class where this magic constant is included.

```php 
    class MyClass 
    { 
        public function getClassName(){ 
            return __class__; 
        } 
    } 
    $obj = new MyClass(); 
    echo $obj->getClassName();  
```
### __method__: 
This magic constant return the method name where this magic constant is included.

```php 
    class Company 
    { 
        public function myMethod(){ 
            return __method__; 
        } 
    } 
    $obj = new Company(); 
    echo  $obj->myMethod();  
```
### __namespace__: 
This magic constant return the current namepace where this magic constant is included.

```php 
    namespace App; 
      
    class Company { 
        public function myMethod() { 
            return __namespace__; 
        } 
    } 
      
    $obj = new Company(); 
    echo  $obj->myMethod();  
      
```
### __trait__: 
This magic constant return the trait name where this magic constant is included.

```php 
    trait MyTrait{   
        function myMethod(){   
            echo __trait__;   
            }   
        }   
        class Company{   
            use MyTrait;   
            }   
        $a = new Company;   
        $a->myMethod();
```  

### ClassName::class: 
This magic constant return the fully qualified class name.

```php 
      
    namespace App; 
    class MyClass{ } 
      
    echo MyClass::class; // MyClass::class 

```

Reference: https://www.php.net/manual/en/language.constants.predefined.php


## Defining Constants

A PHP constant is nothing but an identifier for a simple value that tends not to change over time(such as the domain name of a website eg. www.geeksforgeeks.org). It is ideal to keep all the constants in a single PHP script so the maintenance is made easier. A valid constant name must start with an alphabet or underscore and requires no ‘$’. It is to be noted, constants are irrespective of their scope i.e constants are automatically of global scope.

In order to create a constant in PHP, we must use the define() method.

```php
bool define(identifier, value, case-insensitivity)
```
Parameters: The function has two required parameters and one optional parameter.

- identifier: Specifies the name to be assigned to the constant.
- value: Specifies the value to be assigned to the constant.
- case-insensitivity(Optional): Specifies whether the constant identifier should be case-insensitive. By default it is set to false i.e. case-sensitive.

Return Type: This method returns TRUE on success and FALSE on Failure.

```php 
        
      // case-insensitive costants 
      define("Constant","Hello World!",TRUE); 
      echo constant; 
      echo Constant; 
```

defining case-sensitive constants:
```php 
      
      // case-sensitive constant 
      define("Constant","Hello World!"); 
      echo constant; 
      echo Constant; 
```

The PHP compiler will also throw a warning for above program along with the output as: “PHP Notice: Use of undefined constant constant- assumed ‘constant’ in line 5”.

Summary:

- Constants are identifiers that can be assigned values(string, boolean, array, integer, float or NULL) which generally don’t change overtime.
- Constants are irrespective of scope and always populate the global scope.
- define() method is used to define constants.
- defined() method is used to check if a constant is defined.
- constant() method is used to return the value of a constant and NULL if not the constant is not defined.
