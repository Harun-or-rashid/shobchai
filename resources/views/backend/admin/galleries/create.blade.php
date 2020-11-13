@extends('backend.partial.app')
@section('title','Gallery')
@section('main_section')
<div class="row">
    <link rel="stylesheet" type="text/css" href="{{asset('picEdit/dist')}}/css/picedit.min.css" />

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="form-control-navbar badge badge-info">Upload Photo</h5>
                <form class="form-group category-create" id="category-create" name="category-create"  action="{{route('category.store')}}" method="post">
                  @include('backend.partial.session_messages')
                    @csrf

                    <div  class="col-md-8 mt-3 form-group picedit_box" style="height: 100%;width: 100%;">
                        <label class="col-form-label" for="category-name">Upload & Edit Image</label>
                        <input  type="file" name="image" id="image" class="form-control-file">
                    </div>
                    <div class="col-md-5">
                        <label class="col-form-label" for="category-name">Image Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                        <span class="text-danger">{{ $errors->first('category') }}</span>
                    </div>
                    <div class="col-md-5">
                        <label class="col-form-label" for="parent-name">Select Parent</label>
                        <select class="form-control" name="parent_id" id="">
                            <option value="0">Select Any..</option>

                        </select>
                    </div>

                    <button class="btn btn-outline-info form-row mt-3" onclick="validateFm()" type="submit">Create</button>
{{--                    <a class="btn btn-outline-info form-row mt-3" type="submit">Create</a>--}}
                </form>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('picEdit/dist')}}/js/picedit.min.js"></script>

<script>
    $('#image').picEdit({
        formSubmitted: function(response){
            alert('Form submitted!');
        }
    });
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

</script>
<script type="text/javascript">

</script>
@endsection
