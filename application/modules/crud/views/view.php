<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author Ahsan Jarral 
 */
?>
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Details</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">


        <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                    <label for="title" class="col-sm-6 control-label">Title</label>
                    <p for="title" class="col-sm-6 control-label">
                        <?php echo (isset($detail->title) ? $detail->title : '-'); ?>
                    </p>
                </div>

                <div class="form-group">
                    <label for="first_name" class="col-sm-6 control-label">First Name</label>
                    <p for="first_name" class="col-sm-6 control-label">
                        <?php echo (isset($detail->first_name) ? $detail->first_name : ''); ?>
                    </p>
                </div>


                <div class="form-group">
                    <label for="last_name" class="col-sm-6 control-label">Last Name</label>
                    <p for="last_name" class="col-sm-6 control-label">
                        <?php echo (isset($detail->last_name) ? $detail->last_name : ''); ?>
                    </p>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-sm-6 control-label">Phone</label>
                    <p for="phone" class="col-sm-6 control-label">
                        <?php echo (isset($detail->phone) ? $detail->phone : ''); ?>
                    </p>
                </div>


                <div class="form-group">
                    <label for="email" class="col-sm-6 control-label">Email</label>
                    <p for="email" class="col-sm-6 control-label">
                        <?php echo (isset($detail->email) ? $detail->email : '-'); ?>
                    </p>
                </div>
                <!--/.form-group-->
            </div>
        </div>

    </div>

    <hr>             
    <!--<hr>-->
</div>
<!-- /.box-body -->
<!-- /.box-footer -->
<div class="box-footer">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-1 pull-right">
                <?php
                $data = array(
                    'class' => 'btn btn-sm btn-block btn-success',
                    'name' => 'submit',
                    'id' => 'add-booking-submit',
                    'value' => 'Submit',
                    'type' => 'submit',
                    'content' => 'Submit'
                );

                echo form_button($data);
                ?>
            </div>
            <div class="col-sm-1 pull-right">
                <a class="btn btn-sm btn-block btn-default" href="<?php echo base_url("crud"); ?>">Cancel</a>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.box-footer -->
<?php // echo form_close();  ?>
</div>
<!-- /.box -->