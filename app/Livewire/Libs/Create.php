<?php

namespace App\Livewire\Libs;

use App\Livewire\Forms\LibForm;
use App\Models\Lib;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public LibForm $form;

    public function mount(Lib $lib)
    {
        $this->form->setLibModel($lib);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('libs.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.lib.create');
    }
}
