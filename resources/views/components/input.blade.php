@if ($col == null)
<div class="col-12">
@else
<div class="col-{{$col}}">
@endif
    <div class="form-group">
        <label for="first-name-column">{{$label}}</label>

        @if($id == null )
            @if ($value == null)
                <input type="{{$type}}"  class="form-control {{$class}}" placeholder="{{$placeholder}}" name="{{$name}}">
            @else
                <input type="{{$type}}"   class="form-control {{$class}}" placeholder="{{$placeholder}}" name="{{$name}}"  value={{old($value)}}>
            @endif
        @else
            @if ($value == null)
                <input type="{{$type}}" id="{{$id}}"  class="form-control {{$class}}" placeholder="{{$placeholder}}" name="{{$name}}">
            @else
                {{$value}}
                <input type="{{$type}}" id="{{$id}}"  class="form-control {{$class}}" placeholder="{{$placeholder}}" name="{{$name}}"  value={{old($value)}}>
            @endif
        @endif

        <x-alert alert="{{$name}}" />
        
    </div>
</div>


