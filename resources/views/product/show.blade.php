@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Del Producto:</strong>
                            {{ $product->Nombre_del_Producto }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $product->Codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Existencia:</strong>
                            {{ $product->existencia }}
                        </div>
                        <div class="form-group">
                            <strong>Bodega:</strong>
                            {{ $product->Bodega }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $product->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $product->Estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
