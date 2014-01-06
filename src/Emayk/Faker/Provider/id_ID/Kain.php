<?php

	 namespace Emayk\Faker\Provider\id_ID;


	 /**
		* Class Kain
		*
		* @package Emayk\Faker\Provider\id_ID
		*/
	 class Kain extends Base
	 {
			/**
			 * Daftar Jenis Kain
			 * @var array
			 */
			protected $jeniskain = array ('Kain Katun ( Cotton )', 'Katun Kombed ( Combed Cotton )', 'Katun Karded', 'Kain Lacoste', 'Kain Pike', 'Kain PE', 'Light Weight Wools', 'Akrilit', 'Cashmere', 'Lycra', 'Leather & Suede', 'Paragon', 'D\'Tree', 'Baby Tray', 'Aston', 'Kanvas');
			/**
			 * @var array
			 */
			protected $kainname = array ('ASAHIN PLS 44"', 'BSY # E1 LC 58"', 'BSY # E 58"', 'BSY #F 58"', 'BSY #H 58"', 'BSY # E 58" EMBOSE', 'C.FINE 88"', 'C.YOURYU 58"', 'CHIFFON 58"', 'POLYRAYON 60S 58"', 'POLYRAYON 3G 58"', 'HYCONT PLS 58"', 'CERUTY PLS 58"', '3G PLS 58"', 'JAQGUARD OLS 44"', 'MOSCREP PLS 58"', 'NASHIJI PLS 58"', 'SATEN BTIK FOIL 44"', 'TIFANI PLS 58"', 'WOOLPEACH PLS 58"', 'MAKLOON BSY', 'BSY # E1 LC 666', 'BSY # E1 LC 77"');

			/**
			 * @return string
			 */
			public function namakain ()
			{
				 return $this->generator->randomElement ($this->kainname);
			}

			/**
			 * @return string
			 */
			public function jeniskain ()
			{
				 return $this->generator->randomElement ($this->jeniskain);
			}

	 }