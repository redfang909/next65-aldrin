<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    {{ $message }}


<span class="alert-title">{{ $title }}</span>

<div class="alert alert-danger">
    {{ $slot }}
</div>
@datetime('12/12/20')
</div>

