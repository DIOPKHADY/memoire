<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            @if (auth()->user()->role->nomRole ==="admin")

            <li class="nav-label">Gestion Medecin</li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span
                        class="nav-text">Medecin</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('medecin.index')}}">Nouveau</a></li>

                    <li><a href="{{route('Medecin.create')}}">Liste</a></li>
                </ul>
            </li>
            <li class="nav-label">Gestion Secretaire</li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span
                        class="nav-text">Secretaire</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('secretaire.index')}}">Nouveau</a></li>

                    <li><a href="{{route('Secretaire.create')}}">Liste</a></li>
                </ul>
            </li>
            <li class="nav-label">Gestion Consultation</li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span
                class="nav-text">Consultation</span></a>
        <ul aria-expanded="false">
            <li><a href="{{route('consultation.index')}}">Nouveau</a></li>

            <li><a href="{{route('Consultation.create')}}">Liste</a></li>
        </ul>
    </li>
    <li class="nav-label">Gestion Patient</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Patient</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('Patient.index')}}">Nouveau</a></li>

                    <li><a href="{{route('patient.create')}}">Liste</a></li>
                </ul>
            </li>
            @endif
            <li class="nav-label">Gestion Rendez-Vous</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Rendez-vous</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('RendezVous.index')}}">Nouveau</a></li>

                    <li><a href="{{route('rendezvous.create')}}">Liste</a></li>
                </ul>
            </li>


            <li class="nav-label">Extra</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                <ul aria-expanded="false">
                    <li><a href="./page-lock-screen.html">Deconnexion</a></li>
                </ul>
            </li>
        </ul>
    </div>


</div>
