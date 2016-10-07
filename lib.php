<?php

defined('MOODLE_INTERNAL') || die();

function local_navcust_extends_navigation(global_navigation $navigation){
	global $PAGE, $USER;
	//print_object($navigation);
//die('nav called');
	if(!$USER->id || !get_config('local_navcust','cust_enabled')){
		return;
	}

	/*
	$profilenode = $PAGE->navigation->find('myprofile', global_navigation::TYPE_UNKNOWN);
	$profilenode->add('My splash',new moodle_url('/local/splash/index.php'));
	*/
	if($node = $navigation->find('home', global_navigation::TYPE_SETTING)){
		$node->remove();
	}

	if($node = $navigation->find('myhome', global_navigation::TYPE_SETTING)){
		$node->remove();
	}

	if($node = $navigation->find('myprofile', global_navigation::TYPE_ROOTNODE)){
		$node->remove();
	}

	/*if($node = $navigation->find('site', null)){ // global_navigation::TYPE_ROOTNODE
		$node->remove();
	}*/

	if($node = $navigation->find('mycourses', null)){ // global_navigation::TYPE_ROOTNODE
		$node->remove();
	}

	if($node = $navigation->find('courses',null)){
		$node->remove();
	}

	//$homenode->remove();
	//print_object($homenode);
	/*if($homenode){
		//die('inside home');
		$homenode->remove();
		//$navigation=$homenode->parent;
	}*/

	/*$sitehomenode=$navigation->find('myhome', navigation_node::TYPE_SETTING);
	if($sitehomenode){
		echo $sitehomenode->remove();
		//$navigation=$sitehomenode->parent;
	}

	$sitepagesenode=$navigation->find('sitepages', navigation_node::TYPE_SETTING);
	if($sitepagesenode){
		echo $sitepagesenode->remove();
		//$navigation=$sitepagesenode->parent;
	}

	$myprofilenode=$navigation->find('myprofile', navigation_node::TYPE_SETTING);
	if($myprofilenode){
		echo $myprofilenode->remove();
		//$navigation=$myprofilenode->parent;
	}

	$coursesnode=$navigation->find('courses', navigation_node::TYPE_SETTING);
	if($coursesnode){
		echo $coursesnode->remove();
		//$navigation=$coursesnode->parent;
	}
*/
$nodesite = $navigation->find('site', null);
$nodesite->add('Didasko','http://www.didasko.com'); // prepend()
$categorynode = navigation_node::create('Default', null, navigation_node::TYPE_CATEGORY, null, 0);
$categorynode->hidden = false;
$categorynode->display = true;
$categorynode->visible = true;
$x = $categorynode->add('Blokeish','http://www.blokeish.com');
$x->hidden = false;
$x->display = true;
$x->visible = true;
$newnode = new navigation_node(array('text'=>'the link','shorttext'=>'link','icon'=>'','type'=>global_navigation::TYPE_ROOTNODE,'key'=>'dskolnk','parent'=>$nodesite,'action'=>'www.google.com' ));
	//$navigation->add('Blokeish','http://www.blokeish.com');
	$navigation->add('Blokeish','http://www.blokeish.com');
	//$navigation->add('Blokeish',null,navigation_node::TYPE_CONTAINER);
$navigation->add_node($categorynode);
	//$navigation->add($newnode);
}
//add_node(navigation_node $childnode, $beforekey=null)
//  new pix_icon('i/badge', get_string('badgesview', 'badges'))
// new moodle_url('/course/index.php')
function donoting(){
	/* do nothing */
}
