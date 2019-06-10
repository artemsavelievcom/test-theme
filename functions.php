<?php
/**
 * Test Theme functions and definitions
 */

add_theme_support( 'post-thumbnails' );
add_image_size( '100x100', 100, 100, true );

function test_theme_register_type_events() {

	/**
	 * Post Type: Events.
	 */

	$labels = array(
		"name" => __( "Events", "test-theme" ),
		"singular_name" => __( "Event", "test-theme" ),
	);

	$args = array(
		"label" => __( "Events", "test-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "events", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "events", $args );
}

add_action( 'init', 'test_theme_register_type_events' );

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5cfb911053cb2',
	'title' => 'Event Options',
	'fields' => array(
		array(
			'key' => 'field_5cfb91203016c',
			'label' => 'Start Date',
			'name' => 'date_start',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y g:i a',
			'return_format' => 'F j, Y g:i a',
			'first_day' => 1,
		),
		array(
			'key' => 'field_5cfb09203916f',
			'label' => 'End Date',
			'name' => 'date_end',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y g:i a',
			'return_format' => 'F j, Y g:i a',
			'first_day' => 1,
		),
		array(
			'key' => 'field_5cfb925176145',
			'label' => 'URL',
			'name' => 'url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5830fcb7ad61b',
			'label' => 'Адрес',
			'name' => 'address',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 1,
			'max' => 1,
			'layout' => 'table',
			'button_label' => 'Добавить адрес',
			'collapsed' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5cfk92ce89264',
					'label' => 'Country',
					'name' => 'country',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '10',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			array(
					'key' => 'field_5cfb92ce82d64',
					'label' => 'City',
					'name' => 'city',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '10',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5830fcf4ad61c',
					'label' => 'Address Type',
					'name' => 'address_type',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '10',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'street' => 'street',
						'boulevard' => 'boulevard',
						'lane' => 'lane',
						'highway' => 'highway',
						'avenue' => 'avenue',
						'passage' => 'passage',
						'square' => 'square',
						'alley' => 'alley',
						'shaft' => 'shaft',
						'deadlock' => 'deadlock',
						'quay' => 'quay',
						'quarter' => 'quarter',
						'line' => 'line',
						'microdistrict' => 'microdistrict',
						'district' => 'district',
						'kilometer' => 'kilometer',
						'channel' => 'channel',
						'station' => 'station',
						'park' => 'park',
						'platform' => 'platform',
						'village' => 'village',
						'farm' => 'farm',
						'tract' => 'tract',
						'island' => 'island',
						'bridge' => 'bridge',
					),
					'default_value' => array(
						0 => 'street',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5830fd7878c4b',
					'label' => 'Name',
					'name' => 'address_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5830fe2461ca6',
					'label' => 'N',
					'name' => 'address_number',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5830fe6b61ca7',
					'label' => 'Letter',
					'name' => 'address_litera',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5830fe8361ca8',
					'label' => 'Housing',
					'name' => 'address_korpus',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5830fe8b61ca9',
					'label' => 'Building',
					'name' => 'address_stroenie',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5830fe9d61caa',
					'label' => 'Floor',
					'name' => 'address_etazh',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5830feb061cab',
					'label' => 'Office',
					'name' => 'address_office',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'events',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;

/* Address function */
function get_address($the_post_id) {
	$org_address = ''; if( have_rows('address',$the_post_id) ):
	while (have_rows('address', $the_post_id)): the_row();
		$address_country = get_sub_field('country');
		$address_city = get_sub_field('city');
		$address_type_field = get_sub_field_object('address_type');
		$address_type_value = get_sub_field('address_type');
		$address_type = $address_type_field['choices'][$address_type_value];
		$address_name = get_sub_field('address_name');
		$address_number = get_sub_field('address_number');
		$address_litera = get_sub_field('address_litera');
		$address_korpus = get_sub_field('address_korpus');
		$address_stroenie = get_sub_field('address_stroenie');
		$address_etazh = get_sub_field('address_etazh');
		$address_office = get_sub_field('address_office');
		//$address_info = get_sub_field('address_info');
		if ($address_country) {
			$org_address .= $address_country . ', ';
		};

		if ($address_city) {
			$org_address .= $address_city . ', ';
		};

		if ($address_type && $address_name) {
			if ($address_name) {
				$org_address .= $address_name . ' ';
			};
			if ($address_type) {
				$org_address .= $address_type . ', ';
			};
		}
		if ($address_number) {
			$org_address .= $address_number . '';
		};
		if ($address_litera) {
			$org_address .= $address_litera . '';
		};
		if ($address_korpus) {
			$org_address .= ' корп. ' . $address_korpus . '';
		};
		if ($address_stroenie) {
			$org_address .= ' bld. ' . $address_stroenie . '';
		};
		if ($address_etazh) {
			$org_address .= ', floor ' . $address_etazh . '';
		};
		if ($address_office) {
			$org_address .= ', office ' . $address_office . '';
		};
		if ($address_info) {
			$org_address .= '<span class="info_comment">' . $address_info . '</span>';
		};
	
	endwhile;
	endif;

	return $org_address;
};

function insert_map($post_id) {
        $address = '';
        $address.=get_address($post_id);
        ?>
        <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
        <script>
            ymaps.ready(init);
            function init() {
                var myMap = new ymaps.Map('map', {
                    center: [55.753994, 37.622093],
                    zoom: 9
                });

                ymaps.geocode('<?= $address; ?>', {
                    results: 1
                }).then(function (res) {
                    var firstGeoObject = res.geoObjects.get(0),
                            coords = firstGeoObject.geometry.getCoordinates(),
                            bounds = firstGeoObject.properties.get('boundedBy');
                    myMap.geoObjects.add(firstGeoObject);
                    myMap.setBounds(bounds, {
                        checkZoomRange: true
                    });
                });
            }
        </script>

        <div id='map'></div>

	<?php
}

function google_calendar_link($the_post_id) {
	if (get_field('date_start',$the_post_id) && get_field('date_end',$the_post_id)) {
		$format_in = 'F j, Y g:i a';
		$format_out_date = 'Ymd';
		$format_out_time = 'his';
		$date_start = DateTime::createFromFormat($format_in, get_field('date_start',$the_post_id));
		$date_end = DateTime::createFromFormat($format_in, get_field('date_end',$the_post_id));
		?>
		<div class="meta_google_calendar">
			<a href="http://www.google.com/calendar/event?action=TEMPLATE&dates=<?php echo $date_start->format( $format_out_date ); ?>T<?php echo $date_start->format( $format_out_time ); ?>%2F<?php echo $date_end->format( $format_out_date ); ?>T<?php echo $date_end->format( $format_out_time ); ?>&text=<?php echo urlencode(get_the_title()); ?>&location=<?php echo urlencode(get_address($post->ID)); ?>" target="_blank" rel="nofollow" title="<?php _e('Add this event to your Google Calendar','test-theme'); ?>" class="article_button"><?php _e('Add to my Google Calendar','test-theme'); ?></a>
		</div>
	<?php };
}

function event_status($the_post_id) {
	if (get_field('date_start',$the_post_id) && get_field('date_end',$the_post_id)) {
		$date_now = date("Ymdhis"); 
		$format_in = 'F j, Y g:i a';
		$format_out = 'Ymdhis';
		$date_start = DateTime::createFromFormat($format_in, get_field('date_start',$the_post_id));
		$date_end = DateTime::createFromFormat($format_in, get_field('date_end',$the_post_id));
		if ($date_now < $date_end->format( $format_out ) && $date_now > $date_start->format( $format_out )) {
			$event_status = __('Is passing now','test-theme');
			$event_status_class = 'now';
		} elseif ($date_now > $date_end->format( $format_out ) && $date_now > $date_start->format( $format_out )) {
			$event_status = __('Passed','test-theme');
			$event_status_class = 'passed';
		} elseif ($date_now < $date_end->format( $format_out ) && $date_now < $date_start->format( $format_out )) {
			$event_status = __('Upcoming','test-theme');
			$event_status_class = 'upcoming';
		} else {
			$event_status = false;
		}
		if ($event_status !=false) {
			echo '<div class="event_status '.$event_status_class.'">'.$event_status.'</div>';
		}
	}
}