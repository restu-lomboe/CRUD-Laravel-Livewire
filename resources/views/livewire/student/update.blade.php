<div>
    <div class="container mt-5 mb-5">
        <form method="POST" wire:submit.prevent="update">
            <div class="row">
                <input type="hidden" wire:model="student_id">
                <div class="col-md-3">
                    <label for=""> Nama Depan </label>
                    <input type="text" wire:model="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror">
                    @error('nama_depan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for=""> Nama Belakang </label>
                    <input type="text" wire:model="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror">
                    @error('nama_belakang')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for=""> email </label>
                    <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for=""> Jenis Kelamin </label>
                    <select wire:model="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col mt-3">
                    <button type="submit" class="btn btn-success w-23 float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
