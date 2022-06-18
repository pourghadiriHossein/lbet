@extends('adminPanelTemplate.APTPage1')

@section('content')

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
                    مدیریت  درباره ما


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
                                <th style="text-align: right">توضیحات</th>
                                <th style="text-align: right">وضعیت</th>
                                <th style="text-align: right;width: 15%">امکانات</th>
                            </tr>
                            </thead>
                            <tfoot style="direction: rtl;">
                            <tr>
                                <th style="text-align: right">شناسه</th>
                                <th style="text-align: right">توضیحات</th>
                                <th style="text-align: right">وضعیت</th>
                                <th style="text-align: right;width: 15%">امکانات</th>
                            </tr>
                            </tfoot>
                            <tbody>


                                <tr>
                                    <td>{{App\Models\Tools::persianNumber('1')}}</td>
                                    <td>من یک فرآیند منحصر به فرد برای هر مشتری ایجاد کرده تا اطمینان حاصل کنم که اهداف تجاریشان به دست می‌آید و کاربرانشان راضی هستند</td>
                                    <td><p class="label label-success" style="width: 250px">فعال</p></td>
                                    <td> <a class="label label-warning" href="">ویرایش</a></td>
                                </tr>
                                <tr>
                                    <td>{{App\Models\Tools::persianNumber('2')}}</td>
                                    <td>من حسین پورقدیری هستم
                                        من یک طراح نرم افزار و توسعه دهنده وب، ساکن رشت هستم و همواره علاقه‌مند به کار در پروژه‌های شما.</td>
                                    <td><p class="label label-danger" style="width: 250px">غیر فعال</p></td>
                                    <td> <a class="label label-warning" href="">ویرایش</a></td>
                                </tr>

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
