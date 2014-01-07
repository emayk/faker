<?php

namespace Emayk\Faker\Provider\id_ID;
class Produk extends Base {

	 public function produk()
	 {
			return 'Produk '. $this->generator->randomElement(static::name);
	 }
	 public function produkkain()
	 {
			return 'Produk '. $this->generator->toLower($this->generator->randomElement(static::name) );
	 }

	 public function productcategory()
	 {
			return 'Category Product '.$this->createLetter();
	 }

	 public function createLetter()
	 {
			$leter = '';
			for ($i=0;$i < 5; $i++){
				 $leter.= $this->randomLetter();
			}
			return $leter;
	 }
} 