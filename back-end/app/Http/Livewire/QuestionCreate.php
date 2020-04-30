<?php

namespace App\Http\Livewire;

use App\Question;
use Livewire\Component;

class QuestionCreate extends Component
{
    public $libelle = '';
    public $ordre = '';
    public $type_question = '';

    public function save()
    {
        $this->validate([
            'libelle' => 'required',
            'ordre' => 'required',
            'type_question' => 'required',
        ]);

        Question::create([
            'libelle' => $this->libelle,
            'ordre' => $this->ordre,
            'type_question' => $this->type_question,
        ]);

        return redirect()->route('question.index');
    }

    public function render()
    {
        return view('livewire.question-create');
    }
}
