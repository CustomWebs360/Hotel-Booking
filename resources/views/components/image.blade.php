@if ($col == null)
<div class="col-12">
@else
<div class="col-{{$col}}">
@endif
    <div class="form-group">
        <label for="customFile">{{$label}}</label>
        <div class="custom-file">
            <input type="file" name="{{$name}}" class="custom-file-input {{$class}}" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
            <x-alert alert="{{$name}}"/>
        </div>

    </div>
</div>
