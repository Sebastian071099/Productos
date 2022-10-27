<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_del_Producto') }}
            {{ Form::text('Nombre_del_Producto', $product->Nombre_del_Producto, ['class' => 'form-control' . ($errors->has('Nombre_del_Producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Del Producto']) }}
            {!! $errors->first('Nombre_del_Producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('Codigo', $product->Codigo, ['class' => 'form-control' . ($errors->has('Codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('Codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('existencia') }}
            {{ Form::text('existencia', $product->existencia, ['class' => 'form-control' . ($errors->has('existencia') ? ' is-invalid' : ''), 'placeholder' => 'Existencia']) }}
            {!! $errors->first('existencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Bodega') }}
            {{ Form::text('Bodega', $product->Bodega, ['class' => 'form-control' . ($errors->has('Bodega') ? ' is-invalid' : ''), 'placeholder' => 'Bodega']) }}
            {!! $errors->first('Bodega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $product->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $product->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>