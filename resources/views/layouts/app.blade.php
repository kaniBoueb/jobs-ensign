<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @notifyCss
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-icons@1.13.12/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <!-- Styles -->   
    {{-- @notifyCss --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">

        #app{
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }
        i{
            font-size: 16px !important;
            padding: 2px 7px;
            /* color: #fff */
        }
        .content{
            display: flex;
            justify-content: space-between;
            /* background: red; */
            height: 100%;
            overflow: hidden;
        }

        .left-part{
            display: block;
            position: relative;
            height: 100%;
            background: #f8fafc;
            width: 300px;
            padding: 20px 0;
            padding-right: 30px;
            /* box-shadow: 0px 0px 0 1px rgba(0, 0, 0, 0.2); */
        }

        .right-part {
            position: relative;
            width: calc(100% - 300px);
            display: block;
            background: #fff;
        }

        ul, li {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .sidebar .side{
            display: flex;
            /* justify-content: start; */
            align-items: center;
            padding: 12px 20px;
            margin: 3px 0;
        }

        .sidebar i {
            font-size: 24px;
            color: #222c56;
            padding: 6px 10px;
            border: 1px solid #222c56;
            border-radius: 5px;
            margin-right: 20px;
            box-shadow: 2px 2px 0 0;
        }

        .sidebar a{
            color: #222c56;
            text-decoration: none;
            font-size: 16px;
        }

        hr {
            color: #aaa !important;
        }

        .side:hover {
            background: #fff;
            border-radius: 18px;
            box-shadow: 2px 2px 2px 0px #eee;
        }

    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset("js/perso.js") }}"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $( function() {
            $('#date_em').datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
                closeText: 'Fermer',
                prevText: 'Précédent',
                nextText: 'Suivant',
                currentText: 'Aujourd\'hui',
                monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
                dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
                dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                weekHeader: 'Sem.'
            });
            $('#date_ec').datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
                closeText: 'Fermer',
                prevText: 'Précédent',
                nextText: 'Suivant',
                currentText: 'Aujourd\'hui',
                monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
                dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
                dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                weekHeader: 'Sem.'
            });
            }
        );
    </script>
