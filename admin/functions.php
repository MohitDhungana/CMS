<?php

function confirmQuery($result)
{
    global $connection;
    if (!$result) {
        die(mysqli_error($connection));
    }
}

function insert_categories()
{

    global $connection;

    if (isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];

        if ($cat_title == "" || empty($cat_title)) {
            echo ("this field is empty");
        } else {
            $query = "INSERT INTO categories(cat_title) VALUE('{$cat_title}') ";
            $create_category_query = mysqli_query($connection, $query);

            if (!$create_category_query) {
                die(mysqli_error());
            }

        }


    }

}





function findAllCategories()
{

    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);


    while ($row = mysqli_fetch_assoc($select_categories)) {
        # where row is an array

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo ("<tr>");
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
        echo ("<tr>");
    }

}

function deleteCategories()
{

    global $connection;
    if (isset($_GET['delete'])) {
        $the_cat_id = $_GET['delete'];

        $query = "DELETE FROM categories WHERE cat_id= {$the_cat_id}";
        $delete_query = mysqli_query($connection, $query);
    #refresh page after delete to show it is deleted 
        header("Location: categories.php");



    }


}





























?>