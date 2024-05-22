
<div class="card mb-4">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h6 class="fs-17 font-weight-600 mb-0"><?php echo display('tips_and_prediction');?></h6>
            </div>
        </div>
    </div>

    <div class="card-body">

        <div class="table-responsive" id="table">

        <?php echo form_open_multipart('tips_and_prediction/TipsPrediction/saveTipsPrediction');?>

        <table class="table table-bordered table-striped table-hover bg-white m-0 card-table">
        
            <thead>
                <tr>
                    <th>#sl </th>
                    <th>Logo</th>
                    <th>Welcome Bonus</th>
                    <th>Win Rate</th>
                    <th>Payout</th>
                    <th>Rating</th>
                    <th>Website Url</th>
                    <th>Color</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sl=1; 
                foreach ($all_tips_prediction as  $tips_prediction) {?>
                <tr>
                    <td><?php echo $sl++; ?></td>
                    <td > <img src="<?php echo base_url()?>assets/newDesign/tipsPrediction/<?php echo $tips_prediction->logo;?>" alt="1xbet logo" height="100" width="100">
</td>
                    <td ><?php echo $tips_prediction->welcome_bonus; ?></td>
                    <td ><?php echo $tips_prediction->win_rate; ?></td>
                    <td ><?php echo $tips_prediction->payout; ?></td>
                    <td ><?php echo $tips_prediction->rating; ?></td>
                    <td ><?php echo $tips_prediction->website_url; ?></td>
                    <td ><?php echo $tips_prediction->color; ?></td>

                    <td>
                        <?php if($this->permission->check_label('category_list')->update()->access()):?>
                        <a href="<?php echo base_url(); ?>tips_and_prediction/TipsPrediction/edit_tips_prediction/<?php echo html_escape($tips_prediction->id);?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                        <?php endif?>

                        <?php if($this->permission->check_label('category_list')->delete()->access()):?>
                            <a  onclick="return confirm('<?php echo display('do_you_want_to_delete_this')?>')"  href="<?php echo base_url(); ?>tips_and_prediction/TipsPrediction/delete_tips_and_prediction/<?php echo html_escape($tips_prediction->id);?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        <?php endif?>
                    </td>
                </tr>
                <?php }?>
                </tbody>

            </table>
        <?php echo form_close();?>

        </div>

        <input type="hidden" id="base_url" value="<?php echo base_url()?>">

    </div>
</div>
            