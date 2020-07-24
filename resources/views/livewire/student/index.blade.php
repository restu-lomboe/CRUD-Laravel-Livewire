<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" wire:model="search" type="search" placeholder="Search" aria-label="Search">
        </form>
    </nav>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateStudent)
        @livewire('student.update')
    @else
        @livewire('student.create')
    @endif

    <div class="container pb-5">
        <select wire:model="paginate" class="form-control col-md-1 float-right">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
        </select>
    </div>


    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row"> {{ $loop->iteration }} </th>
                        <td> {{ $student->nama_depan }} </td>
                        <td> {{ $student->nama_belakang }} </td>
                        <td> {{ $student->email }} </td>
                        <td> {{ $student->jenis_kelamin }} </td>
                        <td>
                            <button wire:click="getStudent({{$student->id}})" class="btn btn-warning brn-sm">Edit</button>
                            <button wire:click="deleteStudent({{$student->id}})" class="btn btn-danger brn-sm">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $students->links() }}
    </div>
</div>
