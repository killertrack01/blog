<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class PostController extends Controller
{
    public function postList() {
        return view('admin.post.list');
    }

    public function postCreate() {
        return view('admin.post.createpost');
    }
    public function update() {
        
    }
    public function postUpdate() {
        
    }
    public function delete() {
        
    }
}
