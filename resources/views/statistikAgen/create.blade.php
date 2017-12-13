@extends('layouts.app')
@section('title', '| Transactions')
@section('content')

<section class="content-header">
  <h3 style="color: #00cd00" align="left">
    <strong>STATISTIK PELAYANAN</strong> <span style="color: #909090;font-size: 7pt">( INPUT STATISTIK PELAYANAN AGEN )</span>
  </h3>
</section>

<hr>

<section class="content">
      <div class="box box-default">
        <div class="box-body">
          {{ Form::open(array('url' => '/statistikAgen')) }}
          <div id="form_statistik_agen" class="well">
            <h5 style="color: orange" class="box-title">Data Agen</h5>
            <div class="row">
              <div class="col-md-3">
                <div class="col-md-12">
                  {{ Form::label('n_agen', 'Nama', array('style' => 'font-size:8pt')) }}
                </div>
                <div class="col-md-12">
                  <div class="small form-group-sm">
                      <div id="form_n_agen" class="input-group" style="width: 100%;">
                          {{ Form::text('n_agen', Auth::user()->name, array('id' => 'n_agen', 'class' => 'form-control', 'placeholder' => 'nama agen', 'required' => 'required', 'disabled' => 'disabled')) }}
                          {{ Form::text('id_agen', Auth::user()->id, array('id' => 'id_agen', 'class' => 'form-control hidden', 'placeholder' => 'id agen', 'required' => 'required')) }}
                      </div>
                  </div>
                </div>
              </div>
              @if (Auth::user()->role_id == 4)
                <div class="col-md-3">
                  <div class="col-md-12">
                    {{ Form::label('n_agen', 'Nama Agen', array('style' => 'font-size:8pt')) }}
                  </div>
                  <div class="col-md-12">
                    <div class="small form-group-sm">
                      <div id="form_n_agen" class="input-group" style="width: 100%;">
                        @foreach ($agen_subagen_referrals as $data)
                          {{ Form::text('n_agen', $data->name, array('id' => 'n_agen', 'class' => 'form-control', 'placeholder' => 'nama agen', 'required' => 'required', 'disabled' => 'disabled')) }}
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              @endif
              <div class="col-md-3">
                <div class="col-md-12">
                  {{ Form::label('n_cs', 'Nama Cs', array('style' => 'font-size:8pt')) }}
                </div>
                <div class="col-md-12">
                  <div class="small form-group-sm">
                    <div id="form_n_cs" class="input-group" style="width: 100%;">
                      @foreach ($cs_agen_referrals as $data)
                        {{ Form::text('t_n_cs', $data->nama_lengkap, array('id' => 't_n_cs', 'class' => 'form-control', 'placeholder' => 'nama cs', 'required' => 'required', 'disabled' => 'disabled')) }}
                        {{ Form::text('n_cs', $data->nama_lengkap, array('id' => 'n_cs', 'class' => 'form-control hidden', 'placeholder' => 'nama cs', 'required' => 'required')) }}
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="col-md-12">
                  {{ Form::label('g_agen', 'Genre Agen', array('style' => 'font-size:8pt')) }}
                </div>
                <div class="col-md-12">
                  <div class="small form-group-sm">
                    <div id="form_g_agen" class="input-group" style="width: 100%;">
                      <select onchange="getForm()" id="g_agen" name="g_agen" class="form-control btn focus" required>
                        <option value="">Pilih</option>
                        <option data-tokens="ketchup mustard" value='voli'>voli</option>
                        <option data-tokens="ketchup mustard" value='bola'>bola</option>
                        <option data-tokens="ketchup mustard" value='racing'>racing</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--_______________________________________________________________________-->
          <div id="attention" class="hidden">
            <div class="thumbnail">
              <div class="container-fluid">
                <h5 align="center" style="color: red" class="box-title"><b>ANDA SUDAH MEMASUKKAN DATA HARI INI DENGAN GENRE INI</b></h5>
              </div>
            </div>
          </div>
          <div id="form_input_statistik_agen" class="hidden">
            <div class="thumbnail">
              <div class="container-fluid">
                <h5 style="color: orange" class="box-title">Data Statistik Pertemanan</h5>
                <div class="row">
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('f_fb', 'Teman Facebook', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                          <div id="form_f_fb" class="input-group" style="width: 100%;">
                              {{ Form::number('f_fb', '', array('id' => 'f_fb', 'class' => 'form-control', 'placeholder' => 'jumlah teman fb', 'required' => 'required', 'min' => '1')) }}
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('j_grup_fb', 'Grup Facebook Diikuti', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_j_grup_fb" class="input-group" style="width: 100%;">
                          {{ Form::number('j_grup_fb', '', array('id' => 'j_grup_fb', 'class' => 'form-control', 'placeholder' => 'jumlah grup facebook', 'required' => 'required', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('f_bbm', 'Teman BBM', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_f_bbm" class="input-group" style="width: 100%;">
                            {{ Form::number('f_bbm', '', array('id' => 'f_bbm', 'class' => 'form-control', 'placeholder' => 'jumlah teman bbm', 'required' => 'required', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('f_wa', 'Teman Whatsapp', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                          <div id="form_f_wa" class="input-group" style="width: 100%;">
                              {{ Form::number('f_wa', '', array('id' => 'f_wa', 'class' => 'form-control', 'placeholder' => 'jumlah teman whatsapp', 'required' => 'required', 'min' => '1')) }}
                          </div>
                      </div>
                    </div>
                  </div>
                  <div style="margin-top: 2%;font-size: 8pt;color: red" class="col-md-12"><p><b> - optional</b></p></div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('j_fp_fb', 'Fanspage Fb Dimiliki', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_j_fp_fb" class="input-group" style="width: 100%;">
                          {{ Form::number('j_fp_fb', '', array('id' => 'j_fp_fb', 'class' => 'form-control', 'placeholder' => 'jumlah fanspage fb dimiliki', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('j_followers_fp_fb', 'Followers Fanspage Fb Dimiliki', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_j_followers_fp_fb" class="input-group" style="width: 100%;">
                          {{ Form::number('j_followers_fp_fb', '', array('id' => 'j_followers_fp_fb', 'class' => 'form-control', 'placeholder' => 'jumlah followers fanspage fb dimiliki', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('j_like_fp_fb', 'Like Fanspage Fb Dimiliki', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_j_like_fp_fb" class="input-group" style="width: 100%;">
                          {{ Form::number('j_like_fp_fb', '', array('id' => 'j_like_fp_fb', 'class' => 'form-control', 'placeholder' => 'jumlah like fanspage fb dimiliki', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('j_followers_twitter', 'Followers Twitter', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_j_followers_twitter" class="input-group" style="width: 100%;">
                          {{ Form::number('j_followers_twitter', '', array('id' => 'j_followers_twitter', 'class' => 'form-control', 'placeholder' => 'jumlah followers twitter', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div style="margin-top:2%" class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('j_followers_instagram', 'Followers Instagram', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_j_followers_instagram" class="input-group" style="width: 100%;">
                          {{ Form::number('j_followers_instagram', '', array('id' => 'j_followers_instagram', 'class' => 'form-control', 'placeholder' => 'jumlah followers instagram', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div style="margin-top:2%" class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('j_subscriber_youtube', 'Subscriber Youtube', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_j_subscriber_youtube" class="input-group" style="width: 100%;">
                          {{ Form::number('j_subscriber_youtube', '', array('id' => 'j_subscriber_youtube', 'class' => 'form-control', 'placeholder' => 'jumlah subscriber youtube', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <h5 style="color: orange" class="box-title">Data Tugas</h5>
                <div class="row">
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('posting_fb', 'Posting Facebook', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                          <div id="form_posting" class="input-group" style="width: 100%;">
                              {{ Form::number('posting_fb', '', array('id' => 'posting_fb', 'class' => 'form-control', 'placeholder' => 'jumlah postingan facebook', 'required' => 'required', 'min' => '1')) }}
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('s_grup_fb', 'Share Grup Facebook', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_s_grup_fb" class="input-group" style="width: 100%;">
                          {{ Form::number('s_grup_fb', '', array('id' => 's_grup_fb', 'class' => 'form-control', 'placeholder' => 'jumlah share grup facebook', 'required' => 'required', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('bc_bbm', 'Broadcast BBM', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_bc_bbm" class="input-group" style="width: 100%;">
                            {{ Form::number('bc_bbm', '', array('id' => 'bc_bbm', 'class' => 'form-control', 'placeholder' => 'jumlah broadcast bbm', 'required' => 'required', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <h5 style="color: orange" class="box-title">Data Statistik Pelayanan</h5>
                <div class="row">
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('j_pelayanan', 'Pelayanan', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                          <div id="form_j_pelayanan" class="input-group" style="width: 100%;">
                              {{ Form::number('j_pelayanan', '', array('id' => 'j_pelayanan', 'class' => 'form-control', 'placeholder' => 'jumlah pelayanan', 'required' => 'required', 'min' => '1')) }}
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('j_slot', 'Slot', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_j_slot" class="input-group" style="width: 100%;">
                          {{ Form::number('j_slot', '', array('id' => 'j_slot', 'class' => 'form-control', 'placeholder' => 'jumlah slot', 'required' => 'required', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="col-md-12">
                      {{ Form::label('prognosis', 'Prognosis', array('style' => 'font-size:8pt')) }}
                    </div>
                    <div class="col-md-12">
                      <div class="small form-group-sm">
                        <div id="form_prognosis" class="input-group" style="width: 100%;">
                            {{ Form::number('prognosis', '', array('id' => 'prognosis', 'class' => 'form-control', 'placeholder' => 'jumlah prognosis', 'required' => 'required', 'min' => '1')) }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div style="margin-top: 2%" class="row">
                  <div class="col-md-5"></div>
                  <div class="col-md-2">
                    <div class="form-group small form-group-sm">
                      <label style="font-size:8pt"></label>
                      <div class="input-group">
                        {!! Form::submit('INPUT',['class' => 'btn btn-success btn-sm', 'name' => 'input_preorders']) !!}
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5"></div>
                </div>
              </div>
            </div>
          </div>

          

          {{ Form::close() }}
        </div>
      </div>
</section>



<script type="text/javascript">
  function getForm(){
    var g_agen=$('#g_agen').val();
    var token = '{{ csrf_token() }}';
    var my_url = "{{url('/getFormStatistikAgen')}}";
    var formData = {
                    '_token': token, 
                    'g_agen': g_agen
                  };
    $.ajax({
      method: 'POST',
      url: my_url,
      data: formData,
      dataType: 'json',
      success: function(data){
          if ( !$.trim(data) ) {
            $("#form_input_statistik_agen").removeClass( "hidden" );
            $("#attention").addClass( "hidden" );
          }
          else {
            $("#form_input_statistik_agen").addClass( "hidden" );
            $("#attention").removeClass( "hidden" );
          }
      },


    });
  }
  /*function insertStatPelayanan(){
    var id_agen=$('#id_agen').val();
    var n_cs=$('#n_cs').val();
    var tanggal=$('#tanggal').val();
    var g_agen=$('#g_agen').val();
    var f_fb=$('#f_fb').val();
    var j_grup_fb=$('#j_grup_fb').val();
    var f_bbm=$('#f_bbm').val();
    var f_wa=$('#f_wa').val();
    var posting_fb=$('#posting_fb').val();
    var s_grup_fb=$('#s_grup_fb').val();
    var bc_bbm=$('#bc_bbm').val();
    var j_pelayanan=$('#j_pelayanan').val();
    var j_slot=$('#j_slot').val();
    var prognosis=$('#prognosis').val();
    var token = '{{ csrf_token() }}';
    var my_url = "{{url('/statistikAgen/coba')}}";
    var formData = {
                    '_token': token, 
                    'id_agen': id_agen,
                    'n_cs': n_cs,
                    'tanggal': tanggal,
                    'g_agen': g_agen,
                    'f_fb': f_fb,
                    'j_grup_fb': j_grup_fb,
                    'f_bbm': f_bbm,
                    'f_wa': f_wa,
                    'posting_fb': posting_fb,
                    's_grup_fb': s_grup_fb,
                    'bc_bbm': bc_bbm,
                    'j_pelayanan': j_pelayanan,
                    'j_slot': j_slot,
                    'prognosis': prognosis
                  };
    $.ajax({
      method: 'POST',
      url: my_url,
      data: formData,
      dataType: 'json',
      success: function(data){
            $("#tanggal").val("");
            $("#g_agen").val("");
            $("#f_fb").val("");
            $("#j_grup_fb").val("");
            $("#f_bbm").val("");
            $("#f_wa").val("");
            $("#posting_fb").val("");
            $("#s_grup_fb").val("");
            $("#bc_bbm").val("");
            $("#j_pelayanan").val("");
            $("#j_slot").val("");
            $("#prognosis").val("");
            $("#tanggal").focus();
      },


    });
  }*/
</script>

@endsection