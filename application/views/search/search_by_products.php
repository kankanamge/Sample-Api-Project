<div id="sch_y_cors_res_div"></div>
<div class="form" id="sch_by_cors_mn_div">
    <h2 class="form-header">SEARCH PRODUCTS</h2>
    <form class="form-container" method="post">
        <div style="margin-top: 50px;" class="form-div">
            <label class="form-lable" for='id_accomodation'>OPTION</label>
            <div>
                <select class="select select-large" id="p_option" onchange="check_option();">
                    <option value="0">SELECT OPTION</option>
                    <option value="1">SEARCH ALL</option>
                    <option value="2">SEARCH TOP 20 PRODUCTS</option>
                    <option value="3">SEARCH BY PRODUCT ID</option>
                </select>
            </div>
        </div>
        <div class="form-div" id="product_name" style="display: none">
            <label class="form-lable" for='id_accomodation'>PRODUCT NAME</label>
            <div>
                <select class="select select-large" id="p_id">
                    <option value="0">SELECT A PRODUCT NAME</option>
                </select>
            </div>
        </div>
        <div>
            <p><input type="button" onclick="search_by_option();" value="SEARCH"></p>
        </div>
    </form>
</div>

