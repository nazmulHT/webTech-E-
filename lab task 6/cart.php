
<?php



if(isset($_GET['add'])) {


    $query = query("SELECT * FROM product WHERE p_id=" . escape_string($_GET['add']) . "" );
    confirm($query);

    while ($row = fetch_array($query)) {

        if($row['p_quantity'] != $_SESSION['p_' . $_GET['add']]) {
            $_SESSION['p_' . $_GET['add']] += 1;
            redirect("../public/checkout.php");
        }
        else {
            set_message("We only have " . $row['p_quantity'] . " " . $row['p_title'] . " available in the Stock");
            redirect("../public/checkout.php");
        }
        
    }
}


if(isset($_GET['remove'])) {

    $_SESSION['p_' . $_GET['remove']]--;
    if($_SESSION['p_' . $_GET['remove']] < 1) {

        unset($_SESSION['item']);
        unset($_SESSION['total_item_price']);

        redirect("../public/checkout.php");
    }
    else {
        redirect("../public/checkout.php");
    }
}


if(isset($_GET['delete'])) {
    $_SESSION['p_' . $_GET['delete']] = '0';

    unset($_SESSION['item']);
    unset($_SESSION['total_item_price']);

    redirect("../public/checkout.php");
}


function cart() {

    $total = '0';
    $total_item = '0';




    foreach ($_SESSION as $name => $value) {
        if($value > 0) {
            if(substr($name, 0, 2) == "p_") {
                $length = strlen((int)$name - (int)2);
                $id = substr($name, 2, $length);

            $query = query("SELECT * FROM product WHERE p_id = " . escape_string($id) . " " );
            confirm($query);

    while ($row = fetch_array($query)) {
        $subtotal = $row['p_price'] * $value;

        $product  = <<<DELIMETER

        <tr>
        <td>{$row['p_title']}</td>
        <td>&#2547;{$row['p_price']}</td>
        <td>$value</td>
        <td>&#2547;$subtotal</td>
        <td><a class='btn btn-warning' href="../resource/cart.php?remove={$row['p_id']}"><span class='glyphicon glyphicon-minus'></span></a>
        <a class='btn btn-success' href="../resource/cart.php?add={$row['p_id']}"><span class='glyphicon glyphicon-plus'></span></a>
        <a class='btn btn-danger' href="../resource/cart.php?delete={$row['p_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
        </tr>



        DELIMETER;
        echo $product;
    }

    $_SESSION['total_item_price'] = $total += $subtotal;
    $_SESSION['item'] = $total_item += $value;

   }

  }
     
 }

}



function show_paypalButtoon() {
    if(isset($_SESSION['item']) && $_SESSION['item'] >= 1) {

        $paypal_button = <<<DELIMETER

        <a href="../public/buynow.php?price=<?php echo $total_item_price?>" class="btn btn-success btn-rounded">Buy Now!</a>
        DELIMETER;

        return $paypal_button;
      
    }
}







?>