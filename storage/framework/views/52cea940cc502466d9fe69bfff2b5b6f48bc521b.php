<?php $__env->startSection('content'); ?>
<div class="content">
        <div class="container-fluid">
            <div class="btn-wrapper">
            </div>
            <div class="row">
                <div class="col-md-12">
                        <a class="btn btn-primary" href="/createFeatureForm">Create Feature</a>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Features</h4>
                            <p class="category">Features for this Project</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                        
                                        <th>Feature Name</th>
                                        <th>Description</th>
                                        
                                        <tr>
                                                <td>
                                             
                                                </td>
                                                <td>
                                                    
                                                </td>
                                        </tr>
                                        
                                
                                
                                </table>
                        </div>
                    </div>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>