<!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href=".<?= base_url() ?>assets/plugins/ionslider/ion.rangeSlider.css">
  <!-- ion slider Nice -->
  <link rel="stylesheet" href=".<?= base_url() ?>assets/plugins/ionslider/ion.rangeSlider.skinNice.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href=".<?= base_url() ?>assets/plugins/bootstrap-slider/slider.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sliders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sliders</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ion Slider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row margin">
                  <div class="col-sm-6">
                    <input id="range_1" type="text" name="range_1" value="">
                  </div>

                  <div class="col-sm-6">
                    <input id="range_2" type="text" name="range_2" value="1000;100000" data-type="double"
                           data-step="500" data-postfix=" &euro;" data-from="30000" data-to="90000" data-hasgrid="true">
                  </div>
                </div>
                <div class="row margin">
                  <div class="col-sm-6">
                    <input id="range_5" type="text" name="range_5" value="">
                  </div>
                  <div class="col-sm-6">
                    <input id="range_6" type="text" name="range_6" value="">
                  </div>
                </div>
                <div class="row margin">
                  <div class="col-sm-12">
                    <input id="range_4" type="text" name="range_4" value="10000;100000">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bootstrap Slider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row margin">
                  <div class="col-sm-6">
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">

                    <p>data-slider-id="red"</p>
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">

                    <p>data-slider-id="blue"</p>
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green">

                    <p>data-slider-id="green"</p>
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow">

                    <p>data-slider-id="yellow"</p>
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="aqua">

                    <p>data-slider-id="aqua"</p>
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="purple">

                    <p style="margin-top: 10px">data-slider-id="purple"</p>
                  </div>
                  <div class="col-sm-6 text-center">
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green">
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow">
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="aqua">
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                           data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                           data-slider-selection="before" data-slider-tooltip="show" data-slider-id="purple">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- jQuery -->
<script src="<?= base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/dist/js/demo.js"></script>
<!-- Ion Slider -->
<script src="<?= base_url() ?>assets/plugins/ionslider/ion.rangeSlider.min.js"></script>
<!-- Bootstrap slider -->
<script src="<?= base_url() ?>assets/plugins/bootstrap-slider/bootstrap-slider.js"></script>
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').slider()

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 0,
      max     : 5000,
      from    : 1000,
      to      : 4000,
      type    : 'double',
      step    : 1,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    })
    $('#range_2').ionRangeSlider()

    $('#range_5').ionRangeSlider({
      min     : 0,
      max     : 10,
      type    : 'single',
      step    : 0.1,
      postfix : ' mm',
      prettify: false,
      hasGrid : true
    })
    $('#range_6').ionRangeSlider({
      min     : -50,
      max     : 50,
      from    : 0,
      type    : 'single',
      step    : 1,
      postfix : '°',
      prettify: false,
      hasGrid : true
    })

    $('#range_4').ionRangeSlider({
      type      : 'single',
      step      : 100,
      postfix   : ' light years',
      from      : 55000,
      hideMinMax: true,
      hideFromTo: false
    })
    $('#range_3').ionRangeSlider({
      type    : 'double',
      postfix : ' miles',
      step    : 10000,
      from    : 25000000,
      to      : 35000000,
      onChange: function (obj) {
        var t = ''
        for (var prop in obj) {
          t += prop + ': ' + obj[prop] + '\r\n'
        }
        $('#result').html(t)
      },
      onLoad  : function (obj) {
        //
      }
    })
  })
</script>

<script>
  $("#ui").addClass('active');
  $("#sliders").addClass('active');
</script>


