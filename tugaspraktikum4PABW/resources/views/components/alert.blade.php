@props(['type' => 'success'])

<div style="padding:10px; margin-bottom:15px; border:1px solid; border-radius:4px;
    {{ $type === 'success' ? 'background:#d4edda; border-color:#28a745; color:#155724;' : 'background:#f8d7da; border-color:#dc3545; color:#721c24;' }}">
    {{ $slot }}
</div>