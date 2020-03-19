<?php
/**
 * WooCommerce Plugin Framework
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@skyverge.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade the plugin to newer
 * versions in the future. If you wish to customize the plugin for your
 * needs please refer to http://www.skyverge.com
 *
 * @package   SkyVerge/WooCommerce/Plugin/Classes
 * @author    SkyVerge
 * @copyright Copyright (c) 2013-2020, SkyVerge, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

namespace SkyVerge\WooCommerce\PluginFramework\v5_6_1\Settings_API;

defined( 'ABSPATH' ) or exit;

if ( ! class_exists( '\\SkyVerge\\WooCommerce\\PluginFramework\\v5_6_1\\Settings_API\\Setting' ) ) :

/**
 * The base setting object.
 *
 * @since x.y.z
 */
class Setting {


	/** @var string unique setting ID */
	protected $id;

	/** @var string setting type */
	protected $type;

	/** @var string setting name */
	protected $name;

	/** @var string setting description */
	protected $description;

	/** @var bool whether the setting holds an array of multiple values */
	protected $is_multi = false;

	/** @var array valid setting options */
	protected $options = [];

	/** @var int|float|string|bool|array setting default value */
	protected $default;

	/** @var int|float|string|bool|array setting current value */
	protected $value;

	/** @var Control control object */
	protected $control;


	/** Setter Methods ************************************************************************************************/


	/**
	 * Sets the setting ID.
	 *
	 * @since x.y.z
	 *
	 * @param string $id
	 */
	public function set_id( $id ) {
		$this->id = $id;
	}


	/**
	 * Sets the setting type.
	 *
	 * @since x.y.z
	 *
	 * @param string $type
	 */
	public function set_type( $type ) {
		$this->type = $type;
	}


	/**
	 * Sets the setting name.
	 *
	 * @since x.y.z
	 *
	 * @param string $name
	 */
	public function set_name( $name ) {
		$this->name = $name;
	}


	/**
	 * Sets the setting description.
	 *
	 * @since x.y.z
	 *
	 * @param string $description
	 */
	public function set_description( $description ) {
		$this->description = $description;
	}


	/**
	 * Sets whether the setting holds an array of multiple values.
	 *
	 * @since x.y.z
	 *
	 * @param bool $is_multi
	 */
	public function set_is_multi( $is_multi ) {
		$this->is_multi = $is_multi;
	}


	/**
	 * Sets the setting options.
	 *
	 * @since x.y.z
	 *
	 * @param array $options
	 */
	public function set_options( $options ) {
		$this->options = $options;
	}


	/**
	 * Sets the setting default value.
	 *
	 * @since x.y.z
	 *
	 * @param array|bool|float|int|string $default
	 */
	public function set_default( $default ) {
		$this->default = $default;
	}


	/**
	 * Sets the setting current value.
	 *
	 * @since x.y.z
	 *
	 * @param array|bool|float|int|string $value
	 */
	public function set_value( $value ) {
		$this->value = $value;
	}


	/**
	 * Sets the setting control.
	 *
	 * @since x.y.z
	 *
	 * @param Control $control
	 */
	public function set_control( $control ) {
		$this->control = $control;
	}


}

endif;
