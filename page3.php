<form action="/" method="post" class="row mt-3 border border-warning rounded p-3">
    <?php
    for ($i = 0; $i < 10; $i++) :
        $answer_name = 'a[]' . $i;
        ?>
        <div class="col-6 offset-3 border border-warning rounded p-3 mt-3">
            <p>Question <?= $i + 1 ?></p>
            <div class="row">
                <div class="col">
                    <input type="text" name="<?= $answer_name ?>" class="form-control">
                </div>
            </div>
        </div>
    <?php
    endfor;
    ?>
    <div class="d-grid mt-3">
        <input type="hidden" name="page" value="4">
        <button class="btn btn-warning">Send</button>
    </div>
</form> 
