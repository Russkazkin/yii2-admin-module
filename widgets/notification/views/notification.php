<script>
    let type = "<?= $type; ?>",
        message = "<?= $message; ?>",
        options = <?= \yii\helpers\Json::htmlEncode($options); ?>;
</script>
