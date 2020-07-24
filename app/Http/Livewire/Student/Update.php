<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Model\Student;

class Update extends Component
{

    public $nama_depan;
    public $nama_belakang;
    public $email;
    public $jenis_kelamin;
    public $student_id;

    protected $listeners = ['showStudent'];

    public function render()
    {
        return view('livewire.student.update');
    }

    public function showStudent($student)
    {
        $this->nama_depan = $student['nama_depan'];
        $this->nama_belakang = $student['nama_belakang'];
        $this->email = $student['email'];
        $this->jenis_kelamin = $student['jenis_kelamin'];
        $this->student_id = $student['id'];
    }

    public function update()
    {
        $this->validate([
            'nama_depan' => 'required|min:6',
            'nama_belakang' => 'required|min:6',
            'email' => 'required|email',
            'jenis_kelamin' => 'required'
        ]);

        if($this->student_id){
            $student = Student::where('id', $this->student_id)->first();
            $student->update([
                'nama_depan' => $this->nama_depan,
                'nama_belakang' => $this->nama_belakang,
                'email' => $this->email,
                'jenis_kelamin' => $this->jenis_kelamin
            ]);
        }
        $this->deleteInput();

        $this->emit('studentNew', $student);
    }

    public function deleteInput()
    {
        $this->nama_depan = null;
        $this->nama_belakang = null;
        $this->email = null;
        $this->jenis_kelamin = null;
        $this->student_id = null;
    }
}
