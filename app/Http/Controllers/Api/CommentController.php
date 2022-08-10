<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use App\Jobs\CreateComment;
use App\Http\Requests\Comment\CreateRequest;

class CommentController extends Controller
{
    public function store(CreateRequest $request) {

        CreateComment::dispatch($request['subject'],$request['body'],$request['article_id'],$request['img']);

        return response()->json([
            'status' => 'success'
        ], 201);
    }
}