</head>
<body>
    <div id="app" style="overflow: hidden">
        <div class="content">
            <div class="left-part">
                @include('dashboard.sidebar.sidebar')
            </div>
            <div class="right-part">
                @include('notify::components.notify')
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm w-full relative px-3 content-center">
                    <div class="flex flex-row justify-start content-center w-full gap-6">
                        <a class="navbar-brand upper fw-bold" href="{{ url('/home') }}">
                            <span class="text-primary fw-bold">JOBS.</span>INSIGN
                        </a>
                    </div>
                </nav>
                @yield('content')
            </div>
        </div>
    </div>
    <script>
        var contrat = document.querySelector('.articles-contrat');
        if (contrat != '' && contrat != null && contrat != undefined) {
            contrat.addEventListener('change', function () {
                var valeurContrat = contrat.value;
                var dateE = document.querySelector('#date_em').value;
                var refOffre = document.querySelector('#reference_offre');
                var fonctionElement = document.querySelector('.articles-fonction');
                
                // Vérifier si l'élément .articles-fonction existe
                if (fonctionElement) {
                    var fonction = fonctionElement.value;
                    refOffre.value = valeurContrat + "-" + fonction.replace(/" "/g, "") + "-" + dateE;
                } else {
                    console.error('Element .articles-fonction introuvable.');
                }
            });
        }

    </script>
    {{-- Script pour upload les stars --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ratingBlocks = document.querySelectorAll('.rating-block');

            ratingBlocks.forEach(function(block) {
                var stars = block.querySelectorAll('.star');
                var csrfToken = '{{ csrf_token() }}';
                var candidatureId = block.dataset.candidatureId;
                var initialRating = parseInt(block.dataset.rating);
                var rateUrl = '{{ route('rate') }}';

                // Colorier les étoiles en fonction de la valeur de notation initiale
                setRating(block, initialRating);

                stars.forEach(function(star) {
                    star.addEventListener('mouseover', function() {
                        var rating = parseInt(this.getAttribute('data-value'));
                        highlightStars(block, rating);
                    });

                    star.addEventListener('mouseout', function() {
                        setRating(block, initialRating); // Revenir à la notation initiale après le survol
                    });

                    star.addEventListener('click', function() {
                        var rating = parseInt(this.getAttribute('data-value'));

                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', rateUrl, true);
                        xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
                        xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4) {
                                if (xhr.status === 200) {
                                    var response = JSON.parse(xhr.responseText);
                                    if (response.success) {
                                        console.log('Rating updated successfully!');
                                        initialRating = rating; // Mettre à jour la notation initiale
                                        setRating(block, rating);
                                    }
                                } else {
                                    console.error('Error:', xhr.responseText);
                                    console.log('An error occurred while updating the rating.');
                                }
                            }
                        };

                        xhr.send(JSON.stringify({
                            candidature_id: candidatureId,
                            rating: rating
                        }));
                    });
                });
            });

            function highlightStars(block, rating) {
                var stars = block.querySelectorAll('.star');
                stars.forEach(function(star) {
                    var starValue = parseInt(star.getAttribute('data-value'));
                    if (starValue <= rating) {
                        star.classList.add('star-filled');
                    } else {
                        star.classList.remove('star-filled');
                    }
                });
            }

            function setRating(block, rating) {
                var stars = block.querySelectorAll('.star');
                stars.forEach(function(star) {
                    var starValue = parseInt(star.getAttribute('data-value'));
                    if (starValue <= rating) {
                        star.classList.add('star-filled');
                    } else {
                        star.classList.remove('star-filled');
                    }
                });
            }
        });
    </script>
    {{-- Script pour get les stars --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ratingBlocks = document.querySelectorAll('.rating-block');

            var csrfToken = '{{ csrf_token() }}';
            var rateUrl = '{{ route('rate') }}';
            var getRatingsUrl = '{{ route('getRatings') }}';

            // Fetch ratings and update the UI
            fetch(getRatingsUrl)
                .then(response => response.json())
                .then(ratings => {
                    ratingBlocks.forEach(function(block) {
                        var candidatureId = block.dataset.candidatureId;
                        var initialRating = ratings[candidatureId] || 0; // Use 0 if no rating is found
                        setRating(block, initialRating);
                    });
                });

            ratingBlocks.forEach(function(block) {
                var stars = block.querySelectorAll('.star');
                var candidatureId = block.dataset.candidatureId;

                stars.forEach(function(star) {
                    star.addEventListener('mouseover', function() {
                        var rating = parseInt(this.getAttribute('data-value'));
                        highlightStars(block, rating);
                    });

                    star.addEventListener('mouseout', function() {
                        var currentRating = parseInt(block.getAttribute('data-current-rating'));
                        setRating(block, currentRating); // Revenir à la notation initiale après le survol
                    });

                    star.addEventListener('click', function() {
                        var rating = parseInt(this.getAttribute('data-value'));

                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', rateUrl, true);
                        xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
                        xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4) {
                                if (xhr.status === 200) {
                                    var response = JSON.parse(xhr.responseText);
                                    if (response.success) {
                                        console.log('Rating updated successfully!');
                                        block.setAttribute('data-current-rating', rating); // Mettre à jour la notation initiale
                                        setRating(block, rating);
                                    }
                                } else {
                                    console.error('Error:', xhr.responseText);
                                    console.log('An error occurred while updating the rating.');
                                }
                            }
                        };

                        xhr.send(JSON.stringify({
                            candidature_id: candidatureId,
                            rating: rating
                        }));
                    });
                });
            });

            function highlightStars(block, rating) {
                var stars = block.querySelectorAll('.star');
                stars.forEach(function(star) {
                    var starValue = parseInt(star.getAttribute('data-value'));
                    if (starValue <= rating) {
                        star.classList.add('star-filled');
                    } else {
                        star.classList.remove('star-filled');
                    }
                });
            }

            function setRating(block, rating) {
                var stars = block.querySelectorAll('.star');
                block.setAttribute('data-current-rating', rating);
                stars.forEach(function(star) {
                    var starValue = parseInt(star.getAttribute('data-value'));
                    if (starValue <= rating) {
                        star.classList.add('star-filled');
                    } else {
                        star.classList.remove('star-filled');
                    }
                });
            }
        });
    </script>


    @notifyJs
</body>
</html>
