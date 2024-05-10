@extends('layouts.dashboard')
@include('layouts.user_tools')
@section('style')



    @stack('user_style')

    <style>


        table.dataTable th:nth-child(1) {
            width: 20px!important;
            max-width: 20px!important;
            word-break: break-all;
            white-space: pre-line;
        }



    </style>

    <link href="{{asset('/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>

@endsection
@section('content')


    <div class="page-content-wrapper usersContainer" id="app">

        <div class="container-fluid">

            <div class="row mt-4">
                <div class="col-sm-12">
                    <div class="float-right page-breadcrumb">
                        <ol class="breadcrumb">
                        </ol>
                    </div>

                </div>
            </div>
            <!-- end row -->
            <div class="row mt-4">
                <div class="col-xl-12 ">
                    <div class="m-t--4">
                        <div class="border-0  mt-2">
                            <div class="row">
                                <div class="col-xl-5">
                                    <h3>Deposit Requests</h3>
                                </div>
                                <div class="col-xl-7 text-right">

                                </div>
                            </div>
                        </div>


                        <!-- end row -->
                        <div class="col-md-12">
                            <div class="box-outer">
                                <a class="arrow-left arrow" id="arrowLeft"><i class="fa fa-chevron-left"></i></a>
                                <a class="arrow-right arrow" id="arrowRight"><i class="fa fa-chevron-right"></i></a>
                                <div class="box-inner">

                                    <table class="table table-padded call-center-table transactionsTable box-outer table-responsive-fix-big any1table" width="100%" id="users-table">
                                        <thead>
                                        <tr>
                                          

                                            <th>Client
                                                <input class="search_input" id="check_name" type="text" name="email">
                                            </th>
                                            <th>MT4</th>
                                            <th>Amount</th>
                                            <th>Bank Name</th>
                                            <th>Beneficiary Name</th>
                                            <th>SWIFT</th>
                                            <th>IBAN</th>
                                            <th>Status</th>
                                            <th>Date</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>

                                    </table>


                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            @stack('user_modals')


        </div><!-- container fluid -->

    </div> <!-- Page content Wrapper -->


@endsection

@section('scripts')

    <!-- Required datatable js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Datatable init js -->

    <script src="{{asset('pages/datatables.init.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>

    @if (logged_in()->can_copy ===0) 

    <script type="text/javascript">
        $(document).ready(function () {
            //Disable full page
            $('body').bind('cut copy paste', function (e) {
                e.preventDefault();
            });
            
            //Disable part of page
            $('#id').bind('cut copy paste', function (e) {
                e.preventDefault();
            });
        });
    </script>
    
    @endif


    <script>

        $(function() {
            var new_table = $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                pageLength: 15,
                ajax: {

                    url: "{{ route('manager_deposit_requests') }}",

                    data: function (d) {

                     
                        d.name = $('#check_name').val();

                    }

                },

                dom: 'Bfrtip',
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                ],
                buttons: [
                    'pageLength'
                ],
                columns: [
                    { className : "text-uppercase" , data: 'name', name: 'name'  },
                    { data: 'mt4_account', name: 'mt4_account' },
                    { data: 'amount', name: 'amount',},
                    { data: 'bank_name', name: 'bank_name' },
                    { data: 'beneficiary_name', name: 'beneficiary_name' },
                    { data: 'swift', name: 'swift' },
                    { data: 'iban', name: 'iban' },
                    { data: 'status', name: 'status' },
                    { data: 'created_at', name: 'created_at' },
                ]
            });

            $(".search_input").change(function(e){

                new_table.draw();

            });
        });


        // DELETE USER END



        // CHECKBOX START

        function delete_deposit_request(id){
            vm.delete_request(id);
        }

        // CHECKBOX END
    </script>

    @stack('user_scripts')


@endsection
