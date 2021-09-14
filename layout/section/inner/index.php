<?php $data = unserialize(base64_decode($_GET['data'])); ?>
<section id="default" name="default">
    <div class="container">
        <div class="section-title">
            <h2><?php echo ucwords($data['title'])." ".$app_name?></h2>
        </div>
        <?php if(isset($data['sections'])) { for($i = 0; $i < count($data['sections']); $i++) {?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo $data['sections'][$i]['image']?>" class="mb-3" alt="departments-1" width="100%">
                </div>
                <div class="col-md-8" align="justify">
                    <p><?php echo $data['sections'][$i]['body']?></p>
                </div>
            </div>
            <?php }} else { ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo $data['image']?>" class="mb-3" alt="departments-1" width="100%">
                </div>
                <div class="col-md-8" align="justify">
                    <p><?php echo $data['body']?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>