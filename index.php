<?php
$storage_file = 'orders.json';
$toppings_list = ["None", "Pepperoni", "Sausage", "Bacon", "Extra Cheese", "Mushrooms", "Green Peppers", "Olives", "Pineapple"];
$limit = 10; //records per page

//da 30 records
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

//Logic for pages
$total_records = count($all_orders);
$total_pages = ceil($total_records / $limit);
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) $current_page = 1;
if ($current_page > $total_pages) $current_page = $total_pages;

$offset = ($current_page - 1) * $limit;
//"Slice" the list to get only the 10 for this page
$paged_orders = array_slice($all_orders, $offset, $limit);

//STATS LOGIC (Uses ALL orders, not just the page)
$topping_counts = [];
foreach ($all_orders as $o) {
    foreach ([$o['t1'], $o['t2'], $o['t3']] as $t) {
        if ($t !== "None") $topping_counts[$t] = ($topping_counts[$t] ?? 0) + 1;
    }
}
arsort($topping_counts);
$top_topping = !empty($topping_counts) ? array_key_first($topping_counts) : "-";

//POST ACTION HANDLER (Add/Delete/Update)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    if ($action === 'add') {
        $all_orders[] = ["id" => time(), "size" => $_POST['size'], "crust" => $_POST['crust'], "t1" => $_POST['t1'], "t2" => $_POST['t2'], "t3" => $_POST['t3'], "type" => $_POST['type']];
    } elseif ($action === 'delete') {
        $id = (int)$_POST['id'];
        $all_orders = array_filter($all_orders, fn($o) => $o['id'] !== $id);
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
    file_put_contents($storage_file, json_encode(array_values($all_orders)));
    header("Location: index.php?page=$current_page");
    exit;
}
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
        <div class="stat-card"><h3>Total Orders</h3><p><?php echo $total_records; ?></p></div>
        <div class="stat-card"><h3>Top Topping</h3><p><?php echo $top_topping; ?></p></div>
    </div>

    <div class="main-grid">
        <div class="form-container">
            <h2>New Order</h2>
            <form method="POST">
                <input type="hidden" name="action" value="add">
                <label>Size</label><select name="size"><option>Small</option><option>Medium</option><option selected>Large</option></select>
                <label>Crust</label><select name="crust"><option>Thin</option><option selected>Regular</option><option>Deep Dish</option></select>
                <label>Topping 1</label><select name="t1"><?php foreach($toppings_list as $t) echo "<option>$t</option>"; ?></select>
                <label>Topping 2</label><select name="t2"><?php foreach($toppings_list as $t) echo "<option>$t</option>"; ?></select>
                <label>Topping 3</label><select name="t3"><?php foreach($toppings_list as $t) echo "<option>$t</option>"; ?></select>
                <label>Type</label><select name="type"><option>Dine-in</option><option>Pickup</option><option selected>Delivery</option></select>
                <button type="submit" style="background:#e67e22; color:white; font-weight:bold;">Place Order</button>
            </form>
        </div>

        <div>
            <h2>Active Orders (Page <?php echo $current_page; ?> of <?php echo $total_pages; ?>)</h2>
            <div class="order-grid">
                <?php foreach($paged_orders as $order): ?>
                <div class="order-card">
                    <h4><?php echo "{$order['size']} {$order['crust']}"; ?></h4>
                    <p>Toppings: <?php echo implode(', ', array_filter([$order['t1'], $order['t2'], $order['t3']], fn($t) => $t !== 'None')) ?: 'Plain Cheese'; ?></p>
                    <p>Method: <?php echo $order['type']; ?></p>
                    <div style="display:flex; gap:10px;">
                        <button onclick='openEdit(<?php echo json_encode($order); ?>)' style="background:#ffc107; flex:1; cursor:pointer; border:none; padding:5px;">Edit</button>
                        <form method="POST" style="flex:1;" onsubmit="return confirm('Delete this order?')">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
                            <button type="submit" style="background:#dc3545; color:white; border:none; padding:5px; cursor:pointer; width:100%;">Delete</button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="pagination-nav">
                <?php if ($current_page > 1): ?>
                    <a href="?page=<?php echo $current_page - 1; ?>" class="btn-nav">Previous</a>
                <?php else: ?>
                    <span class="btn-nav disabled">Previous</span>
                <?php endif; ?>

                <span>Page <strong><?php echo $current_page; ?></strong> of <?php echo $total_pages; ?></span>

                <?php if ($current_page < $total_pages): ?>
                    <a href="?page=<?php echo $current_page + 1; ?>" class="btn-nav">Next</a>
                <?php else: ?>
                    <span class="btn-nav disabled">Next</span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div id="editModal" class="modal">
        <form class="modal-content" method="POST">
            <h3>Edit Order</h3>
            <input type="hidden" name="action" value="update"><input type="hidden" name="id" id="editId">
            <label>Size</label><select name="size" id="editSize"><option>Small</option><option>Medium</option><option>Large</option></select>
            <label>Type</label><select name="type" id="editType"><option>Dine-in</option><option>Pickup</option><option>Delivery</option></select>
            <button type="submit" style="background:#28a745; color:white; border:none; padding:10px;">Save Changes</button>
            <button type="button" onclick="document.getElementById('editModal').style.display='none'">Cancel</button>
        </form>
    </div>

    <script>
        function openEdit(order) {
            document.getElementById('editId').value = order.id;
            document.getElementById('editSize').value = order.size;
            document.getElementById('editType').value = order.type;
            document.getElementById('editModal').style.display = 'block';
        }
    </script>
</body>
</html>