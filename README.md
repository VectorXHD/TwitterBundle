# TwitterBundle
Ce bundle permet d'utiliser l'api de twitter

## Installation

```shell
$ composer require vectorxhd/twitter-bundle
```

## Configuration
```php
<?php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = [
        // ...
        new VectorXHD\TwitterBundle\VectorXHDTwitterBundle(),
    ];
}
```

```yaml
# app/config/config.yml
vectorxhd_twitter:  
    consumer_key: ~  
    consumer_secret: ~  
    access_token: ~  
    access_token_secret: ~
```
Pour récupérer ses information il faut crée une application [ici](https://apps.twitter.com/)

## Méthodes disponibles

 - `getTwitterOAuth` permet de récupérer une instance de TwitterOAuth
 - `updateStatus($status)` permet de changer son status
 - `getTimeline($count = 25)` permet de récupérer des élément de sa timeline
 - `getUserTimelineByScreenName($screenName, $count = 25)` permet de récupérer des éléments de la timeline d'un utilisateur

## Todo

 - Ajouter des test
 - Tester sur plusieurs version de symfony
 - Ajouter plus de méthodes
