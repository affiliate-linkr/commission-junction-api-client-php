# commission-junction-api-client-php
Commission Junction (now CJ Affiliate) PHP Client API Library

# Requirements

* PHP 5.3.3+

# Installing

# - Download and run:
#
```
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```
#
# - To run unit tests, you first need to add some real API credentials

 for full functional tests to work with.
 Create a file in your home directory as 
 `~/.affiliatelinkr/cj` 
 and it should contain:
#
```
[Default]
CJ_DEVELOPER_KEY = THISISMYKEY
CJ_WEBSITE_ID = THISISMYSITE

```
#
# - Where the `THISISMYKEY` and `THISISMYSITE` have been replaced with your actual devleoper key and web site id.
#
# - Then to run the tests:
#
```
cp phpunit.xml.dist phpunit.xml
cp phpunit.functional.xml.dist phpunit.functional.xml
vendor/bin/phpunit
```
