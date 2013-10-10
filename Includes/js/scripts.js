/*Tara
	When checkbox is selected 'ground' fields will fill with 'club' details
	When checkbox is empty 'ground' fields will be blank
*/
function fillMailDetails(form) {
	if(form.clubCheckbox.checked == true) {
		form.gAddress.value = form.cAddress.value;
		form.gSuburb.value = form.cSuburb.value;
		form.gState.value = form.cState.value;
		form.gPcode.value = form.cPcode.value;
		form.gPhone.value = form.cPhone.value;
	}
	if(form.clubCheckbox.checked == false) {
		form.gAddress.value = '';
		form.gSuburb.value = '';
		form.gState.value = '';
		form.gPcode.value = '';
		form.gPhone.value = '';
	}
}/* end checkbox*/


/*Tara
	Creates custom error messages when data hasn't been entered or the incorrct type has been detected
*/
$(document).ready(function(){

	$("#clubForm").validate({
		rules: {
			cName: {	
				required: true,
				letterswithbasicpunc: true
			},
			gName: {
				letterswithbasicpunc: true
			},
			cAddress: {
				required: true
			},
			cSuburb: {
				required: true,
				letterswithbasicpunc: true
			},
			cState: {
				required: true
			},
			cPcode: {
				required: true,
				digits: true,
				rangelength: [4, 4]
			},
			cEmail: {
				required: true,
				email: true
			},
			cPhone: {
				required: true,
				digits: true,
				rangelength: [8, 10]
			},
			gAddress: {
				required: true
			},
			gSuburb: {
				required: true,
				letterswithbasicpunc: true
			},
			gState: {
				required: true
			},
			gPcode: {
				required: true,
				digits: true,
				rangelength: [4, 4]
			},
			gPhone: {
				digits: true,
				rangelength: [8, 10]
			}
		},
		messages: {
			cName: {	
				required: 'Please enter the club name.',
				letterswithbasicpunc: 'Please enter letters only.'
			},
			gName: {
				letterswithbasicpunc: 'Please enter letters only.'
			},
			cAddress: {
				required: 'Please enter the address of the club.'
			},
			cSuburb: {
				required: 'Please enter the suburb of the club.',
				letterswithbasicpunc: 'Please enter letters only.'
			},
			cState: {
				required: 'Please enter the state of the club.'
			},
			cPcode: {
				required: 'Please enter the postcode of the club.',
				digits: 'Please enter numbers only.',
				rangelength: '4 digits only. Place 0 at the start for 3 digit postcodes.'
			},
			cEmail: {
				required: 'Please enter the email address.',
				email: 'Please enter a valid email address.'
			},
			cPhone: {
				required: 'Please enter the club phone number.',
				digits: 'Please enter numbers only (no spaces).',
				rangelength: 'The phone number must be between 8-10 digits.'
			},
			gAddress: {
				required: 'Please enter the address of the home ground.'
			},
			gSuburb: {
				required: 'Please enter the suburb of the home ground.',
				letterswithbasicpunc: 'Please enter letters only.'
			},
			gState: {
				required: 'Please enter the state of the home ground.'
			},
			gPcode: {
				required: 'Please enter the postcode of the home ground.',
				digits: 'Please enter numbers only (no spaces).',
				rangelength: '4 digits only. Place 0 at the start for 3 digit postcodes.'
			},
			cPhone: {
				digits: 'Please enter numbers only (no spaces).',
				rangelength: 'The phone number must be between 8-10 digits.'
			}
		}
	});
	return;
});/* end club validation*/