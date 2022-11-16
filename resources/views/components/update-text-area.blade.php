@if ($col == null)
<div class="col-12">
@else
<div class="col-{{$col}}">
@endif
    <div class="form-group">
        <label for="exampleFormControlTextarea1">{{$label}} <small class="text-danger">{{$required}}</small></label>
        <textarea name={{$name}} class="form-control"   placeholder="{{$placeholder}}">{{$value}}</textarea>
    </div>
</div>
