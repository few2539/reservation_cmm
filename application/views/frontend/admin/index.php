<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Edit KMUTT</title>
  <?php $this->load->view('backend/structure/headtag');?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('backend/structure/header');?>

  <?php $this->load->view('backend/structure/left-sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 800px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="pull-left">
      <?php echo $title_page; ?>
      </h1>

    </section>
    <div class="clearfix"></div>
    <!-- Main content -->
    <section class="content container-fluid">
      <form role="form" method="post" action="<?php echo $action ?>" enctype="multipart/form-data">
        <input type="hidden" name="article_id" value="<?php if(!empty($article->id)) { echo $article->id; } ?>" />
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">ข้อมูลเบื้องต้นของบทความ</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <!-- text input -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>ชื่อของบทความ</label>
                  <input type="text" name="article_title" class="form-control" placeholder="ชื่อบทความ" value="<?php echo set_value('article_title',$article_title); ?>">
                  <span style="color:#dc3545"><?php echo form_error('article_title'); ?></span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>วันที่ทำบทความ</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
					  <?php
					   $date_genelate = explode('-', $article_date);
					   if(!empty($article->id)){
						   $date_utc = $date_genelate[2].'/'.$date_genelate[1].'/'.$date_genelate[0];
					   } else {
						   $date_utc = null;
					   }                     
                      ?>
                    <input type="text" name="article_date" class="form-control pull-right" id="datepicker" placeholder="วันที่แสดงผลบทความ" value="<?php echo set_value('article_date', $date_utc); ?>" readonly="readonly">
                  </div>
                  <span style="color:#dc3545"><?php echo form_error('article_date'); ?></span>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>ประเภทบทความ</label>
                  <select id="catogories" class="form-control" name="category_id">
                    <?php
                    foreach($categories as $row)
                        {
                            echo '<option value="'.$row['category_id'].'">'.$row['category_name'].'</option>';
                        }
                    ?>
                </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>Tag</label>
                  <input type="text" name="article_tag" class="form-control" placeholder="Tag ที่เกี่ยวข้อง" value="<?php echo set_value('article_tag',$article_tag); ?>">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>หมายเหตุของบทความ</label>
                  <textarea name="article_remark" class="form-control" rows="3" placeholder="หมายเหตุของบทความ"><?php echo set_value('article_remark',$article_remark); ?></textarea>
                </div>
              </div>
          </div>
          <!-- /.box-body -->
        </div>

        <div class="clearfix"></div>

        <!-- อัพโหลดรูป -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">อัพโหลดรูปหน้าปก</h3>
                <span style="color:#dc3545"><?php echo form_error('article_img'); ?></span>
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                <input type="file" name="article_img" class="dropify" data-height="200" accept="image/jpg, image/jpeg, image/gif, image/png">
              </div>
            </div>
            <!-- /.box -->
          </div>
		  <div class="col-md-6">
			<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">ข้อความขึ้นต้น  <small id="charNum"></small></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
				<textarea id="article_intro" name="article_intro" class="form-control" rows="10" placeholder="ข้อความขึ้นต้นของบทความที่จะแสดงในหน้าแรก" maxlength="300" onkeyup="countChar(this)"><?php echo set_value('article_intro',$article_intro); ?></textarea>
              </div>
            </div>
            <!-- /.box -->
		  </div>
          <!-- /.col-->
        </div>
        <div class="clearfix"></div>

        <!-- เพิ่มบทความ -->
        <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title"> เนื้อหาบทความ
                  <small>เพิ่มรายละเอียดบทความ</small>
                </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
              <?php echo $this->ckeditor->editor("article_content",$article_content); ?>
              </div>
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col-->
        </div>
        <div class="clearfix"></div>

        <!-- Facebook Link Shared -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">อัพโหลดรูปหน้าปก</h3>
                <span style="color:#dc3545"><?php echo form_error('article_facebook_link_img'); ?></span>
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                <div class="form-group img-form">
                  <input type="file" id="file-img" name="article_facebook_link_img" accept="image/jpg, image/jpeg, image/gif, image/png" multiple data-preview-file-type="any">
                </div>
              </div>
            </div>
            <!-- /.box -->
          </div>
          <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">การแสดงผลของ Facebook Share Link</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <input type="text" name="article_facebook_link_title" class="form-control" placeholder="ข้อความหัวข้อใน Facebook Share Link" value="<?php echo set_value('article_facebook_link_title',$article_facebook_link_title); ?>" />
            </div>
            <div class="clearfix"></div>

            <div class="box-body pad">
              <textarea id="article_facebook_link_content" name="article_facebook_link_content" class="form-control" rows="10" placeholder="ข้อความที่จะแสดงใน Facebook Share Link"><?php echo set_value('article_facebook_link_content',$article_facebook_link_content); ?></textarea>
            </div>
            <div class="clearfix"></div>

            <div class="box-body pad">
            *** ทุกการเปลี่ยนแปลง จะต้องทำการ Refresh ข้อมูลใน Server Facebook กดลิงค์นี้เพื่ออัพเดตข้อมูล
            
            <div class="clearfix"></div>
            <a href="https://developers.facebook.com/tools/debug/sharing/?q=<?=site_url('article/detail')?>/<?=$article->id?>" class="btn btn-primary" target="_blank">
              <i class="fa fa-facebook"></i> Sharing Clear Link
            </a>
            </div>
          </div>
          <!-- /.box -->
          </div>
          <!-- /.col-->
        </div>
        <div class="clearfix"></div>

        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">ปรับแต่งสถานะบทความ</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- text input -->
            <div class="col-md-6">
              <!-- radio -->
              <div class="form-group">
                <label>
                  <input type="radio" name="article_status" value="A00" class="flat-red" <?php if($article_status == "A00") { echo "checked"; } ?> > แสดงผล ขวาบนของ Homepage ***
                </label>
                <br/>
                <label>
                  <input type="radio" name="article_status" value="A10" class="flat-red" <?php if($article_status == "A10" || $article_status==null) { echo "checked"; } ?> >  ฉบับร่าง
                </label>
                <br/>
                <label>
                  <input type="radio" name="article_status" value="A20" class="flat-red" <?php if($article_status == "A20") { echo "checked"; } ?> > ฉบับสมบูรณ์ เผยแพร่แต่ไม่แสดงหน้าโฮมเพจ
                </label>
                <br/>
                <label>
                  <input type="radio" name="article_status" value="A30" class="flat-red" <?php if($article_status == "A30") { echo "checked"; } ?> > ฉบับสมบูรณ์ เผยแพร่หน้าโฮมเพจ
                </label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>หมายเหตุของสถานะบทความ</label>
                <textarea name="article_status_remark" class="form-control" rows="2" placeholder="หมายเหตุของสถานะบทความ"><?php echo set_value('article_status_remark',$article_status_remark); ?></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <button type="submit" value="submit" class="btn btn-success btn-block" style="font-weight: bold;">
                <i class="fa fa-save"></i> บันทึก
              </button>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('backend/structure/footer');?>
  <?php $this->load->view('backend/structure/control-sidebar');?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('backend/structure/javascript');?>

<script type="text/javascript" src="<?php echo base_url();?>assets/admin/dropify/js/dropify.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
        $('.dropify').dropify();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    var imgName = "<?php echo $article_img ?>";
    //console.log(imgName.length);
    if (imgName.length > 0)
    {
      $('.dropify').dropify();
      $('.dropify-loader').css("display","none");
      $('.dropify-preview').css("display","block");
      $('.dropify-render').append('<img src="<?php echo base_url();?>assets/admin/uploads/images/<?php echo $article_img ?>">');
      $('.dropify-filename-inner').append('<?php echo $article_img; ?>');
    }
  });
</script>
<script type="text/javascript">
  var b = <?php echo $category_id; ?>//set equal to what you want to compare
  $('#catogories').find('option').each(function(i,e){
      console.log($(e).val());
      if($(e).val() == b){
          $('#catogories').prop('selectedIndex',i);
      }
  });
  //console.log(b);
</script>
<script>
  $('#datepicker').datepicker({
      format: 'dd/mm/yyyy',
      startDate: false,
      todayHighlight:'TRUE',
      autoclose: true,
  });
  if ($('#datepicker').val() == '') {
    $('#datepicker').datepicker('update', new Date());
  }
</script>
<script type="text/javascript">
  function countChar(val) {
    var len = val.value.length;
	$('#charNum').text(len + " / 300");
  };
</script>
<script type="text/javascript">
  $("#file-img").fileinput({
    showCaption: false,
    showUpload: false,
    fileType: "any",
    language: 'en',
    showBrowse: true,
    uploadUrl: false,
    browseOnZoneClick: true,
    dropZoneTitle: "เลือก หรือ ลาก วางไฟล์ ภาพ เพื่อ อัพไฟล์",
  });

  $('#file-img').on('click',function(){
    $('.img-form .fileinput-remove').click();
  });
</script>
</body>
</html>
