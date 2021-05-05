<div class="card">
<div class="card-block">
<form id="second" data-submit-login="<?=$actionUrl?>" method="post" enctype="multipart/form-data">
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="mss_title">Title</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="mss_title" value="<?=!empty($row->mss_title)?$row->mss_title:''?>" name="mss_title" placeholder="Enter Attribute Name">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label" for="mss_image">Thumbnail</label>
<div class="col-sm-10">
<?=$arraylib->dropzoneCreateUpdate('mss_image',!empty($row->mss_image)?$row->mss_image:'',$dropzoneThumbnail)?>	
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="mss_video">Youtube Video Url</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="mss_video" name="mss_video" placeholder="Ex. URL : https://www.youtube.com/watch?v=xSLlrMa7v6A" value="<?=!empty($row->mss_video)?$row->mss_video:''?>">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="mss_content">Content</label>
<div class="col-sm-10">
<textarea name="mss_content" class="form-control"><?=!empty($row->mss_content)?$row->mss_content:''?></textarea>
</div>
</div>
<div class="row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<button type="submit" class="btn btn-primary m-b-0 loginButton">Submit</button>

<button type="button" class="btn btn-danger  disabledButton m-b-0" style="display: none;">Please Wait ...</button>
</div>
</div>
</div>
 </form>
</div>
</div>
