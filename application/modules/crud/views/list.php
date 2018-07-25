<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author Ahsan Jarral 
 */
?>
<!-- Main content -->
<!--<section class="content">-->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <!--<h3 class="box-title">Details</h3>-->                
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-nowrap">Title</th>
                            <th class="text-nowrap">Name</th>
                            <th class="text-nowrap">Phone</th>
                            <th class="text-nowrap">Email</th>
                            <th class="text-nowrap">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($details)): ?>
                            <tr>
                                <td colspan="100%" class="text-center">Details not found</td>
                            </tr>
                        <?php endif; ?>
                        <?php if (!empty($details)): ?>
                            <?php foreach ($details as $key => $detail): ?>
                                <?php $detail = (json_decode($detail)); ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $detail->title ?></td>
                                    <td><?php echo ucfirst($detail->first_name) . " " . ucfirst($detail->last_name); ?></td>
                                    <td><?php echo $detail->phone; ?></td>
                                    <td><?php echo $detail->email; ?></td>

                                    <td>
                                        <a href="<?php echo base_url("crud/view/$key"); ?>"><i class="fa fa-eye"></i></a>
                                        | 
                                        <a href="<?php echo base_url("crud/update/$key"); ?>"><i class="fa fa-pencil"></i></a>
                                        | 
                                        <a href="<?php echo base_url("crud/delete/$key"); ?>"><i class="fa fa-trash"></i></a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!--</section>-->
