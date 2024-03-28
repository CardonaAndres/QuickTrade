<style>
   #button-success:hover {
  box-shadow: -2px -2px 6px rgb(22, 101, 52), -2px -2px 6px rgb(22, 101, 52), inset -2px -2px 6px rgb(22, 101, 52), inset -2px -2px 6px rgb(22, 101, 52);
  color: #d6d6d6;
  transition: 500ms;
}

    #button-success:active {
    transform: translate(0.05em, 0.05em);
    box-shadow: 0.05em 0.05em;
    }

    #button-succes,a{
        text-decoration: none;
    }

</style>

<button id="button-success" style="font-family: 'Times New Roman', Times, serif" {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-400 focus:bg-green-200 active:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
