<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
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

    <div class="grid d-flex" style="margin-top: -20px; margin-left: 3%;"    >
        <div class="cover-image">
            @if($read->image)
            <img src="{{ asset('storage/' .$read->image) }}" width="400px" >
            @endif
        </div>
        <div class="text" style="margin-left: 2%">
            <p>Title : {{$read['title']}}</p>
            <p>Writer : {{$read['writer']}}</p>
            <p>Publisher : {{$read['publisher']}}</p>
            <p>No. ISBN : {{$read['no_isbn']}}</p>
            <h3>Synopsis :</h3>
            <p>{{$read['synopsis']}}</p>
            <br>
            <div class="button d-flex" style="margin-left: -12px">
                <div class="btn">
                <button type="submit" value="kirim" onclick="kirim()" style="
                    border: none;
                    background-color: rgb(255, 179, 65);
                    width: 150px;
                    height: 40px;
                    font-weight: bold;
                    color: white;
                    border-radius: 15px">
                    Download Ebook
                </div>
                <div class="back" style="
                    border: none;
                    background-color: rgb(212, 75, 75);
                    width: 80px;
                    height: 40px;
                    border-radius: 15px;
                    margin-top: 7px">
                    <a href="/dashboard" style="display: flex; justify-content: center; align-items: center; margin-top: 8px; font-weight: bold; color: white; text-decoration: none;">Back</a>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
