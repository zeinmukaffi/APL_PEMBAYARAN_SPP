@extends('layout.layout')
@section('content')
<section class="section">
    <h3>Data SPP</h3>
    <div class="card">
        <div class="card-body">
            <div class="d-flex pb-3">
                <a href="{{ url('spp/create') }}" class="btn btn-success my-2 mx-2">Add Data [+]</a>
            </div>
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>KNominal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataSPP as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tahun }}</td>
                        <td>{{ $item->nominal }}</td>
                        <td class="d-flex gap-2" style="justify-content: center">
                            <div>
                                <a href="{{ url('spp/'.$item->id.'/edit') }}"
                                    class="btn btn-warning btn-sm text-white mr-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </div>
                            <div>
                                <button type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter{{ $item->id }}"
                                    class="btn btn-danger btn-sm text-white"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                        @include('spp.delete')
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
