@extends('adminPanelTemplate.APTPage1')

@section('content')

    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            افزودن درباره ما

                        </header>
                        <div class="panel-body">




                            @include('include.showError')

                            @include('include.validationError')


                            <?php
                            /**
                             * Created by PhpStorm.
                             * User: Hamid
                             * Date: 10/27/16
                             * Time: 23:26
                             */
                            /* @var $this UseraccController */
                            /* @var $model Useracc */
                            /* @var $form CActiveForm */
                            ?>


                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <fieldset title="اطلاعات پایه" class="step" id="default-step-0">
                                    <legend></legend>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">توضیحات</label>
                                        <div class="col-lg-10">
                                            <textarea rows="20" name="description" class="form-control"> {{old('description')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">وضعیت درباره ما</label>
                                        <div class="col-lg-10">
                                            <select name="status" class="form-control" style="height: 40px">
                                                <option value="0" selected>غیر فعال</option>
                                                <option value="1" >فعال</option>
                                            </select>
                                        </div>
                                    </div>

                                </fieldset>
                                {{--<input type="submit" class="finish btn btn-danger" value="تایید" />--}}
                            </form>
                            <a href="{{route('APTPage11VisitAbout')}}"><input type="submit" class="finish btn btn-danger" value="تایید" /></a>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
    <!-- js placed at the end of the document so the pages load faster -->

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
    <script src="{{asset('/adminassets')}}/js/upload-image.js"></script>

    <script src="{{asset('/adminassets')}}/js/jquery.js"></script>
    <script src="{{asset('/adminassets')}}/js/jquery.scrollTo.min.js"></script>
    <script src="{{asset('/adminassets')}}/js/jquery.nicescroll.js" type="text/javascript"></script>



    <!--script for this page-->
    <script src="{{asset('/adminassets')}}/js/jquery.stepy.js"></script>

    <script type="text/javascript" src="{{asset('/adminassets')}}/js/multiselect.js"></script>
    <script type="text/javascript" src="{{asset('/adminassets')}}/js/multiselect.min.js"></script>
    <script src="{{asset('/')}}js/plugins/sortable.js" type="text/javascript"></script>
    <script src="{{asset('/')}}js/locales/fr.js" type="text/javascript"></script>
    <script src="{{asset('/')}}js/locales/es.js" type="text/javascript"></script>
    <script src="{{asset('/')}}themes/explorer/theme.js" type="text/javascript"></script>


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
    <script src="{{asset('/adminassets')}}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('/adminassets')}}/js/bootstrap-datepicker.fa.min.js"></script>
    <script src="{{asset('/adminassets')}}/js/upload-image.js"></script>
    <script src="{{asset('/')}}js/fileinput.js" type="text/javascript"></script>


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


    <script>

        $(document).ready(function () {
            $("#test-upload").fileinput({
                'showPreview': false,
                'allowedFileExtensions': ['jpg', 'png', 'gif'],
                'elErrorContainer': '#errorBlock'
            });

            $("#Images").fileinput({
                'theme': 'explorer',
                'uploadUrl': '#',
                'allowedFileExtensions': ['jpg', 'png'],
                'maxFileSize':700,
                'minFileSize':50,
                'maxFileCount':8,
                overwriteInitial: false,
                initialPreviewAsData: true,
                initialPreview: [
                ],
                initialPreviewConfig: [
                    {caption: "", size: 700000, width: "120px", url: "", key: 1}
                ]

            });
        });
        $(function(){
            var imageCount=0;
            $(document).on('change', '#Images', function(){
                var e = $(this);
                if (e.val()) {
                    e.clone().attr('id', 'Images' + imageCount++).insertBefore(e);
                }
                e.val('');
            });
        });


    </script>

@stop