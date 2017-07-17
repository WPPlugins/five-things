<?php
/*
Plugin Name: Five Things
Plugin URI: http://pauloklixto.com/2012/07/16/css-plus-wordpress-plugin-2/
Description: Manage your best posts with simple plugin.
Version: 1.2
Author: Paulo E. Calixto
Author URI: http://pauloklixto.com
License: GPL2
Text Domain: five-things

    Copyright 2012  Paulo E. Calixto  (email : klixto@outlook.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
*/
/**
* Plugin Class
*/
class FiveThings {

	public function __construct()
	{
		add_action('init', array($this, 'load_plugin_textdomain'));
		$text = __('I will not be translated!', 'five-things');
	}

	public function load_plugin_textdomain()
	{
		load_plugin_textdomain('five-things', FALSE, dirname(plugin_basename(__FILE__)).'/langs/');
	}

}

$FiveThings = new FiveThings; {

    function five_thing_key_get_var()
	{
	    global $pagenow;
	    return $pagenow;
	}
 
	if ( trim(five_thing_key_get_var()) == 'options-general.php' ) {
    // Plugin is activated

		//CSS and Script Files
		function FiveThings_style_base() {
			wp_register_style('FiveThings_base', plugins_url( 'css/base.css' , __FILE__ ));
			wp_enqueue_style( 'FiveThings_base' );
		}
		add_action('admin_enqueue_scripts','FiveThings_style_base');

		//CodeMirror 3.0.2 CSS
		function FiveThings_style_codemirror() {
			wp_register_style('FiveThings_style_codemirror', plugins_url( 'css/codemirror.css' , __FILE__ ));
			wp_enqueue_style( 'FiveThings_style_codemirror' );
		}
		add_action('admin_enqueue_scripts','FiveThings_style_codemirror');
		function FiveThings_style_solarized() {
			wp_register_style('FiveThings_solarized', plugins_url( 'css/solarized.css' , __FILE__ ));
			wp_enqueue_style( 'FiveThings_solarized' );
		}
		add_action('admin_enqueue_scripts','FiveThings_style_solarized');

		//jQuery 1.8.3
		function FiveThings_jquery() {
		    wp_deregister_script( 'jquery' );
		    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.8.3.min.js');
		    wp_enqueue_script( 'jquery' );
		} 
		add_action('admin_enqueue_scripts', 'FiveThings_jquery');

		//Scripts
		function FiveThings_scripts_jquery() {
		    wp_deregister_script( 'FiveThings_scripts_jquery' );
		    wp_register_script( 'FiveThings_scripts_jquery', plugins_url( 'js/scripts.js' , __FILE__ ));
		    wp_enqueue_script( 'FiveThings_scripts_jquery' );
		}    
		add_action('admin_enqueue_scripts', 'FiveThings_scripts_jquery');

		//CodeMirror 3.0.2 JS
		function FiveThings_scripts_codemirror() {
		    wp_deregister_script( 'FiveThings_scripts_codemirror' );
		    wp_register_script( 'FiveThings_scripts_codemirror', plugins_url( 'js/codemirror.js' , __FILE__ ));
		    wp_enqueue_script( 'FiveThings_scripts_codemirror' );
		}    
		add_action('admin_enqueue_scripts', 'FiveThings_scripts_codemirror');
		function FiveThings_scripts_matchbrackets() {
		    wp_deregister_script( 'FiveThings_scripts_matchbrackets' );
		    wp_register_script( 'FiveThings_scripts_matchbrackets', plugins_url( 'js/matchbrackets.js' , __FILE__ ));
		    wp_enqueue_script( 'FiveThings_scripts_matchbrackets' );
		}    
		add_action('admin_enqueue_scripts', 'FiveThings_scripts_matchbrackets');
		function FiveThings_scripts_htmlmixed() {
		    wp_deregister_script( 'FiveThings_scripts_htmlmixed' );
		    wp_register_script( 'FiveThings_scripts_htmlmixed', plugins_url( 'js/htmlmixed.js' , __FILE__ ));
		    wp_enqueue_script( 'FiveThings_scripts_htmlmixed' );
		}    
		add_action('admin_enqueue_scripts', 'FiveThings_scripts_htmlmixed');
		function FiveThings_scripts_xml() {
		    wp_deregister_script( 'FiveThings_scripts_xml' );
		    wp_register_script( 'FiveThings_scripts_xml', plugins_url( 'js/xml.js' , __FILE__ ));
		    wp_enqueue_script( 'FiveThings_scripts_xml' );
		}    
		add_action('admin_enqueue_scripts', 'FiveThings_scripts_xml');
		function FiveThings_scripts_javascript() {
		    wp_deregister_script( 'FiveThings_scripts_javascript' );
		    wp_register_script( 'FiveThings_scripts_javascript', plugins_url( 'js/javascript.js' , __FILE__ ));
		    wp_enqueue_script( 'FiveThings_scripts_javascript' );
		}    
		add_action('admin_enqueue_scripts', 'FiveThings_scripts_javascript');
		function FiveThings_scripts_css() {
		    wp_deregister_script( 'FiveThings_scripts_css' );
		    wp_register_script( 'FiveThings_scripts_css', plugins_url( 'js/css.js' , __FILE__ ));
		    wp_enqueue_script( 'FiveThings_scripts_css' );
		}    
		add_action('admin_enqueue_scripts', 'FiveThings_scripts_css');
		function FiveThings_scripts_clike() {
		    wp_deregister_script( 'FiveThings_scripts_clike' );
		    wp_register_script( 'FiveThings_scripts_clike', plugins_url( 'js/clike.js' , __FILE__ ));
		    wp_enqueue_script( 'FiveThings_scripts_clike' );
		}    
		add_action('admin_enqueue_scripts', 'FiveThings_scripts_clike');
		function FiveThings_scripts_php() {
		    wp_deregister_script( 'FiveThings_scripts_php' );
		    wp_register_script( 'FiveThings_scripts_php', plugins_url( 'js/php.js' , __FILE__ ));
		    wp_enqueue_script( 'FiveThings_scripts_php' );
		}    
		add_action('admin_enqueue_scripts', 'FiveThings_scripts_php');

	}

	//Wordpress Menu
	add_action('admin_menu','five_things_menu');
	function five_things_menu()
	{
		add_options_page(__('Five Things','five-things'), __('Five Things','five-things'), 'manage_options', 'five-things.php','five_things_custom_options');
	}

	function five_things_custom_options()
	{ ?>
		<div class="wrap five-things">
			
			<form method="post" action="options.php">
				<?php wp_nonce_field('update-options') ?>

				<header>
					<div class="title">
						<h2>Five Things</h2>
						<span class="ico-ft return"></span>
					</div>
					<div class="menu">
						<a href="http://twitter.com/PauloKlixto" class="ico-ft twitter"></a>
						<span class="ico-ft question"></span>
						<span class="ico-ft gear"></span>
					</div>
					<div class="clear"></div>
				</header>

				<article>

					<aside id="formFT">

						<div id="item-ft">

							<!-- Item 1 -->

							<div class="item-display-base" id="option-1" onclick="abas('1')">
								<span class="number">1</span>
								<div class="matrix"></div>
								<div class="name-item-display">
									<span><?php _e('Click here for add content', 'five-things'); ?></span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="item-configure" id="configure-1">
								<div class="content-choice-col-one">
									<p><?php _e('Choose a content or insert your like page','five-things') ?></p>
									<input type="text" placeholder="<?php _e('Page Name','five-things'); ?>" name="thing_1" id="nome-pagina-custom-1" value="<?php echo get_option('thing_1'); ?>" />
									<input type="url" placeholder="URL" name="thing_1_lnk" id="lnk-pagina-custom-1" value="<?php echo get_option('thing_1_lnk'); ?>" />
								</div>
								<div class="content-choice-col-two">
									<label class="list-menu-active posts-list-menu">
										<input type="radio" name="mode-selector-1" checked="checked" value="post">Posts
									</label>
									<label class="pages-list-menu">
										<input type="radio" name="mode-selector-1" value="pages">Pages
									</label>
									<ul class="list-content posts-list">
										<?php
											global $post;
											$args = array('numberposts' => 1000);
											$myposts = get_posts($args);
											foreach( $myposts as $post ) : setup_postdata($post);
											echo '<li class="enviar-valores" link="';
											the_permalink();
											echo '">';
											the_title();
											echo '</li>';
											endforeach;
										?>
									</ul>
									<ul class="list-content pages-list">
										<?php
											$pages = get_pages();
											foreach ($pages as $page) {
												$option = '<li class="enviar-valores" link="'. get_page_link( $page->ID ) .'">';
												$option .= $page->post_title;
												$option .= '</li>';
												echo $option;
											}
										?>
									</ul>
								</div>
								<div class="clear"></div>
							</div>

							<!-- Item 2 -->

							<div class="item-display-base" id="option-2" onclick="abas('2')">
								<span class="number">2</span>
								<div class="matrix"></div>
								<div class="name-item-display">
									<span><?php _e('Click here for add content', 'five-things'); ?></span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="item-configure" id="configure-2">
								<div class="content-choice-col-one">
									<p><?php _e('Choose a content or insert your like page','five-things') ?></p>
									<input type="text" placeholder="<?php _e('Page Name','five-things'); ?>" name="thing_2" id="nome-pagina-custom-2" value="<?php echo get_option('thing_2'); ?>" />
									<input type="url" placeholder="URL" name="thing_2_lnk" id="lnk-pagina-custom-2" value="<?php echo get_option('thing_2_lnk'); ?>" />
								</div>
								<div class="content-choice-col-two">
									<label class="list-menu-active posts-list-menu">
										<input type="radio" name="mode-selector-2" checked="checked" value="post">Posts
									</label>
									<label class="pages-list-menu">
										<input type="radio" name="mode-selector-2" value="pages">Pages
									</label>
									<ul class="list-content posts-list">
										<?php
											global $post;
											$args = array('numberposts' => 1000);
											$myposts = get_posts($args);
											foreach( $myposts as $post ) : setup_postdata($post);
											echo '<li class="enviar-valores" link="';
											the_permalink();
											echo '">';
											the_title();
											echo '</li>';
											endforeach;
										?>
									</ul>
									<ul class="list-content pages-list">
										<?php
											$pages = get_pages();
											foreach ($pages as $page) {
												$option = '<li class="enviar-valores" link="'. get_page_link( $page->ID ) .'">';
												$option .= $page->post_title;
												$option .= '</li>';
												echo $option;
											}
										?>
									</ul>
								</div>
								<div class="clear"></div>
							</div>

							<!-- Item 3 -->

							<div class="item-display-base" id="option-3" onclick="abas('3')">
								<span class="number">3</span>
								<div class="matrix"></div>
								<div class="name-item-display">
									<span><?php _e('Click here for add content', 'five-things'); ?></span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="item-configure" id="configure-3">
								<div class="content-choice-col-one">
									<p><?php _e('Choose a content or insert your like page','five-things') ?></p>
									<input type="text" placeholder="<?php _e('Page Name','five-things'); ?>" name="thing_3" id="nome-pagina-custom-3" value="<?php echo get_option('thing_3'); ?>" />
									<input type="url" placeholder="URL" name="thing_3_lnk" id="lnk-pagina-custom-3" value="<?php echo get_option('thing_3_lnk'); ?>" />
								</div>
								<div class="content-choice-col-two">
									<label class="list-menu-active posts-list-menu">
										<input type="radio" name="mode-selector-3" checked="checked" value="post">Posts
									</label>
									<label class="pages-list-menu">
										<input type="radio" name="mode-selector-3" value="pages">Pages
									</label>
									<ul class="list-content posts-list">
										<?php
											global $post;
											$args = array('numberposts' => 1000);
											$myposts = get_posts($args);
											foreach( $myposts as $post ) : setup_postdata($post);
											echo '<li class="enviar-valores" link="';
											the_permalink();
											echo '">';
											the_title();
											echo '</li>';
											endforeach;
										?>
									</ul>
									<ul class="list-content pages-list">
										<?php
											$pages = get_pages();
											foreach ($pages as $page) {
												$option = '<li class="enviar-valores" link="'. get_page_link( $page->ID ) .'">';
												$option .= $page->post_title;
												$option .= '</li>';
												echo $option;
											}
										?>
									</ul>
								</div>
								<div class="clear"></div>
							</div>

							<!-- Item 4 -->

							<div class="item-display-base" id="option-4" onclick="abas('4')">
								<span class="number">4</span>
								<div class="matrix"></div>
								<div class="name-item-display">
									<span><?php _e('Click here for add content', 'five-things'); ?></span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="item-configure" id="configure-4">
								<div class="content-choice-col-one">
									<p><?php _e('Choose a content or insert your like page','five-things') ?></p>
									<input type="text" placeholder="<?php _e('Page Name','five-things'); ?>" name="thing_4" id="nome-pagina-custom-4" value="<?php echo get_option('thing_4'); ?>" />
									<input type="url" placeholder="URL" name="thing_4_lnk" id="lnk-pagina-custom-4" value="<?php echo get_option('thing_4_lnk'); ?>" />
								</div>
								<div class="content-choice-col-two">
									<label class="list-menu-active posts-list-menu">
										<input type="radio" name="mode-selector-4" checked="checked" value="post">Posts
									</label>
									<label class="pages-list-menu">
										<input type="radio" name="mode-selector-4" value="pages">Pages
									</label>
									<ul class="list-content posts-list">
										<?php
											global $post;
											$args = array('numberposts' => 1000);
											$myposts = get_posts($args);
											foreach( $myposts as $post ) : setup_postdata($post);
											echo '<li class="enviar-valores" link="';
											the_permalink();
											echo '">';
											the_title();
											echo '</li>';
											endforeach;
										?>
									</ul>
									<ul class="list-content pages-list">
										<?php
											$pages = get_pages();
											foreach ($pages as $page) {
												$option = '<li class="enviar-valores" link="'. get_page_link( $page->ID ) .'">';
												$option .= $page->post_title;
												$option .= '</li>';
												echo $option;
											}
										?>
									</ul>
								</div>
								<div class="clear"></div>
							</div>

							<!-- Item 5 -->

							<div class="item-display-base" id="option-5" onclick="abas('5')">
								<span class="number">5</span>
								<div class="matrix"></div>
								<div class="name-item-display">
									<span><?php _e('Click here for add content', 'five-things'); ?></span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="item-configure" id="configure-5">
								<div class="content-choice-col-one">
									<p><?php _e('Choose a content or insert your like page','five-things') ?></p>
									<input type="text" placeholder="<?php _e('Page Name','five-things'); ?>" name="thing_5" id="nome-pagina-custom-5" value="<?php echo get_option('thing_5'); ?>" />
									<input type="url" placeholder="URL" name="thing_5_lnk" id="lnk-pagina-custom-5" value="<?php echo get_option('thing_5_lnk'); ?>" />
								</div>
								<div class="content-choice-col-two">
									<label class="list-menu-active posts-list-menu">
										<input type="radio" name="mode-selector-5" checked="checked" value="post">Posts
									</label>
									<label class="pages-list-menu">
										<input type="radio" name="mode-selector-5" value="pages">Pages
									</label>
									<ul class="list-content posts-list">
										<?php
											global $post;
											$args = array('numberposts' => 1000);
											$myposts = get_posts($args);
											foreach( $myposts as $post ) : setup_postdata($post);
											echo '<li class="enviar-valores" link="';
											the_permalink();
											echo '">';
											the_title();
											echo '</li>';
											endforeach;
										?>
									</ul>
									<ul class="list-content pages-list">
										<?php
											$pages = get_pages();
											foreach ($pages as $page) {
												$option = '<li class="enviar-valores" link="'. get_page_link( $page->ID ) .'">';
												$option .= $page->post_title;
												$option .= '</li>';
												echo $option;
											}
										?>
									</ul>
								</div>
								<div class="clear"></div>
							</div>

						</div>

					</aside>

					<aside  style="display:none;" id="qstnFT">

						<div id="question-ft">
							<h3><?php _e('How to work','five-things'); ?></h3>
							<p><?php _e('In setting page, click in the items for edit it. Below, edit name and link, or click on one page / post for add to ranking. After to edit, click in save changes. For display in your theme, paste in the sidebar.php the code below: <strong>&#60;?php five_things_front(); ?&#62;</strong>, or add with widget.','five-things'); ?></p>
							<h4><?php _e('Configure','five-things'); ?></h4>
							<p><?php _e('Click on gear icon for to configure your plugin. Add a title for the top 5 and customize your front-end. After to edit, click in save changes button.','five-things'); ?></p>
						</div>

					</aside>

					<aside style="display:none;" id="gearFT">

						<div id="configure-ft">
							<h3><?php _e('Configure','five-things') ?></h3>
							<input type="text" placeholder="<?php _e('Title of the widget','five-things'); ?>" name="thing_title" id="thing_title" value="<?php echo get_option('thing_title'); ?>" />
							<p><?php _e('Insert your custom front-end below. <small>(Scroll to activate)</small>','five-things'); ?></p>
							<textarea id="code-ft" name="front-five-things"><?php $frontFTEditor = get_option('front-five-things'); echo esc_attr($frontFTEditor); ?></textarea>
						</div>

					</aside>

				</article>

				<footer>
					<p class="submit">
						<input type="button" class="button button-secondary return" style="display:none;" value="<?php _e('Back','five-things') ?>" />
					</p>
					<?php submit_button(); ?>
					<input type="hidden" name="action" value="update" />
            		<input type="hidden" name="page_options" value="thing_title,thing_1,thing_1_lnk,thing_2,thing_2_lnk,thing_3,thing_3_lnk,thing_4,thing_4_lnk,thing_5,thing_5_lnk,front-five-things" />
				</footer>

				<script type="text/javascript">
					function abas(id) {
						jQuery('#configure-'+id).slideToggle('fast');
						jQuery('.item-configure[id!="configure-'+id+'"]').slideUp('fast');
					}
					var editor = CodeMirror.fromTextArea(document.getElementById("code-ft"), {
				        lineNumbers: true,
				        theme: "solarized dark",
				        matchBrackets: true,
				        mode: "application/x-httpd-php",
				        //mode: "text/html",
				        indentUnit: 4,
				        indentWithTabs: true,
				        enterMode: "keep",
				        tabMode: "shift"
			     	});
				</script>

			</form>

		</div>
	<?php }

	//Widget
	function five_things_front() 
	{ 
		if( trim( get_option('front-five-things')) == "" ) {?>
			<div class="five_things">
				<span class="big_triangle"></span>
				<h3><?php echo get_option('thing_title'); ?></h3>
				<ol>
					<?php if(trim(get_option('thing_1_lnk') != "")) { ?>
					<li class="item1">
						<span>1</span>
						<a href="<?php echo get_option('thing_1_lnk'); ?>"><?php echo get_option('thing_1'); ?></a>
						<div class="clear"></div>
					</li>
					<?php } if(trim(get_option('thing_2_lnk') != "")) { ?>
					<li class="item2">
						<span>2</span>
						<a href="<?php echo get_option('thing_2_lnk'); ?>"><?php echo get_option('thing_2'); ?></a>
						<div class="clear"></div>
					</li>
					<?php } if(trim(get_option('thing_3_lnk') != "")) { ?>
					<li class="item3">
						<span>3</span>
						<a href="<?php echo get_option('thing_3_lnk'); ?>"><?php echo get_option('thing_3'); ?></a>
						<div class="clear"></div>
					</li>
					<?php } if(trim(get_option('thing_4_lnk') != "")) { ?>
					<li class="item4">
						<span>4</span>
						<a href="<?php echo get_option('thing_4_lnk'); ?>"><?php echo get_option('thing_4'); ?></a></li>
						<div class="clear"></div>
					<?php } if(trim(get_option('thing_5_lnk') != "")) { ?>
					<li class="item5">
						<span>5</span>
						<a href="<?php echo get_option('thing_5_lnk'); ?>"><?php echo get_option('thing_5'); ?></a>
						<div class="clear"></div>
					</li>
					<?php } ?>
				</ol>
			</div>
	<?php } else {
		$fiveThingsFront = get_option('front-five-things');
		echo $fiveThingsFront;
	}  }

	/**
	 * Adds Foo_Widget widget.
	 */
	class FiveThings_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		public function __construct() {
			parent::__construct(
		 		'FiveThings_widget', // Base ID
				'Five Things', // Name
				array( 'description' => __( 'Five Things Display', 'five-things' ), ) // Args
			);
		}

		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget( ) {
			five_things_front();
		}

		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		//public function update( $new_instance, $old_instance ) {
		//	$instance = array();
		//	$instance['title'] = strip_tags( $new_instance['title'] );

		//	return $instance;
		//}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		//public function form( $instance ) {
		//	if ( isset( $instance[ 'title' ] ) ) {
		//		$title = $instance[ 'title' ];
		//	}
		//	else {
		//		$title = __( 'New title', 'text_domain' );
		//	}
		//	
		//	
		//}

	} // class FiveThings_Widget
	// register FiveThings_Widget widget
	add_action( 'widgets_init', create_function( '', 'register_widget( "FiveThings_widget" );' ) );
}

?>