@extends('admin.layouts.app')
@section('content-title')
    Channel Category
    <a href="{{route('channel.category.index')}}" class="btn btn-success"><i class="fa fa-list fa-fw"></i>Category List</a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-body">
                    <form role="form" action="{{route('channel.category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Category Name :</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="name" placeholder="Category Name" value="{{old('name') ? :$category->name}}">
                            @error('name')
                            <span class="d-block invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-globe fa-fw" style="font-size: 18px;"></i></span>
                            </div>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Category Slug" value="{{old('slug') ? :$category->slug}}">
                            @error('slug')
                            <span class="d-block invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Homepage</label>
                            <select name="homepage" id="status" class="form-control">
                                <option {{$category->homepage == 'Yes'? 'selected':''}} value="Yes">Yes</option>
                                <option {{$category->homepage == 'No'? 'selected':''}} value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option {{$category->status == 'Active'? 'selected':''}} value="Active">Active</option>
                                <option {{$category->status == 'Inactive'? 'selected':''}} value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="label">Seo Title</label>
                            <input type="text" class="form-control" name="seo_title" value="{{old('seo_title') ? :$category->seo_title}}">
                        </div>
                        <div class="form-group">
                            <label class="label">Seo Keyword</label>
                            <input type="text" class="form-control" name="seo_keyword" value="{{old('seo_keyword')? :$category->seo_keyword}}">
                        </div>
                        <div class="form-group">
                            <label class="label">Seo Description</label>
                            <textarea name="seo_description" class="form-control">{{old('seo_description')? :$category->seo_description}}</textarea>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).on('change keypress keyup blur','#title',function (){
            var text = $(this).val();
            text = text.toLowerCase();
            var regExp = /\s+/g;
            text = text.replace(regExp,'-');
            text = text.replace(/(^\s+|[^a-zA-Z0-9._-]+|\s+$)/g,"");
            $('#slug').val(text);
        });
    </script>
@endpush
