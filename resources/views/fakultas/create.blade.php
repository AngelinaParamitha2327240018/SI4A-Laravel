@extends('layout.main')
@section('title', 'Fakultas')

@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card card-primary card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header"><div class="card-title">Tambah Fakultas</div></div>
        <!--end::Header-->
        <!--begin::Form-->
        <form action="{{ route('fakultas.store') }}" method="POST">
            @csrf
          <!--begin::Body-->
          <div class="card-body">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Fakultas</label>
              <input type="text" class="form-control" name="nama">
              @error('nama')
            <div class="text-denger">{{  $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
              <label for="singkatan" class="form-label">Singkatan</label>
              <input type="text" class="form-control" name="singkatan">
              @error('singkatan')
            <div class="text-denger">{{  $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="dekan" class="form-label">Dekan</label>
                <input type="text" class="form-control" name="dekan">
            @error('dekan')
            <div class="text-denger">{{  $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="wakil_dekan" class="form-label">Wakil Dekan</label>
                <input type="text" class="form-control" name="wakil_dekan">
            @error('wakil_dekan')
            <div class="text-denger">{{  $message }}</div>
            @enderror
            </div>
          </div>
          <!--end::Body-->
          <!--begin::Footer-->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <!--end::Footer-->
        </form>
        <!--end::Form-->
      </div>
    </div>
  </div>
  @endsection