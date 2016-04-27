<div class="form-group">
    <label for="name">Name</label>
    {{ Form::text('name', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    <label for="price">Price</label>
    {{ Form::text('price', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit($buttonText, ['class'=>'btn btn-primary']) }}
</div>

@unless (empty($errors->all()))
<div class="row">
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach        
    </div>
</div>
@endunless