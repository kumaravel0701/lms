<?php

class __Mustache_6681381af031bb9be6e8ede029805caa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="col-6 mt-2" id="qbank_managecategories-showdescriptions">
';
        if ($partial = $this->mustache->loadPartial('core/toggle')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section06a0b2716f550001406bd18d46c26d7a($context, $indent, $value);

        return $buffer;
    }

    private function section06a0b2716f550001406bd18d46c26d7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'qbank_managecategories/showdescriptions\'], function(component) {
        component.init(\'#qbank_managecategories-showdescriptions\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'qbank_managecategories/showdescriptions\'], function(component) {
';
                $buffer .= $indent . '        component.init(\'#qbank_managecategories-showdescriptions\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
