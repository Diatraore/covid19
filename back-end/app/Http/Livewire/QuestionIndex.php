<?php

namespace App\Http\Livewire;

use App\Question;
use Livewire\Component;
use Livewire\WithPagination;

class QuestionIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;
    public $sortField;

    public function sortBy($field)
    {
        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.question-index', [
            'questions' => Question::orderBy('ordre')
                ->paginate($this->perPage)
        ]);
    }



    public function supprimer($id) {
        $question = Question::findOrFail($id);
        $question->delete();
    }
}
