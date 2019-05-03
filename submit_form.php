<?php
    $field1 = $_POST['field1'];
    $field2 = $_POST['field2'];
    $field3 = $_POST['field3'];
    $field4 = $_POST['field4'];
    $field5 = $_POST['field5'];
    $field6 = $_POST['field6'];
    $field7 = $_POST['field7'];
    $field8 = $_POST['field8'];
    $field9 = $_POST['field9'];
    $field10 = $_POST['field10'];
    $field11 = $_POST['field11'];
    $field12 = $_POST['field12'];
    $field13 = $_POST['field13'];
    $field14 = $_POST['field14'];
    $field15 = $_POST['field15'];
    $field16 = $_POST['field16'];
    $field17 = $_POST['field17'];
    $field18 = $_POST['field18'];
    $field19 = $_POST['field19'];
    $field20 = $_POST['field20'];
    $field21 = $_POST['field21'];
    if(isset($_POST['field22'])) {
        $field22 = $_POST['field22'];
    }
    else {
        $field22 = "";
    }
    if(isset($_POST['field23'])) {
        $field23 = $_POST['field23'];
    }
    else {
        $field23 = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <title>Product Details</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <label>Product Details</label>
        </div>
        <form class="form" action="" method="POST">
            <div class="first">
                <label>Name:</label>
                <input type="text" value="<?php echo $field1; ?>"><br>
                <label>Product Number:</label>
                <input value="<?php echo $field2; ?>"><br>
                <label>Model:</label>
                <select>
                    <option <?php if($field3 == "Option 1") { ?> selected="selected"<?php }?>value="Option 1">Option 1</option>
                    <option <?php if($field3 == "Option 2") { ?> selected="selected"<?php }?>value="Option 1">Option 2</option>
                    <option <?php if($field3 == "Option 3") { ?> selected="selected"<?php }?>value="Option 1">Option 3</option>
                </select><br>
                <label>Category:</label>
                <select>
                    <option <?php if($field4 == "Option 1") { ?> selected="selected"<?php }?>value="Option 1">Option 1</option>
                    <option <?php if($field4 == "Option 2") { ?> selected="selected"<?php }?>value="Option 1">Option 2</option>
                    <option <?php if($field4 == "Option 3") { ?> selected="selected"<?php }?>value="Option 1">Option 3</option>
                </select><br>
                <label>Subcategory:</label>
                <select>
                    <option <?php if($field5 == "Option 1") { ?> selected="selected"<?php }?>value="Option 1">Option 1</option>
                    <option <?php if($field5 == "Option 2") { ?> selected="selected"<?php }?>value="Option 1">Option 2</option>
                    <option <?php if($field5 == "Option 3") { ?> selected="selected"<?php }?>value="Option 1">Option 3</option>
                </select><br>
                <label>Product Line:</label>
                <input value="<?php echo $field6; ?>" type="text"><br>
                <label>Class:</label>
                <input value="<?php echo $field7; ?>" type="text"><br>
                <label>Style:</label>
                <input value="<?php echo $field8; ?>" type="text"><br>
                <label>Color:</label>
                <input value="<?php echo $field9; ?>" type="text"><br>
                <label>Size:</label>
                <input value="<?php echo $field10; ?>" class="input2" type="text">
                <select class="select2">
                    <option <?php if($field11 == "Option 1") { ?> selected="selected"<?php }?>value="Option 1">Option 1</option>
                    <option <?php if($field11 == "Option 2") { ?> selected="selected"<?php }?>value="Option 1">Option 2</option>
                    <option <?php if($field11 == "Option 3") { ?> selected="selected"<?php }?>value="Option 1">Option 3</option>
                </select><br>
                <label>Weight:</label>
                <input value="<?php echo $field12; ?>" class="input2" type="text">
                <select class="select2">
                    <option <?php if($field13 == "Option 1") { ?> selected="selected"<?php }?>value="Option 1">Option 1</option>
                    <option <?php if($field13 == "Option 2") { ?> selected="selected"<?php }?>value="Option 1">Option 2</option>
                    <option <?php if($field13 == "Option 3") { ?> selected="selected"<?php }?>value="Option 1">Option 3</option>
                </select><br>
            </div>
            <div class="second">
                <label>List Price:</label>
                <input value="<?php echo $field14; ?>" type="text"><br>
                <label>Standard Cost:</label>
                <input value="<?php echo $field15; ?>" type="text"><br>
                <label>Sell Start Date:</label>
                <input value="<?php echo $field16; ?>" type="date"><img src="assets/icons/icon.png"><br>
                <label>Sell End Date:</label>
                <input value="<?php echo $field17; ?>" type="date"><img src="assets/icons/icon.png"><br>
                <label>Discount Date:</label>
                <input value="<?php echo $field18; ?>" type="date"><img src="assets/icons/icon.png"><br>
                <label>Safety Stock:</label>
                <input value="<?php echo $field19; ?>" type="number" min="0"><br>
                <label>Reorder Point:</label>
                <input value="<?php echo $field20; ?>" type="number" min="0"><br>
                <label>Days To Man.:</label>
                <input value="<?php echo $field21; ?>" type="number" min="0"><br>
                <label class="new">Make:</label>
                <input <?php if($field22 == "Make") { ?> checked<?php }?> type="checkbox"><br>
                <label class="new">Finished Goods:</label>
                <input <?php if($field23 == "Finished Goods") { ?> checked<?php }?> type="checkbox"><br>
                <button type="reset">Cancel</button><button type="submit">OK</button>
            </div>
        </form>
    </div>
    
</body>
</html>