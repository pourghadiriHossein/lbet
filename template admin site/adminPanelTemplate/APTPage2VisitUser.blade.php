@extends('adminPanelTemplate.APTPage1')

@section('content')
    @include('popUp.contentOnePersonForAPT')
    <style type="text/css" class="init">

        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }

    </style>
    <script type="text/javascript" language="javascript" src="{{asset('/')}}adminassets/js/jq.dataTable.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="{{asset('/')}}adminassets/js/dataTables.bootstrap.min.js">
    </script>
    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#orderTable tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input class="form-control input-sm" type="text" placeholder="'+title+'" />' );
            } );

            // DataTable
            var table = $('#orderTable').DataTable( {
                "order": [[ 0, "desc" ]]
            } );

            // Apply the search
            table.columns().every( function () {
                var that = this;

                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        } );
    </script>
    <section id="main-content">
        <section class="wrapper">
            <section class="panel">
                <header class="panel-heading">
                    مدیریت  کاربران


                </header>
                <div class="container">


                    <div   class="col-xs-12 col-sm-12 col-md-12 table-responsive">
                        <br/>
                        @include('include.showError')

                        @include('include.validationError')
                        <table id="orderTable" class="table table-striped">
                            <thead>
                            <tr>
                                <th style="text-align: right">شناسه</th>
                                <th style="text-align: right">نام و نام خانوادگی</th>
                                <th style="text-align: right">تلفن</th>
                                <th style="text-align: right">استان</th>
                                <th style="text-align: right">شهر</th>
                                <th style="text-align: right">منطقه</th>
                                <th style="text-align: right">نقش</th>
                                <th style="text-align: right">وضعیت</th>
                                <th style="text-align: right;width: 15%">امکانات</th>
                            </tr>
                            </thead>
                            <tfoot style="direction: rtl;">
                            <tr>
                                <th style="text-align: right">شناسه</th>
                                <th style="text-align: right">نام و نام خانوادگی</th>
                                <th style="text-align: right">تلفن</th>
                                <th style="text-align: right">استان</th>
                                <th style="text-align: right">شهر</th>
                                <th style="text-align: right">منطقه</th>
                                <th style="text-align: right">نقش</th>
                                <th style="text-align: right">وضعیت</th>
                                <th style="text-align: right;width: 15%">امکانات</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @for($i=1;$i<20;)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>حسین پورقذیری</td>
                                    <td>{{App\Models\Tools::persianNumber('09112345678')}}</td>
                                    <td>گیلان</td>
                                    <td>رشت</td>
                                    <td>یخسازی</td>
                                    <td><p class="label label-default" style="background-color: gold">مدیر</p></td>
                                    <td><p class="label label-success" style="width: 250px">فعال</p></td>
                                    <td> <a class="label label-warning" href="">ویرایش</a></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>قدیر حسینی</td>
                                    <td>{{App\Models\Tools::persianNumber('09115546699')}}</td>
                                    <td>گیلان</td>
                                    <td>رشت</td>
                                    <td>گلسار</td>
                                    <td><p class="label label-default" style="background-color: silver">کاربر</p></td>
                                    <td><p class="label label-danger" style="width: 25px">غیر فعال</p></td>
                                    <td> <a class="label label-warning" href="">ویرایش</a></td>
                                </tr>
                                @endfor
                            </tbody>

                        </table>
                    </div>

                </div>



            </section>
        </section>
    </section>

    <script>

        //owl carousel

        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true

            });
        });

        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

    </script>
@stop
@section('script')
    @include('popUp.script')
    @endsection

