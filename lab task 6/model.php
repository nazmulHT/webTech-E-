<?php


/***********************helper function***********/

function set_message($msg) {
    if(!empty($msg)) {
        $_SESSION['message'] = $msg;
    }
    else {
        $msg = "";
    }
}

function display_message() {
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']); 
    }
}

function redirect($location) {
    header("Location: $location");
}


function query($sql) {
    global $connection ;
    return mysqli_query($connection, $sql);
}

function confirm($result) {
    global $connection;
    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    }
}

function escape_string($string) {
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}


function fetch_array($result) {
    return mysqli_fetch_array($result);
}

/***************************FRONT END FUCNTIONS***************************/


function get_prodcuts() {
    $query = query("SELECT * FROM product");
    confirm($query);
    while ($row = fetch_array($query)) {
        $product = <<<DELIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <a href="item.php?id={$row['p_id']}"><img src="{$row['p_image']}" alt=""></a>
                <div class="caption">
                    <h4 class="pull-right">&#2547;{$row['p_price']}</h4>
                    <h4><a href="item.php?id={$row['p_id']}">{$row['p_title']}</a></h4>
                    <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    <a class="btn btn-primary" target="_blank" href="../resource/cart.php?add={$row['p_id']}">Add To Cart</a>
                </div>
         
            </div>
        </div>

        DELIMETER;
        echo $product;

    }
}


function get_categories() {
    $query = query("SELECT * FROM category");
    confirm($query);
    while ($row = fetch_array($query)){
        $category_link = <<<DELIMETER
        <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
        DELIMETER;
        echo $category_link;
    }
}


function display_category() {
    $query = query("SELECT * FROM product WHERE cat_id = " . escape_string($_GET['id']) . " ");
    confirm($query);
    while ($row = fetch_array($query)) {
        $categories = <<<DELIMETER
        <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['p_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['p_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['p_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
        </div>

        DELIMETER;
        echo $categories;

    }
} 


function get_product_in_shop_page() {
    $query = query("SELECT * FROM product");
    confirm($query);
    while ($row = fetch_array($query)) {
        $categories = <<<DELIMETER
        <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['p_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['p_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="cart.php?id={$row['p_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['p_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
        </div>

        DELIMETER;
        echo $categories;

    }
}



function login_user() {

    if(isset($_POST['submit'])){
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");
        confirm($query);

        if(mysqli_num_rows($query) == 0) {
            set_message("Your username or password was incorrect!");
            redirect("login.php");
        }
        else {
            $_SESSION['username'] = $username;
            redirect("admin");
        }
    }

}



function send_message() {
    if(isset($_POST['submit'])){

        $to = "nazmul.tanveernad@gmail.com";
        $from_name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $headers = "From: {$from_name} {$email}";

        $result = mail($to, $subject, $message, $headers);

        if(!$result) {
            echo "error";
        }else {
            echo "sent";
        }

    }
}
























/*****************BACK END FUNCTIONS*****************************/
















/************admin showing product**************//////


function get_products_in_admin() {
    $query = query("SELECT * FROM product");
    confirm($query);
    while ($row = fetch_array($query)) {
        $category = show_product_category_title($row['cat_id']);

        $product = <<<DELIMETER
        <tr>
            <td>{$row['p_id']}</td>
            <td>{$row['p_title']}<br>
            <a href="index.php?edit_product&id={$row['p_id']}"><img src="{$row['p_image']}" alt=""></a>
            </td>
            <td>{$category}</td>
            <td>{$row['p_price']}</td>
            <td>{$row['p_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resource/template/back/delete_product.php?id={$row['p_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
        </tr>

        DELIMETER;
        echo $product;

    } 
}


function show_product_category_title($cat_id) {
    $category_query = query("SELECT * FROM category WHERE cat_id = '{$cat_id}' ");
    confirm($category_query);


    while($category_row = fetch_array($category_query)) {
        return $category_row['cat_title'];
    }
}





















/**********************ADD PRODUCT*//////////////

function add_product() {
 

    if(isset($_POST['publish'])){


        $p_title                   = escape_string($_POST['p_title']);
        $cat_id                    = escape_string($_POST['cat_id']);
        $p_price                   = escape_string($_POST['p_price']);
        $p_quantity                = escape_string($_POST['p_quantity']);
        $p_description             = escape_string($_POST['p_description']);
        $short_desc                = escape_string($_POST['short_desc']);
        $p_image                   = escape_string($_FILES['file']['name']);
        $image_temp_location       = escape_string($_FILES['file']['tmp_name']);

        move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY . DS . $p_image);

        $query = query("INSERT INTO product (p_title, cat_id, p_price, p_quantity, p_description, short_desc, p_image) VALUES ('{$p_title}', '{$cat_id}', '{$p_price}', '{$p_quantity}', '{$p_description}', '{$short_desc}', '{$p_image}')");
        confirm($query);
        set_message("New Products added");
        redirect("index.php?products");

        




    }
}

function show_category_in_add_product_page() {
    $query = query("SELECT * FROM category");
    confirm($query);
    while ($row = fetch_array($query)){
        $category_options = <<<DELIMETER
        <option value="{$row['cat_id']}">{$row['cat_title']}</option>
        DELIMETER;
        echo $category_options;
    }
}






































?>