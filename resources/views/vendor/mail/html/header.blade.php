@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://curederectiledysfunction.com/logo-full.png" class="logo" alt="Laravel Logo" style=" width:200px; object-fit: contain;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
