
@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop


@section('page_header')
    <h1 class="page-title">
      add new order
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                <div class="bg order-1 order-md-2" style="background-image: url('images/hero_1.jpg');"></div>
                <form name="my-form" onsubmit="return validform()" action="{{ route('referral') }}" method="POST">
                                @csrf
                        
                                <div class="row">
                                <input type="hidden" id="device" name="device" value="tracker" >
                                    <div class="col-md-12">
                                    <div class="form-group first">
                                        <label for="email">Enter Full name</label>
                                        <input type="text" class="form-control" placeholder="john cena " id="name" name="name"required autocomplete="name" autofocus>
                                    </div>    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group first">
                                        <label for="email">Email Address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="lname">Phone Number</label>
                                        <input type="text" class="form-control"  id="phone"  name="phone">
                                    </div>    
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="lname">Referral Code</label>
                                        <input type="text" class="form-control"  id="code"  name="code">
                                    </div>    
                                    </div>
                                </div>
                                <div class="row">  
                                <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="lname">Quantity</label>
                                        <input type="text" class="form-control" placeholder="1" id="quantity"  name="quantity">
                                    </div>    
                                    </div>   
                                    
                                    <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="lname">City</label>
                                        <input type="text" class="form-control" placeholder="e.g ndola ,mansa" id="location"  name="location">
                                    </div>    
                                    </div>
                                </div> 
                                

                                <input type="submit" value="Order Now" class="btn px-5 btn-info">

                                </form>
                    
                    

                    

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
          return function() {
            $file = $(this).siblings(tag);

            params = {
               
                filename:  $file.data('file-name'),
                id:     $file.data('id'),
                field:  $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
          };
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: [ 'YYYY-MM-DD' ]
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });


            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

@stop


             
