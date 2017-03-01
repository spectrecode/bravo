app.controller 'bodyCrtl',['$scope','$location',(scope,location) ->
	scope.setup = ()->
		h = $(window).height()
		console.log h
		$('body').css("min-height",h)
		return 
	scope.setup()
	window.addEventListener("resize", scope.setup)
	## fin del controlador
	return
]