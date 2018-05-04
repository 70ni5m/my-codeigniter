<div class="row">
    <div class="col-lg-3 col-md-1 col-sm-0"></div>
    <div class="card col-lg-6 col-md-10 col-sm-12">
        <div class="card-body">
        <h5 class="card-title">ข้อมูลเรือประมง</h5>
            <form action="">
                <div class="form-group">
                    <label for="">ชื่อ</label>
                    <input type="text" class="form-control">
                </div>
                    <div class="form-group">
                    <label for="">ประเทศ</label>
                        <select class="form-control">
                        <?php foreach ($country_list as $country): ?>
                            <option>
                                <?php echo $country['Name'] ?>
                            </option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    
                <button type="button" class="btn btn-primary btn-lg">เพิ่ม</button>
                <button type="button" class="btn btn-secondary btn-lg">ล้าง</button>
            </form>
        </div>
    <div class="col-lg-3 col-md-1 col-sm-0"></div>
    </div>
</div>