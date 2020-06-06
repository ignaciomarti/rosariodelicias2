@extends('front.layouts.app')
@section('content')

<div class="container carrito-container mt-3">

        <h2 class="d-block text-center main-color">{{$datos->cart_title?$datos->cart_title:""}}</h2>

        <p class="text-center">{{$datos->cart_subtitle?$datos->cart_subtitle:""}}</p>

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
  <div class="container contenedor-faq">
        <h2 class="main-color text-center my-4">Preguntas frecuentes</h2>

        <div class="contenedor-pregunta">
            <h4 class="main-color">{{$datos->first_ask?$datos->first_ask:""}}</h4>
            <p>{{$datos->first_answer?$datos->first_answer:""}}</p> 
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">{{$datos->second_ask?$datos->second_ask:""}}</h4>
            <p> {{$datos->second_answer?$datos->second_answer:""}}</p>
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">{{$datos->third_ask?$datos->third_ask:""}}</h4>
            <p> {{$datos->third_answer?$datos->third_answer:""}}</p>
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">{{$datos->fourth_ask?$datos->fourth_ask:""}}</h4>
            <p> {{$datos->fourth_answer?$datos->fourth_answer:""}}</p>
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">{{$datos->fifth_ask?$datos->fifth_ask:""}}</h4>
            <p> {{$datos->fifth_answer?$datos->fifth_answer:""}}</p>
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">{{$datos->sixth_ask?$datos->sixth_ask:""}}</h4>
            <p> {{$datos->sixth_answer?$datos->sixth_answer:""}}</p>
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">{{$datos->seventh_ask?$datos->seventh_ask:""}}</h4>
            <p> {{$datos->seventh_answer?$datos->seventh_answer:""}}</p>
        </div>
    </div>

</main>


@endsection