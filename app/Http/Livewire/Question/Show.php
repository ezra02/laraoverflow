<?php

namespace App\Http\Livewire\Question;

use App\Models\Question;
use Livewire\Component;

class Show extends Component
{
    public Question $question;

    public function render()
    {
        return view('livewire.question.show');
    }


    public function upVote()
    {
       dd('upvoting');
       $this->question->users()->attach([
        'user_id'=>auth()->id,
        'type'=>'like'
       ]);
    }

    public function downVote()
    {
        dd('downvoting');
        $this->question->users()->attach([
          'user_id'=>auth()->id,
          'type'=>'dislike'
        ]);
    }
}
