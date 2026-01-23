<?php

declare( strict_types = 1 );

namespace MediaWiki\Extension\DynamicPageList4\HookHandlers;

use MediaWiki\Extension\DynamicPageList4\Maintenance\DeleteTemplate;
use MediaWiki\Extension\DynamicPageList4\Maintenance\DropView;
use MediaWiki\Installer\Hook\LoadExtensionSchemaUpdatesHook;

class Installer implements LoadExtensionSchemaUpdatesHook {

	/**
	 * @inheritDoc
	 * @codeCoverageIgnore Tested by updating or installing MediaWiki.
	 */
	public function onLoadExtensionSchemaUpdates( $updater ) {
		// WGL - Avoid creating a bunch of jobs while trying to upgrade mediawiki. We can run this script later to avoid hammering DB.
		//$updater->addPostDatabaseUpdateMaintenance( DeleteTemplate::class );
		$updater->addPostDatabaseUpdateMaintenance( DropView::class );
	}
}
