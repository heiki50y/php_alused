<?php
/*
$users = array("Bret", "Sharon", "Betty", "Harry");
print "$users[2]";
*/
/*
$users[ ] = "Bret";
$users[ ] = "Sharon";
$users[ ] = "Betty";
$users[ ] = "Harry";

$users = array("Bret", "Sharon", "Betty", "Harry" );
$users[] = "Sally";
*/

/*
$character = array(
    name=> "bob",
    ocupation=> "superhero",
    age=> 30,
    "special power"=>"x-ray vision"
);
print $character[age];
print $character[name];

*/


$characters = array(
    array ( name=> "bob",
        occupation=> "superhero",
        age=>30,
        speciality=> "x-ray vision" ),
    array ( name=> "sally",
        occupation=> "superhero",
        age=>24,
        speciality=> "superhuman strength" ),
    array (name=> "mary",
        occupation=> "arch villian",
        age=>63,
        speciality=> "nanotechnology")
);

print $characters[0] [occupation];

