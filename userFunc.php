<?php
class user_test {
	function user_TCAform_test($PA, $fobj) {
		return '<div style="border: 2px dashed #666666;width : 90%;margin: 5px 5px 5px 5px;padding: 5px 5px 5px 5px;" >
				<h2>My Own Form Field:</h2>
					<input name="'.$PA['itemFormElName'].'" value="'.htmlspecialchars($PA['itemFormElValue']).'" onchange="'.htmlspecialchars(implode('',$PA['fieldChangeFunc'])).'" '.$PA['onFocus'].' /></div>';
	}
}

function user_function2TCAform_test($PA, $fobj) {
	return '<div style="border: 2px dashed #666666;width : 90%;margin: 5px 5px 5px 5px;padding: 5px 5px 5px 5px;" >
				<h2>My Own Form Field:</h2>
					<input name="'.$PA['itemFormElName'].'" value="'.htmlspecialchars($PA['itemFormElValue']).'" onchange="'.htmlspecialchars(implode('',$PA['fieldChangeFunc'])).'" '.$PA['onFocus'].' /></div>';
}

function user_function3TCAform_test($PA, $fobj) {
	return '<div style="border: 2px dashed #666666;width : 90%;margin: 5px 5px 5px 5px;padding: 5px 5px 5px 5px;" >
				<h2>My Own Form Field with tablewrap deaktivated, so display is correct above the table:</h2>
					<input name="'.$PA['itemFormElName'].'" value="'.htmlspecialchars($PA['itemFormElValue']).'" onchange="'.htmlspecialchars(implode('',$PA['fieldChangeFunc'])).'" '.$PA['onFocus'].' /></div>';
}
?>