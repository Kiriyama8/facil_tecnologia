<?php

class ContratoRepository
{
  
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function listarContratos(): array|null
  {
    $sql = "
      SELECT 
        b.nome,
        c.verba,
        ct.codigo,
        ct.data_inclusao,
        ct.valor,
        ct.prazo
      FROM tb_contrato ct
      INNER JOIN tb_convenio_servico cs 
        ON ct.convenio_servico = cs.codigo
      INNER JOIN tb_convenio c 
        ON cs.convenio = c.codigo
      INNER JOIN tb_banco b 
        ON c.banco = b.codigo
    ";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}