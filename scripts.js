// JavaScript Document
$(document).ready(function() {
	$(".megamenu").on("click", function(e) {
		e.stopPropagation();
	});
});

$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square',
    radioClass: 'iradio_square',
    increaseArea: '20%' // optional
  });
});

$(document).ready(function() {		
		$('table.display').DataTable(
		{ 
			"language": {
			 "sSearch": "Buscar:",
			 "sLengthMenu": "Mostrar _MENU_ entradas",
			 "sInfo": "Mostrar _START_ a _END_ de _TOTAL_ entradas",
			 "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }	 
		}
		
}		
		);

		$('.dataTables_filter input').addClass('form-control table-input');
		
} );

$(function () {
    $('select').selectpicker();
});

