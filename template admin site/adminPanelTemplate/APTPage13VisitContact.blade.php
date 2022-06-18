@extends('adminPanelTemplate.APTPage1')

@section('content')

    <style type="text/css" class="init">

        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }

    </style>
    <script type="text/javascript" language="javascript" src="{{ asset('/adminassets/') }}/js/jq.dataTable.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="{{ asset('/adminassets/') }}/js/dataTables.bootstrap.min.js">
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
                    تماس های گرفته شده


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
                                <th style="text-align: right">شماره تماس</th>
                                <th style="text-align: right">پست الکترونیک</th>
                                <th style="text-align: right">توضیحات</th>
                            </tr>
                            </thead>
                            <tfoot style="direction: rtl;">
                            <tr>
                                <th style="text-align: right">شناسه</th>
                                <th style="text-align: right">نام و نام خانوادگی</th>
                                <th style="text-align: right">شماره تماس</th>
                                <th style="text-align: right">پست الکترونیک</th>
                                <th style="text-align: right">توضیحات</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>{{App\Models\Tools::persianNumber('1')}}</td>
                                    <td>حسین پورقدیری</td>
                                    <td>{{App\Models\Tools::persianNumber('09112365478')}}</td>
                                    <td>hossein.654321@yahoo.com</td>
                                    <td>من خوشحال می‌شوم در رابطه با کارهای جدید با شما گفت و گو کنم. اگر در پروژه های وب خود به کمک نیاز دارید یا احساس می کنید که برند شما به چیزی تازه نیاز دارد. خبرم کن.</td>
                                </tr>
                                <tr>
                                    <td>{{App\Models\Tools::persianNumber('2')}}</td>
                                    <td>قدیر حسینی</td>
                                    <td>{{App\Models\Tools::persianNumber('09112254478')}}</td>
                                    <td>hossein.654321@gmail.com</td>
                                    <td>من خوشحال می‌شوم در رابطه با کارهای جدید با شما گفت و گو کنم. اگر در پروژه های وب خود به کمک نیاز دارید یا احساس می کنید که برند شما به چیزی تازه نیاز دارد. خبرم کن.</td>
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
