<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH E:\laragon\www\metri_id\vendor\filament\infolists\resources\views\components\grid.blade.php ENDPATH**/ ?>