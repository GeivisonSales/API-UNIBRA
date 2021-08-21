<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Empresa extends JsonResource
{
    
      public function toArray($request){
        //return parent::toArray($request);
        return [
          'id' => $this->id,
          'situacao' => $this->situacao,
          'cnpj' => $this->cnpj,
          'razao_social' => $this->razao_social,
          'nome_fantasia' => $this->nome_fantasia,
          'data_abertura' => $this->data_abertura,
          'capital_social' => $this->c_social,
          'tipo' => $this->tipo,
          'natureza_juridica' => $this->natureza_juridica,
          'porte_da_empresa' => $this->porte_da_empresa,
          'quantidade_de_func' => $this->quantidade_de_func,
          'faturamento_presumido' => $this->faturamento_presumido,
          'tel' => $this->tel,
          'email' => $this->email,
          'uf' => $this->uf,
          'municipio' => $this->municipio,
          'bairro' => $this->bairro,
          'longradouro' => $this->longradouro,
          'numero' => $this->numero,
          'complemento' => $this->complemento,
          'cep' => $this->cep,
          'atividade_economica' => $this->atividade_economica
        ];
    }
     

}
