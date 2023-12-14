@extends('layouts.app')

@section('template_title')
    {{ $shopping->name ?? "{{ __('Show') Shopping" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Shopping</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('shoppings.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero Compra:</strong>
                            {{ $shopping->numero_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Compra:</strong>
                            {{ $shopping->fecha_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $shopping->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $shopping->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Unitario:</strong>
                            {{ $shopping->precio_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Total:</strong>
                            {{ $shopping->precio_total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
