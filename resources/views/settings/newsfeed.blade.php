@extends('layouts.utbase')
@section('content')
<form method="post" action="{{ url($actionpath) }}" enctype="multipart/form-data" class="form-horizontal row-border">
{{ csrf_field() }}
@if ($success)
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-success">
      設定已更新
    </div>
  </div>
</div>
@endif
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-cascade">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil-square"></i> 新聞資訊設定</h3>
      </div>
      <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-3 control-label">新聞資訊來源</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="預設值 (RTHK RSS)" id="source_news" name="source_news" @if (isset($postdata['source_news'])) value="{{ $postdata['source_news'] }}" @endif>
            </div>
            <div class="col-sm-3">
              <p class="help-block">只支援 xml 網址, 必須以 "http://" 或 "https://" 開首</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">新聞來源更新間隔</label>
            <div class="col-sm-6">
              <div class="row">
                <div class="col-lg-6">
                  <a class="input-group demo-input-group">
             <input type="number" class="form-control" placeholder="預設值 (60 分鐘)" id="updatefreq_news" name="updatefreq_news" @if (isset($postdata['updatefreq_news'])) value="{{ $postdata['updatefreq_news'] }}" @endif>
             <span class="input-group-addon">分鐘</span>
           </a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p class="help-block"></p>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- /panel body -->
      <div class="panel-footer">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <button type="submit" class="btn btn-success">提交</button>
            <a href="{{ url('/') }}" class="btn btn-danger">取消</a>
          </div>
        </div>
      </div>
      <!-- panel footer -->
</form>
@endsection