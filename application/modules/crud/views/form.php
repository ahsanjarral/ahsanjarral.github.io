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
        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'add-update'); ?>
        <?php $url = (isset($id) && ($id != NULL) ? "update/$id" : 'create'); ?>
        <?php echo form_open(base_url("crud/$url"), $attributes); ?>

        <div class="">
            <!--Title-->
            <div class="form-group">
                <label for="title" class="col-sm-4 control-label-">Title</label>
                <div class="input-group">
                    <?php
                    $data = array(
                        'class' => 'form-control',
                        'id' => 'title',
                    );

                    $options = array(
                        '' => 'Select Title',
                        'Mr' => 'Mr',
                        'Mrs' => 'Mrs',
                        'Sir' => 'Sir',
                        'Master' => 'Master',
                    );
                    $selected = set_value('title', (!empty($detail->title) ? $detail->title : ''), TRUE);
                    echo form_dropdown('title', $options, $selected, $data);
                    ?>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.Title -->
            <!--First Name-->
            <div class="form-group">
                <label for="fname" class="col-sm-4 control-label-">First Name</label>
                <div class="input-group col-md-8-">
                    <?php
                    $data = array(
                        'class' => 'form-control',
                        'name' => 'fname',
                        'id' => 'fname',
                        'value' => set_value('fname', (isset($detail) ? $detail->first_name : ''), TRUE),
                        'placeholder' => 'First Name'
                    );

                    echo form_input($data);
                    ?>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.First Name -->
            <!--Last Name-->
            <div class="form-group">
                <label for="lname" class="col-sm-4 control-label-">Last Name</label>
                <div class="input-group col-md-8-">
                    <?php
                    $data = array(
                        'class' => 'form-control',
                        'name' => 'lname',
                        'id' => 'lname',
                        'value' => set_value('lname', (isset($detail) ? $detail->last_name : ''), TRUE),
                        'placeholder' => 'Last Name'
                    );

                    echo form_input($data);
                    ?>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.Last Name -->
            <!--Phone--> 
            <div class="form-group">
                <label for="phone" class="col-sm-4 control-label-">Phone</label>
                <div class="input-group col-md-8-">
                    <?php
                    $data = array(
                        'class' => 'form-control',
                        'name' => 'phone',
                        'id' => 'phone',
                        'value' => set_value('phone', (isset($detail) ? $detail->phone : ''), TRUE),
                        'placeholder' => 'Phone'
                    );

                    echo form_input($data);
                    ?>
                </div>
                <!--/.input group--> 
            </div>
            <!--/.Phone--> 
            <!--Email--> 
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label-">Email</label>
                <div class="input-group">
                    <?php
                    $data = array(
                        'class' => 'form-control',
                        'name' => 'email',
                        'id' => 'email',
                        'value' => set_value('email', (isset($detail) ? $detail->email : ''), TRUE),
                        'placeholder' => 'Email'
                    );

                    echo form_input($data);
                    ?>
                </div>
            </div>
            <!--/.Email-->
        </div>

        <hr>             
    </div>
    <!-- /.box-body -->
    <!-- /.box-footer -->
    <div class="box-footer">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-1 pull-right">
                    <?php
                    $data = array(
                        'class' => 'btn btn-xs btn-block btn-success',
                        'name' => 'submit',
                        'id' => 'submit',
                        'value' => 'Submit',
                        'type' => 'submit',
                        'content' => 'Submit'
                    );

                    echo form_button($data);
                    ?>
                </div>
                <div class="col-xs-1 pull-right">
                    <a class="btn btn-xs btn-block btn-default" href="<?php echo base_url("crud"); ?>">Cancel</a>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-footer -->
    <?php echo form_close(); ?>
</div>
