<?php
	 namespace Emayk\Faker;

	 use \Faker\Factory as FakeFactory;

	 /**
		* @property string name
		* @property string firstName
		* @property string lastName
		*
		* @property string citySuffix
		* @property string streetSuffix
		* @property string buildingNumber
		* @property string city
		* @property string streetName
		* @property string streetAddress
		* @property string postcode
		* @property string address
		* @property string country
		* @property float  latitude
		* @property float  longitude
		*
		* @property string phoneNumber
		*
		* @property string company
		* @property string companySuffix
		*
		* @property string creditCardType
		* @property string creditCardNumber
		* @property string creditCardExpirationDate
		* @property string creditCardExpirationDateString
		* @property string creditCardDetails
		* @property string bankAccountNumber
		*
		* @property string word
		* @method string words
		* @method string sentence
		* @method string sentences
		* @method string paragraph
		* @method string paragraphs
		* @method string text
		*
		* @property string email
		* @property string safeEmail
		* @property string freeEmail
		* @property string companyEmail
		* @property string freeEmailDomain
		* @property string safeEmailDomain
		* @property string userName
		* @property string domainName
		* @property string domainWord
		* @property string tld
		* @property string url
		* @property string ipv4
		* @property string ipv6
		*
		* @property int    unixTime
		* @property string dateTime
		* @property string dateTimeAD
		* @property string iso8601
		* @property string dateTimeThisCentury
		* @property string dateTimeThisDecade
		* @property string dateTimeThisYear
		* @property string dateTimeThisMonth
		* @property string amPm
		* @property int    dayOfMonth
		* @property int    dayOfWeek
		* @property int    month
		* @property string monthName
		* @property int    year
		* @property int    century
		* @property string timezone
		* @method string date
		* @method string time
		* @method string dateTimeBetween
		*
		* @property string md5
		* @property string sha1
		* @property string sha256
		* @property string locale
		* @property string countryCode
		* @property string languageCode
		* @method boolean boolean
		*
		* @property int    randomDigit
		* @property int    randomDigitNotNull
		* @property string randomLetter
		* @method int randomNumber
		* @method mixed randomKey
		* @method int numberBetween
		* @method float randomFloat
		* @method string randomElement
		* @method string numerify
		* @method string lexify
		* @method string bothify
		* @method string toLower
		* @method string toUpper
		* @method mixed optional
		* @method UniqueGenerator unique
		*
		* @property string userAgent
		* @property string chrome
		* @property string firefox
		* @property string safari
		* @property string opera
		* @property string internetExplorer
		*
		* @property string uuid
		*
		* @property string mimeType
		* @property string fileExtension
		*
		* @property string hexcolor
		* @property string safeHexColor
		* @property string rgbcolor
		* @property string rgbColorAsArray
		* @property string rgbCssColor
		* @property string safeColorName
		* @property string colorName
		* @property string obat
		* @property string namakain
		* @property string jeniskain
		* @property string produk
		* @property string produkname
		* @property string negara
		*
		* @property string bankindonesia
		* @property mixed  provinsi
		* @property mixed  kota
		* @property mixed  fillattributes
		* @property mixed  bankaccountname
		*
		*
		*/
	 class Factory
	 {

			/**
			 * @var
			 */
			protected $generator;
			/**
			 * @var array
			 */
			protected $listprovider = array (
				 'Kain', 'Produk','Address','Bank'
			);

			/**
			 * Mendaftarkan Provider
			 */
			public function  __construct ()
			{
				 $this->registerProviders ();
			}

			/**
			 *
			 */
			protected function registerProviders ()
			{
				 $generator = FakeFactory::create ();
				 foreach ($this->listprovider as $provider) {
						$providerClassName = $this->findProviderClassname ($provider);
						$generator->addProvider (new $providerClassName($generator));

				 }
				 $this->generator = $generator;
			}

			/**
			 * @param $provider
			 *
			 * @return string
			 */
			protected function findProviderClassname ($provider)
			{
				 $providerClass = 'Emayk\Faker\\' . sprintf ('Provider\id_ID\%s', $provider);
				 if (class_exists ($providerClass, true)) {
						return $providerClass;
				 }
			}

			/**
			 * @return \Faker\Generator
			 */
			public function getGenerator ()
			{
				 return $this->generator;
			}


			/**
			 * @param $attribute
			 *
			 * @return mixed
			 */
			public function __get ($attribute)
			{
				 return $this->generator->format ($attribute);
			}

			/**
			 * @param $method
			 * @param $attributes
			 *
			 * @return mixed
			 */
			public function __call ($method, $attributes)
			{
				 return $this->generator->format ($method, $attributes);
			}

	 }