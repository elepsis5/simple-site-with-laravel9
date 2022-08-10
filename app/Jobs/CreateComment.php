<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Comment;

class CreateComment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries =3;

    protected $subject;
    protected $body;
    protected $article_id;
    protected $img;


    public function __construct($subject, $body, $id, $img)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->article_id = $id;
        $this->img = $img;
    }

    public function handle()
    {
        $random = rand(1,1000);
        $comment = Comment::create([
            'subject' => $this->subject,
            'body' => $this->body,
            'article_id' => $this->article_id,
            'img' => 'https://picsum.photos/id/'. $random . '/50/50'

        ]);
    }
}
