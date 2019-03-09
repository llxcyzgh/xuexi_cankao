{{-- _message 为自定义的 session()->flash() 弹出一次消息--}}
{{-- _error 为系统内部报错消息,如验证未通过 --}}

@foreach(['danger','warning','success','info'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach