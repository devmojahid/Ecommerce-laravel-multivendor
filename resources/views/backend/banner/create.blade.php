
@extends('backend.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Banner /</span> Add Banner</h4>

        <div class="row">
            <!-- Basic Layout -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Add banner</h5>
                  <a href="{{ route('banner.index') }}" class="btn btn-block btn-dark">All Banners</a>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="basic-default-name" placeholder="John Doe" value="{{ old('title') }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary ">
                                <i class="fa fa-picture-o" ></i> Choose
                              </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="text" name="photo">
                          </div>
                          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Status</label>
                        <div class="col-sm-10">
                        <select name="status" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="active" {{ old('status') =='active' ? 'selected':'' }} >Active</option>
                          <option value="inactive" {{ old('status') =='inactive' ? 'selected':'' }} >Inactive</option>
                        </select>
                        </div>
                      </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Condition</label>
                        <div class="col-sm-10">
                        <select name="condition" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="banner" {{ old('status') =='banner' ? 'selected':'' }} >Banner</option>
                          <option value="promo" {{ old('status') =='promo' ? 'selected':'' }} >promo</option>
                        </select>
                        </div>
                      </div>
                   
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-message">Discription</label>
                      <div class="col-sm-10">
                        <textarea id="summernote" name="discription" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2">{{ old('discription') }}</textarea>
                      </div>
                    </div>
                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
       
      </div>
</div>
@endsection
@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
         $('#lfm').filemanager('image');
    </script>
@endsection