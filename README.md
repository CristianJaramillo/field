## Laravel Field Package - For Laravel 4.2

## Installation

Loading a package from a VCS repository:

```
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/CristianJaramillo/field"
        }
    ],
    "require-dev": {
    	"cristianjaramillo/field": "dev-master"
    }
}
```

After updating composer, add the ServiceProvider to the providers array in app/config/app.php

```php
	'CristianJaramillo\Field\ServiceProvider',
```