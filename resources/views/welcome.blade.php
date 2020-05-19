<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Location API</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="{{ asset('js/highlight/styles/dracula.css') }}">
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-custom">
    <div class="container">
        <a href="#" class="navbar-brand text-white">Location<b>API</b></a>
        <div class="pull-right">
            <a href="https://github.com/encinecarlos/location_api" target="_blank" class="text-white">
                <i class="lab la-2x la-github"></i>
            </a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row mt-5 text-center">
        <div class="col-12">
            <h1 class="text-purple">Welcome to Location<b>API</b></h1>
            <p class="text-purple">
                A simple API that provide information about countries, states in countries and cities in JSON format through some endpoints.
            </p>
            <p class="text-center">
                <img alt="GitHub followers" src="https://img.shields.io/github/followers/encinecarlos?label=Follow&style=for-the-badge">
                <img alt="GitHub" src="https://img.shields.io/github/license/encinecarlos/location_api?style=for-the-badge">
            </p>
        </div>
    </div>

    <div class="row mt-2">
        {{--<h4 class="text-purple">Simple request to API</h4>--}}
        <div class="col-sm-12 col-md-6">
            <pre>
                <code class="language-bash">
    # Simple request to API
    GET https://location.carlosencine.com/api/countries/100
                </code>
            </pre>
        </div>
        {{--<h4 class="text-purple">The API Response</h4>--}}
        <div class="col-sm-12 col-md-5">
            <pre>
                <code class="json">
