@extends('backend.partial.app')
@section('title','Category')
@section('main_section')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h5 class="form-control-navbar badge badge-info">Add New Size</h5>
                <form class="form-group category-create" id="size-create" name="size-create"  action="{{route('category.store')}}" method="post">
                  @include('backend.partial.session_messages')
                    @csrf
                    <div class="col-md-4">
                        <label class="col-form-label" for="category-name">Size Title</label>
                        <input class="form-control" type="text" name="size_title" id="size_title">
                            <span class="text-danger">{{ $errors->first('size_title') }}</span>
                    </div>

                    <button class="btn btn-outline-info form-row mt-3" onclick="validateFm()" type="submit">Create</button>
{{--                    <a class="btn btn-outline-info form-row mt-3" type="submit">Create</a>--}}
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h5 class="form-control-navbar badge badge-info">Add New Colour</h5>
                <form class="form-group colour-create" id="colour-create" name="colour-create"  action="{{route('category.store')}}" method="post">
                    @include('backend.partial.session_messages')
                    @csrf
                    <div class="col-md-4">
                        <label class="col-form-label " for="category-name">Colour Name</label>
                        <input class="form-control colorpicker" type="color" value="" name="colour_code" id="colorpicker">
                        <span class="text-danger">{{ $errors->first('colour_name') }}</span>
                    </div>

                    <button class="btn btn-outline-info form-row mt-3" onclick="validateFm()" type="submit">Create</button>
                    {{--                    <a class="btn btn-outline-info form-row mt-3" type="submit">Create</a>--}}
                </form>
            </div>
        </div>
    </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>

<script>

        function validateFm(){
            $(".category-create").validate({
                rules: {
                    category: "required",
                    // parent: "required",

                },
                messages:{
                    category: "required",
                    // parent: "required",

                }
            });

        }

    $('.colorpicker').colorpicker();
</script>
@endsection
