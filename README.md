# A Simple Method to Make a Data Mapper in PHP
By this package we can map data from one to another. For example we can create a time mapper for map `1m` to `1 minute` and vise versa, or map `3d` to `3 days`. Thereby when we have `1m`, we will be able to reach `1 minute` and so on.

## Install
 ```
  $ composer require a-afsharfarnia/data-mapper
 ```

### How to use 
After installing the package, the only thing you have to do is creating your mapper classes. Imagine you want to have following mappers in your projects:

- Time Mapper (e.g. map `1m` to `1 minute` and vise versa)
- Language Mapper (e.g. map `en` to `english` and vise versa)

So, you must create a class for each mapper. You can have a look on `TimeMapper` and `LanguageMapper` classes as a sample in `/src/samples`.

As you can see in samples, each mapper class is extended of `Afsharfarnia\DataMapper\mappers\Mapper`. Then in each mapper class you must define a `$mapper` static property which includes mapper data.

``` php
    public static $mapper = [
        "1m" => "1minute",
        "30m" => "30minutes",
        "1h" => "1hour",
        "8h" => "8hours",
        "12h" => "12hours",
        "1d" => "1day",
        "3d" => "3days",
        "1w" => "1week",
        "1M" => "1month"
    ];
```

After creating your mapper classes, you can use them in your projects as following:
```php
    echo TimeMapper::mapData("1m");               --> result: 1 minute   (to map)
    echo TimeMapper::unmapData("12hours");        --> result: 12h        (to unmap)
```
