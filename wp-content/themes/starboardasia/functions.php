<?php
/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage StarBoardAsia
 * @since StarBoardAsia 1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentytwenty_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Add custom image size used in Cover Template.
	add_image_size( 'twentytwenty-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'twentytwenty' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentytwenty' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	/*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
	if ( is_customize_preview() ) {
		require get_template_directory() . '/inc/starter-content.php';
		add_theme_support( 'starter-content', twentytwenty_get_starter_content() );
	}

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
	$loader = new TwentyTwenty_Script_Loader();
	add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_action( 'after_setup_theme', 'twentytwenty_theme_support' );

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/template-tags.php';

// Handle SVG icons.
require get_template_directory() . '/classes/class-twentytwenty-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

// Handle Customizer settings.
require get_template_directory() . '/classes/class-twentytwenty-customize.php';

// Require Separator Control class.
require get_template_directory() . '/classes/class-twentytwenty-separator-control.php';

// Custom comment walker.
require get_template_directory() . '/classes/class-twentytwenty-walker-comment.php';

// Custom page walker.
require get_template_directory() . '/classes/class-twentytwenty-walker-page.php';

// Custom script loader class.
require get_template_directory() . '/classes/class-twentytwenty-script-loader.php';

// Non-latin language handling.
require get_template_directory() . '/classes/class-twentytwenty-non-latin-languages.php';

// Custom CSS.
require get_template_directory() . '/inc/custom-css.php';

/**
 * Register and Enqueue Styles.
 */
function twentytwenty_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'twentytwenty-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'twentytwenty-style', 'rtl', 'replace' );

	// Add output of Customizer settings as inline style.
	wp_add_inline_style( 'twentytwenty-style', twentytwenty_get_customizer_css( 'front-end' ) );

	// Add print CSS.
	wp_enqueue_style( 'twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'twentytwenty_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function twentytwenty_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'twentytwenty-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
	wp_script_add_data( 'twentytwenty-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'twentytwenty_register_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentytwenty_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentytwenty_skip_link_focus_fix' );

/** Enqueue non-latin language styles
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
function twentytwenty_non_latin_languages() {
	$custom_css = TwentyTwenty_Non_Latin_Languages::get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'twentytwenty-style', $custom_css );
	}
}

add_action( 'wp_enqueue_scripts', 'twentytwenty_non_latin_languages' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function twentytwenty_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
		'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
		'social'   => __( 'Social Menu', 'twentytwenty' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'twentytwenty_menus' );

/**
 * Get the information about the logo.
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 * @return string
 */
function twentytwenty_get_custom_logo( $html ) {

	$logo_id = get_theme_mod( 'custom_logo' );

	if ( ! $logo_id ) {
		return $html;
	}

	$logo = wp_get_attachment_image_src( $logo_id, 'full' );

	if ( $logo ) {
		// For clarity.
		$logo_width  = esc_attr( $logo[1] );
		$logo_height = esc_attr( $logo[2] );

		// If the retina logo setting is active, reduce the width/height by half.
		if ( get_theme_mod( 'retina_logo', false ) ) {
			$logo_width  = floor( $logo_width / 2 );
			$logo_height = floor( $logo_height / 2 );

			$search = array(
				'/width=\"\d+\"/iU',
				'/height=\"\d+\"/iU',
			);

			$replace = array(
				"width=\"{$logo_width}\"",
				"height=\"{$logo_height}\"",
			);

			// Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
			if ( strpos( $html, ' style=' ) === false ) {
				$search[]  = '/(src=)/';
				$replace[] = "style=\"height: {$logo_height}px;\" src=";
			} else {
				$search[]  = '/(style="[^"]*)/';
				$replace[] = "$1 height: {$logo_height}px;";
			}

			$html = preg_replace( $search, $replace, $html );

		}
	}

	return $html;

}

add_filter( 'get_custom_logo', 'twentytwenty_get_custom_logo' );

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function twentytwenty_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Skip to the content', 'twentytwenty' ) . '</a>';
}

add_action( 'wp_body_open', 'twentytwenty_skip_link', 5 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentytwenty_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentytwenty_block_editor_styles() {

	// Enqueue the editor styles.
	wp_enqueue_style( 'twentytwenty-block-editor-styles', get_theme_file_uri( '/assets/css/editor-style-block.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );
	wp_style_add_data( 'twentytwenty-block-editor-styles', 'rtl', 'replace' );

	// Add inline style from the Customizer.
	wp_add_inline_style( 'twentytwenty-block-editor-styles', twentytwenty_get_customizer_css( 'block-editor' ) );

	// Add inline style for non-latin fonts.
	wp_add_inline_style( 'twentytwenty-block-editor-styles', TwentyTwenty_Non_Latin_Languages::get_non_latin_css( 'block-editor' ) );

	// Enqueue the editor script.
	wp_enqueue_script( 'twentytwenty-block-editor-script', get_theme_file_uri( '/assets/js/editor-script-block.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'twentytwenty_block_editor_styles', 1, 1 );

/**
 * Enqueue classic editor styles.
 */
function twentytwenty_classic_editor_styles() {

	$classic_editor_styles = array(
		'/assets/css/editor-style-classic.css',
	);

	add_editor_style( $classic_editor_styles );

}

add_action( 'init', 'twentytwenty_classic_editor_styles' );

/**
 * Output Customizer settings in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 * @return array TinyMCE styles.
 */
function twentytwenty_add_classic_editor_customizer_styles( $mce_init ) {

	$styles = twentytwenty_get_customizer_css( 'classic-editor' );

	if ( ! isset( $mce_init['content_style'] ) ) {
		$mce_init['content_style'] = $styles . ' ';
	} else {
		$mce_init['content_style'] .= ' ' . $styles . ' ';
	}

	return $mce_init;

}

add_filter( 'tiny_mce_before_init', 'twentytwenty_add_classic_editor_customizer_styles' );

/**
 * Output non-latin font styles in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 * @return array TinyMCE styles.
 */
function twentytwenty_add_classic_editor_non_latin_styles( $mce_init ) {

	$styles = TwentyTwenty_Non_Latin_Languages::get_non_latin_css( 'classic-editor' );

	// Return if there are no styles to add.
	if ( ! $styles ) {
		return $mce_init;
	}

	if ( ! isset( $mce_init['content_style'] ) ) {
		$mce_init['content_style'] = $styles . ' ';
	} else {
		$mce_init['content_style'] .= ' ' . $styles . ' ';
	}

	return $mce_init;

}

add_filter( 'tiny_mce_before_init', 'twentytwenty_add_classic_editor_non_latin_styles' );

/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 */
function twentytwenty_block_editor_settings() {

	// Block Editor Palette.
	$editor_color_palette = array(
		array(
			'name'  => __( 'Accent Color', 'twentytwenty' ),
			'slug'  => 'accent',
			'color' => twentytwenty_get_color_for_area( 'content', 'accent' ),
		),
		array(
			'name'  => __( 'Primary', 'twentytwenty' ),
			'slug'  => 'primary',
			'color' => twentytwenty_get_color_for_area( 'content', 'text' ),
		),
		array(
			'name'  => __( 'Secondary', 'twentytwenty' ),
			'slug'  => 'secondary',
			'color' => twentytwenty_get_color_for_area( 'content', 'secondary' ),
		),
		array(
			'name'  => __( 'Subtle Background', 'twentytwenty' ),
			'slug'  => 'subtle-background',
			'color' => twentytwenty_get_color_for_area( 'content', 'borders' ),
		),
	);

	// Add the background option.
	$background_color = get_theme_mod( 'background_color' );
	if ( ! $background_color ) {
		$background_color_arr = get_theme_support( 'custom-background' );
		$background_color     = $background_color_arr[0]['default-color'];
	}
	$editor_color_palette[] = array(
		'name'  => __( 'Background Color', 'twentytwenty' ),
		'slug'  => 'background',
		'color' => '#' . $background_color,
	);

	// If we have accent colors, add them to the block editor palette.
	if ( $editor_color_palette ) {
		add_theme_support( 'editor-color-palette', $editor_color_palette );
	}

	// Block Editor Font Sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'twentytwenty' ),
				'size'      => 18,
				'slug'      => 'small',
			),
			array(
				'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'twentytwenty' ),
				'size'      => 21,
				'slug'      => 'normal',
			),
			array(
				'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'twentytwenty' ),
				'size'      => 26.25,
				'slug'      => 'large',
			),
			array(
				'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'twentytwenty' ),
				'size'      => 32,
				'slug'      => 'larger',
			),
		)
	);

	add_theme_support( 'editor-styles' );

	// If we have a dark background color then add support for dark editor style.
	// We can determine if the background color is dark by checking if the text-color is white.
	if ( '#ffffff' === strtolower( twentytwenty_get_color_for_area( 'content', 'text' ) ) ) {
		add_theme_support( 'dark-editor-style' );
	}

}

add_action( 'after_setup_theme', 'twentytwenty_block_editor_settings' );

/**
 * Overwrite default more tag with styling and screen reader markup.
 *
 * @param string $html The default output HTML for the more tag.
 * @return string
 */
function twentytwenty_read_more_tag( $html ) {
	return preg_replace( '/<a(.*)>(.*)<\/a>/iU', sprintf( '<div class="read-more-button-wrap"><a$1><span class="faux-button">$2</span> <span class="screen-reader-text">"%1$s"</span></a></div>', get_the_title( get_the_ID() ) ), $html );
}

add_filter( 'the_content_more_link', 'twentytwenty_read_more_tag' );

/**
 * Enqueues scripts for customizer controls & settings.
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
function twentytwenty_customize_controls_enqueue_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Add main customizer js file.
	wp_enqueue_script( 'twentytwenty-customize', get_template_directory_uri() . '/assets/js/customize.js', array( 'jquery' ), $theme_version, false );

	// Add script for color calculations.
	wp_enqueue_script( 'twentytwenty-color-calculations', get_template_directory_uri() . '/assets/js/color-calculations.js', array( 'wp-color-picker' ), $theme_version, false );

	// Add script for controls.
	wp_enqueue_script( 'twentytwenty-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls.js', array( 'twentytwenty-color-calculations', 'customize-controls', 'underscore', 'jquery' ), $theme_version, false );
	wp_localize_script( 'twentytwenty-customize-controls', 'twentyTwentyBgColors', twentytwenty_get_customizer_color_vars() );
}

add_action( 'customize_controls_enqueue_scripts', 'twentytwenty_customize_controls_enqueue_scripts' );

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
function twentytwenty_customize_preview_init() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'twentytwenty-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview', 'customize-selective-refresh', 'jquery' ), $theme_version, true );
	wp_localize_script( 'twentytwenty-customize-preview', 'twentyTwentyBgColors', twentytwenty_get_customizer_color_vars() );
	wp_localize_script( 'twentytwenty-customize-preview', 'twentyTwentyPreviewEls', twentytwenty_get_elements_array() );

	wp_add_inline_script(
		'twentytwenty-customize-preview',
		sprintf(
			'wp.customize.selectiveRefresh.partialConstructor[ %1$s ].prototype.attrs = %2$s;',
			wp_json_encode( 'cover_opacity' ),
			wp_json_encode( twentytwenty_customize_opacity_range() )
		)
	);
}

add_action( 'customize_preview_init', 'twentytwenty_customize_preview_init' );

/**
 * Get accessible color for an area.
 *
 * @since Twenty Twenty 1.0
 *
 * @param string $area The area we want to get the colors for.
 * @param string $context Can be 'text' or 'accent'.
 * @return string Returns a HEX color.
 */
function twentytwenty_get_color_for_area( $area = 'content', $context = 'text' ) {

	// Get the value from the theme-mod.
	$settings = get_theme_mod(
		'accent_accessible_colors',
		array(
			'content'       => array(
				'text'      => '#000000',
				'accent'    => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders'   => '#dcd7ca',
			),
			'header-footer' => array(
				'text'      => '#000000',
				'accent'    => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders'   => '#dcd7ca',
			),
		)
	);

	// If we have a value return it.
	if ( isset( $settings[ $area ] ) && isset( $settings[ $area ][ $context ] ) ) {
		return $settings[ $area ][ $context ];
	}

	// Return false if the option doesn't exist.
	return false;
}

/**
 * Returns an array of variables for the customizer preview.
 *
 * @since Twenty Twenty 1.0
 *
 * @return array
 */
function twentytwenty_get_customizer_color_vars() {
	$colors = array(
		'content'       => array(
			'setting' => 'background_color',
		),
		'header-footer' => array(
			'setting' => 'header_footer_background_color',
		),
	);
	return $colors;
}

/**
 * Get an array of elements.
 *
 * @since Twenty Twenty 1.0
 *
 * @return array
 */
function twentytwenty_get_elements_array() {

	// The array is formatted like this:
	// [key-in-saved-setting][sub-key-in-setting][css-property] = [elements].
	$elements = array(
		'content'       => array(
			'accent'     => array(
				'color'            => array( '.color-accent', '.color-accent-hover:hover', '.color-accent-hover:focus', ':root .has-accent-color', '.has-drop-cap:not(:focus):first-letter', '.wp-block-button.is-style-outline', 'a' ),
				'border-color'     => array( 'blockquote', '.border-color-accent', '.border-color-accent-hover:hover', '.border-color-accent-hover:focus' ),
				'background-color' => array( 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file .wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.bg-accent', '.bg-accent-hover:hover', '.bg-accent-hover:focus', ':root .has-accent-background-color', '.comment-reply-link' ),
				'fill'             => array( '.fill-children-accent', '.fill-children-accent *' ),
			),
			'background' => array(
				'color'            => array( ':root .has-background-color', 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.wp-block-button', '.comment-reply-link', '.has-background.has-primary-background-color:not(.has-text-color)', '.has-background.has-primary-background-color *:not(.has-text-color)', '.has-background.has-accent-background-color:not(.has-text-color)', '.has-background.has-accent-background-color *:not(.has-text-color)' ),
				'background-color' => array( ':root .has-background-background-color' ),
			),
			'text'       => array(
				'color'            => array( 'body', '.entry-title a', ':root .has-primary-color' ),
				'background-color' => array( ':root .has-primary-background-color' ),
			),
			'secondary'  => array(
				'color'            => array( 'cite', 'figcaption', '.wp-caption-text', '.post-meta', '.entry-content .wp-block-archives li', '.entry-content .wp-block-categories li', '.entry-content .wp-block-latest-posts li', '.wp-block-latest-comments__comment-date', '.wp-block-latest-posts__post-date', '.wp-block-embed figcaption', '.wp-block-image figcaption', '.wp-block-pullquote cite', '.comment-metadata', '.comment-respond .comment-notes', '.comment-respond .logged-in-as', '.pagination .dots', '.entry-content hr:not(.has-background)', 'hr.styled-separator', ':root .has-secondary-color' ),
				'background-color' => array( ':root .has-secondary-background-color' ),
			),
			'borders'    => array(
				'border-color'        => array( 'pre', 'fieldset', 'input', 'textarea', 'table', 'table *', 'hr' ),
				'background-color'    => array( 'caption', 'code', 'code', 'kbd', 'samp', '.wp-block-table.is-style-stripes tbody tr:nth-child(odd)', ':root .has-subtle-background-background-color' ),
				'border-bottom-color' => array( '.wp-block-table.is-style-stripes' ),
				'border-top-color'    => array( '.wp-block-latest-posts.is-grid li' ),
				'color'               => array( ':root .has-subtle-background-color' ),
			),
		),
		'header-footer' => array(
			'accent'     => array(
				'color'            => array( 'body:not(.overlay-header) .primary-menu > li > a', 'body:not(.overlay-header) .primary-menu > li > .icon', '.modal-menu a', '.footer-menu a, .footer-widgets a', '#site-footer .wp-block-button.is-style-outline', '.wp-block-pullquote:before', '.singular:not(.overlay-header) .entry-header a', '.archive-header a', '.header-footer-group .color-accent', '.header-footer-group .color-accent-hover:hover' ),
				'background-color' => array( '.social-icons a', '#site-footer button:not(.toggle)', '#site-footer .button', '#site-footer .faux-button', '#site-footer .wp-block-button__link', '#site-footer .wp-block-file__button', '#site-footer input[type="button"]', '#site-footer input[type="reset"]', '#site-footer input[type="submit"]' ),
			),
			'background' => array(
				'color'            => array( '.social-icons a', 'body:not(.overlay-header) .primary-menu ul', '.header-footer-group button', '.header-footer-group .button', '.header-footer-group .faux-button', '.header-footer-group .wp-block-button:not(.is-style-outline) .wp-block-button__link', '.header-footer-group .wp-block-file__button', '.header-footer-group input[type="button"]', '.header-footer-group input[type="reset"]', '.header-footer-group input[type="submit"]' ),
				'background-color' => array( '#site-header', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal', '.menu-modal-inner', '.search-modal-inner', '.archive-header', '.singular .entry-header', '.singular .featured-media:before', '.wp-block-pullquote:before' ),
			),
			'text'       => array(
				'color'               => array( '.header-footer-group', 'body:not(.overlay-header) #site-header .toggle', '.menu-modal .toggle' ),
				'background-color'    => array( 'body:not(.overlay-header) .primary-menu ul' ),
				'border-bottom-color' => array( 'body:not(.overlay-header) .primary-menu > li > ul:after' ),
				'border-left-color'   => array( 'body:not(.overlay-header) .primary-menu ul ul:after' ),
			),
			'secondary'  => array(
				'color' => array( '.site-description', 'body:not(.overlay-header) .toggle-inner .toggle-text', '.widget .post-date', '.widget .rss-date', '.widget_archive li', '.widget_categories li', '.widget cite', '.widget_pages li', '.widget_meta li', '.widget_nav_menu li', '.powered-by-wordpress', '.to-the-top', '.singular .entry-header .post-meta', '.singular:not(.overlay-header) .entry-header .post-meta a' ),
			),
			'borders'    => array(
				'border-color'     => array( '.header-footer-group pre', '.header-footer-group fieldset', '.header-footer-group input', '.header-footer-group textarea', '.header-footer-group table', '.header-footer-group table *', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal nav *', '.footer-widgets-outer-wrapper', '.footer-top' ),
				'background-color' => array( '.header-footer-group table caption', 'body:not(.overlay-header) .header-inner .toggle-wrapper::before' ),
			),
		),
	);

	/**
	* Filters Twenty Twenty theme elements
	*
	* @since Twenty Twenty 1.0
	*
	* @param array Array of elements
	*/
	return apply_filters( 'twentytwenty_get_elements_array', $elements );
}

function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );


if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'activities-thumb', 381, 278, true ); //300 pixels wide (and unlimited height)    
}


add_action('init', function() {
  pll_register_string('starboardasia', 'Tuyển Dụng Việc Làm');
  pll_register_string('starboardasia', 'Hàng trăm công việc hấp dẫn đang đợi bạn');
  pll_register_string('starboardasia', 'Liên hệ');
  pll_register_string('starboardasia', 'Liên kết');
  pll_register_string('starboardasia', 'Email');
  pll_register_string('starboardasia', 'Tel');
  pll_register_string('starboardasia', 'Liên hệ ngay');
  pll_register_string('starboardasia', 'Về chúng tôi');
  pll_register_string('starboardasia', 'Tổng quan');
  pll_register_string('starboardasia', 'Tên công ty');
  pll_register_string('starboardasia', 'Năm thành lập');
  pll_register_string('starboardasia', 'GĐ Kiêm Đại Diện HĐQT');
  pll_register_string('starboardasia', 'Giám Đốc Kiêm Đại Diện HĐQT');
  pll_register_string('starboardasia', 'Quản Lý Điều Hành');
  pll_register_string('starboardasia', 'Kyota Saito');
  pll_register_string('starboardasia', 'TÔN NỮ QUỲNH ANH');
  pll_register_string('starboardasia', 'STARBOARD ASIA COMPAMY LIMITED');
  pll_register_string('starboardasia', 'Dịch vụ');
  pll_register_string('starboardasia', 'Hệ thống nghiệp vụ');
  pll_register_string('starboardasia', 'Chúng tôi có khả năng đáp ứng rộng rãi, từ việc phát triển hệ thống mới đến việc di chuyển hệ thống cũ.');
  pll_register_string('starboardasia', 'Hệ thống WEB');
  pll_register_string('starboardasia', 'Chúng tôi có khả năng xây dựng các trang WEB có quy mô khác nhau từ WEB BtoB, BtoC đến hệ thống web nội bộ hay phát triển các trang WEB dành cho sự kiện.');
  pll_register_string('starboardasia', 'Ứng dụng');
  pll_register_string('starboardasia', 'Chúng tôi có thể đáp ứng các nhu cầu khác nhau như các ứng dụng độc lập và ứng dụng di động được liên kết với các hệ thống WEB.');
  pll_register_string('starboardasia', 'Dịch vụ kỹ thuật hệ thống');
  pll_register_string('starboardasia', 'Đề xuất một kỹ sư thích hợp trong một thời hạn phù hợp cho những nơi thiếu nguồn lực.');
  pll_register_string('starboardasia', 'Đại lý OJT');
  pll_register_string('starboardasia', 'Giúp sử dụng hiệu quả thời gian trong khi chờ được cấp VISA, chúng tôi sẽ đào tạo cho ứng viên về tiếng Nhật cũng như quy trình phát triển của ứng dụng.');
  pll_register_string('starboardasia', 'Dạy tiếng Nhật (PKG)');
  pll_register_string('starboardasia', 'Giúp cải thiện trình độ tiếng Nhật trong công ty.');
  pll_register_string('starboardasia', 'Quy trình hoạt động');
  pll_register_string('starboardasia', 'Bằng sự tư duy sáng tạo được kết hợp với công nghệ tiên phong và chất lượng quản lý tiêu chuẩn cao, StarboardAsia đem toàn bộ sự tự tin đặt vào dự án để giúp khách hàng thỏa mãn về thái độ tích cực, mức độ chuyên môn của đội ngũ kỹ sư và chất lượng sản phẩm.');
  pll_register_string('starboardasia', 'Xem thêm');
  pll_register_string('starboardasia', 'Hoạt động');
  pll_register_string('starboardasia', 'Team Building');
  pll_register_string('starboardasia', 'Du Lịch');
  pll_register_string('starboardasia', 'Công Tác Nhật Bản');
  pll_register_string('starboardasia', 'Form ứng tuyển');
  pll_register_string('starboardasia', 'Mời bạn điền thông tin và gửi về cho chúng tôi, nhận phản hồi sớm nhất');
  pll_register_string('starboardasia', 'Họ tên');
  pll_register_string('starboardasia', 'Năm sinh');
  pll_register_string('starboardasia', 'Số điện thoại');
  pll_register_string('starboardasia', 'Địa chỉ');
  pll_register_string('starboardasia', 'Công ty ứng tuyển');
  pll_register_string('starboardasia', 'Vị trí');
  pll_register_string('starboardasia', 'Mong muốn');
  pll_register_string('starboardasia', 'Tải lên CV');
  pll_register_string('starboardasia', 'Gửi ngay');
  pll_register_string('starboardasia', 'Tuyển dụng');
  pll_register_string('starboardasia', 'Tuyển dụng việc làm uy tín và chất lượng nhất hiện nay dành cho bạn');
  pll_register_string('starboardasia', 'Trước áp lực cạnh tranh và những biến động của nền kinh tế toàn cầu, việc lèo lái con thuyền doanh nghiệp đi đúng ‘quỹ đạo” theo kế hoạch đề ra đang dần trở nên trắc trở nhiều hơn. Với vai trò quan trọng trong việc kiến thiết và phát triển yếu tố cốt lõi của tổ chức là nguồn nhân lực, các nhà quản lý nhân sự lại càng phải không ngừng tìm kiếm lộ trình tốt nhất và phù hợp để doanh nghiệp có thể tồn tại và phát triển với tiêu chí hiệu quả luôn được đặt lên hàng đầu.');
  pll_register_string('starboardasia', 'WEB – Engineer');
  pll_register_string('starboardasia', 'SmartPhone – Engineer');
  pll_register_string('starboardasia', 'System – Engineer');
  pll_register_string('starboardasia', 'Frontend – Engineer');
  pll_register_string('starboardasia', 'Form liên hệ');
  pll_register_string('starboardasia', 'Email');
  pll_register_string('starboardasia', 'Nội dung');
  pll_register_string('starboardasia', 'Gửi đi');
  pll_register_string('starboardasia', 'Loading');
  pll_register_string('starboardasia', 'Your message has been sent. Thank you!');
  pll_register_string('starboardasia', 'Vui lòng nhập họ tên');
  pll_register_string('starboardasia', 'Vui lòng nhập địa chỉ');
  pll_register_string('starboardasia', 'Vui lòng nhập số điện thoại');
  pll_register_string('starboardasia', 'Vui lòng nhập email');
  pll_register_string('starboardasia', 'Vui lòng nhập năm sinh');
  pll_register_string('starboardasia', 'Vui lòng nhập công ty ứng tuyển');
  pll_register_string('starboardasia', 'Vui lòng nhập vị trí');
  pll_register_string('starboardasia', 'Vui lòng nhập nội dung');
  pll_register_string('starboardasia', 'Vui lòng tải lên CV');
  pll_register_string('starboardasia', '2F, QTSC1 Building, Street No.14');
  pll_register_string('starboardasia', 'Quang Trung Software City');
  pll_register_string('starboardasia', 'Tan Chanh Hiep Ward, District 12');
  pll_register_string('starboardasia', 'Ho Chi Minh City, VietNam');
  pll_register_string('starboardasia', 'Người đại điện');
  pll_register_string('starboardasia', 'Công ty liên kết');
  pll_register_string('starboardasia', 'Cty Cổ Phần Risortech');
  pll_register_string('starboardasia', 'Cty TNHH Arata');
  pll_register_string('starboardasia', 'Cty Cổ Phần Craft Information System');
  pll_register_string('starboardasia', 'ĐT');
  pll_register_string('starboardasia', 'FAX');
  pll_register_string('starboardasia', '〒904-0004');
  pll_register_string('starboardasia', '1-13-17 Chou, Okinawa shi, Okinawa Ken');
  pll_register_string('starboardasia', '〒904-0117');
  pll_register_string('starboardasia', '1-11-3 Kitamae, Kitatani-cho, Nakato-gun, Okinawa');
  pll_register_string('starboardasia', '〒530-0053');
  pll_register_string('starboardasia', '3-11 Suehiro cho, Kita-ku, Osaka-shi, Tenshimo Building, 6th Floor');
  pll_register_string('starboardasia', 'Quy trình');
  pll_register_string('starboardasia', 'Quy Trình Hoạt Động');
  pll_register_string('starboardasia', 'ĐẦY CẢM HỨNG, THÂN THIỆN VÀ ĐÁNG TIN CẬY!');
  pll_register_string('starboardasia', 'Thảo Luận Về Dự Án');
  pll_register_string('starboardasia', 'Thấu hiểu nhanh, hành động kịp thời.');
  pll_register_string('starboardasia', 'Trước khi triển khai một dự án, chúng tôi sẽ dành một khoảng thời gian để đánh giá mục tiêu, động lực và yêu cầu đặt ra. Tất cả các vị trí tại StarboardAsia từ bộ phận thiết kế cho đến lập trình đều tham gia vào cả giai đoạn trình bày lẫn giai đoạn đánh giá ban đầu của mỗi dự án.');
  pll_register_string('starboardasia', 'Liên lạc với khách hàng qua các công cụ liên lạc như Mail, chat tool( Slack, Skype, Messger, ChatWork...)');
  pll_register_string('starboardasia', 'Tiếp nhận yêu cầu thông tin của hệ thống, Website, Ứng dụng.');
  pll_register_string('starboardasia', 'Lập Kế Hoạch');
  pll_register_string('starboardasia', 'Nguồn tài nguyên giá trị nhất của doanh nghiệp là thời gian');
  pll_register_string('starboardasia', 'Do đó, việc hoạch định chi tiết là vô cùng cần thiết. StarboardAsia sẽ để khách hàng tham gia vào quá trình hoạch định quan trọng này, chia sẻ thông tin có liên quan đến dự án cũng như thảo luận trước về những rủi ro có thể xảy ra.');
  pll_register_string('starboardasia', 'Lên kế hoạch dự án và nội dung');
  pll_register_string('starboardasia', 'Dịch tài liệu, tổng hợp và phân tích yêu cầu');
  pll_register_string('starboardasia', 'Xác nhận lại làm rõ yêu cầu và đưa ra đề xuất về mặt kỹ thuật');
  pll_register_string('starboardasia', 'Hệ thống các giải pháp');
  pll_register_string('starboardasia', 'Thiết Kế');
  pll_register_string('starboardasia', 'Bắt tay thiết kế giao diện cho hệ thống hoặc website');
  pll_register_string('starboardasia', 'Giao diện dành cho các bạn trẻ chắc chắn sẽ khác hẳn so với một website dành cho các nhà đầu tư trong lĩnh vực tài chính.');
  pll_register_string('starboardasia', 'Thiết kế giao diện phù hợp với yêu cầu nghiệp vụ và đặc thù lĩnh vực hoạt động');
  pll_register_string('starboardasia', 'Thiết kế chức năng nghiệp vụ');
  pll_register_string('starboardasia', 'Thiết kế cơ sở dữ liệu và công nghệ áp dụng của cơ sở dữ liệu');
  pll_register_string('starboardasia', 'Lập Trình');
  pll_register_string('starboardasia', 'Hệ thống, Website sẽ được hiện thực hóa');
  pll_register_string('starboardasia', 'Những nhân viên lập trình viên của chúng tôi sẽ bắt đầu hiện thực hóa những ý tưởng, chức năng cần có trên hệ thống, website. Nếu khách hàng có nhu cầu sửa đổi bổ sung về mặt nội dung lập trình, xin vui lòng thỏa thuận trước khi lập trình viên của chúng tôi bắt tay vào việc lập trình. Nếu bạn không nói ngay ý tưởng lúc đó thì điều này sẽ dẫn đến khó khăn cho bạn về sau khi cần chỉnh sửa hay cập nhật hệ thống, website.');
  pll_register_string('starboardasia', 'Kiểm Tra/ Kiểm Thử');
  pll_register_string('starboardasia', 'Các nhân viên lập trình web sẽ hoàn thiện các tính năng chi tiết của hệ thống, website, cập nhật nội dung cơ bản.Đội ngũ kiểm thử của StarboardAsia sẽ tiến hành kiểm tra xác nhận hiển thị của giao diện cũng như các màn hình hoạt động đúng chưa, chức năng hệ thống đã đúng như yêu cầu đặc tả chưa trên môi trường nội bộ trước khi bàn giao cho khách hàng.');
  pll_register_string('starboardasia', 'Khách hàng kiểm tra toàn bộ tính năng lại lần cuối sẽ được chạy thử nghiệm trên Internet hoặc môi trường chính thức của khách hàng. Nếu Quý khách hàng không có yêu cầu sửa chữa, bổ sung hay thắc mắc gì, hai bên sẽ tiến hành bàn giao chính thức.');
  pll_register_string('starboardasia', 'Chính Thức');
  pll_register_string('starboardasia', 'Sau khi đã hoàn thiện dự án thì công ty chúng tôi sẽ bàn giao cho khách hàng cùng các dịch vụ sau');
  pll_register_string('starboardasia', 'Source code chuẩn sau khi xử lý các vấn đề trong quá trình kiểm thử');
  pll_register_string('starboardasia', 'Đưa sourceCode lên môi trường của khách hàng, server');
  pll_register_string('starboardasia', 'Hướng dẫn sử dụng bảo trì dữ liệu');
  pll_register_string('starboardasia', 'Trang chủ');
});
