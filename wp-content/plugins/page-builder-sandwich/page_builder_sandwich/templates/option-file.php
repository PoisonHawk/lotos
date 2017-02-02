<script type="text/html" id="tmpl-pbs-option-file">
	<div class="pbs-option-subtitle">{{ data.name }}</div>
	<#
	var placeholder = 'http://';
	if ( data.placeholder ) {
		placeholder = data.placeholder;
	}
	#>
	<div class="pbs-option-horizontal-layout">
		<input type="text" value="{{ data.value }}" placeholder="{{ placeholder }}"/>
		<button>
			<svg width="16" height="16" viewBox="0 0 512 512">
				<path d="M458.903 114.538c-11.106-15.146-26.587-32.85-43.589-49.852s-34.706-32.482-49.852-43.589c-25.787-18.91-38.296-21.097-45.462-21.097h-248c-22.056 0-40 17.944-40 40v432c0 22.056 17.944 40 40 40h368c22.056 0 40-17.944 40-40v-312c0-7.166-2.186-19.675-21.097-45.462zM392.687 87.313c15.35 15.35 27.4 29.199 36.29 40.687h-76.977v-76.973c11.492 8.89 25.339 20.939 40.687 36.286zM448 472c0 4.336-3.664 8-8 8h-368c-4.336 0-8-3.664-8-8v-432c0-4.336 3.664-8 8-8 0 0 247.978-0.001 248 0v112c0 8.836 7.163 16 16 16h112v312z"></path>
				<path d="M368 416h-224c-8.836 0-16-7.163-16-16s7.164-16 16-16h224c8.837 0 16 7.163 16 16s-7.163 16-16 16z"></path>
				<path d="M368 352h-224c-8.836 0-16-7.163-16-16s7.164-16 16-16h224c8.837 0 16 7.163 16 16s-7.163 16-16 16z"></path>
				<path d="M368 288h-224c-8.836 0-16-7.163-16-16s7.164-16 16-16h224c8.837 0 16 7.163 16 16s-7.163 16-16 16z"></path>
			</svg>
	   </button>
	</div>
	<# if ( data.desc ) { #>
		<p class="pbs-description">{{{ data.desc }}}</p>
	<# } #>
</script>
