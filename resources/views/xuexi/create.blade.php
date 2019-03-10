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
    <div class="card">
        <div class="card-header">
            <h5>新增条目</h5>
        </div>

        <div class="card-body">
            @include('shared._errors')

            <form action="{{ route('xuexi.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1 text-md-right">
                            <label for="question" class="col-form-label">题目 <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-11">
                            <textarea name="question" id="question" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1 text-md-right">
                            <label for="answer" class="col-form-label">答案 <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-11">
                            <input type="text" id="answer" name="answer" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="offset-md-1 col-md-11">
                        <button type="submit" class="btn btn-primary">新增</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
</body>
</html>