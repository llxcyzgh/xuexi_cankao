{{-- _message 为自定义的 session()->flash() 弹出一次消息--}}
{{-- _error 为系统内部报错消息,如验证未通过 --}}

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