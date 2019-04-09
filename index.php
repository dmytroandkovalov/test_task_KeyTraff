
<?php

    define('APPPATH', __DIR__ .'\app');

    require_once (APPPATH. '\setting.php');
    require_once ('Router.php');

    require_once (APPPATH .'/includes/header.php');

?>

<div class="container">
    <div class="row  mt-5 justify-content-center">
        <div class="col-md-2">
            <button type="button" class="btn btn-outline-success request-btn" data-view="request1">
                First query
            </button>
        </div>
        <div class="col-md-2">
            <button type="button"  class="btn btn-outline-success request-btn" data-view="request2">
                Second query
            </button>
        </div>
    </div>
    <div class="row  mt-4 justify-content-center">
        <div class="col-md-10" id="output">
            <div class="alert alert-success text-center p-5" role="alert">
                <p class="text-center">Click to the button to get results.</p>
            </div>
        </div>
    </div>
</div>
<?php require_once (APPPATH .'/includes/footer.php');  ?>
