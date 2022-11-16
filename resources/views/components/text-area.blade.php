@if ($col == null)
<div class="col-12">
@else
<div class="col-{{$col}}">
@endif
    <div class="form-group">
        <label for="exampleFormControlTextarea1">{{$label}}</label>
        <textarea name={{$name}} class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{$placeholder}}">{{old($value)}}</textarea>
    </div>
</div>
