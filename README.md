# TriggMine-SDK-PHP
## Description
TriggMine is an automated email marketing platform, tailored to the eCommerce needs. We've harnessed the power of behavioral-based email workflows! In real time, our system automatically tracks customers behavior and separates them into highly relevant, behavior-focused segments and sends them highly personalized emails.

It takes less than 30 minutes to launch fully automated email campaign! Now marketers can finally watch your email open rates, clicks and sales sky rocket, without hiring tech experts or touching a single line of code!

TriggMine web site: http://www.triggmine.com/

## Composer
To install TriggMine SDK via Composer, run the following command:

`$ composer require triggmine/triggmine-sdk-php`

## How-to
TriggMine API сan take 8 types of events. All events models send through SendEvent method.

#### Event list with model type 
**Event type** | **Model** |
--|--|
Registration | ProspectEvent |
Cart | CartEvent |
History | HistoryEvents |
Login | LoginEvent |
Logout | LogoutEvent |
Navigation | NavigationEvent |
Order | OrderEvent |
Diagnostic | PluginDiagnosticEvent |


### Example
```PHP
require 'vendor/autoload.php';

use TriggMineSDK\Models\ProspectEvent;
use TriggMineSDK\Events\TriggMineApi;

//Instance TriggMine API with your ApiKey and ApiUrl
//Your ApiKey && ApiUrl > https://client.triggmine.com.ua/login > Settings > Integration 
$client = new TriggMineApi( 'YOUR API URL', 'YOUR API KEY' );

//Registration event example
$dataCustomer = new ProspectEvent;
$dataCustomer->device_id             = "4c3d48512d48b2603092b5a45ba74c8c";
$dataCustomer->device_id_1           = "465060737";
$dataCustomer->customer_id           = 567;
$dataCustomer->customer_first_name   = "John";
$dataCustomer->customer_last_name    = "Doe";
$dataCustomer->customer_email        = "johndoe@triggmine.com";
$dataCustomer->customer_date_created = "2017-06-08";

$response = $client->SendEvent( $dataCustomer );
```

### Models fields description
**Field** | **Description**|
--|--|
device_id|Device hash FingerprintJS*|
device_id_1|Device hash ClientJS*|
customer_id|Customer Id*|
customer_first_name|Customer Name|
customer_last_name|Customer Last Name|
customer_email|Customer Email|
customer_date_created|Customer Registration Date|
order_id|Order Id|
order_status|Order status Pending, Paid, Closed|
price_total|Total amount of order|
product_categories|Item categories|
product_description|Item description|
product_id|Item ID|
product_image|Item full path image|
product_name|Item name|
product_price|Item price|
product_qty|Item quantity|
product_sku|Item vendor code| 
product_totalVal|Item summary price|
product_url|Item full path url|
qty_total|Order quantity|
user_agent|User-Agent header. Optional parameter|

Device hash ClientJS*, FingerprintJS*- We recommend to use ClientJS and FingerprintJS library for definition unique hash of client device and software. It's need for identify client without his loging.

Sources
https://clientjs.org/
https://valve.github.io/fingerprintjs/

Customer Id* - Unique Id of a Customer in your DB.