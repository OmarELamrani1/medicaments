<?php

namespace App\Http\Livewire;

use App\Models\Medicaments as ModelsMedicaments;
use Livewire\Component;

class Medicaments extends Component
{
    public $medicaments;
    public $isModalOpen = 0;
    
    public function render()
    {
        $this->medicaments = ModelsMedicaments::all();
        return view('livewire.medicaments');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }
    
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    private function resetCreateForm(){
        $this->designation = '';
    }

    public function store()
    {
        $this->validate([
            'designation' => 'required',
        ]);

        ModelsMedicaments::updateOrCreate(['id' => $this->medicament_id], [
            'designation' => $this->designation,
        ]);
        session()->flash('message', $this->medicament_id ? 'Médicament updated.' : 'Médicament created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        $medicament = ModelsMedicaments::findOrFail($id);
        $this->designation = $medicament;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        ModelsMedicaments::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
