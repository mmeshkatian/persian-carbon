# Persian-carbon
	
[![Total Downloads](https://poser.pugx.org/mmeshkatian/persian-carbon/downloads.png)](https://packagist.org/packages/mmeshkatian/persian-carbon)
[![Latest Stable Version](https://poser.pugx.org/mmeshkatian/persian-carbon/v/stable)](https://packagist.org/packages/mmeshkatian/persian-carbon)
[![License](https://poser.pugx.org/mmeshkatian/persian-carbon/license)](https://packagist.org/packages/mmeshkatian/persian-carbon)
[![Awesome Laravel](https://img.shields.io/badge/Awesome-Laravel-brightgreen.svg)](https://github.com/mmeshkatian/persian-carbon)

A simple wrapper to convert Carbon dates to jalali date.

its uses [morilog/jalali](https://github.com/morilog/jalali) package
## Requirements

- PHP >= 7.0.0
- Laravel >= 5.4.0
 
## Installation

Install the package through [Composer](http://getcomposer.org/). 

Run the Composer require command from the Terminal:

    composer require mmeshkatian/persian-carbon
    
If you're using Laravel > 5.5, this is all there is to do. 

Should you still be on version 5.4 of Laravel, the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

	Mmeshkatian\Ariel\PersianCarbonServiceProvider::class

Now you're ready to start using the persian carbon in your application.

## Usage
you can simply convert Carbon to persian date

```php
  <?php
    echo now()->toPersian()->format("Y-m-d")
```

Made With ❤️
