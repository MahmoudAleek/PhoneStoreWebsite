@extends('layouts.adminlayouts.admin_master')

@section('admin')
    <div class="py-12">
        {{-- All slider Part --}}
        <div class="container">
            <div class="row">

              <div>
                <h4>Phones Page</h4>
                <a href="{{route('add.phone')}}"><button class="btn btn-info" >Add New Phone</button></a>
                <br><br>
              </div>
              <br />

              <div class="col-md-30">

                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session('success')}}</strong> 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card">
                  <div class="card-header">All Phone</div>



                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col" width=10% >#SL</th>
                        <th scope="col"  width=10%>Name</th>
                        <th scope="col"  width=10%>Brand Name</th>
                        <th scope="col"  width=10%>Processor</th>
                        <th scope="col"  width=10%>Ram</th>
                        <th scope="col"  width=10%>Camera</th>
                        <th scope="col"  width=10%>Battery</th>
                        <th scope="col"  width=10%>Storage</th>
                        <th scope="col"  width=10%>System</th>
                        <th scope="col"  width=10%>Display</th>
                        <th scope="col"  width=10%>Notes</th>
                        <th scope="col"  width=10%>Price</th>
                        <th scope="col"  width=10%>Image</th>
                        <th scope="col"  width=10%>Created At</th>
                        <th colspan="2" rowspan="2" scope="col"  width=25%>Action1</th>

                      </tr>
                    </thead>
                    <tbody>
                      

                      @foreach ($phones as $phone)
                      <tr>
                        <td scope="row"> {{ $phones->firstItem()+$loop->index }}</td>
                        <td> {{ $phone->name }} </td>
                        <td> {{ $phone->brand_name }} </td>
                        <td> {{ $phone->processor }} </td>
                        <td> {{ $phone->ram }} </td>
                        <td> {{ $phone->camera }} </td>
                        <td> {{ $phone->battery }} </td>
                        <td> {{ $phone->storage }} </td>
                        <td> {{ $phone->system }} </td>
                        <td> {{ $phone->display }} </td>
                        <td> {{ $phone->notes }} </td>
                        <td> {{ $phone->price }} </td>
                        <td> Image </td>
                        <td> {{ $phone->created_at }} </td>

                        {{-- <td> <img src="{{asset($phone->image)}}" style="height:50px;width:80px"  > </td> --}}


                         <td>
                            <a href="{{ url('slider/edit/'.$phone->id) }}" class="btn btn-info">Edit</a>
                        </td>
                        <td>
                          <a href=" {{url('slider/delete/'.$phone->id)}}" class="btn btn-danger" onclick="return confirm('Are U Sure to delete') ">Delete</a>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $phones->links()}}

                </div>
              </div>


            </div>
    
        </div>

    </div>
        
    @endsection