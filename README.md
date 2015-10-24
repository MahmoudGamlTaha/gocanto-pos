##gocanto-pos
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

***gocanto-pos*** is a complete point of sale environment built in Codeigniter 2.*. It has the capability of working on small, medium of big stores. The vision was gave something stable to the Codeigniter comunity, as the PHP as well. 

***Felt free to download it and use it!***

##Configuration File
Config.php is the main file that the application has, so You will be able to customize the site as much as yo want in there. It can be found in:

```
Application/Config/config.php
```

##DataBase configuration File
Config.php is the main file that the application has for controling it information, so You will be able to customize the conection info in there and ready to go!

```
Application/Config/database.php
```

***Local conection validation***

```
if(preg_match('/^(localhost|127\.\d\.\d\.\d|192\.168(\.\d{1,3}){2})/',$_SERVER['SERVER_NAME'])){
  local
}else{
  online
}
```

***Multi Store Array***

```
$db[$group_name]['pconnect'] = $db['default']['pconnect'];
$db[$group_name]['db_debug'] = $db['default']['db_debug'];
$db[$group_name]['cache_on'] = $db['default']['cache_on'];
$db[$group_name]['cachedir'] = $db['default']['cachedir'];
$db[$group_name]['char_set'] = $db['default']['char_set'];
$db[$group_name]['dbcollat'] = $db['default']['dbcollat'];
$db[$group_name]['swap_pre'] = $db['default']['swap_pre'];
$db[$group_name]['autoinit'] = $db['default']['autoinit'];
$db[$group_name]['stricton'] = $db['default']['stricton'];
```

##Features
* Customized Reports
* Closing Report
* Inventory Control
* Retail work orders control
* Multi Store
* Remore inventory control
* Sales
* Stores Settings
* Multi Store Settings
* Items control
* Gift cards control
* Backup tools

## Contact
* http://g-ocanto.com
* email: gustavoocanto@gmail.com
* Twitter: [@gocanto](https://twitter.com/gocanto "gocanto on twitter")

