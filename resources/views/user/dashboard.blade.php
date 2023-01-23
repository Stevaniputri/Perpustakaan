<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User</title>

    <link rel="stylesheet" href="assets/css/user/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">WikBook</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown" style="margin-left: 1050px;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category Book
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($data as $item)
                            <li><a class="dropdown-item" href="#">{{ $item['category']}}</a></li>
                        @endforeach
                    </ul>
                  </li>
            </ul>
          </div>
        </div>
      </nav>

      <br><br>

    @if (session('islogin'))
    <div class="alert alert-failed">
        {{ session('islogin') }}
    </div>
    @endif

    <div class="grid-container">
        @foreach($show as $detail)
        <div class="grid-item">
            <img class="card-img" src="{{ asset('storage/' .$detail->image) }}" alt="Rome" />
            <div class="title-content">
                <p class="title">{{ $detail['title']}}</p>
                <hr>
            </div>

            <center>
                <div class="text-content">
                    <p>Write: {{ $detail['writer']}}</p>
                    <p>Category: {{ $detail->category->category}}</p>
                    <center>
                        <button class="card-btn" ><a href="/read-book/{{$detail['id']}}">Read</a></button>
                    </center>
                </div>
            </center>

        </div>
        @endforeach
    </div>

{{--
    <div class="grid">
        @foreach($show as $detail)
        <div class="grid-item">
            <div class="card">
                <center>
                <img class="card-img" src="{{ asset('storage/' .$detail->image) }}" alt="Rome" />
                </center>
                <div class="card-content">
                    <p class="card-header">{{ $detail['title']}}</p>
                    <center>
                    <div class="card-text">
                    <p>
                       Writer : {{ $detail['writer']}}
                    </p>
                    <p>
                        Category : {{ $detail->category->category}}
                    </p>
                    <button class="card-btn" ><a href="/read-book/{{$detail['id']}}">Read <span>&rarr;</span></a></button>

                    </div>
                    </center>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>
