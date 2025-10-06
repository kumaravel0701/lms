<?php

class __Mustache_ffd8b3ab243529bb30bb0459dc4e0f62 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul class="qbank_managecategories-categorylist row mt-1 col-12" data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('children');
        $buffer .= $this->sectionB00b55d256fc6342efe92be4a3371d60($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $value = $context->find('js');
        $buffer .= $this->sectionB5b7d79e5c6bf93998287ace1126db6e($context, $indent, $value);

        return $buffer;
    }

    private function sectionB00b55d256fc6342efe92be4a3371d60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> qbank_managecategories/category }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('qbank_managecategories/category')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5b7d79e5c6bf93998287ace1126db6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'qbank_managecategories/categorylist\'], function(component) {
        component.init(\'.qbank_managecategories-categorylist[data-categoryid="{{categoryid}}"]\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'qbank_managecategories/categorylist\'], function(component) {
';
                $buffer .= $indent . '        component.init(\'.qbank_managecategories-categorylist[data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"]\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
