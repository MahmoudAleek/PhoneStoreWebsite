@extends('layouts.adminlayouts.admin_master')

@section('admin')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Slider</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.slider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlPassword">Slider Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlPassword" placeholder="Slider Title">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlPassword">Description</label>
                    <textarea type="text" name="description" rows=4 class="form-control" id="exampleFormControlPassword"  > </textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Add Slider Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>


</div>

@endsection