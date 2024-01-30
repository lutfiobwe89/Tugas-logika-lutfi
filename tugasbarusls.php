<?php
function filterUniqueDepartments(...$departmentNames) {
    $uniqueDepartments = [];

    foreach ($departmentNames as $name) {
        $uppercaseName = strtoupper($name);
        if (!in_array($uppercaseName, $uniqueDepartments)) {
            $uniqueDepartments[] = $uppercaseName;
        }
    }

    return $uniqueDepartments;
}

// Contoh pemanggilan fungsi
$departmentList = ["PPLG", "HTL", "KLN", "PMN", "pplg"];
$uniqueDepartments = filterUniqueDepartments(...$departmentList);
print_r($uniqueDepartments); // Output: Array ( [0] => PPLG [1] => HTL [2] => KLN [3] => PMN )
?>