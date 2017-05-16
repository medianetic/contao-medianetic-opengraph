# OpenGraph Tags for Contao 3/4

Extension for Contao CMS 3/4 to embed opengraph tags in pages.

### Installing

- Copy 'medianetic-opengraph' folder to system/modules
- Open the Contao Installtool to import the sql structure
- Contao 4 only: Add the following line at the end of the bundles definition  at app/AppKernel.php

```php
bundles = [
...
new Contao\CoreBundle\HttpKernel\Bundle\ContaoModuleBundle('medianetic-opengraph', __DIR__),

]

```

## Authors

* **Nick Weschkalnies** 

## License

This project is licensed under the MIT License

