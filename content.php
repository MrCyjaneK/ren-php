<?php
$data = [];

//$place   - entry, saidhi etc...
//$who     - Cyjan
//$text    - <b>Hey</b> What's up?
//$actions - ["Button Text" => $place, ...]
function scenario_add($place, $who, $text, $actions, $background = './static/default.jpg') {
    global $data;
    $place = hash('sha1', $place);
    if (isset($data[$place])) {
        die("ERROR: $place is defined twice!");
    }
    $act = [];
    foreach ($actions as $k => $v) {
        $act[hash('sha1', $k)] = $v;
    }
    $data[$place] = [
        "who" => $who,
        "text" => $text,
        "actions" => $act,
        "background" => $background
    ];
}
function scenario_get($place) {
    global $data;
    if (!isset($data[$place])) {
        unset($_SESSION['place']);
        die('Place ('.$place.') not found!');
    }
    return $data[$place];
}
include 'data.php';
if (!isset($_SESSION['place'])) {
    $_SESSION['place'] = hash('sha1','entry');
}
if (isset($_GET['place'])) {
    $_SESSION['place'] = $_GET['place'];
}
$scene = scenario_get($_SESSION['place']);
?>

<p>
    <img width="100%" src=<?= $scene['background'] ?> />
    <b><?= $scene['who']; ?>:</b> <span><?= $scene['text'] ?></span>
    <ul>
        <?php foreach ($scene['actions'] as $place => $text) { ?>
            <li><a style="color:white;"href="<?= $_SERVER['SCRIPT_NAME'] ?>?place=<?= urlencode($place) ?>"><?= $text ?></a></li>
        <?php } ?>
    </ul>
</p>
