<?php

class __Mustache_c1a4e1398b77e587e006367971d950ab extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<strong>
';
        $buffer .= $indent . '    <a title="';
        $value = $context->find('str');
        $buffer .= $this->section0e9f217176455bbbc0acb4b86398af19($context, $indent, $value);
        $buffer .= '" href="';
        $value = $this->resolveValue($context->find('questionbankurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" role="button">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('categoryname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $value = $context->find('idnumber');
        $buffer .= $this->section0e73c22909c8343d9f6ea1f05158128f($context, $indent, $value);
        $buffer .= $indent . '        (';
        $value = $this->resolveValue($context->find('questioncount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ')
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</strong>
';
        $value = $context->find('children');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('qbank_managecategories/newchild')) {
                $buffer .= $partial->renderInternal($context, $indent . '    ');
            }
        }
        $buffer .= $indent . '<div class="qbank_managecategories-description">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('categorydesc'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0e9f217176455bbbc0acb4b86398af19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editquestions, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editquestions, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA76d61152937870ebe8ba5129392f2c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'idnumber, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'idnumber, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e73c22909c8343d9f6ea1f05158128f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="badge badge-primary">
                        <span class="accesshide">
                            {{#str}}idnumber, question{{/str}}
                        </span>
                {{idnumber}}
                    </span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="badge badge-primary">
';
                $buffer .= $indent . '                        <span class="accesshide">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionA76d61152937870ebe8ba5129392f2c5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
