<?php

class __Mustache_70f5a840293827b8a6c0ea8d61567bb4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span
';
        $buffer .= $indent . '    class="qbank_managecategories-newchild"
';
        $buffer .= $indent . '    title="';
        $value = $this->resolveValue($context->find('newchildtooltip'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-parent="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-toggle="tooltip"
';
        $buffer .= $indent . '    data-trigger="manual"
';
        $buffer .= $indent . '    data-placement="top"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    +
';
        $buffer .= $indent . '</span>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section97a79f8d0341cfc2af051b2d9cde6c1a($context, $indent, $value);

        return $buffer;
    }

    private function section97a79f8d0341cfc2af051b2d9cde6c1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'qbank_managecategories/newchild\'], function(component) {
        component.init(\'.qbank_managecategories-newchild[data-parent="{{categoryid}}"]\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'qbank_managecategories/newchild\'], function(component) {
';
                $buffer .= $indent . '        component.init(\'.qbank_managecategories-newchild[data-parent="';
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
