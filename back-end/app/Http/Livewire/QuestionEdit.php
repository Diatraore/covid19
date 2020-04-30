<?php

namespace App\Http\Livewire;

use App\Question;
use Livewire\Component;

class QuestionEdit extends Component
{
    public $qid;
    public $libelle;
    public $ordre;
    public $type_question;
    public function render()
    {
        return view('livewire.question-edit');
    }

    public function mount($id)
    {
        $question = Question::findOrfail($id);
        $this->qid = $id;
        $this->libelle = $question->libelle;
        $this->ordre = $question->ordre;
        $this->type_question = $question->type_question;
    }

    public function save()
    {
        if ($this->id) {
            $question = Question::find($this->qid);
            $question->update([
                'libelle' => $this->libelle,
                'ordre' => $this->ordre,
                'type_question' => $this->type_question,
            ]);
            return redirect()->route('question.index');
        }
    }
}
