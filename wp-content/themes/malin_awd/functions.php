<?php
////Register Custom Style
//function custom_styles() {
//
//    $cssPath = get_template_directory_uri().'/css/';
//
//    wp_register_style( 'jquery.mCustomScrollbar', $cssPath.'jquery.mCustomScrollbar.css', 'style.css', 'false' );
//    wp_enqueue_style( 'jquery.mCustomScrollbar' );
//
//}
//add_action( 'wp_enqueue_scripts', 'custom_styles' );
//?>

<?php
//Register Custom Script
function custom_script() {

    $jsPath = get_template_directory_uri().'/js/';

    wp_register_script( 'modernizr', $jsPath.'modernizr.js', false, false, false);
    wp_enqueue_script( 'modernizr' );
    wp_register_script('jquery_min', 'https://cdn.jsdelivr.net/jquery/1.11.1/jquery.js', false, false, false);
    wp_enqueue_script('jquery_min');
    wp_register_script('jquery_easings_min', $jsPath.'jquery.easings.min.js', false, false, false);
    wp_enqueue_script('jquery_easings_min');
    wp_register_script('bootstrap_min', $jsPath.'bootstrap.min.js', false, false, false);
    wp_enqueue_script('bootstrap_min');
    wp_register_script('google_map', 'http://maps.google.com/maps/api/js?sensor=false', false, false, true);
    wp_enqueue_script('google_map');
    wp_register_script('countdown', $jsPath.'countdown.js', false, false, true);
    wp_enqueue_script('countdown');
    wp_register_script('notifyMe', $jsPath.'notifyMe.js', false, false, false);
    wp_enqueue_script('notifyMe');
    wp_register_script('contact-me', $jsPath.'contact-me.js', false, false, true);
    wp_enqueue_script('contact-me');
    wp_register_script('jquery_swipebox', $jsPath.'jquery.swipebox.js', false, false, false);
    wp_enqueue_script('jquery_swipebox');
    wp_register_script('animated-headlines', $jsPath.'animated-headlines.js', false, false, true);
    wp_enqueue_script('animated-headlines');
    wp_register_script('jquery_mousewheel', $jsPath.'jquery.mousewheel.js', false, false, false);
    wp_enqueue_script('jquery_mousewheel');
    wp_register_script('constellation', $jsPath.'constellation.js', false, false, true);
    wp_enqueue_script('constellation');
    wp_register_script('vegas', $jsPath.'vegas.js', false, false, true);
    wp_enqueue_script('vegas');
    wp_register_script('jquery_mCustomScrollbar', $jsPath.'jquery.mCustomScrollbar.js', false, false, false);
    wp_enqueue_script('jquery_mCustomScrollbar');
    wp_register_script('main', $jsPath.'main.js', false, false, true);
    wp_enqueue_script('main');

}
add_action( 'wp_enqueue_scripts', 'custom_script' );
?>
<?php
//Відключення відображення адмін панелі
    show_admin_bar (false);
?>
<?php
//Вивід короткого опису новини
function main_excerpt( $args = '' ){
	global $post;

	$default = array(
		'maxchar'     => 700, // Кількість символів.
		'text'        => '',  // Який текст обрізати (за замовчуванням post_excerpt, якщо немає post_content.
							  // Якщо є тег <!--more-->, то maxchar ігнорується і береться все до <!--more--> разом з HTML
		'save_format' => false, // Зберігається переніс рядка чи ні. Якщо в параметр указати теги, то вони НЕ будуть вирізатись: пр. '<strong><a>'
		'more_text'   => 'Читать дальше...', // текст ссилки читати дальше
		'echo'        => true, // выводить на экран или возвращать (return) для обработки.
	);

	if( is_array($args) )
		$rgs = $args;
	else
		parse_str( $args, $rgs );

	$args = array_merge( $default, $rgs );

	extract( $args );

	if( ! $text ){
		$text = $post->post_excerpt ? $post->post_excerpt : $post->post_content;

		$text = preg_replace ('~\[[^\]]+\]~', '', $text ); // убираем шоткоды, например:[singlepic id=3]
		// $text = strip_shortcodes( $text ); // или можно так обрезать шоткоды, так будет вырезан шоткод и конструкция текста внутри него
		// и только те шоткоды которые зарегистрированы в WordPress. И эта операция быстрая, но она в десятки раз дольше предыдущей
		// (хотя там очень маленькие цифры в пределах одной секунды на 50000 повторений)

		// для тега <!--more-->
		if( ! $post->post_excerpt && strpos( $post->post_content, '<!--more-->') ){
			preg_match ('~(.*)<!--more-->~s', $text, $match );
			$text = trim( $match[1] );
			$text = str_replace("\r", '', $text );
			$text = preg_replace( "~\n\n+~s", "</p><p>", $text );

			$more_text = $more_text ? '<a class="kexc_moretext" href="'. get_permalink( $post->ID ) .'#more-'. $post->ID .'">'. $more_text .'</a>' : '';

			$text = '<p>'. str_replace( "\n", '<br />', $text ) .' '. $more_text .'</p>';

			if( $echo )
				return print $text;

			return $text;
		}
		elseif( ! $post->post_excerpt )
			$text = strip_tags( $text, $save_format );
	}

	// Обрезаем
	if ( mb_strlen( $text ) > $maxchar ){
		$text = mb_substr( $text, 0, $maxchar );
		$text = preg_replace('@(.*)\s[^\s]*$@s', '\\1 ...', $text ); // убираем последнее слово, оно 99% неполное
	}

	// Сохраняем переносы строк. Упрощенный аналог wpautop()
	if( $save_format ){
		$text = str_replace("\r", '', $text );
		$text = preg_replace("~\n\n+~", "</p><p>", $text );
		$text = "<p>". str_replace ("\n", "<br />", trim( $text ) ) ."</p>";
	}

	//$out = preg_replace('@\*[a-z0-9-_]{0,15}\*@', '', $out); // удалить *some_name-1* - фильтр смайлов

	if( $echo ) return print $text;

	return $text;
}
?>
