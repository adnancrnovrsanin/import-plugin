<?php
/**
 * A class that extends WP_Customize_Setting so we can access
 * the protected updated method when importing options.
 *
 * Used in the Customizer importer.
 */

namespace OCDI;

final class CustomizerOption extends \WP_Customize_Setting {
	public function import( $value ) {
		$this->update( $value );
	}
}
