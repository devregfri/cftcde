@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} form-group-sm">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                {{ Form::text('username', old('username'), array('id' => 'username', 'class' => 'form-control', 'placeholder' => 'username', 'style' => 'text-transform: lowercase', 'required' => 'required', 'autofocus' => 'autofocus')) }}

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }} form-group-sm">
                            <label for="nik" class="col-md-4 control-label">NIK</label>

                            <div class="col-md-6">
                                {{ Form::number('nik', '', array('id' => 'nik', 'class' => 'form-control', 'placeholder' => 'nik sesuai ktp elektronik', 'min' => 0, 'required' => 'required')) }}
                                {{ Form::number('role_id', 21, array('id' => 'role_id', 'class' => 'form-control hidden', 'placeholder' => 'id role', 'min' => 0, 'required' => 'required')) }}

                                @if ($errors->has('nik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-error' : '' }} form-group-sm">
                            <label for="n_lengkap" class="col-md-4 control-label">Nama Lengkap</label>

                            <div class="col-md-6">
                                {{ Form::text('n_lengkap', '', array('id' => 'n_lengkap', 'class' => 'form-control', 'placeholder' => 'nama lengkap', 'style' => 'text-transform: uppercase', 'required' => 'required')) }}

                                @if ($errors->has('nama_lengkap'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_lengkap') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('handphone') ? ' has-error' : '' }} form-group-sm">
                            <label for="no_hp" class="col-md-4 control-label">No Handphone</label>

                            <div class="col-md-6">
                                {{ Form::text('no_hp', '', array('id' => 'no_hp', 'class' => 'form-control', 'placeholder' => 'no hp', 'minlength' => '12', 'maxlength' => '12', 'required' => 'required')) }}

                                @if ($errors->has('handphone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('handphone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-sm">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                {{ Form::email('email', old('email'), array('id' => 'email', 'class' => 'form-control', 'placeholder' => 'email', 'style' => 'text-transform: lowercase', 'required' => 'required')) }}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }} form-group-sm">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                {{ Form::text('alamat', old('alamat'), array('id' => 'alamat', 'class' => 'form-control', 'placeholder' => 'alamat', 'style' => 'text-transform: uppercase', 'required' => 'required')) }}

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('no_rt') ? ' has-error' : '' }} form-group-sm">
                            <label for="no_rt" class="col-md-4 control-label">RT</label>

                            <div class="col-md-2">
                                {{ Form::number('no_rt', '', array('id' => 'no_rt', 'class' => 'form-control', 'placeholder' => 'RT', 'min' => 0)) }}

                                @if ($errors->has('no_rt'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_rt') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="no_rw" class="col-md-2 control-label">RW</label>

                            <div class="col-md-2">
                                {{ Form::number('no_rw', '', array('id' => 'no_rw', 'class' => 'form-control', 'placeholder' => 'RW', 'min' => 0)) }}

                                @if ($errors->has('no_rw'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_rw') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kode_prop') ? ' has-error' : '' }} form-group-sm">
                            <label for="prop" class="col-md-4 control-label">Provinsi</label>

                            <div class="col-md-6">
                                <div id="form_provinsi" class="input-group" style="width: 100%;">
                                    <select onchange="getKabupaten();" id="prop" name="prop" class="form-control btn focus" required>
                                        <option value="">Pilih</option>
                                        @foreach ($getProvinsi as $data)
                                            <option data-tokens="ketchup mustard" value='{{ $data->no_prop }}'>{{ $data->nama_prop }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('kode_prop'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kode_prop') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kode_kab') ? ' has-error' : '' }} form-group-sm">
                            <label for="kab" class="col-md-4 control-label">Kabupaten</label>

                            <div class="col-md-6">
                                <div id="form_kabupaten" class="input-group" style="width: 100%;">
                                    <select id="kab" name="kab" class="form-control btn focus" required disabled>
                                        <option value="">Pilih</option>
                                    </select>

                                    @if ($errors->has('kode_kab'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kode_kab') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kode_kec') ? ' has-error' : '' }} form-group-sm">
                            <label for="kec" class="col-md-4 control-label">Kecamatan</label>

                            <div class="col-md-6">
                                <div id="form_kecamatan" class="input-group" style="width: 100%;">
                                    <select id="kec" name="kec" class="form-control btn focus" required disabled>
                                        <option value="">Pilih</option>
                                    </select>

                                    @if ($errors->has('kode_kec'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kode_kec') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kode_desa') ? ' has-error' : '' }} form-group-sm">
                            <label for="kel" class="col-md-4 control-label">Desa/Kel.</label>

                            <div class="col-md-6">
                                <div id="form_kel" class="input-group" style="width: 100%;">
                                    <select id="kel" name="kel" class="form-control btn focus" disabled>
                                        <option value="">Pilih</option>
                                    </select>

                                    @if ($errors->has('kode_desa'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kode_desa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="n_cs" class="col-md-4 control-label">Cs Marketing</label>

                            <div class="col-md-6">
                                <div id="form_n_cs" class="input-group" style="width: 100%;">
                                    <select id="n_cs" name="n_cs" class="form-control btn focus" required>
                                        <option value="">Pilih</option>
                                        @foreach ($getCsMarketing as $data)
                                            <option data-tokens="ketchup mustard" value='{{ $data->id }}'>{{ $data->nama_lengkap }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}  form-group-sm">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                {{ Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'password', 'required' => 'required')) }}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', array('id' => 'password-confirm', 'class' => 'form-control', 'placeholder' => 'password konfirmasi', 'required' => 'required')) }}
                            </div>
                        </div>

                        <hr>

                        <h5>Agen Referral <span style="font-size: 9pt">(* diisi jika merupakan CS dari agen tertentu)</span></h5>
                        

                        <div class="form-group form-group-sm">
                            <label for="nik_agen" class="col-md-4 control-label">Nik Agen</label>

                            <div class="col-md-6">
                                <div id="form_nik_agen" class="input-group" style="width: 100%;">
                                    <select onchange="getUsername();" id="nik_agen" name="nik_agen" class="form-control btn focus">
                                        <option value="">Pilih</option>
                                        @foreach ($getNik as $data)
                                            <option data-tokens="ketchup mustard" value='{{ $data->id }}'>{{ $data->nik }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="name_agen" class="col-md-4 control-label">Username Agen</label>

                            <div class="col-md-6">
                                <div id="form_name_agen" class="input-group" style="width: 100%;">
                                    {{ Form::text('name_agen', '', array('id' => 'name_agen', 'class' => 'form-control', 'placeholder' => 'name agen', 'disabled' => 'disabled')) }}
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h5>Kode Keamanan</h5>

                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}  form-group-sm">
                            <label for="captcha" class="col-md-4 control-label">Captcha</label>

                            <div class="col-md-6">
                                {!! app('captcha')->display() !!}

                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  function getKabupaten(){
    var prop = $('#prop').val();
    var token = '{{ csrf_token() }}';
    var my_url = "{{url('/getKabupaten')}}";
    var formData = {
                    '_token': token, 
                    'prop': prop
                  };
    $.ajax({
      method: 'POST',
      url: my_url,
      data: formData,
      dataType: 'json',
      success: function(data){
          kabupaten = "<select onchange='getKecamatan();' id='kab' name='kab' class='form-control btn focus' required>";
          kabupaten = kabupaten + "<option value=''>Pilih</option>";
          $.each(data, function(i,n){
            kabupaten = kabupaten + '<option data-tokens="ketchup mustard" value="' + n["no_kab"] + '">'+ n["nama_kab"] + '</option>';
          });
          kabupaten = kabupaten + "</select>";
          $("#form_kabupaten").html(kabupaten);
      },

      error: function(data){
          console.log(data);
          alert("error" + ' ' + this.data);
      },

    });
  }
  function getKecamatan(){
    var kab = $('#kab').val();
    var token = '{{ csrf_token() }}';
    var my_url = "{{url('/getKecamatan')}}";
    var formData = {
                    '_token': token, 
                    'kab': kab
                  };
    $.ajax({
      method: 'POST',
      url: my_url,
      data: formData,
      dataType: 'json',
      success: function(data){
          kecamatan = "<select onchange='getKelurahan()' id='kec' name='kec' class='form-control btn focus' required>";
          kecamatan = kecamatan + "<option value=''>Pilih</option>";
          $.each(data, function(i,n){
            kecamatan = kecamatan + '<option data-tokens="ketchup mustard" value="' + n["no_kec"] + '">'+ n["nama_kec"] + '</option>';
          });
          kecamatan = kecamatan + "</select>";
          $("#form_kecamatan").html(kecamatan);
      },

      error: function(data){
          console.log(data);
          alert("error" + ' ' + this.data);
      },

    });
  }
  function getKelurahan(){
    var kec = $('#kec').val();
    var token = '{{ csrf_token() }}';
    var my_url = "{{url('/getKelurahan')}}";
    var formData = {
                    '_token': token, 
                    'kec': kec
                  };
    $.ajax({
      method: 'POST',
      url: my_url,
      data: formData,
      dataType: 'json',
      success: function(data){
          kel = "<select id='kel' name='kel' class='form-control btn focus' required>";
          kel = kel + "<option value=''>Pilih</option>";
          $.each(data, function(i,n){
            kel = kel + '<option data-tokens="ketchup mustard" value="' + n["no_kel"] + '">'+ n["nama_kel"] + '</option>';
          });
          kel = kel + "</select>";
          $("#form_kel").html(kel);
      },

      error: function(data){
          console.log(data);
          alert("error" + ' ' + this.data);
      },

    });
  }

  function getUsername(){
    var nik_agen = $('#nik_agen').val();
    var token = '{{ csrf_token() }}';
    var my_url = "{{url('/getUsername')}}";
    var formData = {
                    '_token': token, 
                    'nik_agen': nik_agen
                  };
    $.ajax({
      method: 'POST',
      url: my_url,
      data: formData,
      dataType: 'json',
      success: function(data){
          $.each(data, function(i,n){
            name_agen = '<input placeholder="name agen" class="form-control" type="text" id="name_agen" name="name_agen" value=' + n["nama_lengkap"] + ' disabled />';
          });
          $("#form_name_agen").html(name_agen);

          if (nik_agen == ""){
            $("#role_id").val(21);
            $("#name_agen").val("");
          }
          else {
            $("#role_id").val(22);
          }
      },

      error: function(data){
          console.log(data);
          alert("error" + ' ' + this.data);
      },

    });
  }
</script>

@endsection
