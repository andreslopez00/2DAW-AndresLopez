<?php
$pregunta = $_POST['pregunta'];
$respuestas = [
    "Sí", "No", "Quizás", "Claro que sí", "Por supuesto que no","No lo tengo claro", "Seguro", "Yo diría que sí", "Ni de coña",
    ];
$respuesta = $respuestas[array_rand($respuestas)];
echo "<p>Pregunta: $pregunta</p>";
echo "<p>Respuesta de la Bola 8: $respuesta</p>";
?>

//TODO: Hay que comprobar que nos están haciendo una pregunta, al menos que contenga ? la pregunta...