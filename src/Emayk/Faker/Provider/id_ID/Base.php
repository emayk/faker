<?php
namespace Emayk\Faker\Provider\id_ID;


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
				 'created_at' => $this->generator->dateTime,
				 'updated_at' => $this->generator->dateTime,


			);
	 }

}