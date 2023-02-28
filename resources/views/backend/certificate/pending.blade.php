@extends('backend.layouts.app')
@section('title', 'Pending Applications')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pending Applications</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        @include('backend.partials.message')
                        <table id="table-1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>NID No</th>
                                    <th>Mobile No</th>
                                    <th>Permanent Holding No.</th>
                                    <th>Permanent Ward No.</th>
                                    <th>Permanent Village</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $applicant)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ ($applicant->b_name)? $applicant->b_name : $applicant->e_name }}</td>
                                        <td>{{ ($applicant->b_nid)? $applicant->b_nid : $applicant->e_nid }}</td>
                                        <td>{{ ($applicant->b_phone)? $applicant->b_phone : $applicant->e_nid }}</td>
                                        <td>{{ ($applicant->b_permanent_holding)? $applicant->b_permanent_holding : $applicant->e_permanent_holding }}</td>
                                        <td>{{ ($applicant->b_permanent_ward)? $applicant->b_permanent_ward : $applicant->e_permanent_ward }}</td>
                                        <td>{{ ($applicant->b_permanent_village)? $applicant->b_permanent_village : $applicant->e_permanent_village }}</td>
                                        <td>
                                            <a href="{{ route('application.view', $applicant->id) }}" class="btn btn-sm btn-info" title="View"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('application.approve', $applicant->id) }}" class="btn btn-sm btn-success" title="Approve"><i class="fas fa-check"></i></a>
                                            <a href="{{ route('application.reject', $applicant->id) }}" class="btn btn-sm btn-danger" title="Reject"><i class="fas fa-close"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(function() {
            $("#table-1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
                "ordering": false,
            });
        });
    </script>
@endpush
