@extends('backend.partial.app')
@section('title','Category')
@section('main_section')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="form-control-navbar badge badge-info">Add New Category</h5>
                <form class="form-group category-create" id="category-create" name="category-create"  action="{{route('category.store')}}" method="post">
                  @include('backend.partial.session_messages')
                    @csrf
                    <div class="col-md-5">
                        <label class="col-form-label" for="category-name">Category Name</label>
                        <input class="form-control" type="text" name="category" id="category">
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                    </div>
                    <div class="col-md-5">
                        <label class="col-form-label" for="parent-name">Select Parent</label>
                        <select class="form-control" name="parent" id="">
                            <option value="">Select Any..</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                        </select>
                    </div>

                    <button class="btn btn-outline-info form-row mt-3" onclick="validateFm()" type="submit">Create</button>
{{--                    <a class="btn btn-outline-info form-row mt-3" type="submit">Create</a>--}}
                </form>
            </div>
        </div>
    </div>
</div>






<script>

        function validateFm(){
            $(".category-create").validate({
                rules: {
                    category: "required",
                    parent: "required",

                },
                messages:{
                    category: "required",
                    parent: "required",

                }
            });

        }

</script>
@endsection
