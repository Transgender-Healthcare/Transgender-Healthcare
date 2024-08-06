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

        .rts {
            padding: 5px;
            margin: 5px;
            margin-bottom: 30px;
            margin-left: 114px;
        }

    </style>
</head>
<body>
    <div class="row center-align">
        <header>
            <div class="col l2 m3 s12">
                <img src="{{ asset('assets/images/logo.png') }}" width="128" height="128" alt="Gender Directory Logo" />
            </div>
            <div class="col l10 m9 s12">
                <h3><em>The</em> Gender Directory</h3><em>Your gender-affirming provider directory</em>
                <p>
                    <a href="/"><h5>Home</h5></a>
                </p>
            </div>
        </header>
    </div>

    <hr/>
    <!-- InstanceBeginEditable name="Body" -->

    <button class="rts"><a href="javascript:history.go(-1);">Return to Search</a></button>

    <div class="row">
        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('assets/provider_images/elda-l-fisher-md-facs.jpg') }}">

        </div>
        <div class="col s12 m6 l8">
            <h3>Elda L. Fisher, MD, FACS</h3>
            <h5>Facial Plastic Surgeon, Oral and Maxillofacial Surgeon</h5>
            <p><em>
                I love treating patients seeking maxillofacial surgery and facial gender affirmation surgery. Facial
                feminization surgery and facial masculinization surgery are new and exciting areas for patient-specific
                3D planning and execution of surgery. When appropriate, the combination of functional skeletal surgery,
                such as orthognathic surgery, can be incorporated into facial gender affirmation surgery to obtain the
                best results in both aesthetic and functional outcomes.
            </em>
            </p>
            <p><strong>Primary Phone:</strong>
                <a href="tel:" title="This link will place a phone call to this number">+1
                    919 684-4114
                    <i class="material-icons">call</i>
                </a>
            </p>
            <p><strong>Other Profile Links:</strong>
                <a
                    href="https://www.dukehealth.org/find-doctors-physicians/elda-l-fisher-md-facs" target="_blank"
                    title="This link will open in a new window/tab">
                    Duke University Medicine Profile
                    <i class="material-icons">launch</i>
                </a>
            </p>
        </div>

    </div>

    <div class="row">
        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-content">
                    <!-- Card Content -->
                    <span class="card-title"><span class="material-icons">medical_services</span> Specialities</span>
                    <hr/>

                    <ul class="collection">
                        <li class="collection-item">Facial Femininzation
                            <a class="material-icons" title="Define This">contact_support</a>
                        </li>
                        <li class="collection-item">Facial Masculinization
                            <a class="material-icons" title="Define This">contact_support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-content">
                    <!-- Card Content -->
                    <span class="card-title"><i class="material-icons">map</i> Location</span>
                    <hr/>
                    <p>
                        <a title="Google Map will open in a new window/tab">
                            Duke Aesthetic Center<br/>3475 Erwin Rd<br/>Durham NC 27705-0005
                        </a>
                    </p>
                    <br/>
                    <span class="material-icons blue-text" title="Location is accessible">accessible</span>
                    <span
                        class="material-icons"
                        title="Location has gender neutral or single stall restrooms">person
                    </span>
                </div>
            </div>
        </div>

        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-content">
                    <!-- Card Content -->
                    <span class="card-title"><span class="material-icons">map</span> Location</span>
                    <hr/>
                    <p>
                        <a title="Google Map will open in a new window/tab">
                            Duke University Hospital<br/>2301 Erwin Rd<br/> Durham NC 27710
                        </a>
                    </p>
                    <br/>
                    <span class="material-icons red-text" title="Location can provide emergency care">emergency</span>
                    <span class="material-icons blue-text" title="Location is accessible">accessible</span>
                    <span class="material-icons" title="Location has gender neutral or single stall restrooms">person</span>
                </div>
            </div>
        </div>

        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-content">
                    <!-- Card Content -->
                    <span class="card-title">
                        <span class="material-icons">badge</span> Credentials
                    </span>
                    <hr/>
                    <ul class="collection with-header">
                        <li class="collection-header">
                            Board Certifications
                        </li>
                        <li class="collection-item">
                            American Board of Oral and Maxillofacial Surgery, Oral & Maxillofacial Surgery
                        </li>
                        <li class="collection-header">
                            Fellowships
                        </li>
                        <li class="collection-item">
                            Facial Aesthetic Surgery, Grant Hospital, 2014
                        </li>
                        <li class="collection-header">
                            Residencies
                        </li>
                        <li class="collection-item">
                            Oral and Maxillofacial Surgery, University of North Carolina Hospitals, 2007-2013
                        </li>
                        <li class="collection-item">
                            General Surgery, University of North Carolina Hospitals, 2010-2011
                        </li>
                        <li class="collection-header">
                            Education
                        </li>
                        <li class="collection-item">
                            MD, University of North Carolina at Chapel Hill, 2009
                        </li>
                        <li class="collection-item">
                            DMD, University of Medicine and Dentistry of New Jersey, 2007
                        </li>
                        <li class="collection-item">
                            MSc, Rutgers Graduate School of Biomedical Sciences (New Jersey), 2004
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-content">
                    <!-- Card Content -->
                    <span class="card-title"><span class="material-icons">paid</span> Insurances Accepted</span>
                    <hr/>
                    <ul class="collection">
                        <li class="collection-item">Aetna</li>
                        <li class="collection-item">Ambetter</li>
                        <li class="collection-item">Blue Cross Blue Shield</li>
                        <li class="collection-item">Cigna</li>
                        <li class="collection-item">Duke Group Plans</li>
                        <li class="collection-item">Experience Health</li>
                        <li class="collection-item">Gateway Health Alliance</li>
                        <li class="collection-item">Healthgram</li>
                        <li class="collection-item">Humana</li>
                        <li class="collection-item">MedCost</li>
                        <li class="collection-item">Medicare</li>
                        <li class="collection-item">Medicaid (North Carolina)</li>
                        <li class="collection-item">TRICARE</li>
                        <li class="collection-item">United Healthcare</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- InstanceEndEditable -->
    <hr/>

    <div class="row center-align">
        <footer>
            <div class="col s4"><a>Sign Up</a> or <a>Login</a></div>
            <div class="col s4"><a>Are you a provider?</a></div>
            <div class="col s4"><a>Contribute a New Provider</a></div>
        </footer>
    </div>

    <div class="row">
        <div class="col s12 center-align">
            The Gender Directory Collective is not responsible for the accuracy of the
            community-contributed provider listings.
        </div>
    </div>

    <script>
        M.AutoInit();
    </script>


</body>
</html>
