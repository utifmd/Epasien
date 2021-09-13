<?php
    $data = unserialize(base64_decode($_GET['data']));
?>
<section id="default" name="default">
    <div class="container">
        <div class="section-title">
            <h2><?php echo ucwords($data['title'])." ".$app_name?></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $data['image']?>" class="mb-3" alt="departments-1" width="100%">
            </div>
            <div class="col-md-8 mt-" align="justify"><!--line-height:1.8-->
                <p><?php echo $data['body']?></p>
            </div>
        </div>
    </div>
</section>