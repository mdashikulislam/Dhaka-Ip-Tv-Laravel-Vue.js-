<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\ChannelCategory;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cms = getCms('/');
        setCms($cms);
        $channelCategory = ChannelCategory::where('status','Active')->where('homepage','Yes')->orderByDesc('created_at')->get();
        return view('frontend.home')
            ->with([
                'channelCategory'=>$channelCategory
            ]);
    }

    public function search(Request $request)
    {
        $channels = Channel::where('status','Active');
        if (!empty($request->keyword)){
            $channels = $channels->where('title','LIKE',"%$request->keyword%");
        }
        $channels = $channels->paginate(24);
        return view('frontend.search')
            ->with([
                'channels'=>$channels
            ]);
    }

    public function contactUs()
    {
        $cms = getCms(\request()->segment(1));
        setCms($cms);
        return view('frontend.contact');
    }

    public function contactUsSend(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:255'],
            'email'=>['required','max:255','email'],
            'subject'=>['required','max:255'],
            'message'=>['required']
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        toast('Your request send. our team contact with you. thanks','success');
        return redirect()->back();
    }

    public function aboutUs()
    {
        $cms = getCms(\request()->segment(1));
        setCms($cms);
        return view('frontend.about');
    }
}
