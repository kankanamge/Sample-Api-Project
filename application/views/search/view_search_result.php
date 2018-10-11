<?php
//print_r($value->ProductID);
//echo count($value);
?>
<div style="width: 50%">
    <div style="text-align:left; font-size: 20px; margin-top: 10px; color:  #007fff" >PRODUCT DETAILS</div>
    <table>
        <tbody>
            <tr>
                <td>PRODUCT ID :</td>
                <td><?php echo $value['ProductID']; ?></td>
        <input id="p_id" name="p_id" value="<?php echo $value['ProductID']; ?>" type="hidden">
        </tr>
        <tr>
            <td>PRODUCT NAME :</td>
            <td><input style="height: 50px; width: 300px; background-color: #efefef" id="p_name" name="p_name" value="<?php echo $value['Name']; ?>" type="text"></td>
        </tr>
        <tr>
            <td>COST PRICE (RS) :</td>
            <td><?php echo number_format($value['CostPrice'], 2); ?></td>
        </tr>
        <tr>
            <td>SALES PRICE (RS) :</td>
            <td><?php echo number_format($value['SalePrice'], 2); ?></td>
        </tr>
        <tr></tr>
        </tbody>
    </table>

    <div style="margin-top: 50px">

        <p>
            <input type="button" style="background: #28d;border-color: transparent;color: #fff; cursor: pointer;width: 150px;height: 35px;" onclick="go_to_edit();" value="EDIT" />
            <input type="button" style="background: #28d;border-color: transparent;color: #fff; cursor: pointer;width: 150px;height: 35px;" onclick="go_to_sch_result_back();" value="BACK" />
        </p>

    </div>
</div>

