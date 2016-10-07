<?php

	defined('MOODLE_INTERNAL') || die;

	if ($hassiteconfig) {
		$ADMIN->add('localplugins', new admin_category('navcust', 'Nav Customization'));
		$settings = new admin_settingpage('local_navcustsettings', 'Settings'); // Navigation Links Customization
		$ADMIN->add('navcust', $settings);

		$settings->add(new admin_setting_heading('local_navcust_heading_main', 'Enabled','H1'));
		$settings->add(new admin_setting_configcheckbox('local_navcust/cust_enabled', get_string('enabled','local_navcust'), get_string('enableddesc','local_navcust'), 0));


		$settings->add(new admin_setting_heading('local_navcust_heading_remove', get_string('headingremove','local_navcust'),'H2'));
		//$settings->add(new admin_setting_confightmleditor('local_navcust/bits_description',get_string('bitsdescriptionlabel','local_navcust'), get_string('bitsdescriptioninfo','local_navcust'), get_string('bitsdescriptioninfodefault','local_splash')));
		$settings->add(new admin_setting_configtextarea('local_splash/items_removed',get_string('itemsremoved','local_navcust'), get_string('itemsremoveddesc','local_navcust'), ''));

		$settings->add(new admin_setting_heading('local_navcust_heading_added', get_string('headingadded','local_navcust'),'H3'));
		$settings->add(new admin_setting_configtextarea('local_splash/items_added',get_string('itemsadded','local_navcust'), get_string('itemsaddeddesc','local_navcust'), ''));


}