// The API Response
{
    "data": {
        "id": 100,
        "name": "Iceland",
        "sortname": "IS",
        "phonecode": 354
    }
}
                </code>
            </pre>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-purple">Get All Countries</h2>
            <p class="text-purple">
                This endpoint provide all countries around the world in a Json format and paginated with 10 records per page.
            </p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-12 col-md-6">
            <pre>
                <code class="language-bash">
    GET https://location.carlosencine.com/api/countries
                </code>
            </pre>
        </div>
        <div class="col-sm-12 col-md-5">
            <pre class="code-box">
                <code class="language-json overflow-auto">
{
  "data": {
    "countries": [
      {
        "id": 1,
        "sortname": "AF",
        "name": "Afghanistan",
        "phonecode": 93
      },
      {
        "id": 2,
        "sortname": "AL",
        "name": "Albania",
        "phonecode": 355
      },
      {
        "id": 3,
        "sortname": "DZ",
        "name": "Algeria",
        "phonecode": 213
      },
      {
        "id": 4,
        "sortname": "AS",
        "name": "American Samoa",
        "phonecode": 1684
      },
      {
        "id": 5,
        "sortname": "AD",
        "name": "Andorra",
        "phonecode": 376
      },
      {
        "id": 6,
        "sortname": "AO",
        "name": "Angola",
        "phonecode": 244
      },
      {
        "id": 7,
        "sortname": "AI",
        "name": "Anguilla",
        "phonecode": 1264
      },
      {
        "id": 8,
        "sortname": "AQ",
        "name": "Antarctica",
        "phonecode": 0
      },
      {
        "id": 9,
        "sortname": "AG",
        "name": "Antigua And Barbuda",
        "phonecode": 1268
      },
      {
        "id": 10,
        "sortname": "AR",
        "name": "Argentina",
        "phonecode": 54
      }
    ]
  },
  "links": {
    "first": "http://location.carlosencine.com/api/countries?page=1",
    "last": "http://location.carlosencine.com/api/countries?page=25",
    "prev": null,
    "next": "http://location.carlosencine.com/api/countries?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 25,
    "path": "http://location.carlosencine.com/api/countries",
    "per_page": 10,
    "to": 10,
    "total": 246
  }
}
                </code>
            </pre>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-12 col-md-12">
            <h2 class="text-purple">Get a Country</h2>
            <p class="text-purple">
                Get Information about a specific country by providing an ID of the country in the request.
            </p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-12 col-md-6">
            <pre>
                <code class="language-bash">
    GET https://location.carlosencine.com/api/countries/210
                </code>
            </pre>
        </div>
        <div class="col-sm-12 col-md-5">
            <pre class="code-box">
                <code class="language-json overflow-auto">
{
    "data": {
        "id": 210,
        "name": "Swaziland",
        "sortname": "SZ",
        "phonecode": 268
    }
}
                </code>
            </pre>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-12 col-md-12">
            <h2 class="text-purple">Get all States</h2>
            <p class="text-purple">
                Get all states of all countries.
            </p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-12 col-md-6">
            <pre>
                <code class="language-bash">
    GET https://location.carlosencine.com/api/states
                </code>
            </pre>
        </div>
        <div class="col-sm-12 col-md-5">
            <pre class="code-box">
                <code class="language-json overflow-auto">
{
  "data": {
    "states": [
      {
        "id": 1,
        "name": "Andaman and Nicobar Islands",
        "country": "India"
      },
      {
        "id": 2,
        "name": "Andhra Pradesh",
        "country": "India"
      },
      {
        "id": 3,
        "name": "Arunachal Pradesh",
        "country": "India"
      },
      {
        "id": 4,
        "name": "Assam",
        "country": "India"
      },
      {
        "id": 5,
        "name": "Bihar",
        "country": "India"
      },
      {
        "id": 6,
        "name": "Chandigarh",
        "country": "India"
      },
      {
        "id": 7,
        "name": "Chhattisgarh",
        "country": "India"
      },
      {
        "id": 8,
        "name": "Dadra and Nagar Haveli",
        "country": "India"
      },
      {
        "id": 9,
        "name": "Daman and Diu",
        "country": "India"
      },
      {
        "id": 10,
        "name": "Delhi",
        "country": "India"
      }
    ]
  },
  "links": {
    "first": "http://location.carlosencine.com/api/states?page=1",
    "last": "http://location.carlosencine.com/api/states?page=409",
    "prev": null,
    "next": "http://location.carlosencine.com/api/states?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 409,
    "path": "http://location.carlosencine.com/api/states",
    "per_page": 10,
    "to": 10,
    "total": 4085
  }
}
                </code>
            </pre>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-12 col-md-12">
            <h2 class="text-purple">Get a State</h2>
            <p class="text-purple">
                Get information about a state by providing an ID in the request
            </p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-12 col-md-6">
            <pre>
                <code class="language-bash">
    GET https://location.carlosencine.com/api/states/10
                </code>
            </pre>
        </div>
        <div class="col-sm-12 col-md-5">
            <pre class="code-box">
                <code class="language-json overflow-auto">
{
  "data": {
    "id": 10,
    "name": "Delhi",
    "country": "India"
  }
}
                </code>
            </pre>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-12 col-md-12">
            <h2 class="text-purple">Get all Cities</h2>
            <p class="text-purple">
                Get all cities in all countries.
            </p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-12 col-md-6">
            <pre>
                <code class="language-bash">
    GET https://location.carlosencine.com/api/cities
                </code>
            </pre>
        </div>
        <div class="col-sm-12 col-md-5">
            <pre class="code-box">
                <code class="language-json overflow-auto">
{
  "data": [
    {
      "id": 1,
      "name": "Bombuflat",
      "state": "Andaman and Nicobar Islands",
      "country": "India"
    },
    {
      "id": 2,
      "name": "Garacharma",
      "state": "Andaman and Nicobar Islands",
      "country": "India"
    },
    {
      "id": 3,
      "name": "Port Blair",
      "state": "Andaman and Nicobar Islands",
      "country": "India"
    },
    {
      "id": 4,
      "name": "Rangat",
      "state": "Andaman and Nicobar Islands",
      "country": "India"
    },
    {
      "id": 5,
      "name": "Addanki",
      "state": "Andhra Pradesh",
      "country": "India"
    },
    {
      "id": 6,
      "name": "Adivivaram",
      "state": "Andhra Pradesh",
      "country": "India"
    },
    {
      "id": 7,
      "name": "Adoni",
      "state": "Andhra Pradesh",
      "country": "India"
    },
    {
      "id": 8,
      "name": "Aganampudi",
      "state": "Andhra Pradesh",
      "country": "India"
    },
    {
      "id": 9,
      "name": "Ajjaram",
      "state": "Andhra Pradesh",
      "country": "India"
    },
    {
      "id": 10,
      "name": "Akividu",
      "state": "Andhra Pradesh",
      "country": "India"
    }
  ],
  "links": {
    "first": "http://location.carlosencine.com/api/cities?page=1",
    "last": "http://location.carlosencine.com/api/cities?page=4794",
    "prev": null,
    "next": "http://location.carlosencine.com/api/cities?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 4794,
    "path": "http://location.carlosencine.com/api/cities",
    "per_page": 10,
    "to": 10,
    "total": 47940
  }
}
                </code>
            </pre>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-12 col-md-12">
            <h2 class="text-purple">Get a City</h2>
            <p class="text-purple">
                Get information about a specific city by providing an ID in the request
            </p>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-12 col-md-6">
            <pre>
                <code class="language-bash">
    GET https://location.carlosencine.com/api/cities/1000
                </code>
            </pre>
        </div>
        <div class="col-sm-12 col-md-5">
            <pre class="code-box">
                <code class="language-json overflow-auto">
{
  "data": {
    "id": 1000,
    "name": "Pardi",
    "state": "Gujarat",
    "country": "India"
  }
}
                </code>
            </pre>
        </div>
    </div>

</div>
<footer class="footer bg-custom text-center">
    <span class="mb-0">{{ \Carbon\Carbon::now()->format('Y') }} | Created by <a href="https://carlosencine.com">Carlos Encine</a></span>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/highlight/highlight.pack.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
