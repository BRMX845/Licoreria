@extends('layouts.app')

@section('template_title')
    Shopping
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Shopping') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('shoppings.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Numero Compra</th>
										<th>Fecha Compra</th>
										<th>Producto Id</th>
										<th>Cantidad</th>
										<th>Precio Unitario</th>
										<th>Precio Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shoppings as $shopping)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $shopping->numero_compra }}</td>
											<td>{{ $shopping->fecha_compra }}</td>
											<td>{{ $shopping->producto_id }}</td>
											<td>{{ $shopping->cantidad }}</td>
											<td>{{ $shopping->precio_unitario }}</td>
											<td>{{ $shopping->precio_total }}</td>

                                            <td>
                                                <form action="{{ route('shoppings.destroy',$shopping->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('shoppings.show',$shopping->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('shoppings.edit',$shopping->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $shoppings->links() !!}
            </div>
        </div>
    </div>
@endsection
