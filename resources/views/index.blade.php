<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scout Extended - Demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        @scout(['searchable' => 'App\Article'])
        <header>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="https://github.com/algolia/scout-extended" class="navbar-brand d-flex align-items-center">
                        <strong>Scout Extended - Demo</strong>
                    </a>
                </div>
            </div>
        </header>

        <section class="jumbotron text-center">
            <div class="container">
                    <div class="input-group input-group-lg">

                    <ais-input type="text"
                       name="query"
                       class="form-control"
                       aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-lg"
                       placeholder="Search..." />
                   </ias-input>
                    </div>
            </div>
        </section>

        <div class="album">
            <div class="container">
                <ais-results class="row">
                    <template scope="{ result }">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">@{{ result.body }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"><strong>Author</strong>: @{{ result.author }}</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"><strong>Image</strong>: @{{ result.image_url }}</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"><strong>Views</strong>: @{{ result.views_count }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ais-results></template>
                </div>
            </div>
        </div>
        @endscout
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
