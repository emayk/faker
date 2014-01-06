<?php
	 namespace Emayk\Faker\Provider\id_ID;

	 /**
		* Class Bank
		* Source Bank Ini diambil dari Wiki
		*
		* @see     http://id.wikipedia.org/wiki/Daftar_bank_di_Indonesia
		* @package Emayk\Faker\Provider\id_ID
		*/

	 class Bank extends Base
	 {

			/**
			 * Bank Cental
			 *
			 * @var array
			 */
			public static $sentral = array ('Bank Indonesia');
			/**
			 * Bank_umum_konvensional_pemerintah
			 *
			 * @var array
			 */
			public static $bu_kon_pemerintah = array ('Mutiara Bank', 'Bank Negara Indonesia', 'Bank Rakyat Indonesia', 'Bank Tabungan Negara');
			/**
			 * Bank Umum Konvensional Swasta Nasional devisa
			 *
			 * @var array
			 */
			public static $bu_kon_swasta_nas_devisa = array ('Bank BRI Agroniaga', 'Bank Anda (Surabaya)', 'Bank Artha Graha Internasional', 'Bank Bukopin', 'Bank Bumi Arta', 'Bank Capital Indonesia', 'Bank Central Asia', 'Bank CIMB Niaga', 'Bank Danamon Indonesia', 'Bank Ekonomi Raharja', 'Bank Ganesha', 'Bank Hana', 'Bank Himpunan Saudara 1906 ', 'Bank ICB Bumiputera', 'Bank ICBC Indonesia', 'Bank Index Selindo', 'Bank Maybank Indonesia', 'Bank Maspion (Surabaya)', 'Bank Mayapada', 'Bank Mega', 'Bank Mestika Dharma (Medan)', 'Bank Metro Express', 'Bank Nusantara Parahyangan (Bandung)', 'Bank OCBC NISP', 'Bank of India Indonesia ', 'Panin Bank', 'Bank Permata', 'Bank QNB Kesawan', 'Bank SBI Indonesia', 'Bank Sinarmas', 'Bank UOB Indonesia');
			/**
			 * Bank Umum Konvensional Swasta Nasional devisa
			 *
			 * @var array
			 */
			public static $bu_kon_swasta_nas_nondevisa = array ('Anglomas Internasional Bank (Surabaya)', 'Bank Andara', 'Bank Artos Indonesia (Bandung)', 'Bank Bisnis Internasional (Bandung)', 'Bank Tabungan Pensiunan Nasional (Bandung)', 'Centratama Nasional Bank (Surabaya)', 'Bank Sahabat Sampoerna', 'Bank Fama Internasional (Bandung)', 'Bank Harda Internasional', 'Bank Ina Perdana', 'Bank Jasa Jakarta', 'Bank Kesejahteraan Ekonomi', 'Bank Dinar Indonesia', 'Bank Mayora', 'Bank Mitraniaga', 'Bank Multi Arta Sentosa', 'Bank Nationalnobu ', 'Prima Master Bank', 'Bank Pundi Indonesia ', 'Bank Royal Indonesia', 'Bank Sahabat Purba Danarta (Semarang) ', 'Bank Sinar Harapan Bali', 'Bank Victoria Internasional', 'Bank Yudha Bhakti');
			/**
			 * Bank Umum Konvensional Pembangunan daerah
			 *
			 * @var array
			 */
			public static $bu_kon_nas_bpd = array ('Bank BPD Aceh (Banda Aceh)', 'Bank Sumut (Medan)', 'Bank Nagari (Padang)', 'Bank Riau Kepri (Pekanbaru)', 'Bank Jambi (Jambi)', 'Bank Bengkulu (Kota Bengkulu)', 'Bank Sumsel Babel (Palembang)', 'Bank Lampung (Bandar Lampung)', 'Bank DKI (Jakarta)', 'Bank BJB (Bandung)', 'Bank Jateng (Semarang)', 'Bank BPD DIY (Yogyakarta)', 'Bank Jatim (Surabaya)', 'Bank Kalbar (Pontianak)', 'Bank Kalteng (Palangka Raya)', 'Bank Kalsel (Banjarmasin)', 'Bank Kaltim (Samarinda)', 'Bank Sulsel (Makassar)', 'Bank Sultra (Kendari)', 'Bank BPD Sulteng (Palu)', 'Bank Sulut (Manado)', 'Bank BPD Bali (Denpasar)', 'Bank NTB (Mataram)', 'Bank NTT (Kupang)', 'Bank Maluku (Ambon)', 'Bank Papua (Jayapura)');
			/**
			 * Bank Umum Konvensional Campuran
			 *
			 * @var array
			 */
			public static $bu_kon_campuran = array ('Bank ANZ Indonesia', 'Bank Commonwealth', 'Bank Agris', 'Bank BNP Paribas Indonesia', 'Bank Capital Indonesia', 'Bank Chinatrust Indonesia', 'Bank DBS Indonesia', 'Bank KEB Indonesia', 'Bank Mizuho Indonesia', 'Bank Rabobank International Indonesia', 'Bank Resona Perdania', 'Bank Sumitomo Mitsui Indonesia', 'Bank Windu Kentjana International', 'Bank Woori Indonesia');
			/**
			 * Bank Umum Konvensional Asing
			 *
			 * @var array
			 */
			public static $bu_kon_asing = array ('Bank of America', 'Bangkok Bank', 'Bank of China', 'Citibank', 'Deutsche Bank', 'HSBC', 'JPMorgan Chase', 'Standard Chartered', 'The Bank of Tokyo-Mitsubishi UFJ',);


			/**
			 * Bank Umum Syariah Swasta Nasional devisa
			 *
			 * @var array
			 */
			public static $bu_syariah_swasta_nasional_devisa = array ('Bank BNI Syariah', 'Bank Mega Syariah', 'Bank Muamalat Indonesia', 'Bank Syariah Mandiri');

			/**
			 * Bank Umum Syariah Swasta Nasional Non devisa
			 *
			 * @var array
			 */
			public static $bu_syariah_swasta_nasional_nondevisa = array ('BCA Syariah', 'Bank BJB Syariah', 'Bank BRI Syariah', 'Panin Bank Syariah', 'Bank Syariah Bukopin', 'Bank Victoria Syariah');

			/**
			 * Bank Umum Syariah Swasta Nasional Campuran
			 *
			 * @var array
			 */
			public static $bu_syariah_swasta_nasional_campuran = array ('Bank Maybank Syariah Indonesia');

			/**
			 *
			 * Unit Usaha Syariah
			 * Bank Konvensional
			 * Milik Pemerintah
			 *
			 * @var array
			 */
			public static $uu_syariah_pemerintah = array ('Bank BTN Syariah');


			/**
			 *
			 * Bank Umum Syariah Swasta Nasioanl Devisa
			 *
			 * @var array
			 */
			public static $uu_syariah_swasta_devisa = array ('Bank Danamon Syariah', 'CIMB Niaga Syariah', 'BII Syariah', 'OCBC NISP Syariah', 'Bank Permata Syariah');

			/**
			 *
			 * Unit usaha syariah BPD
			 *
			 * @var array
			 */
			public static $uu_syariah_swasta_bpd = array ('Bank Nagari Syariah', 'Bank BPD Aceh Syariah', 'Bank DKI Syariah', 'Bank Kalbar Syariah', 'Bank Kalsel Syariah', 'Bank NTB Syariah', 'Bank Riau Kepri Syariah', 'Bank Sumsel Babel Syariah', 'Bank Sumut Syariah', 'Bank Kaltim Syariah');

			/**
			 * Unit Usaha Syariah Bank Umum Konvensioan Asing
			 *
			 * @var array
			 */
			public static $uu_syariah_swasta_asing = array ('HSBC Amanah');


			public static $semua = array ();

			public static $deposit = array ('Checking account', 'Current account', 'Personal account', 'Transaction deposit', 'Demat account');

			public static $savings_account = array ('Individual Savings Account', 'Time deposit / certificate of deposit', 'Tax-Exempt Special Savings Account', 'Tax-Free Savings Account', 'Money market account');

			public static $other_accounts = array ('Loan account', 'Joint account', 'Low-cost account', 'Nostro and vostro accounts', 'Numbered bank account', 'Negotiable Order of Withdrawal account');

			public function banktypedeposit ()
			{
				 return $this->acak (static::$deposit);
			}

			public function banktypesaving ()
			{
				 return $this->acak (static::$deposit);
			}

			public function banktypeother ()
			{
				 return $this->acak (static::$deposit);
			}

			public function bankaccountname ()
			{
				 $type = array_merge (
						static::$deposit,
						static::$savings_account,
						static::$other_accounts
				 );

				 return $this->acak ($type);
			}

			/**
			 *
			 */
			public function setSemua ()
			{
				 static::$semua = array_merge (
						static::$sentral,
						static::$bu_kon_pemerintah,
						static::$bu_kon_swasta_nas_devisa,
						static::$bu_kon_swasta_nas_nondevisa,
						static::$bu_kon_nas_bpd,
						static::$bu_kon_campuran,
						static::$bu_kon_asing,
						static::$bu_syariah_swasta_nasional_devisa,
						static::$bu_syariah_swasta_nasional_nondevisa,
						static::$bu_syariah_swasta_nasional_campuran,
						static::$uu_syariah_pemerintah,
						static::$uu_syariah_swasta_devisa,
						static::$uu_syariah_swasta_bpd,
						static::$uu_syariah_swasta_asing
				 );
			}

			public function totalbank ()
			{
				 return count ($this->getSemua ());
			}

			/**
			 * @return array
			 */
			public function getSemua ()
			{
				 if (empty(static::$semua))
						$this->setSemua ();

				 return static::$semua;
			}

			/**
			 *
			 */
			public function bankname ()
			{
				 return $this->acak ($this->getSemua ());
			}

			/**
			 *
			 */
			public function banksyariah ()
			{
				 $syariah = array_merge (
						static::$bu_syariah_swasta_nasional_devisa,
						static::$bu_syariah_swasta_nasional_nondevisa,
						static::$bu_syariah_swasta_nasional_campuran,
						static::$uu_syariah_pemerintah,
						static::$uu_syariah_swasta_devisa
				 );

				 return $this->acak ($syariah);
			}

			/**
			 * Mendapatkan Semua Bank di Indonesia
			 *
			 * @return string
			 */
			public function bankindonesia ()
			{

				 return $this->acak ($this->getSemua ());
			}

			/**
			 * @return string
			 */
			public function nasional ()
			{
				 $nasional = array (
						$this->getBuKonNasBpd (),
						$this->getBuKonSwastaNasDevisa ()
				 );

				 return $this->acak ($nasional);
			}

			/**
			 *
			 */
			public function bankunitusaha ()
			{
				 $unit_usaha = array_merge (
						$this->getUuSyariahPemerintah (),
						$this->getUuSyariahSwastaAsing (),
						$this->getUuSyariahSwastaBpd (),
						$this->getUuSyariahSwastaDevisa ()
				 );

				 return $this->acak ($unit_usaha);
			}

			/**
			 * @return string
			 */
			public function konvensional ()
			{
				 $konvensional = array_merge (
						$this->getBuKonPemerintah (),
						$this->getBuKonSwastaNasDevisa (),
						$this->getBuKonSwastaNasNondevisa (),
						$this->getBuKonNasBpd (),
						$this->getBuKonCampuran (),
						$this->getBuKonAsing ()
				 );

				 return $this->acak ($konvensional);
			}


			/**
			 * @param array $bank
			 *
			 * @return string
			 */
			protected function acak (array $bank)
			{
				 return $this->generator->randomElement ($bank);
			}

			/**
			 *
			 */
			public function asing ()
			{

			}

			/**
			 * @return array
			 */
			public function getBuKonAsing ()
			{
				 return static::$bu_kon_asing;
			}

			/**
			 * @return array
			 */
			public function getBuKonCampuran ()
			{
				 return static::$bu_kon_campuran;
			}

			/**
			 * @return array
			 */
			public function getBuKonNasBpd ()
			{
				 return static::$bu_kon_nas_bpd;
			}

			/**
			 * @return array
			 */
			public function getBuKonPemerintah ()
			{
				 return static::$bu_kon_pemerintah;
			}

			/**
			 * @return array
			 */
			public function getBuKonSwastaNasDevisa ()
			{
				 return static::$bu_kon_swasta_nas_devisa;
			}

			/**
			 * @return array
			 */
			public function getBuKonSwastaNasNondevisa ()
			{
				 return static::$bu_kon_swasta_nas_nondevisa;
			}

			/**
			 * @return array
			 */
			public function getBuSyariahSwastaNasionalCampuran ()
			{
				 return static::$bu_syariah_swasta_nasional_campuran;
			}

			/**
			 * @return array
			 */
			public function getBuSyariahSwastaNasionalDevisa ()
			{
				 return static::$bu_syariah_swasta_nasional_devisa;
			}

			/**
			 * @return array
			 */
			public function getBuSyariahSwastaNasionalNondevisa ()
			{
				 return static::$bu_syariah_swasta_nasional_nondevisa;
			}

			/**
			 * @return array
			 */
			public function getUuSyariahPemerintah ()
			{
				 return static::$uu_syariah_pemerintah;
			}

			/**
			 * @return array
			 */
			public function getUuSyariahSwastaAsing ()
			{
				 return static::$uu_syariah_swasta_asing;
			}

			/**
			 * @return array
			 */
			public function getUuSyariahSwastaBpd ()
			{
				 return static::$uu_syariah_swasta_bpd;
			}

			/**
			 * @return array
			 */
			public function getUuSyariahSwastaDevisa ()
			{
				 return static::$uu_syariah_swasta_devisa;
			}


			/**
			 * @return array
			 */
			public function getSentral ()
			{
				 return static::$sentral;
			}


	 }