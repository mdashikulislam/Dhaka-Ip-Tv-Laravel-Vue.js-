@extends('admin.layouts.app')
@section('main-content')
    <!-- left column -->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add New Channel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Channel Title :</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Channel Title" value="{{old('title')}}">
                    </div>
                    <div class="form-group has-success">
                        <div class="input-group ">
                            <span class="input-group-addon"><i class="fa fa-globe fa-fw" style="font-size: 18px;"></i></span>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Channel Slug" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="preview_type">Preview Logo Type :</label>
                        <select id="preview_type" class="form-control">
                            <option value="Url" selected>Url</option>
                            <option value="Choose File">Choose File</option>
                        </select>
                    </div>
                    <div id="preview_append">
                        <div class="form-group">
                            <label for="preview_url">Preview Logo Url :</label>
                            <input type="text" class="form-control" id="preview_url" name="preview_url" placeholder="Preview Url">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="media_url">Media Url :</label>
                        <input type="text" class="form-control" id="media_url" name="media_url" placeholder="Media Url" value="{{old('media_url')}}">
                    </div>
                    <div class="form-group">
                        <label for="channel_type">Channel Type :  </label>
                        <select id="channel_type" class="form-control" name="channel_type">
                            <?php echo channelTypeDropdown();?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editor1">Description :</label>
                        <textarea id="editor1" name="description" rows="10" cols="80"></textarea>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-3">
        <div class="box box-info">
            <div class="box-header with-border text-center">
                <h3 class="box-title "><strong>Preview Channel Icon</strong></h3>
            </div>
            <div class="box-body box-img">
                <img src="https://via.placeholder.com/224.png" id="checkImage" style="width: 100%;height: auto">
                <img src="{{asset('backend/inc/img-spineer.gif')}}">
            </div>
        </div>
        <div class="box box-danger">
            <div class="box-header with-border text-center">
                <h3 class="box-title "><strong>Preview Media</strong></h3>
            </div>
            <div class="box-body vdo-box">
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
@section('css')
    <link href="{{asset('backend/mediaplayer/video-js.css?'.time())}}" rel="stylesheet" />
@endsection
@section('js')
    <script src="{{asset('backend/mediaplayer/video.min.js?'.time())}}"></script>
    <script src="{{asset('backend/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            CKEDITOR.replace('editor1');
            $(document).on('change','#preview_type',function (){
                var previewValue = $(this).val();
                if (previewValue === 'Choose File'){
                    $('#preview_append').empty();
                    $('#preview_append').append('<div class="form-group">\n' +
                    '    <label for="preview_file">Choose Preview Logo :</label>\n' +
                    '    <input type="file" class="form-control" id="preview_file" name="preview_file" >\n' +
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
@endsection
