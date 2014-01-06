<?php
namespace Emayk\Faker\Provider\id_ID;


/**
 * Class Address
 *
 * @package Emayk\Faker\Provider\id_ID
 */
class Address extends \Faker\Provider\en_US\Address{
	 /**
		* @var array
		*/
	 public static  $kota = array('Jakarta', 'Surabaya', 'Bandung', 'Bekasi', 'Medan', 'Tangerang', 'Depok', 'Semarang', 'Palembang', 'Makassar', 'Tangerang Selatan', 'Bogor', 'Batam', 'Pekanbaru', 'Bandar Lampung', 'Malang', 'Padang', 'Denpasar', 'Samarinda', 'Banjarmasin', 'Tasikmalaya', 'Pontianak', 'Cimahi', 'Balikpapan', 'Jambi', 'Surakarta', 'Serang', 'Mataram', 'Manado', 'Yogyakarta', 'Cilegon', 'Kupang', 'Palu', 'Ambon', 'Sukabumi', 'Cirebon', 'Bengkulu', 'Pekalongan', 'Kediri', 'Kendari', 'Tegal', 'Binjai', 'Pematangsiantar', 'Jayapura', 'Banda Aceh', 'Palangkaraya', 'Probolinggo', 'Banjarbaru', 'Pasuruan', 'Tarakan', 'Tanjungpinang', 'Gorontalo', 'Dumai', 'Madiun', 'Batu', 'Salatiga', 'Pangkalpinang', 'Lubuklinggau', 'Ternate', 'Bitung', 'Tanjungbalai', 'Tebingtinggi', 'Metro', 'Bontang', 'Padang Sidempuan', 'Blitar', 'Lhokseumawe', 'Singkawang', 'Parepare', 'Langsa', 'Banjar', 'Prabumulih', 'Mojokerto', 'Magelang', 'Sorong', 'Palopo', 'Bima', 'Bukittinggi', 'Bau-Bau', );
	 /**
		* @var array
		*/
	 public static  $provinsi = array('Aceh', 'Bali', 'Banten', 'Bengkulu', 'Gorontalo', 'Jakarta', 'Jambi', 'Jawa Barat', 'Jawa Tengah', 'Jawa Timur', 'Kalimantan Barat', 'Kalimantan Selatan', 'Kalimantan Tengah', 'Kalimantan Timur', 'Kalimantan Utara', 'Kepulauan Bangka Belitung', 'Kepulauan Riau', 'Lampung', 'Maluku', 'Maluku Utara', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Papua', 'Papua Barat', 'Riau', 'Sulawesi Barat', 'Sulawesi Selatan', 'Sulawesi Tengah', 'Sulawesi Tenggara', 'Sulawesi Utara', 'Sumatera Barat', 'Sumatera Selatan', 'Sumatera Utara', 'Yogyakarta');

	 /**
		* @return string
		*/
	 public function negara()
	 {
			return $this->generator->randomElement(static::$country);
	 }

	 /**
		* @return mixed
		*/
	 public function provinsi()
	 {
			return $this->acak(static::$provinsi);
	 }

	 public function kota()
	 {
			return $this->acak(static::$kota);
	 }

	 /**
		* @param array $data
		*
		* @return string
		*/
	 protected function acak(array $data)
	 {
			return $this->generator->randomElement($data);
	 }

	 /**
		* @return mixed
		*/
	 public function getNegara ()
	 {
			return static::$country;
	 }

	 /**
		* @return int
		*/
	 public function countNegara()
	 {
			return count($this->getNegara());
	 }
} 