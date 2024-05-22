

    <script src="<?php echo base_url()?>assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/plugins/Bootstrap-4-Tag-Input/tagsinput.css">
    <script src="<?php echo base_url()?>assets/plugins/Bootstrap-4-Tag-Input/tagsinput.js" type="text/javascript"></script> 
    


                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 font-weight-600 mb-0"><?php echo display('add_new_page');?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <?php echo form_open_multipart('page/page_controller/save_page');?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo display('photo');?></label>
                                    <input type="file" name="image" id="file_select_machin" class="form-control input-sm" accept="image/*"/> 
                                    <span>[jpg,png,jpeg and max size is 1MB]</span>
                                </div> 
                            </div> 
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label><?php echo display('video_url');?></label>
                                     <input type="text" name="videos" id="file_select_machin" class="form-control input-sm"/> 
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><?php echo display('title');?> <span class="text-danger">*</span></label>
                                     <input type="text" name="title" id="file_select_machin" class="form-control input-sm" required="" /> 
                                </div> 
                            </div>
                         </div>

                        <div class="row">
                            <div class="col-md-12">
                             <div class="form-group">
                            <div class="pageslug float-right"><a href="#" class=""><?php echo makeString(['page','slug'])?></a></div>
                                <div id="slug">
                                    <tr>
                                        <td>
                                            <input type="text" placeholder="Page Slug" name="slug" class="form-control input-sm"/>
                                        </td>
                                    </tr>
                                </div>
                              </div>
                             </div>
                             </div>
                         <div class="row">
                            <div class="col-md-12">
                                 <div class="form-group">
                                    <label>
                                        <?php echo display('details');?>
                                    </label>
                                     <textarea class="form-control" id="details" name="details_news" rows="10" cols="80"></textarea>
                                </div>
                            </div>
                         </div> 
                         <div class="row">
                            <div class="col-md-12">
                                  <div class="form-group">
                                    <label><?php echo makeString(['meta','keyword']);?></label>
                                    <input name="meta_keyword"  data-role="tagsinput" class="form-control" />
                                  
                                </div>

                            </div>
                         </div>   
                         <div class="row">
                            <div class="col-md-12">
                                  <div class="form-group">
                                   <label><?php echo makeString(['meta','description']);?> </label>
                                   <textarea class="form-control" name="meta_description"></textarea>
                                </div>

                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-12">
                                  <div class="form-group">
                                   <label></label>
                                   <input type="submit" name="" value="<?php echo display('save');?>" class="btn btn-md btn-success float-right">
                                </div>

                            </div>
                         </div>

                        <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url()?>">
                         
                         <?php echo form_close();?>
                     </div>
                </div>
            

    <script src="<?php echo base_url()?>assets/dist/js/ck.js"></script>


