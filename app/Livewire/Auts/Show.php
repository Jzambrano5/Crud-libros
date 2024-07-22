<?php

namespace App\Livewire\Auts;

use App\Livewire\Forms\AutForm;
use App\Models\Aut;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public AutForm $form;

    public function mount(Aut $aut)
    {
        $this->form->setAutModel($aut);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.aut.show', ['aut' => $this->form->autModel]);
    }
}
