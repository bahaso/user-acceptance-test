<?php $__env->startSection('content'); ?>




<?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-0"><?php echo e($key+1); ?> Feature : <?php echo e($feature->features_name); ?></h3>
            <p>
                <?php echo e($feature->description); ?>

            </p>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn btn-primary" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Add Feature</a>
            <a class="btn btn-danger" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Delete Feature</a>
        </div>
    </div>
    
    <table class="table table-hover table-striped mt-1">
        <thead>
            <tr>
                <td>No</td>
                <td>Action Name</td>
                <td>Type</td>
                <td>Case</td>
                <td></td>
            </tr>
        </thead>
        
        <tbody>
            <?php $__currentLoopData = $feature->actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td>
                        <?php echo e($action->action_name); ?>

                        
                        <br>

                        <a class="btn btn-primary" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Add Action</a>
                        <a class="btn btn-danger" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Delete Action</a>
                    </td>
                    <td><?php echo e($action->type); ?></td>
                    <td>
                        <?php $__currentLoopData = $action->cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <b>Steps : </b> <br>
                            <?php echo e($case->steps); ?>

                            
                            <br><br>

                            <b>Expectation : </b> <br>
                            <?php echo e($case->expectation); ?>


                            <br><br>

                            <b>Status : </b> <br>
                            <?php echo e($case->status); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="/actionList/<?php echo e($action->id); ?>/createCaseForm">Add Case</a>
                        <a class="btn btn-danger" href="/actionList/<?php echo e($action->id); ?>/ganti-aku">Delete Case</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div style="margin-top: 30rem;"></div>

<div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped mt-1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Feature Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            
            <tbody>
                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature_no => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($feature_no+1); ?></td>
                        <td>
                            <?php echo e($feature->features_name); ?>


                            <br>

                            <a class="btn btn-primary" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Add Feature</a>
                            <a class="btn btn-danger" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Delete Feature</a>
                        </td>
                        <td>
                            <table class="table table-hover table-striped mt-1">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Action Name</td>
                                        <td>Case and Expectation</td>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php $__currentLoopData = $feature->actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action_no => $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($action_no+1); ?></td>
                                        <td>
                                            <h6><?php echo e($action->type); ?></h6>

                                            <?php echo e($action->action_name); ?>


                                            <br>

                                            <a class="btn btn-primary" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Add Action</a>
                                            <a class="btn btn-danger" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Delete Action</a>
                                        </td>
                                        <td>
                                            <table class="table table-hover table-striped mt-1">  
                                                    <thead>
                                                        <tr>
                                                            <td>No</td>
                                                            <td>Steps</td>
                                                            <td>Expectation</td>
                                                            <td>Status</td>
                                                            <td></td>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php $__currentLoopData = $action->cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case_no => $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($case_no+1); ?></td>
                                                            <td><?php echo e($case->steps); ?></td>
                                                            <td><?php echo e($case->expectation); ?></td>
                                                            <td><?php echo e($case->status); ?></td>
                                                            <td>
                                                                <a class="btn btn-primary" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Add Case</a>
                                                                <a class="btn btn-danger" href="/featureList/<?php echo e($feature->id); ?>/createActionForm">Delete Case</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>