<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'database/Database.php';
require_once 'app/repository/ContratoRepository.php';
require_once 'app/service/ContratoService.php';
require_once 'app/controller/ContratoController.php';

try {
    $database = new Database();
    $pdo = $database->getConnection();

    $contratoRepository = new ContratoRepository($pdo);
    $contratoService = new ContratoService($contratoRepository);
    $contratoController = new ContratoController($contratoService);

    $contratoController->listarContratos(); 
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}