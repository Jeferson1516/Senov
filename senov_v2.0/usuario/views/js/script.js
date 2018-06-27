$("select.cambioDeAmbiente").change(function(){
	var a = confirm("Esta seguro de que quiere cambiar al modo de usuario.");

	if (a){

		// location.href = "localhost:8080/senov_v2.0/loading/admin";
		// setTimeout ("redireccionar()", 1000);

		setTimeout(function(){
			url = "http://localhost:8080/senov_v2.0/loading/user";
			$(location).attr('href',url);
		},1000);

	}
});