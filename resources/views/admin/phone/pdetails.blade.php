@extends('layouts.adminlayouts.admin_master')

@section('admin')
<div class="container">

  <div class="card mb-0 w-100  shadow-lg  ">
    <div class="row g-0 h-100 ">
      <div class="col-md-3   ">
        <img src="{{asset('images/phones/xmi10.jpg')}}" class="img-fluid" alt="...">
      </div>
 

      <div class="col "  >

        <div class="w-5 mh-100 bg-primary  " style="" > <h2 class="text-center" style="color:#10141b">Samsung</h2></div>


        <div class="card-body w-100 " style="background-color: #10141b; color:white; mergin-right:0;width:100%">

          <h3 class="card-title pl-5">MI 10T PRO 5G</h3>

          <table >
            <tr style="mergin-top:1px">
              <td class="w-10"> <img src="{{asset('images/icons/processor2.png')}}" width="32px" height="32px" alt=""></td>
              <td class="w-90 "> <p class="d-flex align-items-center  pl-2">Snapdragon 865 5G</p> </td>
            </tr>

            <tr style="mergin-top:5px">
              <td class="w-10"> <img src="{{asset('images/icons/ram.png')}}" width="32px" height="32px" alt=""> </td>
              <td class="w-90 "> <p class="d-flex align-items-center  pl-2">8GB RAM</p> </td>
            </tr>

            <tr style="mergin-top:5px">
              <td> <img src="{{asset('images/icons/storage3.png')}}" width="32px" height="32px" alt=""> </td>
              <td> <p class="d-flex align-items-center  pl-2"> 128GB/256GB storage, no card slot</p> </td>
            </tr>

            <tr style="mergin-top:5px">
              <td> <img src="{{asset('images/icons/camera.png')}}" width="32px" height="32px" alt=""> </td>
              <td> <p class="d-flex align-items-center  pl-2"> 108MP 4320p </p> </td>
            </tr>

            <tr style="mergin-top:5px">
              <td> <img src="{{asset('images/icons/battery.png')}}" width="32px" height="32px" alt=""> </td>
              <td> <p class="d-flex align-items-center  pl-2"> 5000mAh Li-Po</p> </td>
            </tr>
            
          </table>

          {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        </div>
      </div>

      {{-- <div class="  rounded-circle d-flex align-items-center  bg-primary" style="width: 50px;height:50px;"><button>test</button></div> --}}

      
    </div>
  </div>

  {{-- <div class="bg-white" >
    <table class="border border-primary">
      <tr>
        <td>test</td>
      </tr>
    </table>
  </div> --}}

</div>
{{-- &nbsp; --}}
@endsection

