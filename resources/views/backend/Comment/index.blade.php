@extends('backend.layouts.app')

@section('css')
    <!-- Data Table CSS -->
    <link href="{{ asset('backend/vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Comments</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="container-fluid px-xxl-65 px-xl-20">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>List Comment</h4>
            <div class="d-flex">
                
            </div>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <table id="datable_1" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Product</th>
                                        <th>Phone</th>
                                        <th>Description</th>
                                        <th>Parent Comment</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $index => $comment)
                                        <tr>
                                            <td>{{ $comment->name }}</td>
                                            <td>{{ $comment->products['name'] }}</td>
                                            <td>{{ $comment->phone }}</td>
                                            <td>{{ $comment->description }}</td>
                                            <td>{{ $comment->parent_name }}</td>
                                            <td>{!! $comment->status_label !!}</td>
                                            <td>{{ $comment->created_at->diffForHumans() }}</td>
                                            <td>{{ $comment->updated_at->diffForHumans() }}</td>
                                            <td>
                                                @if(!$comment->parent_name)
                                                <a href="{{ route('comments.show', ['comment' => $comment->id]) }}" class="mr-25" data-toggle="tooltip" data-placement="top" title="view"> <i class="icon-eye"></i> </a>
                                                @endif
                                                @if($comment->parent_name)
                                                <a href="{{ route('comments.edit', ['comment' => $comment->id ]) }}" class="mr-25" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="icon-pencil"></i> </a>
                                                @endif
                                                <a href="javascript:void(0)" class="mr-25" onclick="moveToTrash({{ $index }})" data-toggle="tooltip" data-placement="top" title="Move to trash"> <i class="icon-trash txt-danger"></i> </a>
                                                <form name="trash_{{ $index }}" action="{{ route('comments.destroy', ['comment' => $comment]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if(!count($comments))
                                        <td colspan="9" class="text-center"><h3><i class="linea-icon linea-basic" data-icon="f"></i></h3> No Data</td>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection

@section('script')
    <!-- Data Table JavaScript -->
    <script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/dist/js/dataTables-data.js') }}"></script>
    <script>
      function moveToTrash(index) {
        let form = 'trash_' + index;
        $(`form[name=${form}]`).submit();
      }
    </script>
@endsection