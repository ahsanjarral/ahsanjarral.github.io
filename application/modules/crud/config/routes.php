<?php

/*  
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author Ahsan Jarral 
 */

$route['crud/add-new'] = 'crud/create';
$route['crud/view/(:num)'] = 'crud/view/$1';
$route['crud/update/(:num)'] = 'crud/update/$1';
$route['crud/delete/(:num)'] = 'crud/delete/$1';

?>