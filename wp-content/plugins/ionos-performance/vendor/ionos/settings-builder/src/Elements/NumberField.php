<?php

namespace Ionos\SettingsPage\Elements;

/**
 * Class NumberField.
 */
class NumberField extends AbstractSettingsField {

	// phpcs:ignore Squiz.Commenting.VariableComment.Missing
	protected $template_name = 'number.html.php';

	// phpcs:ignore Squiz.Commenting.FunctionComment.Missing
	public function validate_input( $input ) {
		// TODO: Implement validateInput() method.
	}

	// phpcs:ignore Squiz.Commenting.FunctionComment.Missing
	public function sanitize_input( $input ) {
		return (int) $input;
	}

}
