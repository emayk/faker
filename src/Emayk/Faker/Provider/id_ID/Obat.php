<?php
/**
 * Created by PhpStorm.
 * User: emayk
 * Date: 1/6/14
 * Time: 5:02 AM
 */

namespace Emayk\Faker\Provider\id_ID;


class Obat extends Base{
	protected $obat = array(
		'batuk','obh'
	);

	 public function obat()
	 {
			return 'Obat '.$this->generator->randomElement($this->obat);
	 }

} 