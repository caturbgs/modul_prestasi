
## CUSTOM GUZZLE XHTTP REQUEST (V.6)
This is a custom library for XHTTP REQUEST using guzzle (http://docs.guzzlephp.org/en/stable/) for Codeigniter(http://codeigniter.com) Framework. its contain async request (GET, POST, PUT, DEL) with custom response

this system build for siakti system of state polytechnic of jakarta 

### DEPENDENCIES
This is require guzzle http 6, so please install guzzle first before use this library (See http://docs.guzzlephp.org/en/stable/ for installation guide). then you can use this library

* Clone or download this repository
* Plate every file based on your project directory
* make your application/config.php load the vendor 
```
$config['composer_autoload'] = FCPATH.'vendor/autoload.php';
```
[BONUS] - its setting for base_url if youre using port in local server, base url will be recognize it
```
$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://".$_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
```
* then set up your application/autoload.php load your custom guzzle library everytime
```
$autoload['libraries'] = array( ..... ,'Customguzzle');
```

* BOOM Happy use it


#### Contact
if you're got some error or fault from this libary please report with open issue or you can contact me at iqbalmaulana027@gmail.com

Best regards