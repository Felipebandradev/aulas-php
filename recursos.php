<?php

define("ESCOLA","Senac");

$curso = "Técnico em informatica para internet";
$tecnologias = ["HTML","CSS","JS","PHP"];

function verifica_idade(int $idade) :string {
    return $idade >= 18 ? "Maior" : "Menor";
}