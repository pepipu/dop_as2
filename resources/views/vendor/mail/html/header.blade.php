@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('pblogo.png') }}" class="logo" alt="Your Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
