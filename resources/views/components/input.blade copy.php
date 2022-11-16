<div class=" col-12">
    <div class="form-group">
        <label for="first-name-column">{{$label}}</label>


        @if ($id != null && $value)
            <input type="{{$type}}" id="{{$id}}"  class="form-control {{$class}}"  name="{{$name}}" value={{$value}}>
        @elseif ($value)
            <input type="{{$type}}"  class="form-control {{$class}}"  name="{{$name}}" value={{$value}}>
        @elseif ($id != null && $old_value)
            <input type="{{$type}}" id="{{$id}}"  class="form-control {{$class}}" placeholder="{{$placeholder}}" name="{{$name}}" value={{old($old_value)}}>
        @else
            <input type="{{$type}}"  class="form-control {{$class}}" placeholder="{{$placeholder}}" name="{{$name}}" value={{old($old_value)}}>
        @endif

        <x-alert alert="{{$name}}" />
    </div>
</div>


