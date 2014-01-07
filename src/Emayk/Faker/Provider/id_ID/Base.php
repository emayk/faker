<?php
namespace Emayk\Faker\Provider\id_ID;


use Carbon\Carbon;

/**
 * Class Base
 *
 * @package Emayk\Faker\Provider\id_ID
 */
class Base  extends  \Faker\Provider\Base{

	protected $fake;
	 public function fillattributes()
	 {
			return array(
				 'uuid' => $this->generator->uuid,
				 'createby_id' =>1,
				 'lastupdateby_id' =>1,
				 'created_at' => Carbon::create(),
				 'updated_at' => Carbon::create()
			);
	 }

}