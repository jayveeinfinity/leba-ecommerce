<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Custom CSS and Boostrap -->
    <!-- <link rel="icon" type="image/png" href="{{ asset('storage/images/brands/logo.png') }}"> -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

    <!-- Javascripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ mix('/js/manifest.js') }}" defer></script>
    <script src="{{ mix('/js/vendor.js') }}" defer></script>
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>