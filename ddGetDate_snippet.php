<?php
/** 
 * ddGetDate
 * @version 2.2 (2021-04-07)
 * 
 * @see README.md
 * 
 * @link https://code.divandesign.biz/modx/ddgetdate
 * 
 * @copyright 2009–2021 DD Group {@link https://DivanDesign.biz }
 */

//Include (MODX)EvolutionCMS.libraries.ddTools
require_once(
	$modx->getConfig('base_path') .
	'assets/libs/ddTools/modx.ddtools.class.php'
	);

return \DDTools\Snippet::runSnippet([
	'name' => 'ddGetDate',
	'params' => $params
]);
?>