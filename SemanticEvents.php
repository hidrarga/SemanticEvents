<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'SemanticEvents' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['SemanticEvents'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['SemanticEventsAlias'] = __DIR__ . '/SemanticEvents.i18n.alias.php';
	$wgExtensionMessagesFiles['SemanticEventsMagic'] = __DIR__ . '/SemanticEvents.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for SemanticEvents extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the SemanticEvents extension requires MediaWiki 1.25+' );
}
