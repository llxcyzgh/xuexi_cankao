@if(count($errors) >0)
    {{--{{ dd($errors) }}--}}
    {{-- {{ dd(count($errors)) }}--}}
    {{--{{ dd($errors->all()) }}--}}
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif