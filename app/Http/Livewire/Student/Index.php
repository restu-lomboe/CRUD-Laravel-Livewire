<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Model\Student;

class Index extends Component
{

    public $paginate = 5;
    public $search;
    protected $updatesQueryString = ['search'];

    public $updateStudent = false;
    protected $listeners = ['storestudent', 'studentNew'];

    public function render()
    {
        return view('livewire.student.index', [
            'students' => $this->search === 0 ?
            Student::orderBy('created_at', 'DESC')->paginate($this->paginate) :
            Student::where('nama_depan', 'like', '%'.$this->search.'%')->paginate($this->paginate)
        ]);
    }

    public function getStudent($id)
    {
        $this->updateStudent = true;
        $student = Student::find($id);
        $this->emit('showStudent', $student);

    }

    public function deleteStudent($id)
    {
        $student = Student::where('id', $id)->first();
        $student->delete();
        session()->flash('message', 'Student '. $student['nama_depan'] .' Berhasil dihapus');
    }

    public function storestudent($student)
    {
        // dd($student);
        session()->flash('message', 'Student '. $student['nama_depan'] .' Berhasil ditambah');
    }

    public function studentNew($student)
    {
        // dd($student);
        session()->flash('message', 'Student '. $student['nama_depan'] .' Berhasil diupdate');
        $this->updateStudent = false;
    }
}
