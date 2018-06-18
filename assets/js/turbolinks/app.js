jQuery(function ($){

	var ready = function () {
		console.log("Calling ready")
		var $sidebar = $('.navbar')
		if(!$sidebar.attr('data-appended')){

			$sidebar.attr('data-appended', 'true')
			
			$sidebar.append('Hello word')
		}
	}

	ready()

	document.addEventListener('turbolinks:load', ready)
})