<?php
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

function channelTypeDropdown($selected = []){
    $categories = \App\Models\ChannelCategory::where('status','Active')->get();
    $row = "";
    if ($categories->isNotEmpty()){
        foreach ($categories as $key => $value){
            $row .= "<option value='$value->id' ";
            if (!empty($selected)){
                foreach ($selected as $st){
                    if ($st == $value->id){
                        $row .= ' selected ';
                    }
                }
            }
            $row .=' >'.$value->name.'</option>';
        }
    }
    return $row;
}
function uploadSingleImage($request = null, $path = '', $prefix = ''): string
{
    $file = $request;
    $fileName = $prefix.'_'.time().rand(0000,9999).'.'.$file->getClientOriginalExtension();
    $destination = $path;
    $file->storeAs($destination,$fileName,'public');
    $fileNameWithDestination = $destination . '/'.$fileName;
    return $fileNameWithDestination;
}
function channelListByCategoryID($categoryId = 0,$limit = 0){
    $data =  \App\Models\Channel::with('channelCategories')->whereHas('channelCategories',function ($query) use ($categoryId){
        $query->where('channel_category_id',$categoryId);
    })->where('status','Active');
    if ($limit > 0){
        $data = $data->limit($limit);
    }
    $data =  $data->orderByDesc('created_at','DESC')->get();
    return $data;
}
function getChannelCard($data = [],$average = 0){
    if (empty((object)$data)){
        return ;
    }
    $html = '<div class="card"><div class="card__cover">';
    if ($data->logo_type == 'Url'){
        $html.='<img style="max-height:90px" class="lazy" src="'.asset('frontend/img/demo.png').'" data-src="'.$data->preview_url.'" alt="'.$data->title.'">';
    }else{
        $html.='<img style="max-height:90px" class="lazy" src="'.asset('frontend/img/demo.png').'" data-src="'.\Illuminate\Support\Facades\Storage::disk('local')->url($data->preview_file).'" alt="'.$data->title.'">';
    }
    if ($average > 0){
        $average = number_format((int)$average,1);
        $class = '';
        if ((int)$average > 7.5){
            $class = 'card__rate--green';
        }elseif ((int)$average > 5.5){
            $class = 'card__rate--yellow';
        }else{
            $class = 'card__rate--red';
        }
//        $html.="<span class='card__rate $class'>$average</span>";
    }
    $html.='<a href="'.route('channel.details',['slug'=>$data->slug]).'" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>

                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="'.route('channel.details',['slug'=>$data->slug]).'">'.$data->title.'</a></h3>
                        </div>
                    </div>';
    return $html;
}
function ratingShow($total = 0){
    if ($total > 0){
        $total = number_format((int)$total,1);
        $class = '';
        if ((int)$total > 7.5){
            $class = 'card__rate--green';
        }elseif ((int)$total > 5.5){
            $class = 'card__rate--yellow';
        }else{
            $class = 'card__rate--red';
        }
        return "<span class='card__rate $class'>$total</span>";
    }else{
        return false;
    }
}
function getCms($url, $where_array = []){
    $row =  \App\Models\Cms::where('url', '=', $url)->first();

    $data = new stdClass();
    $data->seo_title = $row ? $row->seo_title : getenv('APP_NAME');
    $data->seo_keyword  = $row ? $row->seo_keyword : getenv('APP_NAME');
    $data->seo_description     = $row ? $row->seo_description : getenv('APP_NAME');

    if (!empty($row) && !empty($where_array)){
        foreach ($where_array as $k => $d){
            $data->seo_title    = str_replace('%' . $k . '%', $d, $data->seo_title);
            $data->seo_keyword  = str_replace('%' . $k . '%', $d, $data->seo_keyword);
            $data->seo_description     = str_replace('%' . $k . '%', $d, $data->seo_description);
        }
    }
    return $data;
}
function setCms($cms){
    if (empty($cms)){
        return;
    }
    //Seo meta
    SEOMeta::setTitle($cms->seo_title)
        ->setKeywords($cms->seo_keyword)
        ->setDescription($cms->seo_description);
    //Open Graph
    OpenGraph::setTitle($cms->seo_title.' - '.getenv('APP_NAME'))
        ->setDescription($cms->seo_description)
        ->setUrl(\url()->full())
        ->addProperty('locale', 'pt-br')
        ->addProperty('locale:alternate', ['pt-pt', 'en-us'])
        ->addImage(asset('frontend/img/logo.svg'),['height' => 300, 'width' => 300]);
    //Twitter Card
    TwitterCard::setTitle($cms->seo_title.' - '.getenv('APP_NAME'));
    //Json Ld
    JsonLd::setTitle($cms->seo_title.' - '.getenv('APP_NAME'))
        ->setDescription($cms->seo_description)
        ->addImage(asset('frontend/img/logo.svg'));
}
