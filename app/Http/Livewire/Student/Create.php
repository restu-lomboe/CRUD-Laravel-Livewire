<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Model\Student;

class Create extends Component
{
    public $nama_depan;
    public $nama_belakang;
    public $email;
    public $jenis_kelamin;

    public function submit()
    {
        $this->validate([
            'nama_depan' => 'required|min:6',
            'nama_belakang' => 'required|min:6',
            'email' => 'required|email',
            'jenis_kelamin' => 'required'
        ]);

        $student = Student::create([
            'nama_depan' => $this->nama_depan,
            'nama_belakang' => $this->nama_belakang,
            'email' => $this->email,
            'jenis_kelamin' => $this->jenis_kelamin,
        ]);

        $this->deleteInput();

        $this->emit('storestudent', $student);

    }

    public function deleteInput()
    {
        $this->nama_depan = null;
        $this->nama_belakang = null;
        $this->email = null;
        $this->jenis_kelamin = null;
    }

    public function render()
    {
        return view('livewire.student.create');
    }
}
