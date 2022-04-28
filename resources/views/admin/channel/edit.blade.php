@extends('admin.layouts.app')
@section('content-title')
    Edit Channel : {{$channel->title}}
    <a href="{{route('channel.index')}}" class="btn btn-success"><i class="fa fa-list fa-fw"></i>Channel List</a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-9">
            <!-- general form elements -->
            <div class="card">
                <div class="card-body">
                    <form role="form" action="{{route('channel.update',['id'=>$channel->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Channel Title :</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Channel Title" value="{{old('title') ? :$channel->title}}">
                            @error('title')
                            <span class="d-block invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-globe fa-fw" style="font-size: 18px;"></i></span>
                            </div>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Channel Slug" value="{{old('slug') ? :$channel->slug}}">
                            @error('slug')
                            <span class="d-block invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="preview_type">Preview Logo Type :</label>
                            <select id="preview_type" class="form-control" name="logo_type">
                                <option {{$channel->logo_type =='Url' ? 'Selected':''}} value="Url" selected>Url</option>
                                <option {{$channel->logo_type =='Choose File' ? 'Selected':''}} value="Choose File">Choose File</option>
                            </select>
                        </div>

                        <div id="preview_append">
                            @if($channel->logo_type =='Url')
                                <div class="form-group">
                                    <label for="preview_url">Preview Logo Url :</label>
                                    <input type="text" class="form-control" id="preview_url" name="preview_url" placeholder="Preview Url" value="{{old('preview_url') ? :$channel->preview_url}}">
                                </div>
                            @else
                                <div class="form-group">
                                    <img style="max-width: 100px" src="{{\Illuminate\Support\Facades\Storage::disk('local')->url($channel->preview_file)}}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="preview_file">Choose Preview Logo :</label>
                                    <input type="file" class="form-control-file" id="preview_file" name="preview_file" >
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="media_url">Media Url :</label>
                            <input type="text" class="form-control @error('media_url') is-invalid @enderror" id="media_url" name="media_url" placeholder="Media Url" value="{{old('media_url') ? :$channel->media_url}}">
                            @error('media_url')
                            <span class="d-block invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="channel_type">Channel Type :  </label>
                            <select id="channel_type" class="form-control select2" multiple="multiple" name="channel_type[]">
                                {!! channelTypeDropdown(old('channel_type') ? :$channel->channelCategories->pluck('id')) !!}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editor1">Description :</label>
                            <textarea id="editor1" name="description" rows="10" cols="80">{{old('description') ?:$channel->description}}</textarea>
                            @error('description')
                            <span class="d-block invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option {{$channel->status == 'Active'? 'selected':''}} value="Active">Active</option>
                                <option {{$channel->status == 'Inactive'? 'selected':''}} value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="label">Seo Title</label>
                            <input type="text" class="form-control" name="seo_title" value="{{old('seo_title') ? :$channel->seo_title}}">
                        </div>
                        <div class="form-group">
                            <label class="label">Seo Keyword</label>
                            <input type="text" class="form-control" name="seo_keyword" value="{{old('seo_keyword') ? :$channel->seo_keyword}}">
                        </div>
                        <div class="form-group">
                            <label class="label">Seo Description</label>
                            <textarea name="seo_description" class="form-control">{{old('seo_description') ? :$channel->seo_description}}</textarea>
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
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title "><strong>Preview Channel Icon</strong></h3>
                </div>
                <div class="card-body box-img">
                    <img src="https://via.placeholder.com/224.png" id="checkImage" style="width: 100%;height: auto">
                    <img src="{{asset('backend/inc/img-spineer.gif')}}">
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title "><strong>Preview Media</strong></h3>
                </div>
                <div class="card-body">
                    <video
                        id="my-video"
                        class="video-js vjs-big-play-centered"
                        controls
                        preload="auto"
                        width="230"
                        height="120"
                        poster="https://via.placeholder.com/230x120.png"
                        data-setup="{}">
                        {{--     Default media url :  https://d2zihajmogu5jn.cloudfront.net/advanced-fmp4/master.m3u8     --}}
                        <source src="https://d2zihajmogu5jn.cloudfront.net/advanced-fmp4/master.m3u8" type="application/x-mpegURL" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                            >
                        </p>
                    </video>
                </div>
            </div>
        </div>
    </div>
    <style>
        .box-img{
            position: relative;
            text-align: center;
        }
        .box-img img:last-child{
            position: absolute;
            top: 10px;
            left: 10px;
            width: 230px;
            height: 230px;
            z-index: 99999;
            opacity: 0;
        }
    </style>
@endsection
@push('css')
    <link href="{{asset('backend/mediaplayer/video-js.css?t='.time())}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/select2/css/select2.css?t='.time())}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/summernote/summernote-bs4.min.css?t='.time())}}" rel="stylesheet" />
@endpush
@push('js')
    <script src="{{asset('backend/mediaplayer/video.min.js?t='.time())}}"></script>
    <script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js?t='.time())}}"></script>
    <script src="{{asset('backend/plugins/select2/js/select2.js?t='.time())}}"></script>
    <script type="text/javascript">
        $('.select2').select2();
        $(document).ready(function (){
            $('#editor1').summernote({
                height: 300,
                focus: true
            });
            $(document).on('change','#preview_type',function (){
                var previewValue = $(this).val();
                if (previewValue === 'Choose File'){
                    $('#preview_append').empty();
                    $('#preview_append').append('<div class="form-group">\n' +
                        '    <label for="preview_file">Choose Preview Logo :</label>\n' +
                        '    <input type="file" class="form-control-file" id="preview_file" name="preview_file" >\n' +
                        '    </div>');
                }else if (previewValue === 'Url'){
                    $('#preview_append').empty();
                    $('#preview_append').append('<div class="form-group">\n' +
                        ' <label for="preview_url">Preview Logo Url :</label>\n' +
                        '<input type="text" class="form-control" id="preview_url" name="preview_url" placeholder="Preview Url">\n' +
                        ' </div>');
                }
            });
            $(document).on('blur','#preview_url',function (){
                $('.box-img').children('img:last-child').css('opacity',1);
                var val = $(this).val();
                if (!val){
                    $('#checkImage').attr('src','https://via.placeholder.com/224.png');
                    setTimeout(function (){
                        $('.box-img').children('img:last-child').css('opacity',0);
                    },300);

                }else{
                    $('#checkImage').attr('src',val);
                    setTimeout(function (){
                        $('.box-img').children('img:last-child').css('opacity',0);
                    },300);
                }
            });
            $(document).on('change','#preview_file',function (){
                console.log('ok');
            });
            $(document).on('change keypress keyup blur','#title',function (){
                var text = $(this).val();
                text = text.toLowerCase();
                var regExp = /\s+/g;
                text = text.replace(regExp,'-');
                text = text.replace(/(^\s+|[^a-zA-Z0-9._-]+|\s+$)/g,"");
                $('#slug').val(text);
            });
            $(document).on('blur','#media_url',function (){
                var mediaUrl = $(this).val();
                var player = videojs(document.getElementById('my-video'));
                if (!mediaUrl){
                    player.src({
                        src: 'https://d2zihajmogu5jn.cloudfront.net/advanced-fmp4/master.m3u8',
                        type: 'application/x-mpegURL',
                    });
                }else{
                    var videoSource = $(this).val().toString();
                    player.src({
                        src: videoSource,
                        type: 'application/x-mpegURL',
                    });
                }
            });
        });

    </script>
@endpush
