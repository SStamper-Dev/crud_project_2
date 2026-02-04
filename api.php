<?php
$storage_file = 'orders.json';
$limit = 10;

// Load the 30 records (project requirement)
if (!file_exists($storage_file)) {
    $initial_data = [
        ["id" => 1, "size" => "Large", "crust" => "Thin", "t1" => "Pepperoni", "t2" => "Mushrooms", "t3" => "None", "type" => "Delivery"],
        ["id" => 2, "size" => "Medium", "crust" => "Deep Dish", "t1" => "Sausage", "t2" => "Green Peppers", "t3" => "Olives", "type" => "Pickup"],
        ["id" => 3, "size" => "Small", "crust" => "Regular", "t1" => "Bacon", "t2" => "Pineapple", "t3" => "Extra Cheese", "type" => "Delivery"],
        ["id" => 4, "size" => "Large", "crust" => "Thin", "t1" => "Sausage", "t2" => "Mushrooms", "t3" => "None", "type" => "Pickup"],
        ["id" => 5, "size" => "Medium", "crust" => "Regular", "t1" => "Bacon", "t2" => "Olives", "t3" => "Green Peppers", "type" => "Delivery"],
        ["id" => 6, "size" => "Small", "crust" => "Deep Dish", "t1" => "Pepperoni", "t2" => "Green Peppers", "t3" => "Olives", "type" => "Pickup"],
        ["id" => 7, "size" => "Large", "crust" => "Regular", "t1" => "Extra Cheese", "t2" => "Mushrooms", "t3" => "None", "type" => "Dine-in"],
        ["id" => 8, "size" => "Medium", "crust" => "Thin", "t1" => "Pineapple", "t2" => "Bacon", "t3" => "Sausage", "type" => "Delivery"],
        ["id" => 9, "size" => "Small", "crust" => "Regular", "t1" => "Mushrooms", "t2" => "Green Peppers", "t3" => "Olives", "type" => "Pickup"],
        ["id" => 10, "size" => "Large", "crust" => "Deep Dish", "t1" => "Pepperoni", "t2" => "Extra Cheese", "t3" => "None", "type" => "Dine-in"],
        ["id" => 11, "size" => "Medium", "crust" => "Thin", "t1" => "Sausage", "t2" => "Bacon", "t3" => "Pineapple", "type" => "Delivery"],
        ["id" => 12, "size" => "Small", "crust" => "Regular", "t1" => "Olives", "t2" => "Green Peppers", "t3" => "Mushrooms", "type" => "Pickup"],
        ["id" => 13, "size" => "Large", "crust" => "Regular", "t1" => "Bacon", "t2" => "Extra Cheese", "t3" => "Mushrooms", "type" => "Delivery"],
        ["id" => 14, "size" => "Medium", "crust" => "Thin", "t1" => "Green Peppers", "t2" => "Olives", "t3" => "None", "type" => "Pickup"],
        ["id" => 15, "size" => "Small", "crust" => "Deep Dish", "t1" => "Pepperoni", "t2" => "None", "t3" => "None", "type" => "Dine-in"],
        ["id" => 16, "size" => "Large", "crust" => "Thin", "t1" => "Sausage", "t2" => "Bacon", "t3" => "Extra Cheese", "type" => "Delivery"],
        ["id" => 17, "size" => "Medium", "crust" => "Regular", "t1" => "Mushrooms", "t2" => "Pineapple", "t3" => "None", "type" => "Pickup"],
        ["id" => 18, "size" => "Small", "crust" => "Thin", "t1" => "Olives", "t2" => "Green Peppers", "t3" => "Bacon", "type" => "Dine-in"],
        ["id" => 19, "size" => "Large", "crust" => "Deep Dish", "t1" => "Extra Cheese", "t2" => "Sausage", "t3" => "Pepperoni", "type" => "Delivery"],
        ["id" => 20, "size" => "Medium", "crust" => "Thin", "t1" => "Bacon", "t2" => "Mushrooms", "t3" => "Olives", "type" => "Pickup"],
        ["id" => 21, "size" => "Small", "crust" => "Regular", "t1" => "Pineapple", "t2" => "Bacon", "t3" => "None", "type" => "Delivery"],
        ["id" => 22, "size" => "Large", "crust" => "Regular", "t1" => "Pepperoni", "t2" => "Sausage", "t3" => "Extra Cheese", "type" => "Dine-in"],
        ["id" => 23, "size" => "Medium", "crust" => "Deep Dish", "t1" => "Mushrooms", "t2" => "Green Peppers", "t3" => "None", "type" => "Pickup"],
        ["id" => 24, "size" => "Small", "crust" => "Thin", "t1" => "Bacon", "t2" => "Olives", "t3" => "Extra Cheese", "type" => "Delivery"],
        ["id" => 25, "size" => "Large", "crust" => "Thin", "t1" => "Pineapple", "t2" => "None", "t3" => "None", "type" => "Pickup"],
        ["id" => 26, "size" => "Medium", "crust" => "Regular", "t1" => "Sausage", "t2" => "Pepperoni", "t3" => "Bacon", "type" => "Dine-in"],
        ["id" => 27, "size" => "Small", "crust" => "Deep Dish", "t1" => "Extra Cheese", "t2" => "Mushrooms", "t3" => "Olives", "type" => "Delivery"],
        ["id" => 28, "size" => "Large", "crust" => "Regular", "t1" => "Green Peppers", "t2" => "Sausage", "t3" => "None", "type" => "Pickup"],
        ["id" => 29, "size" => "Medium", "crust" => "Thin", "t1" => "Pepperoni", "t2" => "Pineapple", "t3" => "Bacon", "type" => "Dine-in"],
        ["id" => 30, "size" => "Small", "crust" => "Regular", "t1" => "Sausage", "t2" => "Extra Cheese", "t3" => "Mushrooms", "type" => "Delivery"]
    ];
    file_put_contents($storage_file, json_encode($initial_data));
}

