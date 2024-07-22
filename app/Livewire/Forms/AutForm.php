<?php

namespace App\Livewire\Forms;

use App\Models\Aut;
use Livewire\Form;

class AutForm extends Form
{
    public ?Aut $autModel;
    
    public $nombre = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
        ];
    }

    public function setAutModel(Aut $autModel): void
    {
        $this->autModel = $autModel;
        
        $this->nombre = $this->autModel->nombre;
    }

    public function store(): void
    {
        $this->autModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->autModel->update($this->validate());

        $this->reset();
    }
}
