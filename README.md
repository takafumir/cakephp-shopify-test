#### This is a repository for testing CakePHP-Shopify-Plugin with CakePHP 3.

The following explanation is how to set up CakePHP-Shopify-Plugin with CakePHP 3. CakePHP-Shopify-Plugin is a plugin for CakePHP 2.


#### 1. Create a new CakePHP 3 project.

```
$ composer create-project --prefer-dist cakephp/app shopify_test
$ cd shopify_test
```


#### 2. Generate Shopify plugin for CakePHP 3.

```
$ bin/cake bake plugin Shopify
```

This will generate the follwing code.

- composer.json
```
"Shopify\\": "./plugins/Shopify/src"
"Shopify\\Test\\": "./plugins/Shopify/tests"
```

- config/bootstrap.php
```
Plugin::load('Shopify', ['bootstrap' => false, 'routes' => true]);
```


#### 3. Download & Install CakePHP-Shopify-Plugin.

Download https://github.com/cmcdonaldca/CakePHP-Shopify-Plugin and copy the files into plugins/Shopify like following. See this repository structure also.

- plugins/Shopify/config/shopify.php
- plugins/Shopify/src/Controller
- plugins/Shopify/src/View


#### 4. Refresh autoload path.

```
$ composer dumpautoload
```


#### 5. Add code to load Shopify component.

- PagesController.php
```
public $components = ['Shopify.ShopifyAuth'];
```

- ShopifyAuthComponent.php
```
namespace Shopify\Controller\Component;

use Cake\Controller\Component;
```

#### Other errors occur.

That's it. This way fixes errors of 'component not be found' but other errors will occure like followings. 

- Fatal error: Call-time pass-by-reference has been removed in /path/to/shopify_test/plugins/Shopify/src/Controller/Component/ShopifyAuthComponent.php on line 112

This code is old.

- SessionComponent could not be found. 

CakePHP 3 abolished Session component.

I reccomend that CakePHP-Shopify-Plugin should not be used with CakePHP 3.
