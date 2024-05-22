<form action="/" method="post" class="row mt-3 border border-warning rounded p-3">
    <?php
        for ($i = 0; $i < 10; $i++) :
        $answer_name = 'a[]' . $i;
        ?>
        <div class="col-6 offset-3 border border-warning rounded p-3 mt-3">
            <p>Question <?= $i + 1 ?></p>
            <div class="row">
                <?php
                    for ($j = 0; $j < 4; $j++) {
                    $answer_id = 'a' . $i * 4 + $j;
                    $answer_value = $j + 1;
                    ?>
                    <div class="col-3">
                        <input type="radio" name="<?= $answer_name ?>" value="<? $answer_value ?>" id="<?= $answer_id ?>" class="form-check-input">
                        <label for="<?= $answer_id ?>" class="form-check-label ">Answer <?= $j + 1 ?></label>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    endfor;
    ?>
    <div class="d-grid mt-3">
        <input type="hidden" name="page" value="2">
        <button class="btn btn-warning">Send</button>
    </div>
</form> 
