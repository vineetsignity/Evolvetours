<?php
/**
 * TripFixture
 *
 */
class TripFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'unique_code' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'image' => array('type' => 'binary', 'null' => false, 'default' => null),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'state_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'city_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'from_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'to_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'school_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'teacher_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hotel' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'no_of_rooms' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'trip_price_amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'trip_price_currency' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'payment_methods' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'card_accepted' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'payment_type' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tax_variation' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tax_variation_amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'unique_code' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'image' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,
			'state_id' => 1,
			'city_id' => 1,
			'from_date' => '2015-06-18 05:15:06',
			'to_date' => '2015-06-18 05:15:06',
			'school_id' => 1,
			'teacher_id' => 1,
			'hotel' => 1,
			'no_of_rooms' => 1,
			'trip_price_amount' => 1,
			'trip_price_currency' => 'Lorem ipsum dolor sit amet',
			'payment_methods' => 'Lorem ipsum dolor sit amet',
			'card_accepted' => 'Lorem ipsum dolor sit amet',
			'payment_type' => 'Lorem ipsum dolor sit amet',
			'tax_variation' => 'Lorem ipsum dolor sit amet',
			'tax_variation_amount' => 1,
			'created' => '2015-06-18 05:15:06'
		),
	);

}
