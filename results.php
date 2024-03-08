<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del UX Checklist</title>
</head>
<body>
    <h1>Resultados del UX Checklist</h1>
    <?php
    $score = 0;
    if (isset($_POST['checklist_item_1']) && $_POST['checklist_item_1'] == 'SI') $score++;
    if (isset($_POST['checklist_item_2']) && $_POST['checklist_item_2'] == 'SI') $score++;
    if (isset($_POST['checklist_item_3']) && $_POST['checklist_item_3'] == 'SI') $score++;
    // Añade más condiciones según la cantidad de elementos en el checklist
    echo "<p>Puntaje: $score</p>";
    ?>
</body>
</html>
