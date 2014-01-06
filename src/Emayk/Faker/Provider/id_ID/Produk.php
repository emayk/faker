<?php

namespace Emayk\Faker\Provider\id_ID;
class Produk extends Base {

	 public function produk()
	 {
			return 'Produk '. $this->generator->randomElement($this->name);
	 }
	 public function produkkain()
	 {
			return 'Produk '. $this->generator->toLower($this->generator->randomElement($this->name) );
	 }
} 