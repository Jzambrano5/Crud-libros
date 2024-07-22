<?php

namespace App\Livewire\Forms;

use App\Models\Lib;
use Livewire\Form;

class LibForm extends Form
{
    public ?Lib $libModel;
    
    public $titulo = '';
    public $genero = '';
    public $year_publicacion = '';
    public $id_autor = '';

    public function rules(): array
    {
        return [
			'titulo' => 'required|string',
			'genero' => 'required|string',
			'year_publicacion' => 'required',
			'id_autor' => 'required|string',
        ];
    }

    public function setLibModel(Lib $libModel): void
    {
        $this->libModel = $libModel;
        
        $this->titulo = $this->libModel->titulo;
        $this->genero = $this->libModel->genero;
        $this->year_publicacion = $this->libModel->year_publicacion;
        $this->id_autor = $this->libModel->id_autor;
    }

    public function store(): void
    {
        $this->libModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->libModel->update($this->validate());

        $this->reset();
    }
}
