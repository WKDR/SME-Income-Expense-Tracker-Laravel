@extends('layouts.app', ['page' => __('Products'), 'pageSlug' => 'products'])

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Products Table</h5>
          <!-- New Product Modal Trigger -->
          <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#newProductModal">Add Product</button>
          
          <!-- New Product Modal -->
          <div class="modal modal-black fade" id="newProductModal" tabindex="-1" role="dialog" aria-labelledby="newProductModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              {!! Form::open(['route'=>'products.store']) !!}
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="newProductModalLabel">New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="tim-icons icon-simple-remove"></i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      {{ Form::label('productName','Product Name') }}
                      {{ Form::text('productName','',['class'=>'form-control', 'placeholder'=>'Product Name']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('price','Price') }}
                      {{ Form::number('price','',['class'=>'form-control', 'placeholder'=>'Price']) }}
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                  </div>
                </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter">
              <thead class="text-primary">
                <tr>
                  <th>S/N</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Hako Lamp</td>
                  <td>25,000</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
