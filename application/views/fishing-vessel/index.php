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
            </div>
    </div>
</div>
<?php
    endforeach
?>
</div>