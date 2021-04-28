@extends('layouts.components.master')
@section('title','Data Mahasiswa')

@section('content')
   
<div class="section-body">

    <div class="row">
      <div class="col-12 col-sm-12 col-lg-12">
        <div class="card author-box card-primary">
          <div class="card-header">
            <div class="author-box-left ml-auto">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
              <div class="clearfix"></div>
              <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Follow</a>
            </div>
            <div class="author-box-details">
                <div class="row py-0 my-0 mx-0" >
                    <div class="form-group col-md-6 col-12 my-0 mx-0 ">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputNim" class="col-sm-5 mx-0 col-form-label">NIM</label>
                            <div class="col-sm-7 mx-0">
                            <input type="text" class="form-control form-control-sm" id="inputNim" placeholder="NIM">
                            </div>
                          </div>
                    </div>
                    <div class="form-group col-md-6 col-12 my-0 mx-0">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputStatus" class="col-sm-5 mx-0 col-form-label">Status</label>
                            <div class="col-sm-7 mx-0">
                            <input type="status" class="form-control form-control-sm" id="inputStatus" placeholder="status">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row py-0 my-0 mx-0">
                    <div class="form-group col-md-6 col-12 my-0 mx-0">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputNm-mhs" class="col-sm-5 mx-0 col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm-7 mx-0">
                            <input type="text" class="form-control form-control-sm" id="inputNm-mhs" placeholder="Nama Mahasiswa">
                            </div>
                          </div>
                    </div>
                    <div class="form-group col-md-6 col-12 my-0 mx-0">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputSistemkuliah" class="col-sm-5 mx-0 col-form-label">Sistem Kuliah</label>
                        <div class="col-sm-7 mx-0">
                          <input type="text" class="form-control form-control-sm" id="inputSistemkuliah" placeholder="Sistem Kuliah">
                        </div>
                          </div>
                    </div>
                </div>
                <div class="row py-0 my-0 mx-0" >
                    <div class="form-group col-md-6 col-12 my-0 mx-0 ">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputProgramstudi" class="col-sm-5 col-form-label">Program Studi</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="inputProgramstudi" placeholder="Program Studi">
                            </div>
                          </div>
                    </div>
                    <div class="form-group col-md-6 col-12 my-0 mx-0">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputJenispendaftaran" class="col-sm-5 col-form-label">Jenis Pendaftaran</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="inputJenispendaftaran" placeholder="Jenis Pendaftaran">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row py-0 my-0 mx-0" >
                    <div class="form-group col-md-6 col-12 my-0 mx-0 ">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputKonsentrasi" class="col-sm-5 col-form-label">Konsentrasi</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="inputKonsentrasi" placeholder="Konsentrasi">
                            </div>
                          </div>
                    </div>
                    <div class="form-group col-md-6 col-12 my-0 mx-0">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputJalurpendaftran" class="col-sm-5 col-form-label">Jalur Pendaftaran</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="inputJalurpendaftran" placeholder="Jalur Pendaftaran">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row py-0 my-0 mx-0" >
                    <div class="form-group col-md-6 col-12 my-0 mx-0 ">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputPeriodemasuk" class="col-sm-5 col-form-label">Periode Masuk</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="inputPeriodemasuk" placeholder="Periode Masuk">
                            </div>
                          </div>
                    </div>
                    <div class="form-group col-md-6 col-12 my-0 mx-0">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputGelombang" class="col-sm-5 col-form-label">Gelombang</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="inputGelombang" placeholder="Gelombang">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row py-0 my-0 mx-0" >
                    <div class="form-group col-md-6 col-12 my-0 mx-0 ">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputTahunkurikulum" class="col-sm-5 col-form-label">Tahun Kurikulum</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="inputTahunkurikulum" placeholder="Tahun Kurikulum">
                            </div>
                          </div>
                    </div>
                    <div class="form-group col-md-6 col-12 my-0 mx-0">
                        <div class="form-group row my-1 mx-0">
                            <label for="inputTanggalmasuk" class="col-sm-5 col-form-label">Tanggal Masuk</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="inputTanggalmasuk" placeholder="Tanggal Masuk">
                            </div>
                          </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="card-body">
            <ul class="nav nav-tabs" id="myTab5" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="datadiri" data-toggle="tab" href="#datadiri" role="tab" aria-controls="datadiri" aria-selected="true">
                  <i class="fas fa-datadiri"></i> Data Diri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="orangtua" data-toggle="tab" href="#orangtua" role="tab" aria-controls="orangtua" aria-selected="false">
                  <i class="fas fa-id-card"></i> Orangtua</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent5">
                <div class="tab-pane fade show active" id="datadiri" role="tabpanel" aria-labelledby="datadiri">
                    <div class="row  py-0 my-0">
                        <div class="form-group col-md-6 col-12  py-0 my-0">
                            <label>Jenis Kelamin</label>
                            <select class="form-control form-control-sm">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-12  py-0 my-0">
                            <label>NIK / No.KTP</label>
                            <input type="text" class="form-control" value="" required=""> 
                        </div>
                    </div>
                    <div class="row py-0 my-0">
                        <div class="form-group col-md-6 col-12  py-0 my-0 ">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" value="" required="">
                        </div>
                        <div class="form-group col-md-6 col-12  py-0 my-0">
                            <label>No. KK</label>
                            <input type="text" class="form-control" value="" required=""> 
                        </div>
                    </div>
                    <div class="row  py-0 my-0">
                        <div class="form-group col-md-6 col-12  py-0 my-0">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" value="" required="">                    
                        </div>
                        <div class="form-group col-md-6 col-12  py-0 my-0">
                            <label>Status Perkawinan</label>
                            <select class="form-control form-control-sm">
                            <option>Belum Menikah</option>
                            <option>Menikah</option>
                            <option>Janda</option>
                            <option>Duda</option>
                            </select> 
                        </div>
                    </div>
                    <div class="row  py-0 my-0">
                        <div class="form-group col-md-6 col-12  py-0 my-0">
                            <label>Agama</label>
                            <select class="form-control form-control-sm">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            </select>  
                        </div>                 
                        <div class="form-group col-md-6 col-12  py-0 my-0">
                            <label>Golongan darah</label>
                            <input type="text" class="form-control" value="" required="">                    
                        </div>
                    </div>
                    <div class="row  py-0 my-0">
                        <div class="form-group col-md-6 col-12  py-0 my-0">
                            <label>Email</label>
                            <input type="email" class="form-control" value="ujang@maman.com" required="">
                        </div>                 
                        <div class="form-group col-md-6 col-12  py-0 my-0">
                            <label>No Hendphone</label>
                            <input type="text" class="form-control" value="" required="">     
                        </div>
                    </div>
                    <div class="row  py-0 my-0">     
                    <div class="form-group col-md-12 col-12  py-0 my-0">   
                        <label>Alamat Sesuai KTP</label>
                        <textarea class="form-control summernote-simple"></textarea> 
                    </div>              
                    </div>
                    <div class="row  py-0 my-0">
                        <div class="form-group col-md-12 col-12  py-0 my-0">   
                            <label>Alamat Domisili Saat Ini</label>
                            <textarea class="form-control summernote-simple"></textarea> 
                        </div>   
                    </div>
                </div>
                <div class="tab-pane fade" id="orangtua" role="tabpanel" aria-labelledby="orangtua">
                    <div class="row  py-0 my-0">
                        <div class="form-group col-md-12 col-12  py-0 my-0">   
                            <label>Alamat Domisili Saat Ini</label>
                            <textarea class="form-control summernote-simple"></textarea> 
                        </div>   
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>

@endsection