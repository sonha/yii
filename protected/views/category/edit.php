<?php  ?>
<div class="page-content">
    <div class="page-header">
        <h1>Tạo  User<small><i class="icon-double-angle-right"></i>Common form elements and layouts</small></h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <?php
            foreach(Yii::app()->user->getFlashes() as $key => $message) {
                foreach($message as $key2 => $value){
                    echo '<div class="help-block " style="color:palevioletred">' . $value . "</div>\n";
                }
            }
            ?>
            <form class="form-horizontal" role="form" action="<?php echo $this->createUrl('category/updateCat',array('id'=>$modelCat->in)) ?>" method="post">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Title Category </label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-2" value="<?php echo $editCat->title_cat; ?>" name="title_cat" class="col-xs-10 col-sm-5" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Description Category </label>
                    <div class="col-sm-9">
                        <textarea class="col-xs-10 col-sm-5" id="form-field-3" placeholder="<?php echo $editCat->Des_cat; ?>" name="Des_cat"><?php echo $editCat->Des_cat; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right"> User </label>
                    <div class="col-sm-9">
                        <select class="col-xs-10 col-sm-5" name="slUser">
                            <?php foreach($listUser as $key=>$value){?>
                                <?php if($value->user_id == $editCat->user_id){$select='selected';}else{ $select='';}?>
                                <option value="<?php echo $value->user_id ?>" <?php echo $select ?>><?php echo $value->display_name; ?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right"> Parent </label>
                    <div class="col-sm-9">
                        <select class="col-xs-10 col-sm-5" name="slParent">
                            <option value="">Gốc</option>
                            <?php foreach($listCat as $key2=>$value2){ ?>
                                <option value="<?php echo $value2->in ?>"><?php echo $value2->title_cat; ?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="space-4"></div>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button  class="btn btn-info" type="submit">
                            <i class="icon-ok bigger-110"></i>
                            Submit
                        </button>

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="icon-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>
                <div class="hr hr-24"></div>
            </form>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->