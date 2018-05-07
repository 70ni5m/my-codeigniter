<div class="row">
<?php
foreach($vessels as $ship):
?>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
        <div class="card">
        <h5 class="card-header"></h5>
            <?php echo $ship['Name']?>
            <div class="card-body">
            <h5 class="card-title"></h5>
            <?php echo $ship['Country_ID']?>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <?php
                $hidden['vesselID'] =$ship['id'];
                echo form_open('fishingvessel/delete_vessel', '', $hidden);
            ?>
                <input type="submit" value="ลบ" class="btn btn-primary"/>
            </form>
        </div>
        <img src="<?php echo base_url($ship['imagePath']) ?>" class="card-img-bottom">
    </div>
</div>
<?php
    endforeach
?>
</div>