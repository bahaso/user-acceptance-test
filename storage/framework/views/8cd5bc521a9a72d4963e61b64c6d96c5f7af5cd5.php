<?php $__env->startSection('content'); ?>
<div class="content">
        <div class="container-fluid">
            <div class="btn-wrapper">
            <a class="btn btn-primary" href="/projects/<?php echo e($project_id); ?>/createFeatureForm">Create New Features</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Current Features</h4>
                            <p class="category">Features in this Projects</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                        <th>Features</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                        <td>
                                        <?php echo e($feature->features_name); ?>

                                        </td>
                                        <td>
                                        <?php echo e($feature->description); ?>

                                        </td>
                                        <td>
                                            <a class="btn btn-danger"  href="deleteFeature/<?php echo e($feature->id); ?>">Delete</a>
                                            <a class="btn btn-warning">Edit</a>
                                            <a class="btn btn-primary" href="/featureList/<?php echo e($feature->id); ?>/actionList">Action Lists</a>
                                        </td>
                                </tr>
                                
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                        </div>
                    </div>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>