<x-app-layout>
    <div class="row">
        <div class="col-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Tambah User</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>triger@gmail.com</td>
                                    <td class="text-center">
                                        <a href="{{ route('users.show') }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a> | 
                                        <a href="{{ route('users.edit') }}" class="btn btn-success btn-sm"><i class="fas fa-pen-square"></i></a> | 
                                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>