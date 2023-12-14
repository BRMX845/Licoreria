<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero_venta') }}
            {{ Form::text('numero_venta', $sale->numero_venta, ['class' => 'form-control' . ($errors->has('numero_venta') ? ' is-invalid' : ''), 'placeholder' => 'Numero Venta']) }}
            {!! $errors->first('numero_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_venta') }}
            {{ Form::text('fecha_venta', $sale->fecha_venta, ['class' => 'form-control' . ($errors->has('fecha_venta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Venta']) }}
            {!! $errors->first('fecha_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto_id') }}
            {{ Form::text('producto_id', $sale->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
            {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $sale->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_total') }}
            {{ Form::text('precio_total', $sale->precio_total, ['class' => 'form-control' . ($errors->has('precio_total') ? ' is-invalid' : ''), 'placeholder' => 'Precio Total']) }}
            {!! $errors->first('precio_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>