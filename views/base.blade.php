<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('browsertitle')</title>
      <!--<link rel="stylesheet" href="css/style.css" /> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/default.css" />
    <link rel="stylesheet" href="/assets/css/default.date.css" />
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css" />
    @yield('css')

    <script type="text/javascript" src="/assets/js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>


    <script type="text/javascript" src="/assets/js/picker.js"></script>
    <script type="text/javascript" src="/assets/js/picker.date.js"></script>
    <script type="text/javascript" src="/assets/js/picker.time.js"></script>
    <script type="text/javascript" src="/assets/js/legacy.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
</head>


<body>

    @include('topnav')
    @yield('outsidecontanier')
    <div class="container">
        <div class="row">
            <br /><br />
            @include('errormessage')
        </div>

@yield('content')
    </div>

    <div class="row footer-background">
        <div class="col-md-3 ">
          <div class="padding-left-8px">
            <h4>Contact Us</h4>
            Rua Evandro Lins e Silva, 440<br />
            Barra da Tijuda - Rio de Janeiro <br />
            22430-470<br />
            (21) 3232-4421
          </div>

        </div>
        <div class="col-md-3 ">

        </div>
        <div class="col-md-6">
          <img src="/assets/imgs/map.png" class="pull-right" style="width:40%"/>
        </div>
    </div>







<script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
<script   src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"   ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.js"> </script>
@yield('bottomjs')
</body>

</html>
