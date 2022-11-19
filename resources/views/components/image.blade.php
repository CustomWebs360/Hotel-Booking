@if ($col == null)
<div class="col-12">
@else
<div class="col-{{$col}}">
@endif
    <div class="form-group">
        <label for="customFile">{{$label}} <small class="text-danger">{{$required}}</small></label>
        <div class="custom-file">
            <input type="file" name="{{$name}}" class="custom-file-input {{$class}}" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
            <x-alert alert="{{$name}}"/>
        </div>

    </div>
</div>
@if ($src != null)
    <div class="col-md-12 mb-1">
    <img width="{{$width}}" src="{{$src}}" alt="image not found">
    </div>
@endif
