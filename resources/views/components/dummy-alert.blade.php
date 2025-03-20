<div {{ $attributes->merge(['class' => 'alert alert-'. $type, 'id' => 'be'])}}>
    {{ $slot }}
</div>
