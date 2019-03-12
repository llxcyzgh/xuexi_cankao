<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xuexi Cankao</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="container">
    <ul class="list-group">
        <li class="list-group-item bg-dark text-light">
            <div class="row">
                <div class="col-md-10">
                    题目
                </div>

                <div class="col-md-2">
                    答案
                </div>
            </div>
        </li>
        @foreach ($xuexis as $key => $xuexi)
            <li class="list-group-item {{ $key % 2 == 1 ? 'bg-info' :''}}">
                <div class="row">
                    <div class="col-md-10">
                        {{ $xuexi->question }}
                    </div>

                    <div class="col-md-2">
                        {{ $xuexi->answer }}
                    </div>
                </div>
            </li>
        @endforeach
        <li class="list-group-item bg-dark text-light bg-secondary">
            <div class="row">
                <div class="col-md-10">
                    题目
                </div>

                <div class="col-md-2">
                    答案
                </div>
            </div>
        </li>
    </ul>
</div>
</body>
</html>