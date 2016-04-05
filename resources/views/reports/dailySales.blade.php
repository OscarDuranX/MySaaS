@extends('layouts.app')

@section('htmlheader_title')
    Daily sales report
@endsection

@section('custom_scripts')
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>--}}

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dailySales').dataTable();
        } );

    </script>
@endsection

@section('custom_css')
    <link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-10">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daily reports Sales</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" id="dailySales">
                            <tbody>
                            <tr>
                                <td>Day 1</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Day 2</td>
                                <td>15</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-10">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bar Chart</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <graph :labels="['day1','day2','day3']"
                                   :values="[65,45,32,120]"></graph>

                            <graph  :labels='{!! json_encode($days) !!}'
                                    :values='{!! json_encode($totals) !!}' ></graph>

                            <graph  :labels="['day20','day21','day22','day23']"
                                    :values="[256,134,123,120]" ></graph>

                            <graph  :labels="['dayprova','dayprova','day32','day33']"
                                    :values="[36,14,12,10]"
                                    color="blue"></graph>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>


@endsection