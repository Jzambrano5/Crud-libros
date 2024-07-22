<?php

namespace App\Livewire\Libs;

use App\Livewire\Forms\LibForm;
use App\Models\Lib;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public LibForm $form;

    public function mount(Lib $lib)
    {
        $this->form->setLibModel($lib);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.lib.show', ['lib' => $this->form->libModel]);
    }
}
