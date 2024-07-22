<?php

namespace App\Livewire\Libs;

use App\Models\Lib;
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
        $libs = Lib::paginate();

        return view('livewire.lib.index', compact('libs'))
            ->with('i', $this->getPage() * $libs->perPage());
    }

    public function delete(Lib $lib)
    {
        $lib->delete();

        return $this->redirectRoute('libs.index', navigate: true);
    }
}
