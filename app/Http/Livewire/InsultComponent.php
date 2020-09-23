<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Insult;

class InsultComponent extends Component
{
    use WithPagination;
    
    public $insult_id, $title, $body;
    public $view = 'create';
    
    public function render()
    {
        return view('livewire.insult-component', [
            'insults' => Insult::orderBy('id', 'desc')->paginate(8)
        ]);
    }
    
    public function store() 
    {
        
        $this->validate(['title' => 'required', 'body' => 'required']);
        
        $insult = Insult::create([
            'title' => $this->title,
            'body' => $this->body
        ]);
        
        $this->edit($insult->id);
    }
    
    public function edit($id){
        $insult = Insult::find($id);
        
        $this->insult_id = $insult->id;
        $this->title = $insult->title;
        $this->body = $insult->body;
        
        $this->view = 'edit';
    }
    
    public function default(){
        $this->title = '';
        $this->body = '';        
        $this->view = 'create';
    }
    
    public function update(){
        $this->validate(['title' => 'required', 'body' => 'required']);
        $insult = Insult::find($this->insult_id);
        $insult->update([
            'title' => $this->title,
            'body' => $this->body
        ]);
        
        $this->default();

    }
    
    public function destroy($id){
        Insult::destroy($id);
    }
}
