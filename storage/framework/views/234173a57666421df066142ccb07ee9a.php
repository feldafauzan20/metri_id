<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'eventType',
    'eventName',
    'customData',
    'eventData',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'eventType',
    'eventName',
    'customData',
    'eventData',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<script <?php echo e($attributes); ?>>
    fbq('<?php echo e($eventType); ?>', '<?php echo e($eventName); ?>', <?php echo json_encode((object) $customData, 15, 512) ?>, <?php echo json_encode((object) $eventData, 15, 512) ?>);
</script><?php /**PATH E:\laragon\www\metri_id\vendor\esign\laravel-conversions-api\resources\views\components\facebook-pixel-tracking-event.blade.php ENDPATH**/ ?>