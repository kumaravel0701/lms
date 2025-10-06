<?php

class __Mustache_b64dd089af2abe79a46fae4dc7c5dfa8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="qbank_managecategories-addcategory" class="pl-3">
';
        $buffer .= $indent . '    <button type="submit" data-action="addeditcategory" data-actiontype="add"
';
        $buffer .= $indent . '            data-contextid="';
        $value = $this->resolveValue($context->find('contextid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '            data-cmid="';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="btn btn-primary">
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section7f957f1a819d7ddc91024d758d6ac234($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section20a8b4ab7be18d43599bf418a79e6591($context, $indent, $value);

        return $buffer;
    }

    private function section7f957f1a819d7ddc91024d758d6ac234(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' addcategory, core_question ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' addcategory, core_question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20a8b4ab7be18d43599bf418a79e6591(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'qbank_managecategories/addcategory\'], (addcategory) => {
        addcategory.init(\'#qbank_managecategories-addcategory\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'qbank_managecategories/addcategory\'], (addcategory) => {
';
                $buffer .= $indent . '        addcategory.init(\'#qbank_managecategories-addcategory\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
