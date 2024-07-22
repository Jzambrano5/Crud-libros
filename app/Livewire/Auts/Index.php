<?php

namespace App\Livewire\Auts;

use App\Models\Aut;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $auts = Aut::paginate();

        return view('livewire.aut.index', compact('auts'))
            ->with('i', $this->getPage() * $auts->perPage());
    }

    public function delete(Aut $aut)
    {
        $aut->delete();

        return $this->redirectRoute('auts.index', navigate: true);
    }
}