$all_orders = json_decode(file_get_contents($storage_file), true);

// GET if fronted just needs data
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $display_orders = array_reverse($all_orders); //Shows most recent first
    
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;
    
    // Calculate stats
    $topping_counts = [];
    foreach ($all_orders as $o) {
        foreach ([$o['t1'], $o['t2'], $o['t3']] as $t) {
            if ($t !== "None") $topping_counts[$t] = ($topping_counts[$t] ?? 0) + 1;
        }
    }
    arsort($topping_counts);

    echo json_encode([
        "orders" => array_slice($display_orders, $offset, $limit), // Slice the REVERSED version
        "total_records" => count($all_orders),
        "total_pages" => ceil(count($all_orders) / $limit),
        "top_topping" => !empty($topping_counts) ? array_key_first($topping_counts) : "-"
    ]);
    exit;
}

// POST if frontend is sending data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $current_page = isset($_POST['page']) ? (int)$_POST['page'] : 1;

    if ($action === 'add') {
        $all_orders[] = ["id" => time(), "size" => $_POST['size'], "crust" => $_POST['crust'], 
                         "t1" => $_POST['t1'], "t2" => $_POST['t2'], "t3" => $_POST['t3'], "type" => $_POST['type']];
    } elseif ($action === 'delete') {
        $id = (int)$_POST['id'];
        $all_orders = array_values(array_filter($all_orders, fn($o) => $o['id'] !== $id));
    } elseif ($action === 'update') {
        $id = (int)$_POST['id'];
        foreach ($all_orders as &$o) {
            if ($o['id'] === $id) {
                $o['size'] = $_POST['size']; $o['crust'] = $_POST['crust'];
                $o['t1'] = $_POST['t1']; $o['t2'] = $_POST['t2']; $o['t3'] = $_POST['t3'];
                $o['type'] = $_POST['type'];
            }
        }
    }
    file_put_contents($storage_file, json_encode($all_orders));
    header("Location: index.html?page=$current_page");
    exit;
}
?>