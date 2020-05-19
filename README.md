# Location API
<p align="center">
<img alt="GitHub followers" src="https://img.shields.io/github/followers/encinecarlos?label=Follow&style=for-the-badge">
<img alt="GitHub" src="https://img.shields.io/github/license/encinecarlos/location_api?style=for-the-badge">
<!--<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>-->
</p>

## About Location API

A simple API that provide information about countries, states in countries and cities in JSON format through some endpoints.

## Country Endpoint

~~~
GET /api/countries
~~~

Provide a list of countries around the world paginated with 10 records per page

~~~
GET /api/countries/{id}
~~~

Search a specific country by id and return the result to user

## State Endpoint

~~~
GET /api/states
~~~

Provide a list of states/provinces of all countries paginated with 10 records per page

~~~
GET /api/states/{id}
~~~

Search a specific state by id and return the result to user


## cities Endpoint

~~~
GET /api/cities
~~~

Provide a list of cities of all countries paginated with 10 records per page

~~~
GET /api/cities/{id}
~~~

Search a specific city by id and return the result to user
