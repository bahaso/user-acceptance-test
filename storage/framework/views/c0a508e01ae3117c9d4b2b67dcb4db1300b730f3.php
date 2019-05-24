<?php $__env->startSection('content'); ?>
<div class="content">
        <div class="container-fluid">
            <div class="btn-wrapper">
            <a class="btn btn-primary" href="/createProjectForm">Create New Project</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Current Projects</h4>
                            <p class="category">Currently in Testing Projects</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                        
                                        <th>Project Name</th>
                                        <th>Platform</th>
                                        <th>Version</th>
                                        <th>Tester</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                        <td>
                                        <?php echo e($project->project_name); ?>

                                        </td>
                                        <td>
                                        <?php echo e($project->platform); ?>

                                        </td>
                                        <td>
                                        <?php echo e($project->version); ?>

                                        </td>
                                        <td>
                                    
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="deleteProject/<?php echo e($project->id); ?>">Delete Project</a>
                                            <a class="btn btn-primary" href="projects/<?php echo e($project->id); ?>/featureList">Write Project</a>
                                        </td>
                                </tr>
                                
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Completed Projects</h4>
                            <p class="category">Already Tested Projects</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>