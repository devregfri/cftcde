<?php $__env->startSection('title', '| Transactions'); ?>
<?php $__env->startSection('content'); ?>

<section class="content-header">
  <h3 style="color: #00cd00" align="left">
    <strong>STATISTIK PELAYANAN</strong> <span style="color: #909090;font-size: 6pt">( VIEW STATISTIK PELAYANAN AGEN )</span>
  </h3>
</section>
<hr>
    <div class="row">
      <div class="col-md-3">
        <div class="col-md-12">
          <?php echo e(Form::label('year', 'Tahun', array('style' => 'font-size:8pt'))); ?>

        </div>
        <div class="col-md-12">
          <div class="small form-group-sm">
            <div id="form_year" class="input-group" style="width: 100%;">
              <?php echo e(Form::number('year', $yearNow, array('onkeyup' => 'getData()', 'id' => 'year', 'class' => 'form-control', 'placeholder' => 'tahun', 'required' => 'required', 'min' => '1'))); ?>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="col-md-12">
          <?php echo e(Form::label('month', 'Bulan', array('style' => 'font-size:8pt'))); ?>

        </div>
        <div class="col-md-12">
          <div class="small form-group-sm">
            <div id="form_year" class="input-group" style="width: 100%;">
              <select onchange="getData()" id="month" name="month" class="form-control btn focus" required>
                <option value="">Pilih</option>
                <option data-tokens="ketchup mustard" value='1'>Januari</option>
                <option data-tokens="ketchup mustard" value='2'>Februari</option>
                <option data-tokens="ketchup mustard" value='3'>Maret</option>
                <option data-tokens="ketchup mustard" value='4'>April</option>
                <option data-tokens="ketchup mustard" value='5'>Mei</option>
                <option data-tokens="ketchup mustard" value='6'>Juni</option>
                <option data-tokens="ketchup mustard" value='7'>Juli</option>
                <option data-tokens="ketchup mustard" value='8'>Agustus</option>
                <option data-tokens="ketchup mustard" value='9'>September</option>
                <option data-tokens="ketchup mustard" value='10'>Oktober</option>
                <option data-tokens="ketchup mustard" value='11'>November</option>
                <option data-tokens="ketchup mustard" value='12'>Desember</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
<section class="content table-responsive">
  <div id="refresh" class="box box-default">
    <div class="box-body table-responsive">
      <table id="data_tabel" class="table table-bordered table-striped table-hover small">
        <thead>
          <th style="font-size: 8pt" class="info"><p align="center">No</p></th>
          <th style="font-size: 8pt" class="info"><p align="center">Tanggal</p></th>
          <th style="font-size: 8pt" class="info"><p align="center">Nama Agen</p></th>
          <th style="font-size: 8pt" class="info"><p align="center">Genre</p></th>
          <th style="font-size: 8pt" class="info"><p align="center">Nama Cs</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Teman Fb</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Grup Fb Diikuti</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Teman Bbm</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Teman Wa</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Fanspage Fb Dimiliki</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Followers Fanspage Fb Dimiliki</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Like Fanspage Fb Dimiliki</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Followers Twitter</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Followers Instagram</p></th>
          <th style="font-size: 8pt" class="warning"><p align="center">Subscriber Youtube</p></th>
          <th style="font-size: 8pt" class="danger"><p align="center">Posting Fb</p></th>
          <th style="font-size: 8pt" class="danger"><p align="center">Share Grup Fb</p></th>
          <th style="font-size: 8pt" class="danger"><p align="center">Broadcast Bbm</p></th>
          <th style="font-size: 8pt" class="success"><p align="center">Jumlah Pelayanan</p></th>
          <th style="font-size: 8pt" class="success"><p align="center">Slot</p></th>
          <th style="font-size: 8pt" class="success"><p align="center">Prognosis</p></th>
          <th style="font-size: 8pt" class="info"><p align="center">Action</p></th> <!--colspan="2"-->
        </thead>
        <tbody id="refresh_data">
          <div id="tampil">
          <?php $no=1; ?> 
          <?php $__currentLoopData = $get_statistikAgen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr class="small">
            <td style="font-size: 8pt" align="center"><?php echo e($no++); ?></td>
            <td style="font-size: 8pt" align="center">
              <?php echo e($data->tanggal); ?>

              <?php echo e(Form::text('f_tanggal', $data->tanggal, array('id' => 'f_tanggal', 'class' => 'hidden'))); ?>

            </td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->nama_agen); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->genre_agen); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->cs); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->teman_fb); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->grup_fb); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->teman_bbm); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->teman_wa); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->fp_fb); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->followers_fp_fb); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->like_fp_fb); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->followers_twitter); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->followers_instagram); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->subscriber_youtube); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->postingan_fb); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->share_grup_fb); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->bc_bbm); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->jml_pelayanan); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->jml_slot); ?></td>
            <td style="font-size: 8pt" align="center"><?php echo e($data->prognosis); ?></td>
            <!--<td>
              <?php echo e(Form::button('<span class="glyphicon glyphicon-edit"></span>', array('onclick' => 'edit(this)', 'value' => $data->id, 'class' => 'btn btn-info btn-xs'))); ?>

            </td>-->
            <td>
              <?php echo e(Form::button('<span class="glyphicon glyphicon-minus"></span>', array('onclick' => 'hapus(this)', 'value' => $data->id, 'class' => 'btn btn-danger btn-xs'))); ?>

            </td>
          </tr>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</section>


