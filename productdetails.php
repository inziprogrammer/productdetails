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
        <form class="form" action="submit_form.php" method="POST">
            <div class="first">
                <label>Name:</label>
                <input type="text" name="field1" placeholder="Adjustable Race"><br>
                <label>Product Number:</label>
                <input name="field2" type="text" placeholder="AR-5381"><br>
                <label>Model:</label>
                <select name="field3">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select><br>
                <label>Category:</label>
                <select name="field4">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select><br>
                <label>Subcategory:</label>
                <select name="field5">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select><br>
                <label>Product Line:</label>
                <input name="field6" type="text"><br>
                <label>Class:</label>
                <input name="field7" type="text"><br>
                <label>Style:</label>
                <input name="field8" type="text"><br>
                <label>Color:</label>
                <input name="field9" type="text"><br>
                <label>Size:</label>
                <input name="field10" class="input2" type="text">
                <select class="select2" name="field11">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select><br>
                <label>Weight:</label>
                <input name="field12" class="input2" type="text">
                <select name="field13" class="select2">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select><br>
            </div>
            <div class="second">
                <label>List Price:</label>
                <input name="field14" type="text" placeholder="$0.00"><br>
                <label>Standard Cost:</label>
                <input name="field15" type="text" placeholder="$0.00"><br>
                <label>Sell Start Date:</label>
                <input name="field16" type="date"><img src="assets/icons/icon.png"><br>
                <label>Sell End Date:</label>
                <input name="field17" type="date"><img src="assets/icons/icon.png"><br>
                <label>Discount Date:</label>
                <input name="field18" type="date"><img src="assets/icons/icon.png"><br>
                <label>Safety Stock:</label>
                <input name="field19" type="number" min="0" placeholder="1000"><br>
                <label>Reorder Point:</label>
                <input name="field20" type="number" min="0" placeholder="750"><br>
                <label>Days To Man.:</label>
                <input name="field21" type="number" min="0" placeholder="0"><br>
                <label class="new">Make:</label>
                <input name="field22" type="checkbox" value="Make"><br>
                <label class="new">Finished Goods:</label>
                <input name="field23" type="checkbox" value="Finished Goods"><br>
                <button type="reset">Cancel</button><button type="submit">OK</button>
            </div>
        </form>
    </div>
    
</body>
</html>