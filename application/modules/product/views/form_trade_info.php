<div class="form-group">
    <label class="control-label col-md-3" for="val_product_min_order_value">Minimum Order</label>
    <div class="col-md-8">
        <input id="val_product_min_order_value" name="val_product_min_order_value" type="text">
        <select id="val_product_min_order_unit" name="val_product_min_order_unit">
            <option>- Pilih Jenis Satuan</option>
            <option value="Ampere">Ampere</option>
            <option value="Tas">Tas</option>
            <option value="Kubik">Kubik</option>
            <option value="Barrel">Barrel</option>
            <option value="Galon">Galon</option>
            <option value="Kilogram">Kilogram</option>
            <option value="Liter">Liter</option>
            <option value="Unit">Unit</option>
            <option value="Ton">Ton</option>
            <option value="Meter">Meter</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="val_fob_price">Biaya FOB</label>
    <div class="col-md-8">
        <select id="val_fob_price_currency" name="val_fob_price_currency">
            <option>- Mata Uang -</option>
            <option value="Rupiah">Rupiah</option>
            <option value="US Dollar">US DOllar</option>
            <option value="Euro">Euro</option>
            <option>yang lainnya</option>
        </select>
        <input id="val_fob_price_min" name="val_fob_price_min" type="text" size="10"> -
        <input id="val_fob_price_max" name="val_fob_price_max" type="text" size="10"> per 
        <select id="val_fob_price_unit" name="val_fob_price_unit">
            <option>- Pilih Jenis Satuan</option>
            <option value="Ampere">Ampere</option>
            <option value="Tas">Tas</option>
            <option value="Kubik">Kubik</option>
            <option value="Barrel">Barrel</option>
            <option value="Galon">Galon</option>
            <option value="Kilogram">Kilogram</option>
            <option value="Liter">Liter</option>
            <option value="Unit">Unit</option>
            <option value="Ton">Ton</option>
            <option value="Meter">Meter</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="val_trade_port">Port</label>
    <div class="col-md-8">
        <input id="val_trade_port" name="val_trade_port" type="text">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3">Syarat Pembayaran</label>
    <div class="col-md-8">
        <input type="checkbox" id="val_trade_payment" name="val_trade_payment[]" value="L/C" checked><span> L/C</span></label>
        <input type="checkbox" id="val_trade_payment" name="val_trade_payment[]" value="D/A" checked><span> D/A</span></label>
        <input type="checkbox" id="val_trade_payment" name="val_trade_payment[]" value="D/P" checked><span> D/P</span></label>
        <input type="checkbox" id="val_trade_payment" name="val_trade_payment[]" value="WU" checked><span> WU</span></label>
        <input type="checkbox" id="val_trade_payment" name="val_trade_payment[]" value="+" checked><span> +</span></label>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="val_supply_ability">Kemampuan Pasokan</label>
    <div class="col-md-8">
        <input id="val_supply_ability" name="val_supply_ability" type="text" size="10"> 
        <select id="val_supply_ability_unit" name="val_supply_ability_unit">
            <option>- Pilih Jenis Satuan</option>
            <option value="Ampere">Ampere</option>
            <option value="Tas">Tas</option>
            <option value="Kubik">Kubik</option>
            <option value="Barrel">Barrel</option>
            <option value="Galon">Galon</option>
            <option value="Kilogram">Kilogram</option>
            <option value="Liter">Liter</option>
            <option value="Unit">Unit</option>
            <option value="Ton">Ton</option>
            <option value="Meter">Meter</option>
        </select>
        per
        <select >
            <option>- Time- </option>
            <option value="Hari">Hari</option>
            <option value="Minggu">Minggu</option>
            <option value="Bulan">Bulan</option>
            <option value="Tahun">Tahun</option> 
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="val_time_shipment">Waktu Pengiriman</label>
    <div class="col-md-8">
        <input id="val_time_shipment" name="val_time_shipment" type="text">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3" for="val_trade_packaging_detail">Detail Pemaketan</label>
    <div class="col-md-4">
        <textarea id="val_trade_packaging_detail" name="val_trade_packaging_detail" class="form-control textarea-elastic" rows="3"></textarea>
    </div>
</div>
