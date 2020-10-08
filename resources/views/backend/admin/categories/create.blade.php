@extends('backend.partial.app')
@section('title','Category')
@section('main_section')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="form-control-navbar badge badge-info">Add New Category</h5>
                <form class="form-group" action="" method="post">
                    @csrf
                    <div class="col-md-5">
                        <label class="col-form-label" for="category-name">Category Name</label>
                        <input class="form-control" type="text" name="category" id="">
                    </div>
                    <div class="col-md-5">
                        <label class="col-form-label" for="parent-name">Select Parent</label>
                        <select class="form-control" name="parent" id="">
                            <option value="0">Select Any..</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                        </select>
                    </div>

{{--                    <button type="submit"></button>--}}
                    <a class="btn btn-info form-row mt-3" type="submit">Create</a>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection
