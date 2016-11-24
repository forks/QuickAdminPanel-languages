<?php

return [
	'page_title'          => 'क्विकएडमिन निर्माता',
	'quickadmin_for'      => 'के लिए व्यवस्थापक पैनल',
	'logout'              => 'लोग आउट',
	'menu_manager'        => 'मेनू प्रबंधन',
	'user_management'     => 'उपयोगकर्ता (यूज़र) प्रबंधन',
	'back_to_adminpanels' => 'व्यवस्थापक पैनल पर वापस जाइए',

	'sidebar' => [
		'add_menu_item' => 'मेनू आइटम समाविष्ट करे ',
		'crud_menu_item' => 'CRUD मेनू आइटम',
		'non_crud_menu_item' => 'Non-CRUD मेनू आइटम',
		'parent_menu_item' => 'मूल मेनू आइटम',
	],

	'menu' => [
		'no_items'                    => 'कोई मेनू आइटम नहीं मिला ।',
		'download'                    => 'व्यवस्थापक(क्विकएडमिन)  पैनल डाउनलोड करे (:price)',
		'download_vip'                => 'व्यवस्थापक(क्विकएडमिन) पैनल डाउनलोड करे',
		'view_files'                  => 'लारावेल(Laravel) फ़ाइलें देखें',
		'create_new_crud'             => 'CRUD मेनू आइटम बनाएं',
		'create_new_custom'           => 'Non-CRUD मेनू आइटम बनाएं',
		'create_new_parent_menu_item' => 'मूल मेनू आइटम बनाएं',
		'drag_drop_info'              => 'आप ड्रेग-ड्रॉप के साथ मेनू पदों को बदल सकते हैं',
		'save_changes_warning'        => 'जब आप "स्थिति को सुरक्षित करे " दबाएँगे तो परिवर्तन सहेजा जाएगा',
		'save_positions'              => 'स्थिति को सुरक्षित करे ',
		'title'                       => 'शीर्षक',
		'edit'                        => 'संपादित करें',
		'clone'                       => 'नकल करे ',
		'delete'                      => 'मिटाइए',
		'used_as_relationship'        => 'संबंध(रिलेशसनसीप) के रूप में प्रयुक्त',
		'how_to_use'                  => 'व्यवस्थापक पैनल का उपयोग कैसे करे',
		'how_to_use_instructions'     => '
		<div class="alert alert-success">
		    आपने सफलतापूर्वक व्यवस्थापक पैनल खरीदा है । अब आप फ़ाइलों को देख सकते हैं और इसे असीमित बार डाउनलोड कर सकते हैं । 
		</div>
		<p>1. archive निस्सरण करे और अपने चहीते फोल्डर मे डाल दे ।</p>
		<p>2. डेटाबेस कनेक्शन और अन्य सेटिंग्स के साथ वहाँ अपने .env फ़ाइल तैयार करें ।</p>
		<p>3. "<i>composer install</i>" आदेश चलाइए ।</p>
		<p>4. "<i>php artisan migrate --seed</i>" आदेश चलाइए । सूचना: seed महत्वपूर्ण है , क्योंकि यह आपके लिए पहेला उपयोगकर्ता(यूज़र) बनाएगा । </p>
		
		<br />
		
		<p>और बस, अपने डोमेन पर जाए और लॉग इन करे :</p>
		<p>
		ईमेल: admin@admin.com<br />
		पासवर्ड: password
		</p>
		
		अपने व्यवस्थापक पैनल का आनंद लें!
		',
		'close'                       => 'बंद करे ',

		'payment' => [
			'name'        => 'एक - बारगी भुगतान',
			'description' => 'पूर्ण लारावेल(Laravel) प्रॉजेक्ट डाउनलोड करे (:price)',
		],

		'edit_custom'           => 'विशेष(कस्टम) कंट्रोलर संपादित करे । ',
		'edit_parent_menu_item' => 'मूल मेनू आइटम संपादित करे । ',
		'clone_custom'           => 'विशेष(कस्टम) कंट्रोलर की नकल करे ',
		'clone_parent_menu_item' => 'मूल मेनू आइटम की नकल करे ',
		'parent_menu_item' => 'मूल मेनू आइटम',
		'visual_title' => 'दृश्य शीर्षक',
		'icon' => 'प्रतीक',
		'link_to_icons' => 'सभी उपलब्ध प्रतीक देख - <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a>',
	],

	'builder' => [
		'crud_settings' => 'CRUD सेटिंग',
		'add_fields' => 'फील्ड्स समाविष्ट करे ',
		'fields_notice' => 'आपको <b>ID</b> और <b>timestamps</b> फील्ड्स को जोड़ने की जरूरत <strong> नहीं </strong> है - वे स्वचालित रूप से जुड़ जाते हैं । ',
		'save_crud' => 'CRUD को सुरक्षित करे ',
		'parent_menu_item' => 'मूल मेनू आइटम',
		'new_crud_title' => 'नया CRUD शीर्षक',
		'new_visual_title' => 'नया दृश्य शीर्षक',
		'crud_title' => 'CRUD शीर्षक',
		'visual_title' => ' दृश्य शीर्षक',
		'crud_title_helper' => 'आप केवल अक्षर, संख्या और रिक्त स्थान(स्पेस) दर्ज कर सकते हे ।',
		'crud_title_second_helper' => 'मेनू आयेट्म्स, मॉडेल्स, कंट्रोलर्स और डाटाबेस बनाने के लिए उपयोग किया जाता है । .
                <br/>शीर्षक उदाहरण: <b>Countries</b>, <b>Companies</b>, <b>Books</b> इत्यादि। ',
		'visual_title_helper' => 'CRUD का दृश्य शीर्षक जो मेनू में प्रदर्शित किया जाएगा ।',
		'cannot_change_title' => 'आप CRUD शीर्षक नहीं बदल सकते, केवल फील्ड्स बदल सकते है ।',
		'generate_following' => 'हम निम्नलिखित फ़ाइल उत्पादित करेंगे:',
		'model' => 'मॉडेल',
		'controller' => 'कंट्रोलर',
		'database_table' => 'डाटाबेस टेबल',
		'what_actions_to_generate' => 'कौनसी चलन(एक्सन्स) बनानी है ?',
		'create' => 'बनाइए (क्रिएट)',
		'edit' => 'संपादित करे (एडिट)',
		'show' => 'दिखाइए (शो)',
		'delete' => 'मिटाइए (डिलीट)',
		'generate_api' => 'इस CRUD के लिए एपीआई(API) कंट्रोलर उत्पन्न करे ',
		'api_generated' => 'इस CRUD के लिए एपीआई तैयार कर दी गई है ।',
		'crud_icon' => 'CRUD प्रतीक',
		'main_settings' => 'मूल सेटिंग',
		'field_type' => 'फील्ड् का प्रकार',
		'field_key' => 'फील्ड् की (key)',
		'belongs_to_relationship' => 'की(key) जो फन्क्सन के नाम के रूप मे उपयोग की जाएगी ( _id ना उपयोग करे )।',
		'field_label' => 'फील्ड् शीर्षक',
		'validation' => 'मान्यकरण',
		'nullable' => 'नलेबल',
		'in_list' => 'सूची में है ?',
		'in_create' => 'बनाने में है ?',
		'in_edit' => 'संपादित करने में है ?',
		'additional_settings' => 'अतिरिक्त सेटिंग',
		'ck_editor' => 'CKEDITOR का इस्तेमाल करे ?',
		'size_mb' => 'अधिकतम साइज़ MB मे ',
		'width_px' => 'अधिकतम चौड़ाई PX मे ',
		'height_px' => 'अधिकतम ऊंचाई PX मे ',
		'radio_values' => 'रेडीओ बटन का मूल्य:<br/> मूल्य जोड़ने के लिए - \'नया की/मूल्य समूह जोड़े \' बटन दबाए और डेटा दर्ज करे ',
		'label' => 'शीर्षक',
		'value' => 'मूल्य',
		'add_new_key_value' => 'नया की/मूल्य समूह समाविष्ट करे ',
		'default_value' => 'पूर्व निर्धारित मूल्य ',
		'relationship_model' => 'रिलेसनशिप मॉडेल',
		'relationship_field' => 'रिलेसनशिप फील्ड',
		'enum_values' => 'ENUM मूल्य (अल्पविराम(comma) से अलग किए गये)',
		'save_changes' => 'परिवर्तनों को सुरक्षित करे ',
		'notice_save_crud' => 'अपने एडिटेड / क्रिएटेड फील्ड्स को सूरक्षित करने के लए "CRUD को सुरक्षित करे " बटन दबाए । ',
	],

	'buy_modal' => [
		'title' => 'आप को यह मिलने वाला है ',
		'description' => 'यह भुगतान के बाद आपको मिलने वाले फोल्डर का स्क्रीनशॉट है । यह आप के प्रॉजेक्ट :title के लिए पूर्ण लारावेल प्रॉजेक्ट है  - तुरंत उपयोग के लिए तैयार !',
		'buy' => 'अभी खरीदे और डाउनलोड करे (:price)',
	],

	're-order_fields' => 'फील्ड्स को पुनःव्यवस्थित करे ',
	'field_type' => 'फील्ड् का प्रकार ',
	'database_column' => 'डाटाबेस स्तंभ(कॉलम)',
	'visual_title' => 'दृश्य शीर्षक',
	'field_type_in_form' => 'फॉर्म मे फील्ड का प्रकार',
	'field_name_in_form_and_database' => 'फॉर्म और डाटाबसे मे फील्ड का नाम',
	'field_label_in_form_and_index_page' => 'फॉर्म और इंडेक्स पृष्ठ पर फील्ड का शीर्षक',
	'edit' => 'एडिट',
	'remove_field_from_crud' => 'CRUD मे से फील्ड निकाले',
	'remove' => 'निकाले',
	'add_field' => 'फील्ड समाविष्ट करे ',
	'you_need_at_least_one_field' => 'आप को कम से कम एक फील्ड चाहिए',

	'mb' => 'MB',
	'(w)_px' => '(w) px',
	'(h)_px' => '(h) px',
	'save_crud' => 'CRUD को सुरक्षित करे ',
	'add_new_crud' => 'नया CRUD समाविष्ट करे ',
	'download_full_laravel_project_999' => 'पूर्ण लरावेल(LARAVEL) प्रॉजेक्ट डाउनलोड करे ($9.99)',
	'download_files' => 'फाइल्स डाउनलोड करे ',
	'view_files_free' => 'फाइल्स देखे (मुफ़्त)',
	'cruds' => 'CRUDs',
	'title' => 'शीर्षक',
	'created_at' => 'क्रिएटेड एट',
	'updated_at' => 'अपडेटेड एट',
	'clone' => 'नकल करे ',
	'no_cruds_created_yet' => 'अब तक एक भी CRUD बनाया नही गया है ।',
	'one_time_payment' => 'एक - बारगी भुगतान',
	'file_viewer' => 'फ़ाइल दर्शक',
	'name' => 'नाम',
	'last_modified' => 'अंतिम बार संशोधित',
	'modal_title' => 'मॉडल शीर्षक',
	'unauthorized' => 'अनधिकृत ।',
	'your_session_has_expired_please_login_again' => 'आपका सत्र(सेशन) समाप्त हो गया है । कृपया दोबारा <a href="/login">लोगिन</a> करे ।',
	'your_form_was_submitted_submitting_once_more_might_cause_bugs' => 'आप का फॉर्म जमा कर दिया गया है ।  एक बार और जमा करने से प्रोग्राम त्रुटि आ सकती है । ',
	'need_help' => 'मदद चाहिए?<br />या विशेष समाधान?',
	'infolaraveldailycom' => 'info@laraveldaily.com',
	'your_custom_controller' => 'आप का विशेष(कस्टम) कंट्रोलर!',

	'custom_controller_index' => 'विशेष(कस्टम) कंट्रोलर इंडेक्स ।',
	'create' => 'बनाइए (क्रिएट)',
	'view' => 'देखिए',
	'dashboard' => 'डॅशबोर्ड ',
	'clone_crud' => 'CRUD की नकल करे ',
	'optional_selection' => 'वैकल्पिक चयन',
	'you_must_add_at_least_one_field_to_the_crud' => 'आप को CRUD मे कम से कम एक फील्ड समाविष्ट करना होगा ।',
	'edit_crud' => 'CRUD संपादित करे ',
	'crud_deleted' => 'CRUD मिटा दिया गया है ',
	'they_could_not_load_your_custom_model' => 'वह आपका विशेष(कस्टम) मॉडेल लोड नही कर पाए...',
	'they_failed_to_get_table_information' => 'वह टेबल की जानकारी लाने मे विफल रहे ...',
	'they_failed_to_destroy_information' => 'वह जानकारी नष्ट करने मे विफल रहे ...',
	'they_failed_to_store_data' => 'वह डाटा संग्रह करने मे विफल रहे ...',
	'they_failed_to_store_the_data' => 'वह डाटा संग्रह करने मे विफल रहे ...',
	'class' => 'क्लास(श्रेणी)',
	'does_not_exist' => 'अस्तित्व में नहीं है । ',
	'they_failed_to_get_relations_information' => 'वह संबंधों(रिलेशसनसीप) के बारे में जानकारी प्राप्त करने में विफल रहे ...',
	'row_created' => 'पंक्ति बना दी गयी है ',
	'they_failed_to_get_required_information' => 'वह आवश्यक जानकारी प्राप्त करने में विफल रहे ...',
	'row_updated' => 'पंक्ति सुधार दी गयी है ',
	'row_deleted' => 'पंक्ति मिटा दी गयी है ',
	'they_could_not_load_your_custom_relationship_model' => 'वह आपका विशेष(कस्टम) संबंध(रिलेसनशिप) मॉडेल लोड नही कर पाए...',
	'please_select' => 'कृपया चुने',
	'page_not_found' => 'पृष्ठ नहीं मिला',
	'this_item_has_child_items_attached_to_it' => 'इस आइटम के साथ वंशज(चाइल्ड) आइटम जुड़ा हुआ है ',
	'they_failed_to_proceed_with_your_payment' => 'वह आपके भुगतान के साथ आगे बढ़ने मे विफल रहे ...',
	'request_does_not_have_a_stripetoken' => 'अनुरोध(रिक्वेस्ट) मे स्ट्राइप टोकन(stripeToken) नही है ',
	'quick_admin_panel_charge' => 'क्विकएडमिन पैनल मूल्य',
	'they_failed_to_charge_your_card' => 'वह आप के कार्ड से भुगतान करने मे विफल रहे ...',
	'crud_builder' => 'CRUD निर्माता',

	// FIELDS
	'optional' => 'वैकल्पिक',
	'required' => 'अपेक्षित',
	'required__unique' => 'अपेक्षित और अद्वितीय',

	'no' => 'नहीं',
	'yes' => 'हाँ',
	'checked' => 'स्वीकृत(चेक्ड)',
	'unchecked' => 'अस्वीकृत(अनचेक्ड)',

	'text' => 'टेक्स्ट',
	'email' => 'ईमेल',
	'long_text' => 'लोंग टेक्स्ट',
	'radio' => 'रेडियो',
	'checkbox' => 'चेककबोक्ष',
	'date_picker' => 'तारीख चयन कर्ता(डेट पिकर)',
	'date_and_time_picker' => 'तारीख और समय चयन कर्ता(डेट-टाइम पिकर)',
	'relationship_deprecated' => 'रिलेसनशिप(पदावनत/डेप्रिकेटेड)',
	'belongsto_relationship' => 'बिलोंग्स टू रिलेसनशिप',
	'file' => 'फाइल',
	'photo' => 'फोटो',
	'password_hashed' => 'पासवर्ड (हेशड)',
	'money' => 'पैसे',
	'number' => 'नंबर',
	'float' => 'फ्लोट',
	'select_enum' => 'ENUM चयन करे',
	'add_new'                 => 'नया समाविष्ट करे',
	'are_you_sure'            => 'आप निस्चित है ?',
	'delete'            => 'मिटाइए',
	'back_to_list' => 'सूची पे वापस जाए',
	
	'roles'        => 'भूमिकाए',
	'user_actions' => 'उपयोगकर्ता (यूज़र) चलन',
	'users'        => 'उपयोगकर्ता (यूज़र्स)',

	'title' => 'शीर्षक',
	'administrator_can_create_other_users' => 'प्रशासक (अन्य उपयोगकर्ताओ को बना सकता है )',
	'simple_user' => 'सामान्य उपयोगकर्ता (यूज़र्स)',

	'user' => 'उपयोगकर्ता(यूज़र्स)',
	'action' => 'चलन(एक्सन्स)',
	'action_model' => 'चलन(एक्सन) मॉडेल',
	'action_id' => ' चलन(एक्सन) आइडी ',
	'name' => 'नाम',
	'email' => 'ईमेल',
	'password' => 'पासवर्ड ',
	'role' => 'भूमिका',
	'remember_token' => 'रिमेम्बर टोकन',

	// Pre-defined (global) translations for generated CRUDs
	// Generator will copy 'custom_crud' elements and add them to locale file of the generated CRUD
	// Note: do not change the 'custom_crud' key name - it's used in generators to get these translations
	'custom_crud' => [
		'create'                  => 'बनाइए (क्रिएट)',
		'save'                    => 'सुरक्षित करे ',
		'edit'                    => 'संपादित करे (एडिट)',
		'view'                    => 'देखें',
		'update'                  => 'सुधारे ',
		'list'                    => 'सूची',
		'no_entries_in_table'     => 'टेबल मे एक भी एंट्री नही है ',
		'custom_controller_index' => 'विशेष(कस्टम) कंट्रोलर इंडेक्स ।',
		'logout'                  => 'लोग आउट',
		'add_new'                 => 'नया समाविष्ट करे',
		'are_you_sure'            => 'आप निस्चित है ?',
		'back_to_list'            => 'सूची पे वापस जाए',
		'dashboard'				  => 'डॅशबोर्ड ',
		'delete'				  => 'मिटाइए',
	],
];