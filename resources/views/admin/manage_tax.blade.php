@extends('admin/layout')
@section('page_title','Manage Tax')
@section('tax_select','active')
@section('container')
    <h1 class="mb10">website discription and keywords</h1>
    <a href="{{url('admin/tax')}}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('tax.manage_tax_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="size" class="control-label mb-1">KeyWords </label>
                                                <textarea id="tax_value" value="{{$tax_value}}" name="tax_value" type="text" class="form-control" aria-required="true" aria-invalid="false" required></textarea>
                                                @error('tax_value')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="size" class="control-label mb-1">Description </label>
                                                <textarea id="tax_desc" value="{{$tax_desc}}" name="tax_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required></textarea> 
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Submit
                                                </button>
                                            </div>
                                            <input type="hidden" name="id" value="{{$id}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                           
                            
                            
                            
                            
                        </div>
                        
        </div>
    </div>
                        
@endsection