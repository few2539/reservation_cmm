<!-- Search -->
<?php $attributes = array('method' => 'get','id' => 'report_search'); ?>
<?= form_open('report/index', $attributes); ?>
<div class="panel panel-default">
<div class="panel-body">
  <div class="search-input col-lg-3">
    <div class="form-group">
      <select class="selectpicker form-control" multiple title="เลือกรายการที่ต้องการค้นหา">
        <option value="value1" <?php if($search_date != null){ echo "selected"; } ?>>วันที่</option>
        <option value="value2" <?php if($search_problem_type != null){ echo "selected"; } ?>>ประเภทที่แจ้ง</option>
        <option value="value3" <?php if($search_district != null){ echo "selected"; } ?>>เขตพื้นที่</option>
        <option value="value4" <?php if($search_status != null){ echo "selected"; } ?>>สถานะ</option>
      </select>
    </div>
  </div>
  <div class="col-lg-6">
    <div id="div1" class="row form-group">
      <div class="col-lg-12">
        <div class='input-group date'>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
            <input id="search_date" name="search_date" class="form-control" type="text" name="" class="form-control" placeholder="วันที่" readonly="readonly" value="<?= $search_date; ?>">
        </div>
      </div>
    </div>
    <div id="div2" class="row form-group">
      <div class="col-lg-12">
        <select id="search_problem_type" class="form-control" name="search_problem_type" placeholder="ประเภทที่แจ้ง">
          <option></option>
          <?php foreach ($search_problem_types as $problem_type): ?>
            <option value="<?=$problem_type['problem_type_id']?>" <?php if($problem_type['problem_type_id'] == $search_problem_type) { echo "selected"; } ?>>
              <?=$problem_type['problem_type_name']?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div id="div3" class="row form-group">
      <div class="col-lg-12">
        <select id="search_district" class="form-control" name="search_district" placeholder="เขตพื้นที่">
          <option></option>
          <?php foreach ($search_districts as $district): ?>
            <option value="<?=$district['AMPHUR_ID']?>" <?php if($district['AMPHUR_ID'] == $search_district) { echo "selected"; } ?>>
              <?=$district['AMPHUR_NAME']?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div id="div4" class="row form-group">
      <div class="col-lg-12">
        <select id="search_status" class="form-control" name="search_status" placeholder="เขตพื้นที่">
          <option></option>
          <?php foreach ($search_statuss as $status): ?>
            <?php if($status['ticket_status'] != null): ?>
            <option value="<?=$status['ticket_status']?>" <?php if($status['ticket_status'] == $search_status) { echo "selected"; } ?>>
              <?=$status_text[$status['ticket_status']]?>
            </option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="row form-group">
      <div class="col-lg-12">
        <button type="submit" class="btn btn-primary btn-block">
          <i class="fa fa-search"></i> ค้นหารายการ
        </button>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-lg-12">
        <button id="search_reset" class="btn btn-warning btn-block">
          <i class="fa fa-recycle"></i> ล้างค่า
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="clearfix"></div>
<!-- // Search -->
<?= form_close(); ?>
