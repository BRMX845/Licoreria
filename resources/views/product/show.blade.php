@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $product->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $product->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Licor:</strong>
                            {{ $product->tipo_licor }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $product->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $product->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
