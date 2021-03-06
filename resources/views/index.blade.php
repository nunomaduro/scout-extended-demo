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
                <form action="/" method="GET">
                    <div class="input-group input-group-lg">
                        <input type="text"
                           name="query"
                           class="form-control"
                           aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-lg"
                           placeholder="Search..."
                           value="{{ $query ?? '' }}">
                    </div>
                </form>
            </div>
        </section>

        <div class="album">
            <div class="container">
                @foreach ($models as $model)
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <span class="badge badge-secondary">{{ get_class($model) }}</span>
                                    <p class="card-text">{{ $model->title }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"><strong>Author</strong>: 👦 {{ $model->author }}</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"><strong>Image</strong>: 🌅 {{ $model->image_url }}</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"><strong>Likes</strong>: ❤️ {{ $model->likes_count }}</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"><strong>Slug</strong>: 🆔 {{ $model->slug }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
