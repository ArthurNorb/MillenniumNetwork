@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'w-full bg-transparent border-0 border-b-2 border-zinc-700 text-gray-200 
                focus:border-green-500 focus:ring-0
                transition duration-300 ease-in-out'
    ]) !!}>
    {{ $slot }}
</select>