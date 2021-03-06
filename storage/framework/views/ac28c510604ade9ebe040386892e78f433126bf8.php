
<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(url($actionpath)); ?>" enctype="multipart/form-data" class="form-horizontal row-border">
<?php echo e(csrf_field()); ?>

<?php if($success): ?>
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-success">
      設定已更新
    </div>
  </div>
</div>
<?php endif; ?>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-cascade">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil-square"></i> 天氣設定</h3>
      </div>
      <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-3 control-label">天氣資料來源</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="預設值 (OpenWeatherMap)" id="source_weather" name="source_weather" <?php if(isset($postdata['source_weather'])): ?> value="<?php echo e($postdata['source_weather']); ?>" <?php endif; ?>>
            </div>
            <div class="col-sm-3">
              <p class="help-block">只支援 json 網址, 必須以 "http://" 或 "https://" 開首</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">天氣更新間隔</label>
            <div class="col-sm-6">
              <div class="row">
                <div class="col-lg-6">
                  <a class="input-group demo-input-group">
             <input type="number" class="form-control" placeholder="預設值 (30 分鐘), 不得少於 1 分鐘" id="updatefreq_weather" name="updatefreq_weather" <?php if(isset($postdata['updatefreq_weather'])): ?> value="<?php echo e($postdata['updatefreq_weather']); ?>" <?php endif; ?>>
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

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-cascade">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil-square"></i> 文字位移</h3>
      </div>
      <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-3 control-label">時間位移</label>
            <div class="col-sm-6">
              <div class="row">
                <div class="col-lg-3">
                  <div class="input-group">
                    <span class="input-group-addon">X-Pos</span>
                    <input type="number" class="form-control" id="time_xpos" name="time_xpos" placeholder="預設值" id="time_xpos" name="time_xpos" <?php if(isset($postdata['time_xpos'])): ?> value="<?php echo e($postdata['time_xpos']); ?>" <?php endif; ?>>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="input-group">
                    <span class="input-group-addon">Y-Pos</span>
                    <input type="number" class="form-control" id="time_ypos" name="time_ypos" placeholder="預設值" id="time_ypos" name="time_ypos" placeholder="預設值" id="time_ypos" name="time_ypos" <?php if(isset($postdata['time_ypos'])): ?> value="<?php echo e($postdata['time_ypos']); ?>" <?php endif; ?>>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p class="help-block"></p>
            </div>
          </div>
          <!-- /date -->

          <div class="form-group">
            <label class="col-sm-3 control-label">日期位移</label>
            <div class="col-sm-6">
              <div class="row">
                <div class="col-lg-3">
                  <div class="input-group">
                    <span class="input-group-addon">X-Pos</span>
                    <input type="number" class="form-control" placeholder="預設值" id="date_xpos" name="date_xpos" placeholder="預設值" id="date_xpos" name="date_xpos" <?php if(isset($postdata['date_xpos'])): ?> value="<?php echo e($postdata['date_xpos']); ?>" <?php endif; ?>>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="input-group">
                    <span class="input-group-addon">Y-Pos</span>
                    <input type="number" class="form-control" placeholder="預設值" id="date_ypos" name="date_ypos" placeholder="預設值" id="date_ypos" name="date_ypos" <?php if(isset($postdata['date_ypos'])): ?> value="<?php echo e($postdata['date_ypos']); ?>" <?php endif; ?>>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p class="help-block"></p>
            </div>
          </div>
          <!-- /phone -->

          <div class="form-group">
            <label class="col-sm-3 control-label">農曆日期位移</label>
            <div class="col-sm-6">
              <div class="row">
                <div class="col-lg-3">
                  <div class="input-group">
                    <span class="input-group-addon">X-Pos</span>
                    <input type="number" class="form-control" placeholder="預設值" id="lunar_xpos" name="lunar_xpos" placeholder="預設值" id="lunar_xpos" name="lunar_xpos" <?php if(isset($postdata['lunar_xpos'])): ?> value="<?php echo e($postdata['lunar_xpos']); ?>" <?php endif; ?>>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="input-group">
                    <span class="input-group-addon">Y-Pos</span>
                    <input type="number" class="form-control" placeholder="預設值" id="lunar_ypos" name="lunar_ypos" <?php if(isset($postdata['lunar_ypos'])): ?> value="<?php echo e($postdata['lunar_ypos']); ?>" <?php endif; ?>>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p class="help-block"></p>
            </div>
          </div>
          <!-- /phone -->

          <div class="form-group">
            <label class="col-sm-3 control-label">溫度位移</label>
            <div class="col-sm-6">
              <div class="row">
                <div class="col-lg-3">
                  <div class="input-group">
                    <span class="input-group-addon">X-Pos</span>
                    <input type="number" class="form-control" placeholder="預設值" id="temp_xpos" name="temp_xpos" <?php if(isset($postdata['temp_xpos'])): ?> value="<?php echo e($postdata['temp_xpos']); ?>" <?php endif; ?>>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="input-group">
                    <span class="input-group-addon">Y-Pos</span>
                    <input type="number" class="form-control" placeholder="預設值" id="temp_ypos" name="temp_ypos" <?php if(isset($postdata['temp_ypos'])): ?> value="<?php echo e($postdata['temp_ypos']); ?>" <?php endif; ?>>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p class="help-block"></p>
            </div>
          </div>
          <!-- /phone -->
      </div>
      
    </div>
  </div>
</div>
<!-- /panel body -->
      <div class="panel-footer">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <button type="submit" class="btn btn-success">提交</button>
            <a href="<?php echo e(url('/')); ?>" class="btn btn-danger">取消</a>
          </div>
        </div>
      </div>
      <!-- panel footer -->
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.utbase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>