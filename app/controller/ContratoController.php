<?php

class ContratoController
{
  
  private $contratoService;

  public function __construct(ContratoService $contratoService)
  {
    $this->contratoService = $contratoService;
  }

  public function listarContratos(): array|string
  {
    $contratos = $this->contratoService->listarContratos();

    if (!$contratos) {
      echo 'Nenhum dado retornado';
    }

    return $contratos;
  }
}