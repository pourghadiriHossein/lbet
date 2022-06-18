@extends('adminPanelTemplate.APTPage1')
@section('content')


    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">

                            افزودن نقش

                        </header>
                        <div class="panel-body">


                            <div class="form">

                                <form class="form-horizontal" action="" method="post" data-toggle="validator" id="user-form">

                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">نام</label>
                                        <div class="col-lg-10">
                                            <input value="{{old('name')}}" type="text" required="required" name="name" class="form-control" placeholder="نام">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">توضیحات</label>
                                        <div class="col-lg-10">
                                            <input value="{{old('label')}}" type="text" name="label" class="form-control" placeholder="توضیحات">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">سطوح دسترسی</label>
                                        <div class="col-lg-10">
                                                <label class="access_lvl">
                                                    <input type="checkbox" name="permissions[]" value="1"> دسترسی آزاد
                                                </label>
                                                <br/>
                                            <label class="access_lvl">
                                                <input type="checkbox" name="permissions[]" value="2"> دسترسی محدود
                                            </label>
                                            <br/>
                                        </div>
                                    </div>
                                    {{--<input type="submit" class="finish btn btn-success" value="ذخیره" />--}}
                                </form>
                                <a href="{{route('APTPage6VisitRoles')}}"><input type="submit" class="finish btn btn-success" value="ذخیره" /></a>

                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/adminassets/') }}/js/jquery.js"></script>
    <script src="{{ asset('/adminassets/') }}/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('/adminassets/') }}/js/jquery.nicescroll.js" type="text/javascript"></script>



    <!--script for this page-->
    <script src="{{ asset('/adminassets/') }}/js/jquery.stepy.js"></script>

    <script type="text/javascript" src="{{ asset('/adminassets/') }}/js/multiselect.js"></script>
    <script type="text/javascript" src="{{ asset('/adminassets/') }}/js/multiselect.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#search1').multiselect({
                search: {
                    left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                    right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                }
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#search2').multiselect({
                search: {
                    left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                    right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                }
            });
        });
    </script>
    <script src="{{ asset('/adminassets/') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('/adminassets/') }}/js/bootstrap-datepicker.fa.min.js"></script>
    <script src="{{ asset('/adminassets/') }}/js/upload-image.js"></script>

    <script>
        //step wizard

        $(function () {
            $('#default').stepy({
                backLabel: 'قبلی',
                block: true,
                nextLabel: 'بعدی',
                titleClick: true,
                titleTarget: '.stepy-tab'
            });
        });
    </script>


@stop