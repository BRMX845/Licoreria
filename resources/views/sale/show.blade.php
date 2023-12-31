@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? "{{ __('Show') Sale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero Venta:</strong>
                            {{ $sale->numero_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Venta:</strong>
                            {{ $sale->fecha_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $sale->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $sale->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Total:</strong>
                            {{ $sale->precio_total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
