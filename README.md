# ExtraGeneratorBundle

## Introduction

This bundle customize the default symfony generator to fits with Bootstrap styling. It also adds knp paginator and font awesome icons.

### Features

- Pagination
- Icons
- Bootstrap Styling

## Installing

### Add composer

Add the dependency to your composer.json

```yml
    "require": {
        ...
	    "dextervip/extra-generator-bundle" : "dev-master"
	}
```

### Add bundle class in kernel

Register the bundle class and its dependencies in your AppKernel.php
```php
    public function registerBundles()
    {
        $bundles = array(
        ...
        new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
        new Citrax\Bundle\ExtraGeneratorBundle\CitraxExtraGeneratorBundle(),
        ...
        );
    }
```


 All done!



### Extra config

??

## License

MIT

