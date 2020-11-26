@extends('backend.partial.app')
@section('title','Variances')
@section('main_section')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h5 class="form-control-navbar badge badge-info">Add New Size</h5>
                <form class="form-group size-create" id="size-create" name="size-create"  action="{{route('category.store')}}" method="post">
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
                        <input class="form-control colorpicker" type="text" name="colour_name" id="colourName">
                        <span class="text-danger">{{ $errors->first('colour_name') }}</span>
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label " for="category-name">Selecting for Hex Code</label>
                        <input class="form-control colorpicker" type="color" name="colour_code" id="colourCode">
                        <span class="text-danger">{{ $errors->first('colour_name') }}</span>
                    </div>

                    <button class="btn btn-outline-info form-row mt-3" onclick="validateFmc()" type="submit">Create</button>
                    {{--                    <a class="btn btn-outline-info form-row mt-3" type="submit">Create</a>--}}
                </form>
            </div>
        </div>
    </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>

<script>
    const formSize=document.getElementById('size-create');
    const formColour=document.getElementById('colour-create');
    const colourCode=document.getElementById('colourCode');

    formColour.addEventListener('submit',function (e) {
        e.preventDefault();
console.log(colourCode.value)
    })
    formSize.addEventListener('submit',function (e) {
        e.preventDefault();
console.log("prevented by default")
    })

        function validateFm(){
            $(".size-create").validate({
                rules: {
                    size_title: "required",
                    // parent: "required",

                },
                messages:{
                    size_title: "required",
                    // parent: "required",

                }
            });

        }
        function validateFmc(){
            $(".colour-create").validate({
                rules: {
                    colour_name: "required",
                    // parent: "required",

                },
                messages:{
                    colour_name: "required",
                    // parent: "required",

                }
            });

        }



    $('.colorpicker').colorpicker();
</script>
@endsection
