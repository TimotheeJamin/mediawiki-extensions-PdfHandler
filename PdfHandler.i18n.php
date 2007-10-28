<?php

/**
 * Internationalisation file for PDFHandler extension
 */
function efPdfHandlerMessages() {

	$messages = array(
		'en' => array(
			'pdf_no_xml' => 'cannot get metadata from pdf',
			'pdf_page_error' => 'page number not in range',
		),

		'ar' => array(
			'pdf_no_xml' => 'لم يمكن أخذ معلومات ميتا من pdf',
			'pdf_page_error' => 'رقم الصفحة ليس في النطاق',
		),

		'de' => array(
			'pdf_no_xml' => 'Keine Metadaten im PDF vorhanden.',
			'pdf_page_error' => 'Seitenzahl außerhalb des Dokumentes.',
		),

		'hsb' => array(
			'pdf_no_xml' => 'W pdf žane metadaty njejsu.',
			'pdf_page_error' => 'Ličba strony zwonka dokumenta.',
		),

		'nl' => array(
			'pdf_no_xml' => 'de metadata van de PDF kan niet uitgelezen worden',
			'pdf_page_error' => 'paginanummer komt niet voor in document',
		),

		'pms' => array(
			'pdf_no_xml' => 'as peulo nen pijesse ij metadat dal pdf',
			'pdf_page_error' => 'ël nùmer ëd pàgina a resta fòra da cole ch\'a-i son',
		),

		'pt' => array(
			'pdf_no_xml' => 'não foi possível obter os metadados do pdf',
			'pdf_page_error' => 'página indisponível neste intervalo',
		),

		'yue' => array(
			'pdf_no_xml' => '唔能夠響PDF度拎metadata',
			'pdf_page_error' => '頁數唔響範圍度',
		),

		'zh-hans' => array(
			'pdf_no_xml' => '无法在PDF中撷取元数据',
			'pdf_page_error' => '页数不在范围中',
		),

		'zh-hant' => array(
			'pdf_no_xml' => '無法在PDF中擷取元數據',
			'pdf_page_error' => '頁數不在範圍中',
		),
	);

	$messages['zh'] = $messages['zh-hans'];
	$messages['zh-cn'] = $messages['zh-hans'];
	$messages['zh-hk'] = $messages['zh-hant'];
	$messages['zh-sg'] = $messages['zh-hans'];
	$messages['zh-tw'] = $messages['zh-hant'];
	$messages['zh-yue'] = $messages['yue'];

	return $messages;
}
