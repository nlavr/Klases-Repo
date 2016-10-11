<?php

function getMenuTree()
{
    // Pieslēgšanās pie lokālā servera
    $con = mysqli_connect("localhost", "root", "", "myshop");

    // Šis tiks atgriezts beigās
    $items = [];

    // Querijs, lai dabūtu visas platformas
    $platforms = mysqli_query($con, "select * from platforms");

    // Querijs, lai dabūtu visas kategorijas
    $categories = mysqli_query($con, "select * from category");

    // Dabū no db ārā visas platformas un saglabā $items masīvā
    while($platform = mysqli_fetch_array($platforms)) {
        $items[$platform['ID']] = [
            'name' => $platform['name'],// Katrai platformai ir name
            'categories' => [] // Katrai platformai var būt piesaistītas kategorijas (tukšums pēc noklusējuma)
        ];
    }
    // Dabū no db ārā visas kategorijas un saglabā $items masīvā pie attiecīgās platformas
    while($category = mysqli_fetch_array($categories))   {
        // Viņš saglabā kategorijas nosaukumu iekš attiecīgās platformas categories saraksta beigās
        $items[$category['parentID']]['categories'][$category['ID']] = [
            'name' => $category['name']
        ];
    }
    return $items;
}
?>