<?php

namespace App\Http\Livewire;

use App\Models\SystemStatus;
use Livewire\Component;

class Navbar extends Component
{
    public $currentUser;
    public $systemStatus = [];
    protected $listeners = ['nilaiUpdated' => 'render', 'nilaiMahasiswaStore' => 'render', 'dataPenilaianUpdated' => 'render', 'mahasiswaDelete' => 'render'];

    public function mount()
    {
        $this->currentUser = auth()->user()->name;
    }

    public function render()
    {
        $this->systemStatus = SystemStatus::all()->toArray();
        if (empty($this->systemStatus)) {
            $this->systemStatus = [
                ['id' => 1, 'state' => false, 'nama' => 'Bobot kriteria'],
                ['id' => 2, 'state' => false, 'nama' => 'Hasil seleksi']
            ];

            foreach ($this->systemStatus as $item) {
                SystemStatus::create([
                    'id' => $item['id'],
                    'state' => $item['state'],
                    'nama' => $item['nama']
                ]);
            }
        }

        return view('livewire.navbar');
    }
}
