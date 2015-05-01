<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SiteProductBriefHelper
 *
 * @author augusto
 */
namespace Site\View\Helper;

use System\View\Helper\ViewHelper;
use Manager\Entity\Product;

class SiteProductBriefHelper extends ViewHelper
{
    public function __invoke(Product $product)
    {
        $folder = $product->getCover()->getFolder();
        $fileId = $product->getCover()->getId();
        
        $id = $product->getId();
        $value = ($product->getValue()) ? $product->getValue() : "Valor não informado";
        $title = $product->getTitle();
        $code = $product->getCode();
        $available = $product->getAvailable();
        $description = $product->getDescription();
        
        $productBrief = "<div class='productbrief'>
                            <a class='linkProductbrief' title='Clique para visualizar' href='/products/{$id}'>
    				<div class='productbrief-img'>
                                    <img src='{$this->view->basePath($folder . '/' . $fileId)}' >
                                </div>
                                <h4>{$value}</h4>
    				<div class='productbrief-desc-p'>
                                    <p><b>{$title}</b></p>
                                    Código: {$code}<br>
                                    Disponível: " . (((boolean)$available) ? 'SIM' : 'NÃO') . "
    				</div>
    				<div class='box-item box-item1'>
    				</div>
                            </a>
  			 </div>";
        
        /**
        $productBrief = "<a class='link-produto' title='Clique para visualizar' href='/products/{$id}'>
                             <div class='resumo-produto'>
                                 <div class='capa-produto'>
                                     <img src='{$this->view->basePath($folder . '/' . $fileId)}' width='175' height='150'>
                                 </div>
                                 <div class='titulo-produto'>
                                     {$title}
                                 </div>
                                 <div class='status-produto'>
                                     Código: {$code}<br>
                                     Disponível: " . (((boolean)$available) ? 'SIM' : 'NÃO') . "
                                 </div>
                                 <div class='descricao-produto'>
                                     {$description}
                                 </div>
                             </div>
                         </a>";
         * 
         */
        
        return $productBrief;
    }
}

?>
