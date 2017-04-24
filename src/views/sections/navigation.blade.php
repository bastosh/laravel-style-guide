<h1>Navigation</h1>

<h2>Default</h2>

<div class="example">
  @php ob_start() @endphp
  <ul id="navigation-id">
      @for ($i=0; $i < 5; $i++)
  <li>
          {{ str_random(8) }}
        </li>
      @endfor
</ul>
  @php $navigation = ob_get_contents(); @endphp
  @php ob_end_flush() @endphp

  <pre><code class="highlight html">
    {{ $navigation }}
  </code></pre>
</div>
