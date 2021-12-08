|Latest Stable Version| |License|

.. |Latest Stable Version| image:: https://poser.pugx.org/neos/composer-plugin/v/stable
   :target: https://packagist.org/packages/neos/composer-plugin
   :alt: Latest Stable Version
.. |License| image:: https://poser.pugx.org/neos/composer-plugin/license
   :target: https://packagist.org/packages/neos/composer-plugin
   :alt: License

--------------------
Flow Composer Plugin
--------------------

This package provides a custom installer plugin for Composer which handles the
specialities of installing Flow packages.

It will handle packages that have a `type` of `neos-*` or `typo3-flow-*`.

Package package name
--------------------

The Flow package name for a given package is determined like this, on order:

- composer manifest `extras.installer-name`
- first PSR-0 autoloading namespace
- first PSR-4 autoloading namespace
- Composer manifest `extras.neos.package-key`
- Composer package name (Does not work in all cases but common cases should be fine – `foo/bar` => `Foo.Bar`, `foo/bar-baz` => `Foo.Bar.Baz`)

Installation location
---------------------

Where the package will be installed, depends on the Composer type suffix:

- `plugin` go into `Packages/Plugins/{flowPackageName}`
- `site` go into `Packages/Sites/{flowPackageName}`
- `boilerplate` go into `Packages/Boilerplates/{flowPackageName}`
- `build` go into `Build/{flowPackageName}`
- `package` go into `Packages/Application/{flowPackageName}`
- `package-collection` go into `Packages/{flowPackageName}`
- `*` go into `Packages/{camelCasedType}/{flowPackageName}`
