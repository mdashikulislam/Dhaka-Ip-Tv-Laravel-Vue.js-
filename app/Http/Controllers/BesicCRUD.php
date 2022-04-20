<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

interface BesicCRUD{
    public function index();
    public function create();
    public function store(Request $request);
    public function show($id);
    public function edit($id);
    public function update($id, Request $request);
    public function destroy($id);
}
