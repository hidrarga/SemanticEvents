<?php
/**
 * Hooks for SemanticEvents extension
 *
 * @file
 * @ingroup Extensions
 */

class SemanticEventsHooks {

	public static function onParserFirstCallInit( Parser &$parser ) {
		$parser->setFunctionHook( 'something', 'SemanticEventsHooks::doSomething' );
	}

	public static function doSomething( Parser &$parser )
	{
		// Called in MW text like this: {{#something: }}

		// For named parameters like {{#something: foo=bar | apple=orange | banana }}
		// See: https://www.mediawiki.org/wiki/Manual:Parser_functions#Named_parameters

		return "This text will be shown when calling this in MW text.";
	}
}
