<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User</title>

    <link rel="stylesheet" href="assets/css/user/style.css" />
</head>

<body>
    @if (session('islogin'))
    <div class="alert alert-failed">
        {{ session('islogin') }}
    </div>
    @endif

    <div class="grid">
        @foreach($show as $detail)
        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="{{ asset('storage/' .$detail->image) }}" alt="Rome" />
                <div class="card-content">
                    <h1 class="card-header">{{ $detail['title']}}</h1>
                    <p class="card-text">
                       Writer : {{ $detail['writer']}}
                    </p>
                    <p class="card-text">

                        Category : {{ $detail->category->category}}
                    </p>
                    <button class="card-btn" ><a href="/read-book/{{$detail['id']}}">Read <span>&rarr;</span></a></button>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>