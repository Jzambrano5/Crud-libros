<?php

namespace App\Livewire\Auts;

use App\Livewire\Forms\AutForm;
use App\Models\Aut;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public AutForm $form;

    public function mount(Aut $aut)
    {
        $this->form->setAutModel($aut);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('auts.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.aut.create');
    }
}
