@extends('admin.layout.master');

@section('adminContent')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Done</strong> Compny Created Suucessful
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="card mb-4">
  <h5 class="card-header">انشاء وضيفه جديد</h5>
  <form class="card-body" action="{{route('add_job') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">اسم الوضيفه</label>
        <input name="name" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email">صورة الوضيفه</label>
        <div class="input-group input-group-merge">
          <input  name="image" type="file"  class="form-control"  aria-describedby="multicol-email2" />

        </div>
      </div>

      <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">Time الوضيفه</label>
        <input name="deatline" type="date" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>




      <!-- <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">تفعيل الوض</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">is active</span>
            </label>
          </div>
        </div>
      </div>
    </div> -->


    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
  </form>
</div>



@endsection
