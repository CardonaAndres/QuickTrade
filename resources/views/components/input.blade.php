@props(['disabled' => false])

<style>
   #input {
  box-shadow: inset 4px 4px 4px rgba(22, 101, 52),
    4px 4px 4px rgba(22, 101, 52);
}
</style>

<input id="input" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-green-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-md']) !!}>
