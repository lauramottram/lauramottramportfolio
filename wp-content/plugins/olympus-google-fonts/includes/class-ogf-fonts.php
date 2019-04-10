<?php
/**
 * Build the URL to load the chosen Google Fonts.
 *
 * @package   olympus-google-fonts
 * @copyright Copyright (c) 2019, Danny Cooper
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * This class builds the Google Fonts URL.
 */
class OGF_Fonts {

	/**
	 * All Google Fonts.
	 *
	 * @var array
	 */
	public $google_fonts = array();

	/**
	 * The users font choices.
	 *
	 * @var array
	 */
	public $choices = array();

	/**
	 * Let's get started.
	 */
	public function __construct() {

		$this->google_fonts = ogf_fonts_array();
		$this->get_choices();

	}

	/**
	 * Get the users font choices.
	 */
	public function get_choices() {

		$elements = array_keys( ogf_get_elements() );

		foreach ( $elements as $element ) {
			if ( get_theme_mod( $element . '_font' ) && get_theme_mod( $element . '_font' ) !== 'default' ) {
				$this->choices[] = get_theme_mod( $element . '_font' );
			}
		}

		$elements = array_keys( ogf_get_custom_elements() );

		foreach ( $elements as $element ) {
			if ( get_theme_mod( $element . '_font' ) && get_theme_mod( $element . '_font' ) !== 'default' ) {
				$this->choices[] = get_theme_mod( $element . '_font' );
			}
		}

	}

	/**
	 * Make the font name safe for use in URLs
	 *
	 * @param string $font The font we are getting the id of.
	 */
	public function get_font_id( $font ) {

		return str_replace( ' ', '+', $font );

	}

	/**
	 * Get the font weights from ID.
	 *
	 * @param string $font_id The font ID.
	 */
	public function get_font_weights( $font_id ) {

		$weights = $this->google_fonts[ $font_id ]['variants'];

		unset( $weights['0'] );

		foreach ( $weights as $key => $value ) {
			$weights[ $key . 'i' ] = $value . ' Italic';
		}

		return $weights;

	}

	/**
	 * Get the font name from ID.
	 *
	 * @param string $font_id The font ID.
	 */
	public function get_font_name( $font_id ) {

		return $this->google_fonts[ $font_id ]['family'];

	}

	/**
	 * Helper to check if the user is using any Google fonts.
	 */
	public function has_custom_fonts() {

		if ( ! empty( $this->choices ) ) {
			return true;
		} else {
			return false;
		}

	}

	/**
	 * Remove the fonts the user has chosen not to load.
	 *
	 * @param string $font_id The font ID.
	 * @param string $weights The font weights.
	 */
	public function filter_selected_weights( $font_id, $weights ) {

		unset( $weights['0'] );

		foreach ( $weights as $key => $value ) {
			$weights[ $key . 'i' ] = $value . ' Italic';
		}

		$selected_weights = get_theme_mod( $font_id . '_weights', false );

		if ( ! $selected_weights ) {
			return $weights;
		}
		return array_intersect_key( $weights, array_flip( $selected_weights ) );

	}

	/**
	 * Return the Google Fonts url.
	 */
	public function build_url() {

		$families = array();
		$subsets  = array();

		if ( empty( $this->choices ) ) {
			return;
		}

		$fonts = array_unique( $this->choices );

		foreach ( $fonts as $font_id ) {

			// Check the users choice is a real font.
			if ( array_key_exists( $font_id, $this->google_fonts ) ) {

				$font_id_for_url = $this->get_font_id( $this->google_fonts[ $font_id ]['family'] );

				$weights = $this->filter_selected_weights( $font_id, $this->google_fonts[ $font_id ]['variants'] );

				$families[] = $font_id_for_url . ':' . implode( ',', array_keys( $weights ) );

				$subsets_array = $this->google_fonts[ $font_id ]['subsets'];

				// Build an array of the subsets that need to be loaded.
				foreach ( $subsets_array as $subset ) {

					if ( ! in_array( $subset, $subsets, true ) ) {
						$subsets[] = $subset;
					}
				}
			}
		}

			$query_args = array(
				'family' => implode( '|', $families ),
				'subset' => implode( ',', $subsets ),
			);

			return add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	}

}
