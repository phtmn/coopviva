$(document).ready(function(){
	/* toastr */
	toastr.options	=	{
							"debug"				:	false,
							"positionClass"		:	"toast-top-center",
							"onclick"			:	null,
							"fadeIn"			:	300,
							"fadeOut"			:	1000,
							"timeOut"			:	5000,
							"extendedTimeOut"	:	1000,
							"progressBar"		:	true
						}

	if ($('.container-cadastro').length) {
		$('main').removeClass('coopviva');
	}
	if ($('.container-login').length) {
		$('main').removeClass('coopviva');
	}

	/* Form */
	if ($('form.form-validate').length) {
		$('form.form-validate').submit(function(e){
			_form		=	$(this).attr('id');
			_required	=	0;
			_label		=	'';
			$("#"+_form+" .form-control").each(function(){
				if ($(this).prop('required')) {
					$label	=	$(this).attr('id');
					if (($(this).val() == '') || ($(this).val() == null)) {
						$('#'+_form+' label[for="'+$label+'"]').css('color','red');
						_label	=	_label + ' ' + $('#'+_form+' label[for="'+$label+'"]').html();
						_required++;
					}
					else{
						$('#'+_form+' label[for="'+$label+'"]').removeAttr('style');
					}
				}
			});
			if (_required > 0) {
				e.preventDefault();
				console.log(_form);
				toastr.warning('Campos obrigatórios não foram preenchidos!','ATENÇÃO!');
			}
			else{
				if($('#'+_form+' .loading').length){
					$('#'+_form+' .loading').removeClass('d-none');
				}
			}
		})
	}
	/* /Form */
});