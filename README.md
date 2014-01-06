## README

###Apa ini ?
Generate Data Faker ini berbasis pada `fzaninotto/faker: 1.4.*@dev`

###Instalasi
 - Tambahkan pada composer.json anda `"emayk/faker": "dev-master"`
 - `composer install` atau `compose update`

##### Penggunaan


```php
$faker = new \Emayk\Faker\Factory();
$bank_account = array();

for ($i=0; $i <= 15; $i++) {
		$account_name = $faker->unique()->bankaccountname;
		$account = array('name' => $account_name,
			 'info' => "Info {$account_name}"
		);
		$bank_account[] = array_merge($account,$faker->fillattributes);
 }
```

### Extend `fzaninotto/faker`

```php
$bankaccountname // echo
```

untuk `$bankaccountname` maximal 15

## Lainnya :
- [Faker](https://github.com/fzaninotto/Faker)
- [https://github.com/bobthecow/Faker](https://github.com/bobthecow/Faker)

