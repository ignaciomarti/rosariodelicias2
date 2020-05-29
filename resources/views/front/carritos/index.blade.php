@extends('front.layouts.app')
@section('content')

<div class="container carrito-container mt-3">

        <h2 class="d-block text-center main-color">Carrito</h2>

    <p class="text-center">Hacé tu pedido y recibilo en la puerta de tu casa!</p>

    <div class="row panel-agregarNuevo justify-content-center my-3">
        <a class="main-btn btn my-3" href="{{route('productos.index')}}">Seguir comprando</a>
    </div>

    <div class="row panel-detalles justify-content-center">
        <table id="listado" class="table table-bordered table-hover w-100">
            <thead>
                <tr>
                  <th class="main-color">Producto</th>
                  <th class="main-color">Precio Unitario</th>
                  <th class="main-color">Cantidad</th>
                  <th class="main-color">Descuento</th>
                  <th class="main-color">Subtotal</th>
                  <th class="main-color">Acciones</th>
                </tr>
            </thead>
            <tbody id="myTable">


                
                <tr>
                    <td class="align-middle">Producto</a></td>
                    <td class="align-middle precio_unitario">100</td>
                    <td class="align-middle cantidad">2</td>
                    <td class="align-middle descuento">10%</td>
                    <td class="align-middle subtotal">90</td>
                    <td>    
                        <form action="" method="post" class="align-middle float-left">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="id">
                            <button type="submit" title="Eliminar producto" class="main-btn btn" onclick="return confirm('Seguro que quiere eliminar el producto del carrito?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>


                    </td>
                </tr>

              </tbody>

          </table>
    </div>
    <div class="my-5 contenedor-totales d-flex justify-content-center align-items-center">
        <span class="mr-5"> Total: $90 (+ envío)</span>
        <button type="button" class="main-btn btn ">Comprar Todo</button>
    </div>
  </div>
</main>


@endsection