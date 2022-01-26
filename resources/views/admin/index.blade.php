@extends('layouts.adminlayouts.admin_master')
 
@section('admin')

{{-- All Phones Cards --}}
<div class="py-2">
    <div class="container">
        <div class="row">

          <div class="col-md-12">

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="py-2 ml-5 w-100 " style="margin:auto">

              <div class="row" >
                <div class="col-xl-6 col-md-12">
                  <!-- Doughnut Chart -->
                  <div class="card card-default" data-scroll-height="675" style="height: auto; overflow: auto;">
                    <div class="card-header justify-content-center">
                      <h2>Orders Overview</h2>
                    </div>
                    <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                      <canvas id="doChart" width="956" height="564" style="display: block; height: 282px; width: 478px;" class="chartjs-render-monitor"></canvas>
                    </div>
                    <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>
                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                      <div class="col-6">
                        <div class="py-4 px-4">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>Order Completed</li>
                            <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1 "></i>Order Unpaid</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-6 border-left">
                        <div class="py-4 px-4 ">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Order Pending</li>
                            <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>Order Canceled</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-6 col-md-12" >
                  <div class="card card-default w-100" style="max-height: 100%">
                    <div class="card-header card-header-border-bottom">
                      <h2>With Indicators</h2>
                    </div>
                    <div class="card-body" >
                      <p class="mb-5" >You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        You can also add the indicators to the carousel, alongside the controls, too. Read bootstrap documentaion for
                        <a href="https://getbootstrap.com/docs/4.1/components/carousel/#with-indicators"
                         target="_blank"> more details.</a> </p>
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('images/brandslogo/apple2.png')}}" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/brandslogo/apple1.jpg')}}" alt="Second slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="mdi mdi-chevron-left mdi-36px" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="mdi mdi-chevron-right mdi-36px" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              
              <div class="row" >

                <div class=" float-left mx-4 mt-4 card w-35 shadow-lg" style="width: 18rem;">

                  <img class="card-img-top" src="{{asset('images/s1.jpg')}}" alt="Card image cap">
                  <h3 class="card-title mt-3 text-dark  text-center"> Samsung/ S21</h3>

                  <div class="card-body">
                    <table>
                      <tr style="mergin-top:1px">
                        <td class="w-10"> <img src="{{asset('images/icons/processor2.png')}}" width="32px" height="32px" alt=""></td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">Snapdragon 865 5G</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td class="w-10"> <img src="{{asset('images/icons/ram.png')}}" width="32px" height="32px" alt=""> </td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">8GB RAM</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/storage3.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 128GB/256GB storage, no card slot</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/camera.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 108MP 4320p </p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/battery.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 5000mAh Li-Po</p> </td>
                      </tr>
                    </table>

                
                    <p class="card-text"></p>
                    <a href="{{route('admin.phone.details')}}" class="btn btn-primary text-center w-100 mt-3 " style="background-color: #212a39" > More Details </a>
                  </div>
              </div>

                <div class=" float-left mx-4 mt-4 card w-35 shadow-lg" style="width: 18rem;">

                  <img class="card-img-top" src="{{asset('images/s1.jpg')}}" alt="Card image cap">
                  <h3 class="card-title mt-3 text-primary text-center">Samsung/ S21</h3>

                  <div class="card-body">
                    <table>
                      <tr style="mergin-top:1px">
                        <td class="w-10"> <img src="{{asset('images/icons/processor2.png')}}" width="32px" height="32px" alt=""></td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">Snapdragon 865 5G</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td class="w-10"> <img src="{{asset('images/icons/ram.png')}}" width="32px" height="32px" alt=""> </td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">8GB RAM</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/storage3.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 128GB/256GB storage, no card slot</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/camera.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 108MP 4320p </p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/battery.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 5000mAh Li-Po</p> </td>
                      </tr>
                    </table>

                
                    <p class="card-text"></p>
                    <a href="{{route('admin.phone.details')}}" class="btn btn-primary text-center w-100 mt-3 "> More Details </a>
                  </div>
              </div>

                <div class=" float-left mx-4 mt-4 card w-35 shadow-lg" style="width: 18rem;">

                  <img class="card-img-top" src="{{asset('images/s1.jpg')}}" alt="Card image cap">
                  <h3 class="card-title mt-3 text-primary text-center">Samsung/ S21</h3>

                  <div class="card-body">
                    <table>
                      <tr style="mergin-top:1px">
                        <td class="w-10"> <img src="{{asset('images/icons/processor2.png')}}" width="32px" height="32px" alt=""></td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">Snapdragon 865 5G</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td class="w-10"> <img src="{{asset('images/icons/ram.png')}}" width="32px" height="32px" alt=""> </td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">8GB RAM</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/storage3.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 128GB/256GB storage, no card slot</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/camera.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 108MP 4320p </p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/battery.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 5000mAh Li-Po</p> </td>
                      </tr>
                    </table>

                
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary text-center w-100 mt-3 "> More Details </a>
                  </div>
              </div>

                <div class=" float-left mx-4 mt-4 card w-35 shadow-lg" style="width: 18rem;">

                  <img class="card-img-top" src="{{asset('images/s1.jpg')}}" alt="Card image cap">
                  <h3 class="card-title mt-3 text-primary text-center">Samsung/ S21</h3>

                  <div class="card-body">
                    <table>
                      <tr style="mergin-top:1px">
                        <td class="w-10"> <img src="{{asset('images/icons/processor2.png')}}" width="32px" height="32px" alt=""></td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">Snapdragon 865 5G</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td class="w-10"> <img src="{{asset('images/icons/ram.png')}}" width="32px" height="32px" alt=""> </td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">8GB RAM</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/storage3.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 128GB/256GB storage, no card slot</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/camera.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 108MP 4320p </p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/battery.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 5000mAh Li-Po</p> </td>
                      </tr>
                    </table>

                
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary text-center w-100 mt-3 "> More Details </a>
                  </div>
              </div>

                <div class=" float-left mx-4 mt-4 card w-35 shadow-lg" style="width: 18rem;">

                  <img class="card-img-top" src="{{asset('images/s1.jpg')}}" alt="Card image cap">
                  <h3 class="card-title mt-3 text-primary text-center">Samsung/ S21</h3>

                  <div class="card-body">
                    <table>
                      <tr style="mergin-top:1px">
                        <td class="w-10"> <img src="{{asset('images/icons/processor2.png')}}" width="32px" height="32px" alt=""></td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">Snapdragon 865 5G</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td class="w-10"> <img src="{{asset('images/icons/ram.png')}}" width="32px" height="32px" alt=""> </td>
                        <td class="w-90 "> <p class="d-flex align-items-center text-dark pl-2">8GB RAM</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/storage3.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 128GB/256GB storage, no card slot</p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/camera.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 108MP 4320p </p> </td>
                      </tr>

                      <tr style="mergin-top:5px">
                        <td> <img src="{{asset('images/icons/battery.png')}}" width="32px" height="32px" alt=""> </td>
                        <td> <p class="d-flex align-items-center text-dark pl-2"> 5000mAh Li-Po</p> </td>
                      </tr>
                    </table>

                
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary text-center w-100 mt-3 "> More Details </a>
                  </div>
              </div>
              </div>


            </div>


          </div>
        </div>

    </div>
</div>
{{-- End All Phones Cards --}}
 

@endsection

