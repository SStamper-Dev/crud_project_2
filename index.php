<?php
/**
 * DATA MANAGEMENT SECTION
 * This part runs on the server before the page even loads.
 */

$storage_file = 'orders.json';
$toppings_list = ["None", "Pepperoni", "Sausage", "Bacon", "Extra Cheese", "Mushrooms", "Green Peppers", "Olives", "Pineapple"];

// 1. Load data from the JSON file
if (!file_exists($storage_file)) {
    // Initial 30 records if the file doesn't exist yet
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

$orders = json_decode(file_get_contents($storage_file), true);

// 2. Handle Actions (Create, Update, Delete)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'add') {
        $newOrder = [
            "id" => time(), // Use timestamp as unique ID
            "size" => $_POST['size'],
            "crust" => $_POST['crust'],
            "t1" => $_POST['t1'],
            "t2" => $_POST['t2'],
            "t3" => $_POST['t3'],
            "type" => $_POST['type']
        ];
        $orders[] = $newOrder;
    } 
    elseif ($action === 'delete') {
        $idToDelete = (int)$_POST['id'];
        $orders = array_filter($orders, fn($o) => $o['id'] !== $idToDelete);
    } 
    elseif ($action === 'update') {
        $idToUpdate = (int)$_POST['id'];
        foreach ($orders as &$o) {
            if ($o['id'] === $idToUpdate) {
                $o['size'] = $_POST['size'];
                $o['crust'] = $_POST['crust'];
                $o['t1'] = $_POST['t1'];
                $o['t2'] = $_POST['t2'];
                $o['t3'] = $_POST['t3'];
                $o['type'] = $_POST['type'];
            }
        }
    }

    file_put_contents($storage_file, json_encode(array_values($orders)));
    header("Location: index.php"); // Refresh to show changes
    exit;
}

// 3. Calculate Stats
$total_orders = count($orders);
$topping_counts = [];
foreach ($orders as $o) {
    foreach ([$o['t1'], $o['t2'], $o['t3']] as $t) {
        if ($t !== "None") {
            $topping_counts[$t] = ($topping_counts[$t] ?? 0) + 1;
        }
    }
}
arsort($topping_counts);
$top_topping = !empty($topping_counts) ? array_key_first($topping_counts) : "-";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order Pro Manager</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 20px; background-color: #fdf2e9; color: #333; }
        .dashboard { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px; }
        .stat-card { background: #fff; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); text-align: center; border-top: 4px solid #e67e22; }
        .stat-card h3 { margin: 0; font-size: 0.9em; color: #666; text-transform: uppercase; letter-spacing: 1px; }
        .stat-card p { margin: 5px 0 0; font-size: 1.6em; font-weight: bold; color: #d35400; }
        
        .main-grid { display: grid; grid-template-columns: 350px 1fr; gap: 20px; }
        .form-container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: fit-content; }
        
        h2 { margin-top: 0; color: #d35400; border-bottom: 2px solid #fce5cd; padding-bottom: 10px; }
        label { font-weight: bold; display: block; margin-top: 12px; font-size: 0.85em; color: #555; }
        input, select, button { display: block; width: 100%; margin-bottom: 10px; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1em; }
        
        .order-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 15px; }
        .order-card { background: white; padding: 20px; border-radius: 8px; border-left: 6px solid #e67e22; box-shadow: 0 2px 8px rgba(0,0,0,0.05); transition: transform 0.2s; }
        .order-card:hover { transform: translateY(-3px); }
        .order-card h4 { margin: 0 0 10px 0; color: #d35400; font-size: 1.2em; }
        .order-details { font-size: 0.95em; margin-bottom: 15px; }
        
        .btn-edit { background: #ffc107; color: #000; border: none; cursor: pointer; font-weight: bold; }
        .btn-delete { background: #dc3545; color: white; border: none; cursor: pointer; font-weight: bold; }
        .btn-add { background: #e67e22; color: white; border: none; font-weight: bold; cursor: pointer; font-size: 1.1em; }
        
        .modal { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); z-index:1000; }
        .modal-content { background:white; max-width:400px; margin:40px auto; padding:25px; border-radius:10px; max-height: 90vh; overflow-y: auto; }
        
        @media (max-width: 768px) { .main-grid { grid-template-columns: 1fr; } }
    </style>
</head>
<body>

    <div class="dashboard">
        <div class="stat-card"><h3>Total Orders</h3><p><?php echo $total_orders; ?></p></div>
        <div class="stat-card"><h3>Top Topping</h3><p><?php echo $top_topping; ?></p></div>
    </div>

    <div class="main-grid">
        <div class="form-container">
            <h2>New Order</h2>
            <form method="POST">
                <input type="hidden" name="action" value="add">
                <label>Size</label>
                <select name="size">
                    <option>Small</option><option>Medium</option><option selected>Large</option>
                </select>
                <label>Crust</label>
                <select name="crust">
                    <option>Thin</option><option selected>Regular</option><option>Deep Dish</option>
                </select>
                <?php for($i=1; $i<=3; $i++): ?>
                    <label>Topping <?php echo $i; ?></label>
                    <select name="t<?php echo $i; ?>">
                        <?php foreach($toppings_list as $t) echo "<option value='$t'>$t</option>"; ?>
                    </select>
                <?php endfor; ?>
                <label>Type</label>
                <select name="type">
                    <option>Dine-in</option><option>Pickup</option><option selected>Delivery</option>
                </select>
                <button type="submit" class="btn-add">Place Order 🍕</button>
            </form>
        </div>

        <div>
            <h2>Order History</h2>
            <div class="order-grid">
                <?php foreach($orders as $order): ?>
                <div class="order-card">
                    <h4><?php echo "{$order['size']} {$order['crust']}"; ?></h4>
                    <p>Toppings: <?php echo implode(', ', array_filter([$order['t1'], $order['t2'], $order['t3']], fn($t) => $t !== 'None')) ?: 'Plain Cheese'; ?></p>
                    <p>Method: <?php echo $order['type']; ?></p>
                    <div style="display:flex; gap:10px;">
                        <button onclick='openEdit(<?php echo json_encode($order); ?>)' style="background:#ffc107; flex:1;">Edit</button>
                        <form method="POST" style="flex:1;" onsubmit="return confirm('Really delete?')">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
                            <button type="submit" style="background:#dc3545; color:white;">Delete</button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div id="editModal" class="modal">
        <form class="modal-content" method="POST">
            <h3>Edit Order</h3>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" id="editId">
            <label>Size</label>
            <select name="size" id="editSize"><option>Small</option><option>Medium</option><option>Large</option></select>
            <label>Crust</label>
            <select name="crust" id="editCrust"><option>Thin</option><option>Regular</option><option>Deep Dish</option></select>
            <label>Topping 1</label>
            <select name="t1" id="editT1"><?php foreach($toppings_list as $t) echo "<option value='$t'>$t</option>"; ?></select>
            <button type="submit" style="background:#28a745; color:white;">Update</button>
             <button type="button" onclick="document.getElementById('editModal').style.display='none'">Cancel</button>
        </form>
    </div>

    <script>
        // We still need a tiny bit of JS to make the modal pop up without a page reload
        function openEdit(order) {
            document.getElementById('editId').value = order.id;
            document.getElementById('editSize').value = order.size;
            document.getElementById('editCrust').value = order.crust;
            document.getElementById('editT1').value = order.t1;
            document.getElementById('editModal').style.display = 'block';
        }
    </script>
</body>
</html>