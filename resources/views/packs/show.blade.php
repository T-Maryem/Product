

@extends('packs.layout')
  
  @section('content')
      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2> Show Pack</h2>
              </div>
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('packs.index') }}"> Back</a>
              </div>
          </div>
      </div>
     
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Name:</strong>
                  {{ $pack->name }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Description:</strong>
                  {{ $pack->description }}
              </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Price:</strong>
                  {{ $pack->price }}
              </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Image:</strong>
                  {{ $pack->image }}
              </div>
          </div>
      </div>
  @endsection