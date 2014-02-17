<?php
header('Content-type: text/html');
header('Access-Control-Allow-Origin: *');

define( '_JEXEC', 1 );
define('JPATH_BASE', "../../" );//this is when we are in the root
define( 'DS', DIRECTORY_SEPARATOR );
 
require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );
 
$mainframe =& JFactory::getApplication('site');

/*Obtengo las propiedades del objeto Joomla*/
$menu = JFactory::getApplication()->getMenu();
$items = $menu->getMenu();
/*print_r("<pre>");
print_r($items);
print_r("</pre>");*/

//$menu->getItems('menutype', $params->get('menutype'));

           

$t = (array)$items;
sort($t);


foreach ($t as $key => $value) {
    //echo "ddddd";
}

          
sort($t);
$r = count($t);
//echo $r . " ---------------><hr />";

$menu = array();

for($i=0; $i<$r; $i++){
	if($t[$i]->menutype=='mainmenu'){
		$menu[]=array($t[$i]->id, $t[$i]->level, $t[$i]->title, $t[$i]->alias, $t[$i]->link, $t[$i]->parent_id);
	}
}            



/*print_r("<pre>");
print_r($menu);
print_r("</pre>");*/
/*
 print_r("<pre>");
print_r($t);
print_r("</pre>");           


*/


/*print_r("<pre>");
print_r($items);
print_r("</pre>");*/

$json = json_encode($menu);
print_r($json);
                        
?>	