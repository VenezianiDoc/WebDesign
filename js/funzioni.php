error_reporting(E_ALL | E_STRICT); // all = 2147483647
//error_reporting(E_ALL); // NO strict = 30719
//error_reporting(E_ALL & ~E_DEPRECATED); // NO deprecated, NO strict = 22527
//error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); // NO notice, NO deprecated, NO strict = 22519
//error_reporting(E_ERROR | E_PARSE); // only parse error and fatal error = 5
//error_reporting(0);
ini_set('display_error', 1);
ini_set('ignore_repeated_errors', 0);
ini_set('ignore_repeated_source', 0);

function change (&$num) {$num += 10;}
$num = 1;

change(++$num); // strict
ereg('z', 'xyz'); // deprecated
$var .=''; // notice
file('not_extists.txt'); // warning
not_exists_function(); // fatal error