<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My adverts</title>
</head>
<body>
<div class="grid-view">
    <?php
    $format = 'd M Y H:i';
//    Yii::$app->db->createCommand('INSERT INTO advert (user_id, region_id, city_id, category_id, subcategory_id, title,
//    text, created_at, updated_at) VALUES (12, 1, 1, 1, 1, "title here", "text here", :created, :updated)',
//                                [
//                                    ':created' => time(),
//                                    ':updated' => time()
//                                ])->execute();
    ?>
    <?php $table = '<table class="table table-striped table-bordered">'; ?>
    <?php $table .= '<tr><th>Title</th><th>Updated At</th><th>Views</th><th>Edit</th></tr>'; ?>
    <?php $adv = Yii::$app->db->createCommand('SELECT * FROM advert WHERE user_id = :user_id',
        [':user_id' => Yii::$app->user->identity->getId()])
        ->queryAll(); ?>
    <?php for ($tr = 0; $tr < count($adv); $tr++) : ?>
        <?php $table .= '<tr>';?>
        <?php $table .= '<td>' . $adv[$tr]['title'] .'</td>'; ?>
        <?php $table .= '<td>' . date($format, $adv[$tr]['updated_at']) .'</td>'; ?>
        <?php $table .= '<td>' . $adv[$tr]['views'] .'</td>'; ?>
        <?php $table .= '<td><a href="http://vk.com" title="View" aria-label="View" data-pjax="0">
                            <span class="glyphicon glyphicon-eye-open"></span></a>
                        <a title="Update" aria-label="Update" data-pjax="0">
                            <span class="glyphicon glyphicon-pencil"></span></a>
                        <a title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete this item?" data-method="post" data-pjax="0">
                            <span class="glyphicon glyphicon-trash"></span></a>
</td>'; ?>
        <?php $table .= '</tr>'; ?>
    <?php endfor; ?>
    <?php $table .= '</table>'; ?>
    <?= $table ?>
</div>

</body>
</html>