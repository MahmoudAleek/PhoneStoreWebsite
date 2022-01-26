@extends('layouts.adminlayouts.admin_master')

@section('admin')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Slider</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.phone')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlPassword">Phone Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlPassword">Phone Brand Name</label>
                    <input type="text" name="brand_name" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlPassword">Processor Detials</label>
                    <input type="text" name="processor" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlPassword">Ram</label>
                    <input type="text" name="ram" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlPassword">Camera</label>
                    <input type="text" name="camera" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlPassword">Battery</label>
                    <input type="text" name="battery" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlPassword">Storage</label>
                    <input type="text" name="storage" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlPassword">System</label>
                    <input type="text" name="system" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlPassword">Display</label>
                    <input type="text" name="display" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlPassword">Phone Notes</label>
                    <input type="text" name="notes" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlPassword">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleFormControlPassword" placeholder="">
                </div>

{{-- 
                <div class="form-group">
                    <label for="exampleFormControlFile1">Add Phone Images</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div> --}}

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>


</div>

@endsection
