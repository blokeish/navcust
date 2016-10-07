<?php

require_once(dirname(__FILE__).'/../../config.php');
/*
$sitecontext = context_system::instance();
$strtitle = get_string('splashtitle','local_splash');

$PAGE->set_context($sitecontext);
$PAGE->set_pagelayout('standard');
$PAGE->set_title($strtitle);
$PAGE->set_url($CFG->wwwroot . '/local/splash/index.php');

require_login();

// It will be redirected to the index page
if(!get_config('local_splash','splash_enabled')){
	redirect(new moodle_url('/index.php'));
}

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('splashheading','local_splash'));

SplashCourseList::displayOrRedirect(true);

echo $OUTPUT->footer();
*/
