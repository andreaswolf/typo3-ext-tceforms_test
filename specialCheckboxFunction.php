<?php


/*
$conf = Array
(
    [items] => Array
        (
            [0] => Array
                (
                    [0] => Green tomatoes
                    [1] => 1
                    [2] => 
                )

            [1] => Array
                (
                    [0] => Red peppers
                    [1] => 2
                    [2] => 
                )

        )

    [config] => Array
        (
            [type] => check
            [items] => Array
                (
                    [0] => Array
                        (
                            [0] => Green tomatoes
                            [1] => 1
                        )

                    [1] => Array
                        (
                            [0] => Red peppers
                            [1] => 2
                        )

                )

            [itemsProcFunc] => EXT:t3dd09_tceforms_sonja/specialCheckboxFunction.php:user_specialCheckboxFunction
            [form_type] => check
        )

    [TSconfig] => 
    [table] => tx_t3dd09tceformssonja_check
    [row] => Array
        (
            [t3ver_label] => 
            [sys_language_uid] => 0
            [l10n_parent] => 0
            [l10n_diffsource] => 
            [hidden] => 0
            [starttime] => 0
            [endtime] => 0
            [fe_group] => 0
            [checkbox_1] => 
            [checkbox_2] => 1
            [checkbox_3] => 
            [checkbox_4] => 3
            [checkbox_5] => 1
            [checkbox_6] => 1
            [checkbox_7] => 
            [checkbox_8] => 
            [uid] => NEW4a0dccb90ec18
            [pid] => 2
        )

    [field] => checkbox_8
)

*/

function user_specialCheckboxFunction($conf) {
	$conf['items'][0][0] = 'Green tomatoes - changed by function';
	
}

?>
