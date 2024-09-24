<?php

class ContratoService
{
  
  private $contratoRepository;

  public function __construct(ContratoRepository $contratoRepository)
  {
    $this->contratoRepository = $contratoRepository;
  }

  public function listarContratos(): array|null
  {
    return $this->contratoRepository->listarContratos();
  }
}