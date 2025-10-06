<?php

class __Mustache_d2041ea11e770a76c46d707750e34d1b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="bulkmovequestion-header">
';
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->section3c74eeca0b537d31db638f47f9b6eac5($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('moveurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" method="post" id="bulkmovequestion">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('categorydropdown'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    <input type="submit" value="';
        $value = $context->find('str');
        $buffer .= $this->section958dfc8a8c0243f929470fccacafa60b($context, $indent, $value);
        $buffer .= '" class="btn btn-primary" name="move" data-action="toggle" data-togglegroup="qbank"
';
        $buffer .= $indent . '           data-toggle="action" form="bulkmovequestion">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('returnurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="btn btn-secondary">';
        $value = $context->find('str');
        $buffer .= $this->sectionDd796ac4d8ddc34b72540db6152dd451($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function section3c74eeca0b537d31db638f47f9b6eac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bulkmoveheader, qbank_bulkmove ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' bulkmoveheader, qbank_bulkmove ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section958dfc8a8c0243f929470fccacafa60b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' moveto, question ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' moveto, question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd796ac4d8ddc34b72540db6152dd451(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' close, qbank_bulkmove ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' close, qbank_bulkmove ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
