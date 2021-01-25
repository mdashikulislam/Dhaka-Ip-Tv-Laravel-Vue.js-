<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BesicCRUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChannelController extends Controller implements BesicCRUD
{
    public function index()
    {
        return 'asfsaf';
    }
    public function create()
    {
       return view('admin.channel.create');
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update($id, Request $request)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
