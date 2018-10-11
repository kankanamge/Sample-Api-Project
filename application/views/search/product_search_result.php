<table id="srch_res_products" class="display" cellspacing="0" width="100%">
    <thead id="thead_cors_sch">
        <tr>
            <th class="text-align">PRODUCT ID</th>
            <th class="text-align">PRODUCT NAME</th>
            <th class="text-align">COST PRICE (RS)</th>
            <th class="text-align">SALE PRICE (RS)</th>
        </tr>
    </thead>
    <tfoot id="tfoot_cors_sch">
        <tr>
            <th class="text-align">PRODUCT ID</th>
            <th class="text-align">PRODUCT NAME</th>
            <th class="text-align">COST PRICE (RS)</th>
            <th class="text-align">SALE PRICE (RS)</th>
        </tr>
    </tfoot>
    <tbody id="tbody_cors_sch">
        <?php
        if ($option == 3) {
            ?>
            <tr>
                <th class="text-align"><?php echo $tbody_unf['ProductID']; ?></th>
                <th class="text-align"><?php echo $tbody_unf['Name']; ?></th>
                <th style="text-align: right"><?php echo number_format($tbody_unf['CostPrice'], 2); ?></th>
                <th style="text-align: right"><?php echo number_format($tbody_unf['SalePrice'], 2); ?></th>
            </tr>
            <?php
        } else {
            for ($i = 0; $i < count($tbody_unf); $i++) {
                ?>
                <tr>
                    <th class="text-align"><?php echo $tbody_unf[$i]['ProductID']; ?></th>
                    <th class="text-align"><?php echo $tbody_unf[$i]['Name']; ?></th>
                    <th style="text-align: right"><?php echo number_format($tbody_unf[$i]['CostPrice'], 2); ?></th>
                    <th style="text-align: right"><?php echo number_format($tbody_unf[$i]['SalePrice'], 2); ?></th>
                </tr>
                <?php
            }
        }
        ?>


    </tbody>
</table>

<div>
    <p><input type="button" class="medium-button" onclick="go_to__main();" value="Back"></p>
</div>

