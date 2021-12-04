<?php $__env->startSection('content'); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div style = "margin-top: -5%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class = "card">
                <div class = "card-header text-center" style = "font-size:30px">
                    <b><?php echo e($house->title); ?></b>
                </div>
                <div class = "card-body">
                    <div class = "row">
                        <div class = "col-md-6">
                            <div style = "font-size:20px">
                                <b>Address:</b>
                            </div>
                            <div class = "row" style = "padding-top:3%" >
                                <div class = "col-md-5">
                                    Locality: <?php echo e($house->locality); ?>

                                </div>
                                <div class = "col-md-5">
                                    Country: <?php echo e($house->country); ?>

                                </div>
                            </div>
                            <div class = "row col-md-12" style = "padding-top:3%">
                                    Address Line: <?php echo e($house->address); ?>

                            </div>
                            <div style = "font-size:20px; padding-top:10%">
                                <b>Specification:</b>
                            </div>
                            <div class = "row" style = "padding-top:3%" >
                                <div class = "col-md-5">
                                    Number of floors: <?php echo e($house->floors_nr); ?>

                                </div>
                                <div class = "col-md-5">
                                    Number of rooms: <?php echo e($house->rooms_nr); ?>

                                </div>
                            </div>
                            <div class = "row col-md-12" style = "padding-top:3%">
                                    Housing type: <?php echo e($house->type); ?>

                            </div>
                            <div style = "padding-top:10%">
                                <div style = "font-size:20px">
                                    <b>Price:</b>
                                </div>
                                <div style = "padding-top:3%">
                                <?php echo e($house->price); ?> €
                                </div>
                            </div>
                            <div style = "padding-top:10%">
                                <div style = "font-size:20px">
                                    <b>Contact:</b>
                                </div>
                                <div style = "padding-top:3%">
                                <?php echo e($userName); ?>: <?php echo e($house->contact_nr); ?>

                                </div>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <?php if(!empty($house->photo_url)): ?>
                            <img style = "max-width:100%;max-height:100%;" src="<?php echo e($house->photo_url); ?>" alt="House photo">
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if(!empty($house->description)): ?>
                    <div style = "font-size:20px; padding-top:8%">
                        <b>Description:</b>
                    </div>
                    <?php echo e($house->description); ?>

                    <?php endif; ?>
                    <div class = "row justify-content-center" style = "padding-top:3%">
                        <a type="button" class="btn btn-outline-danger" href = "<?php echo e(route('listings')); ?>">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/p.adjudeanu/Desktop/GitRepos/Apartment-Project/resources/views/listing.blade.php ENDPATH**/ ?>