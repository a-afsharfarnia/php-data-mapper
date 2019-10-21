# A Simple Method to Make a Data Mapper in PHP
In most projects, we have to map data to other cases. For example we want to map `1m` to `1 minute` or `3d` to `3 days`.

This package is a data mapper and we can create our mapper based on that very easily.

## Install
 ```
  $ composer require a-afsharfarnia/data-mapper
 ```

### How to use 
You can find samples of using this package in `/src/samples`. You can have a look on `TimeMapper` and `LanguageMapper` classes.

In fact, in your project, for each map data, you must create a class which is extended of `Afsharfarnia\DataMapper\mappers\Mapper` of this package. Then in each class you must define a `$mapper` static property which includes its mapper data. 