<div class="modal fade" id="modalValidation" tabindex="-1" role="dialog" aria-labelledby="modalValidationLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class='col-lg-6 col-md-6 col-sm-6 tampilkan-gambar'>
                        <!-- menampilkan gambar -->
                        </div>
                        <div class='col-lg-6 col-md-6 col-sm-6 tampilkan-dataTransactions'>
                        <!-- dataTransactions artikel -->
                        </div>
                    </div>

                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
</div><!-- modal -->

<script type="text/javascript">
  function getData(){
    var year = $('#year').val();
    var mydate=new Date();
    if ($('#month').val() == 0) {
      var month=mydate.getMonth()+1;
    }
    else {
      var month = $('#month').val();
    }
    var token = '<?php echo e(csrf_token()); ?>';
    var my_url = "<?php echo e(url('/getDataStatistikAgen')); ?>";
    var formData = {
                    '_token': token, 
                    'year': year,
                    'month': month
                  };
    $.ajax({
      method: 'POST',
      url: my_url,
      data: formData,
      dataType: 'json',
      success: function(data){
          var tambah = function (a, b) {
              var hasil = a + b;
              return hasil;
          };
          data_statistik = "<div id='tampil'>";
          $.each(data, function(i,n){
            data_statistik = data_statistik + "<tr class='small'>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + tambah(i, 1) + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["tanggal"] + "<input value='" + n["tanggal"] + "' id='f_tanggal' name='f_tanggal' type='text' class='hidden'></td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["nama_agen"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["genre_agen"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["cs"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["teman_fb"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["grup_fb"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["teman_bbm"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["teman_wa"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["fp_fb"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["followers_fp_fb"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["like_fp_fb"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["followers_twitter"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["followers_instagram"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["subscriber_youtube"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["postingan_fb"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["share_grup_fb"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["bc_bbm"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["jml_pelayanan"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["jml_slot"] + "</td>";
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'>" + n["prognosis"] + "</td>"; 
            data_statistik = data_statistik + "<td style='font-size: 8pt' align='center'><button onclick='hapus(this)' class='btn btn-danger btn-xs' value='" + n["id"] + "'><span class='glyphicon glyphicon-minus'></span></button></td>";  
                          
            data_statistik = data_statistik + "</tr>"; 
          });
          data_statistik = data_statistik + "</div>"; 
          $("#refresh_data").html(data_statistik).hide().fadeIn(700);

          var objIsi = document.getElementById("refresh_data");
          objIsi.scrollTop = objIsi.scrollHeight;
      },

      error: function(data){
          console.log(data);
          alert("error" + ' ' + this.data);
      },

    });
  }
  function hapus(e){
    var id_statistik = e.value;
    var tanggal = $('#f_tanggal').val();
    confirm = confirm("Anda yakin menghapus data statistik di tanggal "+tanggal+" ?");
    if (confirm == true) {   
      var token = '<?php echo e(csrf_token()); ?>';
      var my_url = "<?php echo e(url('/deleteDataStatistikAgen')); ?>";
      var formData = {
                      '_token': token, 
                      'id_statistik': id_statistik
                    };
      $.ajax({
        method: 'POST',
        url: my_url,
        data: formData,
        dataType: 'json',
        success: function(data){
            getData();
        },

        error: function(data){
            console.log(data);
            alert("error" + ' ' + this.data);
        },

      });
    }
  }
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>