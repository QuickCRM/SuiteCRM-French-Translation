<?PHP
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/
$manifest = array( 
	'name' => 'French (France)',
	'description' => 'Traduction : www.crowdin.com/project/suitecrmtranslations',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'acceptable_sugar_versions' =>
		  array (),
	'acceptable_sugar_flavors' =>
		  array('CE'),
	'author' => 'Communauté SuiteCRM + NS-Team',
	'version' => '7.11.8.21',
	'published_date' => '2021-02-09',
      );
$installdefs = array(
	'id'=> 'fr_FR',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
	array('from'=> '<basepath>/include','to'=>'include'),
	array('from'=> '<basepath>/modules','to'=>'modules'),
	array('from'=> '<basepath>/install','to'=>'installer'),
   )
 );
?>