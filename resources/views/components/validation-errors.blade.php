@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600 dark:text-red-400">{{ __('Las credenciales ingresadas no son correctas, Vuelva a intentarlo.') }}</div>
    </div>
@endif
