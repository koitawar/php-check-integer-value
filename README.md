# php-check-integer-value
This simple script checks if value from get request is an integer or not. return in boolean type.
# Prerequisites
All variable from GET request be accepted php as String.  
for example: 
```
http://address/path/{id}
$id = $_GET['id'];  
```
$id value variable will always be counted as String type.  
PHP provide function to check such is_int();  
but with is_int() the result always (bool) false.  

There is is_numeric() built in function and it can check if variable is numeric.  
but it just determine if variable is numeric; will return false if other character present.
Still return true if variable leading by zero,
```
http://address/path/12
$id = $_GET['id']; 
is_int($id); // return false
is_numeric($id); // return true

http://address/path/12
$id = $_GET['id']; 
is_int($id); // return false
is_numeric($id); // return true

http://address/path/0012xyz
$id = $_GET['id']; 
is_int($id); // return false
is_numeric($id); // return false
```  
# How to Use
```
http://address/path/{id}
$id = $_GET['id'];  
Util::isInteger($id);
```  
Using Util::isInteger() to check GET request variable and the result,
```
http://address/path/12 // return true
http://address/path/0012 // return false
http://address/path/0012xyz // return false
```  
And we can set whether function can accept value lower than "1" or not. default is yes.
```
http://address/path/-12 
Util::isInteger($id, true); // return false
Util::isInteger($id, false); // return true
Util::isInteger($id); // return true
``` 
# Note
This function use (int) casting. so, the length of integer value depend on system you are working 0n.  
result may not valid if variable larger than its limited.
