<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>The Gender Directory</title>

    <!-- Styles -->
    <link href="{{ asset('assets/materialize/css/materialize.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link rel="stylesheet" href="https://use.typekit.net/hew0mbk.css"> --}}

    <!-- Js -->
    <script src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: elza, sans-serif;
            font-style: normal;
            /* font-weight: 250; */
        }

        hr {
            margin: 20px 0px 20px 0px;

        }

        .collection {
            padding: 0;
            margin: 0;
            border: 0;
        }

        .collection-header {
            font-weight: bold;
        }


    </style>

</head>
<body>
    <div class="container">


        <div class="row center-align">
            <header>
                <div class="col l2 m3 s12">
                    <img src="{{ asset('assets/images/logo.png') }}" width="128" height="128" alt="Gender Directory Logo" />
                </div>
                <div class="col l10 m9 s12">
                    <h3><em>The</em> Gender Directory</h3><em>Your gender-affirming provider directory</em>
                    <p>
                        <a href="/">
                            <h5>Home</h5>
                        </a>
                    </p>
                </div>
            </header>
        </div>

        <hr />
        <!-- InstanceBeginEditable name="Body" -->
        <div class="row">
            <div class="col s12">
                <h5>1 result found for
                    <strong style="border-bottom: 1px solid">
                        <script>
                            const params = new URLSearchParams(location.search);
                            document.write(params.get('q'));
                        </script>
                    </strong>
                    on
                    <script>
                        document.write(params.get('c'));
                    </script>
                </h5>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <div class="card transparent darken-1">
                    <div class="card-content">
                        <a href="{{ route('search-data') }}">Elda L. Fisher, MD, FACS</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- InstanceEndEditable -->
        <hr />

        <div class="row center-align">
            <footer>
                <div class="col s4"><a>Sign Up</a> or <a>Login</a></div>
                <div class="col s4"><a>Are you a provider?</a></div>
                <div class="col s4"><a>Contribute a New Provider</a></div>
            </footer>
        </div>
        <div class="row">
            <div class="col s12 center-align">
                The Gender Directory Collective is not responsible for the accuracy of the community-contributed provider listings.
            </div>
        </div>
    </div>


    <script>
        M.AutoInit();
    </script>
</body>
</html>
